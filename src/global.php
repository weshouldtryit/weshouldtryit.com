<?
    require('global_db.php');
    
    $conf = array();
    $conf['main_name'] = '"We Should Try It"';
    $conf['main_url'] = 'http://192.168.1.90/weshouldtryit/';
    
    $conf['email_from'] = 'no-replay@weshouldtryit.com';
    $conf['email_from_name'] = $conf['main_name'].' notification';
    
    $conf['lang_id'] = 1;  //language id for new questions
    
    $conf['email_contact'] = 'code@weshouldtryit.com';  //all contact requests goes to this email
    
    
    //display ads in results
    $ads = array();
    $ads['group']['Basics'][] = 'Discover the latest <a href="http://www.shareasale.com/r.cfm?b=382796&u=1178408&m=36326&urllink=&afftrack=" target="_blank">New Lingerie</a>!';
    $ads['group']['Basics'][] = '<a href="http://www.shareasale.com/r.cfm?b=382756&u=1178408&m=36326&urllink=&afftrack=" target="_blank">Fancy dress</a> and <a href="http://www.shareasale.com/r.cfm?b=382756&u=1178408&m=36326&urllink=&afftrack=" target="_blank">sexy costumes</a>!';
    
    $ads['group']['Playing with Toys'][] = 'Discover the latest <a href="http://www.shareasale.com/r.cfm?b=382767&u=1178408&m=36326&urllink=&afftrack=" target="_blank">new sex toys</a>, if it\'s new, it\'s here first!';
    $ads['group']['Playing with Toys'][] = 'Buy from our collection of <a href="http://www.shareasale.com/r.cfm?b=382761&u=1178408&m=36326&urllink=&afftrack=" target="_blank">sexy couple’s adult toys</a> and get free shipping on your order';
    
    $ads['group']['Playing with Toys'][] = 'Find the best <a href="http://www.shareasale.com/r.cfm?b=382769&u=1178408&m=36326&urllink=&afftrack=" target="_blank">rabbit vibrator</a> for you and get free shipping with every purchase!';
   
    //ad more ads - todo 
    //$ads['group']['B.D.S.M.'] = '';
    //Anal Play
    //Group and Public Fun
    //Other Fetishes
    
    $patreon = array();
    $patreon['footer'] = '<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Please support WeShouldTryIt.com</h3>
    </div>
        <div class="panel-body">
            We really hope our website helps to improve your and your partner\'s sex life. It takes money to run WeShouldTryIt, please consider donating 1 USD and supporting us on Patreon. 
            <p>Improving your sex life is priceless, please support us in this cause to help other people!</p>                        
            
            <P><a href="https://www.patreon.com/weshouldtryit" class="btn btn-success btn-block" target="_blank" style="margin-top:20px">Donate 1 USD</a>
        </div>
    </div>
     '; 
    
?>
