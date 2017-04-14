<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>We Should Try It - online sex questionnaire for couples</title>

<link rel="stylesheet" href="<?=$conf['main_url']?>js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=$conf['main_url']?>js/bootstrap/css/bootstrap-theme.min.css">

<link rel='stylesheet' href='<?=$conf['main_url']?>css/style.css'	type='text/css'>  

 <script src="<?=$conf['main_url']?>js/jquery.min.js"></script>
 <script src="<?=$conf['main_url']?>js/bootstrap/js/bootstrap.min.js"></script>
  
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 
<?
//
    echo $js->common();
    
?>
</HEAD>
 
<BODY>


     
<?
/*
<nav class="navbar navbar-default navbar-static-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">         
          <a class="navbar-brand" href="#">We Should Try It!</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
       */
       ?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
       <div class="container"><a class="navbar-brand" href="/index.php" id="top_logo">We Should Try It!</a>
        
        
       
              <ul class="nav navbar-nav navbar-right" id="top_progress" style="display:none">
              
              
                    
              <li><a href="#" onclick="display_links();">Display links</a></li>
              <li id="add_question_link"  style="display:none"><a href="#" onclick="questions_add();">Add question</a></li>
              
              
            </ul>
    
         
    
               
       </div>
    </div>
</nav>

 
<div class="container">
<?
//<h3 class="text-muted">We Should Try It!</h3>
?>

