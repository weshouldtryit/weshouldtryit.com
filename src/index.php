<?

    require('global.php');
    
    require('classes/class_js.php');
    $js = new js; 
    
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    
    //check if db should be used
    $db_use = 0;
    
    if(($a == 'start') || ($a == 'results') || ($a == 'view_questions') || ($a == 'stats'))
        {
          $db_use = 1;  
        }
   
    if($db_use == 1)
        {
          require('classes/class_db.php');
          
          $db = new database;
          $db->connect(); 
        }
    
    
    require('header.php');


    if(($a == 'start') || ($a == 'results') || ($a == 'view_questions'))
        {
            
            //start new questions
            require('classes/class_ask.php');
            
            
            $ask = new ask;            
            
            
            if($a == 'start')
                {
                    $ask->start();
                }
            elseif($a == 'results')
                {
                    $ask->results();
                }
            elseif($a == 'view_questions')
                {
                    $ask->list_questions();
                }
             
        }   
        elseif($a == 'stats')
        {
            require('classes/class_stats.php');
            $stats = new stats;  
            
            $stats->display();     
            
        }
        elseif($a == 'terms') 
        {
           include('inc/terms.php');   
        }  
        elseif($a == 'privacy-policy') 
        {
           include('inc/privacy.php');   
        }             
        elseif($a == 'contact') 
        {
           include('inc/contact.php');   
        }             
        else
        {
           //show homepage
           include('inc/homepage.php');   
        }    
    
    require('footer.php');

    if($db_use == 1)
    {
        $db->disconnect();
    }

?>