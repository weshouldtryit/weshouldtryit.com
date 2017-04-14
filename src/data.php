<?

    require('global.php');
    
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    
   // exit;
    
    if($a == 'data')
        {
            
          require('classes/class_db.php');
          require('classes/class_ask.php');
          
          $db = new database;
          $db->connect(); 
          
          $ask = new ask; 
          
          if($b == 'start')
            {
              $ask->register_session();  
            }
          elseif($b == 'save_data')
            {
              $ask->save_data();                 
            }
          elseif($b == 'send_partner_email')
            {
               $ask->send_partner_email(); 
            }
          elseif($b == 'add_questions')
            {  
               $ask->add_questions();
            }
          elseif($b == 'del_questions')
            {  
               $ask->del_questions();
            }  
          elseif($b == 'contact')
            {  
               $ask->contact();
            }  
          elseif($b == 'set_done')
            {  
               $ask->set_done();
            }      
             
            
          $db->disconnect();  
            
        }


?>