<?
//class to handle database connections
 class database { 	 
    
    var $link_id  = 0;        // Result of mysql_connect(). 
    var $query_id = 0;        // Result of most recent mysql_query(). 
    var $record   = array();  // current mysql_fetch_array()-result. 
    var $row;                 // current row number. 
    var $login_error = ""; 

    var $errno    = 0;        // error state of query... 
    var $error    = "";
    
    var $num_queries    = 0;  //number of executed queries 
    var $time_queries    = 0;  //number of executed queries 
     
    function connect() 
        { 
        global $db_user, $db_database, $db_host, $db_password, $conf;
        
        $this->link_id = mysql_connect($db_host, $db_user, $db_password);        	 
   		if(!$this->link_id)
    			{
    			
        		//no mysql...load maintance message
    			include($conf['main_path'].'maintenance.php');
    			exit;
    			} 
    			else
    			{    		    		
						if(!@mysql_select_db($db_database, $this->link_id))
    					{
    					  
      				    //no mysql...load maintance message        								
    					include($conf['main_path'].'maintenance.php');
    					exit;
    					}
    				
    				  //switch mysql to UTF8
    				  $this->query('SET NAMES utf8');    				  
    				  $this->query('SET CHARACTER SET utf8');
    				  
    				  
    				  
    				  
    		   }
    	        
        } 
    
		function query($query_string) 
        {          
         global $conf;
         
         if($conf['debug'] > 5)
            {
              //time queries  
              $time_start = microtime(true);
            }       
        
        $this->query_id = mysql_query($query_string,$this->link_id); 
        $this->Row = 0; 
        $this->errno = mysql_errno(); 
        $this->error = mysql_error(); 
        if(!$this->query_id) 
            {            
            $this->put_log('sql_error',"Invalid SQL. ($query_string)");
            
             if($conf['debug_sql'] == 1)
                {
                    $this->halt( "Invalid SQL: ".$query_string );  //remove this line - todo
                }
              
            $this->halt( "Error occured. Please contact support.");  //display nice error ? - todo
            } 
           
                        
             
        return $this->query_id; 
        } // end function qu

 		function halt( $msg ) 
        { 
        //log sql errors (todo)
        printf( "<b>Database error:</b> %s<br>", $msg ); 
        printf( "<b>MySQL Error</b>: %s (%s)<br>", $this->errno, $this->error ); 
        die( "Session halted. Please contact support." ); 
        }              
        
    function next_record() 
        { 
        @ $this->record = mysql_fetch_assoc($this->query_id); 
        $this->row += 1; 
        $this->errno = mysql_errno(); 
        $this->error = mysql_error(); 
        $stat = is_array( $this->record ); 
        if(!$stat) 
            { 
            @ mysql_free_result( $this->query_id ); 
            $this->query_id = 0; 
            } 
        return $stat; 
        }  
 
    function single_record() 
        { 
        $this->record = mysql_fetch_array($this->query_id); 
        $stat = is_array( $this->record ); 
        return $stat; 
        }  
               
     function num_rows() 
        { 
        return mysql_num_rows($this->query_id); 
        } 
        
     function last_id() 
        { 
        return mysql_insert_id($this->link_id); 
        }         
           
     function disconnect() 
        {             
        	mysql_close();       	    		        
        } 
        
     function get_data($query) 
        {   
         if($query != '')
          {
            $this->query($query);   
				$ret['rows'] = $this->num_rows();
				
				while ($this->next_record()) 
    		 		{     		 
    		  $ret['data'][] = $this->record;   		    		    		 
    		 		} 
    		 		
    		 	return $ret;  		 						  
          }          
        
        
        }
     
    
     function quote_smart($value,$keep_br='',$keep_tags='',$allowed_tags='') 
        {
   
   if($keep_br == 1)
    {
    $value = str_replace("\r",'',$value);
    $value = str_replace("\n",'%%br%%',$value);
    }
    
   // Stripslashes
   if (get_magic_quotes_gpc()) {
       $value = stripslashes($value);
   }
   
   // Quote if not integer
   if (!is_numeric($value) || $value[0] == '0') 
   {          
       $value = mysql_real_escape_string($value);             
   }

  if($keep_br == 1)
    {
  $value = str_replace('%%br%%',"\n",$value);
    }

    if($keep_tags != 1)
      {
   //remove html and php?
   //$allowed_tags = '<p><b><a><br><font><i><u><ul><li><strong><em><strike><sub><sup><blockquote><hr><ol><h1><h2><h3>';    
   $value = strip_tags($value, $allowed_tags);
      }
      

   return $value;
   
          	    		        
        } 
      
  function put_log($type,$msg,$users_id=0,$data_id=0,$data_field_id=0,$verbose=1)
    {
     global $user;
     
      $type = $this->quote_smart($type);
      $msg = $this->quote_smart($msg);
      $ip = $_SERVER['REMOTE_ADDR'];
      
      if(isset($_REQUEST['a']))
        {
          $a = $_REQUEST['a'];
          $a = $this->quote_smart($a);
        }
        else 
        {
          $a = '';   
        }  

      if(isset($_REQUEST['b']))
        {        
          $b = $_REQUEST['b'];      
          $b = $this->quote_smart($b);
        }  
      else 
        {
          $b = '';   
        }  

       
      
      $stamp_now = time();
      
     
      if(!is_numeric($users_id))
        {
         $users_id = $user['id'];
          if(!is_numeric($users_id))
           {
            $users_id = '0';
           } 
        } 
        
      
       //adding to log
       $query = "INSERT INTO log (date,type,msg,ip,a,b,user_id,data_block_id,data_block_field_id,verbose) 
        VALUES ('$stamp_now','$type','$msg','$ip','$a','$b','$users_id','$data_id','$data_field_id','$verbose')";       
        
        $this->query($query);
          
    
    }
    
    
    function validate_email($email)
     {

        if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
          return true;
        }
        else {
         return false;
        }

     }
     
   function validate_email_remote($email)
   {
       //todo remove
       return true;           
       
       
        $valid = false;
        if($this->validate_email($email))
            {                     
                                  
                list($username,$domaintld) = split("@",$email);
                if (getmxrr($domaintld,$mxrecords))
                 {           
                     //login to the server to verify if user exists?  - todo
                             
                     $valid = true;
                 }
        }
        else
        {
          
        $valid = false;
        }
            
        return $valid;           
   }  

  
  function list_errors($type,$error_title, $errors, $return_type)
  {

  $err_count = count($errors['msg']);
           if($err_count != 1)
           {
            $err_tmp_str = '<span class=error_txt>Errors displayed below</span>';
           }
           else
           {
            $err_tmp_str = '<span class=error_txt>Error displayed below</span>';
           }
    $err_str .= "<P><ul>";
            for($i=0;$i<$err_count;$i++)
            {
              $err_str .= '<li><span class=error_txt>'.$errors['msg'][$i].'</span> ';
                 if(strlen($errors['solution'][$i]) > 2)
                  {
              $err_str .= '<br><span class=error_sol_txt>'.$errors['solution'][$i].'</span>';
                  }
              $err_str .= '</li>';
            }
       $err_str .= '</ul>';

     if($return_type == 'string')
     {
     $ret = '<P><span class=error_txt>Your request has not been completed.</span><P>'.$err_tmp_str.'.'.$err_str;
     return $ret;
     }


  }
   
   
   function redirect($url)
  {
  $url = str_replace('&amp;','&',$url);

  echo "<P>You request has been completed. Please wait.
  <p><a href=\"$url\">Click here</a>, if you don't want to wait or see this message more than 5 seconds.";

  echo "
  <SCRIPT LANGUAGE=\"JavaScript\">
  <!--
   window.location=\"".$url."\";
   // -->
  </script>";
  }
  
  function get_url_var($url_var,$type)
  {
   global $conf;
   
   if(isset($conf['max_url_var_size']))
     {
        $max_url_var_size = $conf['max_url_var_size'];
     }
             
   if((!isset($max_url_var_size)) || (!is_numeric($max_url_var_size))) 
    { 
       $max_url_var_size = 36; 
    }
     
    $ret = trim($_REQUEST[$url_var]);

   if($ret != '')
   {
     if($type == 'int')
     {
      if(!is_numeric($ret))
       {
         $ret = substr($ret, 0, $max_url_var_size);
         $this->put_log("error","URL variable marked as interger but it's not. Variable reset. (var: $url_var = $ret)");
         $ret = '';
       }
     }
     elseif($type == 'char')
     {

      //limiting size of any url var
       if(strlen($ret) > $max_url_var_size)
       {
        $ret = substr($ret, 0, $max_url_var_size);
        $this->put_log("error","URL variable is more than allowed size. (var: $url_var = $ret)");
       }

     }
 //dont allow any tags
   return strip_tags($ret);
    }
   } 
 
 
 }

?>