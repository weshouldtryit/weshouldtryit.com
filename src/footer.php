

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Let's start the fun!</h4>
      </div>
      <div class="modal-body">
      
<form role="form">
  <div class="form-group">
    <label for="nickname">Your nickname</label>
    <input type="text" class="form-control" id="nickname" value="Partner 1" placeholder="Your nickname">
  </div>

  <div class="form-group text-muted" title="For statistical purposes only">
    <label for="sex">Sex</label>
     <select name=sec id=sex>
      <option value=n>Not specified</option>
      <option value=m>Male</option>
      <option value=f>Female</option>     
     </select>
     
     <label for="sex">Age group:</label> 
     
      <select name=age id=age>
      <option value=n>Not specified</option>
      <option value=18-20>18-21</option>
      <option value=22-25>22-25</option>
      <option value=26-30>26-30</option>     
      <option value=31-35>31-35</option>
      <option value=36-40>36-40</option>
      <option value=41-50>41-50</option>
      <option value=51-60>51-60</option>
      <option value=61>60+ (congrats!)</option>
     </select>
     
  </div>
  
 
 <div class="form-group">
    <label for="nickname_partner">Partner's nickname</label>
    <input type="text" class="form-control" id="nickname_partner" value="Partner 2" placeholder="Partner's nickname">
  </div>
  
  <div class="form-group text-muted"  title="For statistical purposes only">
    <label for="sex_partner">Sex</label>
     <select name=sec_partner id=sex_partner>
      <option value=n>Not specified</option>
      <option value=m>Male</option>
      <option value=f>Female</option>     
     </select>
     
     <label for="sex">Age group:</label> 
     
      <select name=age_partner id=age_partner>
      <option value=n>Not specified</option>
      <option value=18-20>18-21</option>
      <option value=22-25>22-25</option>
      <option value=26-20>26-30</option>     
      <option value=31-35>31-35</option>
      <option value=36-40>36-40</option>
      <option value=41-50>41-50</option>
      <option value=51-60>51-60</option>
      <option value=61>60+ (congrats!)</option>
     </select>
     
  </div>
  
     
   <strong>Questions level</strong><P>
    
    <div class="btn-group" data-toggle="buttons">
      <label class="btn btn-default active">
        <input type="checkbox" name="level[1]" class="levels" value=1 checked="checked"> Basic
      </label>
      <label class="btn btn-default">
        <input type="checkbox" name="level[2]" value=1 class="levels"> Advanced
      </label>
      
       
    </div>

   
  
    <div class="checkbox">
    <label>
      <input type="checkbox" value=1 id="terms_checkbox"> I confirm that me and my partner are over 18 years of age and I agree to <a href="<?=$conf['main_url']?>terms/" target=_blank>terms and conditions</a>
    </label>
  </div>
  
</form>

<div class="modal-footer">
     <p align=center><a class="btn btn-lg btn-primary" href="#" onclick="ask_start();" role="button">Start now!</a></p>
</div>      
        
      </div>
       
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modal_custom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_custom_title"></h4>
      </div>
      <div class="modal-body" id="modal_custom_body">
       
   
      </div>
      
      <div class="modal-footer" id="modal_custom_footer">
         
      </div>
       
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

   <hr>
      <footer>
        <div class="pull-left">
        We are open source, please contribute.
        <a href="https://github.com/weshouldtryit/weshouldtryit.com" target="_blank"><img src="GitHub_Logo.png" class="img-responsive"></a></div>
        
         <ul class="nav navbar-nav navbar-right">
             
            <li><a href="<?=$conf['main_url']?>">Home</a></li>
            <li><a href="<?=$conf['main_url']?>contact/">Contact Us</a></li>
            <li><a href="<?=$conf['main_url']?>terms/">Terms</a></li>
            <li><a href="<?=$conf['main_url']?>privacy/">Privacy Policy</a></li>
            <li><a href="<?=$conf['main_url']?>" class="text-muted"><?=date("Y")?> &copy; We Should Try It.com</a></li>
        </ul>
        
        </p>
        
      </footer>

 </div> <!-- /container -->
 
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47133146-1', 'weshouldtryit.com');
  ga('send', 'pageview');

</script>

 
</body>
</html>
