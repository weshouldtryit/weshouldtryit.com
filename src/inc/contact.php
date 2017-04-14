<h2>Contact Us</h2>

<div id="email_form">
<form role="form">
  <div class="form-group">
    <label for="msg_name">Your name</label>
    <input type="text" name="contact[name]" class="form-control contact_data" id="msg_name" placeholder="Your name">
  </div>

  <div class="form-group">
    <label for="msg_email">Email address</label>
    <input type="email" name="contact[email]" class="form-control contact_data" id="msg_email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="msg_body">Password</label>
    <textarea rows=6 name="contact[body]" class="form-control contact_data" id="msg_body" placeholder="Your message"></textarea>
  </div>
    
  
  <button type="button" onclick="send_message();" class="btn btn-primary">Send message</button>
</form>
</div>
<div id="email_form_sent" style="display:none">

    <div class="alert alert-success"><strong>Your message has been sent successfully.</strong>
    <p><a href="<?=$conf['main_url']?>contact/" class="btn btn-primary">Send another message</a></div>
</div>