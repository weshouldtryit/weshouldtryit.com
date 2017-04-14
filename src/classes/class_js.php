<?

    class js {
        
        function common()
            {
              global $conf;
               
                $ret_fin = '
                <script>
                
                 function ask_start()
                    {
                       
                       if($("#terms_checkbox").is(":checked"))
                        {
                            
                            //registering new session
                               var nickname = encodeURIComponent(jQuery.trim($("#nickname").val()));
                               var nickname_partner = encodeURIComponent(jQuery.trim($("#nickname_partner").val()));
                               
                               var sex = encodeURIComponent(jQuery.trim($("#sex").val()));
                               var age = encodeURIComponent(jQuery.trim($("#age").val()));
                               
                                 

                               var sex_partner = encodeURIComponent(jQuery.trim($("#sex_partner").val()));
                               var age_partner = encodeURIComponent(jQuery.trim($("#age_partner").val()));
                               
                            
                               var postdata = {};
                               postdata["a"] = "data"; 
                               postdata["b"] = "start"; 
                               postdata["nick1"] = nickname; 
                               postdata["nick2"] = nickname_partner;
                               
                               postdata["age"] = age;
                               postdata["sex"] = sex;
                               postdata["age_partner"] = age_partner;
                               postdata["sex_partner"] = sex_partner;
                               
                               
                                $(".levels").each(function(i, selected)
                                {
                                   if($(this).is(":checked"))
                                    {
                                      name = $(this).attr("name");                                   
                                      value = encodeURIComponent(jQuery.trim($(this).val()));                                                                                    
                                    
                                      postdata[name] = value;    
                                    } 
                                    
                                });
                                
                               
                                
                               
                               var url = "'.$conf['main_url'].'data.php";
                               var loading_div = "start_button_loading";
                                 
                                    $.ajax({
                  				    url: url,
                  				    type: "POST",
                  				    data: postdata,
                  				    dataType: "json",
                  				    cacheBoolean: false,
                  				    beforeSend: function() {   }, 				
                 				    success: function(html)
                  				      {
                  				          
                  				         if(html["ok"] == 1)
                  				          {
                  				                
                  				             var url = "'.$conf['main_url'].'index.php?a=start&key="+html["key"];                  				             
                                             location.href=url;
                  				               
                  				          }
                  				          else
                  				          {
                  				            alert(html["msg"]);   
                  				          }
                  				     
                  				        
                  				      }
                  				   });
                  				   
                            
                            
                            
                           
                         
                        }
                        else
                        {
                           alert("Please accept terms and conditions.");   
                        }
                        
                    }
               
               
                 function send_message()
                    {
                      var name = jQuery.trim($("#msg_name").val());  
                      var body = jQuery.trim($("#msg_body").val());
                      
                      if((name != "") && (body != ""))
                        {
                            
                             var postdata = {};
                             postdata["a"] = "data"; 
                             postdata["b"] = "contact"; 
                               
                              $(".contact_data").each(function() { 
                               
                              
                                  name = $(this).attr("name");
                                  value = encodeURIComponent(jQuery.trim($(this).val()));
                                  postdata[name] = value;   
                                  
                              });
                              
                               var url = "'.$conf['main_url'].'data.php";
                               var loading_div = "start_button_loading";
                                 
                                    $.ajax({
                  				    url: url,
                  				    type: "POST",
                  				    data: postdata,
                  				    dataType: "json",
                  				    cacheBoolean: false,
                  				    beforeSend: function() {   }, 				
                 				    success: function(html)
                  				      {
                  				          
                  				         if(html["ok"] == 1)
                  				          {
                  				             $("#email_form").hide(); 
                  				             $("#email_form_sent").show();   
                  				               
                  				          }
                  				          else
                  				          {
                  				            alert(html["msg"]);   
                  				          }
                  				     
                  				        
                  				      }
                  				   });
                  				   
                  				   
                              
                              
                            
                        }
                        else
                        {
                          alert("Please enter your name and message.");   
                        }
                   
                       
                        
                    }
               
                function set_done(q_id)
                        {
                          
                          if(q_id > 0)
                            {
                               var done = $("#done_"+q_id+":checked").val();
                               var key = $("#ask_key").val();
                               
                                   if(done != 1)
                                    {
                                      done = 0;   
                                    }
                               
                               if(key != "")
                                {
                                   
                                    
                                     var postdata = {};
                                     postdata["a"] = "data"; 
                                     postdata["b"] = "set_done"; 
                                     postdata["key"] = key;
                                     postdata["q_id"] = q_id;
                                     postdata["done"] = done;
                                       
                                    
                                       var url = "'.$conf['main_url'].'data.php";
                                       var loading_div = "start_button_loading";
                                         
                                            $.ajax({
                          				    url: url,
                          				    type: "POST",
                          				    data: postdata,
                          				    dataType: "json",
                          				    cacheBoolean: false,
                          				    beforeSend: function() {   }, 				
                         				    success: function(html)
                          				      {
                          				          
                          				         if(html["ok"] != 1)
                          				          {
                          				            alert(html["msg"]);   
                          				          }
                          				     
                          				        
                          				      }
                          				   });
                          				   
                  				   
                                }
                           
                               
                                
                            }  
                            
                        }
               
                </script>               
              ';
              
              
             return $ret_fin;   
              
            }
        
        
        function ask()
            {

                global $conf;
                
              //javascript for asking questions
              $ret_fin = '
                <script>
                
                 

                    function show_links()
                        {
                          $("#partner_links").show();   
                        }
                   
                    function show_email()
                        {
                            $("#email_box_msg").hide();
                            $("#email_box").show();
                        }
                   
                    
                   
                    function send_email()
                        {
                            var email = jQuery.trim($("#partner_email").val());
                            
                            if(email != "")
                                {
                                  email = encodeURIComponent(email);
                                  var key = $("#ask_key_email").val();
                                  
                                  
                                   var postdata = {};
                                   postdata["a"] = "data"; 
                                   postdata["b"] = "send_partner_email"; 
                                   postdata["ask_key"] = key; 
                                   postdata["email"] = email;
                                   
                                     var url = "'.$conf['main_url'].'data.php";
                                     var loading_div = "save_button_loading";
                                     
                                        $.ajax({
                      				    url: url,
                      				    type: "POST",
                      				    data: postdata,
                      				    dataType: "json",
                      				    cacheBoolean: false,
                      				    beforeSend: function() {   }, 				
                     				    success: function(html)
                      				      {
                      				          
                      				         if(html["ok"] == 1)
                      				          {
                      				                
                      				             $("#email_box").hide();
                      				             $("#email_box_msg").show();
                      				               
                      				          }
                      				          else
                      				          {
                      				            alert(html["msg"]);   
                      				          }
                      				     
                      				        
                      				      }
                      				   });
                  				   
                                    
                                }
                                else
                                {
                                  alert("Please enter email address.");   
                                }
                            
                        }
                
                    function save_answers()
                        {
                           var ask_key = $("#ask_key").val();
                           
                           if(ask_key != "")
                            {
                                
                               var postdata = {};
                                   postdata["a"] = "data"; 
                                   postdata["b"] = "save_data"; 
                                   postdata["ask_key"] = ask_key; 
                                  
                             
                               $(".answer:radio:checked").each(function() { 
                               
                              
                                  name = $(this).attr("name");
                                  value = encodeURIComponent(jQuery.trim($(this).val()));
                                  postdata[name] = value;  
                                  
                                 
                                  //get scale                                    
                                  var this_q_id = $(this).attr("data-qid"); 
                                  var scale = $("#scale_"+this_q_id).val();
                                  name = "scale["+this_q_id+"]";
                                  postdata[name] = scale;
                                 
                                  
                              });
                              
                            
                              
                              
                                 var url = "'.$conf['main_url'].'data.php";
                                 var loading_div = "save_button_loading";
                                 
                                    $.ajax({
                  				    url: url,
                  				    type: "POST",
                  				    data: postdata,
                  				    dataType: "json",
                  				    cacheBoolean: false,
                  				    beforeSend: function() {   }, 				
                 				    success: function(html)
                  				      {
                  				          
                  				         if(html["ok"] == 1)
                  				          {
                  				            //saved
                  				            $("#questions").remove();
                  				            $("#questions_buttons").hide();
                  				            $("#add_question_link").hide();
                  				            
                  				            $("#next_step").show();
                  				               
                  				          }
                  				          else
                  				          {
                  				            alert(html["msg"]);   
                  				          }
                  				     
                  				        
                  				      }
                  				   });
                  				   
                             
                            }    
                         
                             
                        }
                
                   function questions_delete(q_id)
                    {
                      
                      if(q_id > 0)
                        {
                            var ask_key = $("#ask_key").val();
                                            
                            var postdata = {};
                            postdata["a"] = "data"; 
                            postdata["b"] = "del_questions"; 
                            postdata["id"] = q_id;
                            postdata["ask_key"] = ask_key;
                            
                             var url = "'.$conf['main_url'].'data.php";
                             var loading_div = "save_button_loading";
                             
                                $.ajax({
              				    url: url,
              				    type: "POST",
              				    data: postdata,
              				    dataType: "json",
              				    cacheBoolean: false,
              				    beforeSend: function() {   }, 				
             				    success: function(html)
              				      {
              				          
              				         if(html["ok"] == 1)
              				          {              				             
              				            $("#question_row_"+html["id"]).remove();              				            
              				          }
              				          else
              				          {
              				             alert(html["msg"]);  
              				          }
              				      }
              			     }); 
                                             
                            
                        }
                   
                       
                         
                    }
                
                   function questions_add_now()
                    {
                         
                         var q_body = jQuery.trim($("#q_body_text").val());
                         
                         
                         if(q_body != "")
                            {
                                var group_id = $("#new_group").val();
                                if(group_id == "0")
                                    {
                                      alert("Please select category.");   
                                    }
                                    else
                                    {
                                        var e = 0;
                                        
                                        if(group_id == "new")
                                            {
                                              var group_name = jQuery.trim($("#new_group_custom").val());  
                                              if(group_name == "")
                                                {
                                                    e = 1;
                                                    alert("Please type new category name.");
                                                }
                                            
                                            }
                                       
                                       if(e != 1)
                                        {
                                            
                                            var ask_key = $("#ask_key").val();
                                            
                                            var postdata = {};
                                            postdata["a"] = "data"; 
                                            postdata["b"] = "add_questions"; 
                                            postdata["ask_key"] = ask_key; 
                                            
                                             $(".new_data").each(function() { 
                              
                                                  name = $(this).attr("name");
                                                  value = encodeURIComponent(jQuery.trim($(this).val()));
                                                  postdata[name] = value;   
                                                  
                                              });
                                            
                                             if($("#allow_publish").is(":checked"))
                                                {
                                                  postdata["allow_publish"] = 1;   
                                                }
                        
                            
                                            
                                             var url = "'.$conf['main_url'].'data.php";
                                             var loading_div = "save_button_loading";
                                             
                                                $.ajax({
                              				    url: url,
                              				    type: "POST",
                              				    data: postdata,
                              				    dataType: "json",
                              				    cacheBoolean: false,
                              				    beforeSend: function() {   }, 				
                             				    success: function(html)
                              				      {
                              				          
                              				         if(html["ok"] == 1)
                              				          {
                              				            
                              				              
                              				            //saved
                              				            if(html["group_new"] == 1)
                              				              {
                              				                //adding new group
                              				                var group_id = html["group_id"];
                              				                var group_name = html["group_name"];
                              				               
                              				                
                              				                if((group_id > 0) && (group_name != ""))
                              				                  {
                              				                      
                              				                    var group_text = \'<div class="panel panel-default"><div class="panel-heading">\';                                          
                                                                group_text += \'<h3 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_\'+group_id+\'"><span id="current_group_\'+group_id+\'">\'+group_name+\'</span></a></h3></div>\';
                                                                group_text += \'<div id="collapse_\'+group_id+\'" class="panel-collapse collapse in"><div class="panel-body">\';
                                                                group_text += \'<input type=hidden class="current_groups" value="\'+group_id+\'"><table class="table table-striped" id="group_table_\'+group_id+\'"><tbody></tbody></table>\';                                                                
                                                                group_text += \'</div></div></div>\';
                                                               
                                                                
                              				                    $("#accordion").append(group_text);
                              				                      
                              				                  }
                              				                
                              				                   
                              				              }
                              				         
                              				              //adding question
                              				              if(html["position"] == "first")
                              				                  {
                              				                      $("#group_table_"+html["group_id"]+" > tbody:last").prepend(html["body"]);
                              				                  }
                              				              else if(html["position"] > 0)
                              				                  {
                              				                    
                              				                    $("#question_row_"+html["position"]).after(html["body"]);
                              				                    
                              				                  }
                              				                  else
                              				                  { 
                              				                      $("#group_table_"+html["group_id"]+" > tbody:last").append(html["body"]);
                              				                  }
                              				              
                              				              $("#modal_custom").modal("hide")
                              				             // alert(html["msg"]);  
                              				          
                              				               
                              				          }
                              				          else
                              				          {
                              				            alert(html["msg"]);   
                              				          }
                              				     
                              				        
                              				      }
                              				   });
                              			 
                                        
                                       }
                                  
                                    }
                                  
                            }
                            else
                            {
                                alert("Please type your question text.");
                            }
                              
                        
                         
                    }
               
                   function questions_add_group_selected()
                    {
                      var group_id = $("#new_group").val();
                      
                      if(group_id == "new")
                        {
                          $("#group_new").show(); 
                          $("#q_position").hide(); 
                          $("#q_body").show();
                          $("#q_options").show();
                        }
                        else
                        {
                          $("#group_new").hide();
                          
                          if(group_id > 0)
                            {
                                
                                var q_select = "<label for=\"new_question_pos\">Question position</label><select id=new_question_pos name=\"new_data[position]\" class=\"new_data form-control\">";
                                
                                q_select += "<option value=last>Last question</option>";
                                q_select += "<option value=first>First question</option>";
                      
                      
                                $(".current_questions_"+group_id).each(function() {
                                    
                                    var q_id = $(this).val();
                                    var q_body = $("#question_"+q_id).html();
                                 
                                    q_select += \'<option value="\'+q_id+\'">After: \'+q_body+\'</option>\';
                                       
                                });
                           
                                q_select += "</select>";
                                
                                $("#q_position").html(q_select);
                                $("#q_position").show();
                                $("#q_body").show();
                                $("#q_options").show();
                           
                                
                            } 
                            else
                            {
                                $("#q_position").hide();
                                $("#q_body").hide();
                                $("#q_options").hide();  
                            } 
                        }
                        
                    }
                
                   function questions_add()
                    {
                        
                       //current groups and questions
                       var groups_select = "<div class=\"form-group\"><label for=\"new_group\">Select category</label><select onchange=\"questions_add_group_selected();\" name=\"new_data[group]\" id=new_group class=\"new_data form-control\">";
                       
                       
                       groups_select += \'<option value="0">Please select category</option>\';
                                 
                                            
                        $(".current_groups").each(function() {
                            
                            
                      
                           var group_id = $(this).val();
                           var group_name = $("#current_group_"+group_id).html();
                           
                            
                           groups_select += \'<option value="\'+group_id+\'">\'+group_name+\'</option>\';
                          
                        }); 
                        
                        groups_select += \'<option value="new">--- Add new category ---</option>\';
                        groups_select += "</select></div>";
                        
                        groups_select += "<div class=\"form-group\" id=\"group_new\" style=\"display:none\"><label for=\"new_group_custom\">Add new category</label>";
                        groups_select += \'<input type="text" id="new_group_custom" name=\"new_data[group_custom]\" class="form-control new_data" placeholder="Category name">\';
                        
                        groups_select += "</div>";
                        
                     var body = "<form role=\"form\">"+groups_select;
                         body += "<div class=\"form-group\" id=\"q_position\" style=\"display:none\"></div>";
                         body += "<div class=\"form-group\" id=\"q_body\" style=\"display:none\">";
                         
                         body += \'<label for="q_body_text">Question text</label><input type="text" name=\"new_data[body]\" class="form-control new_data" id="q_body_text" placeholder="Type your question here">\';
  
  
                         body += "</div>";
                         
                         body += "<div class=\"form-group\" id=\"q_options\" style=\"display:none\">";
                        
                         
   
                         body += \'<div class="checkbox"><label><input type="checkbox" checked value=1 id="allow_publish"> Allow this question to be added to '.$conf['main_name'].' list.</label></div>\';
    
  
                         body += "</div>";
                         
                         body += "</form>"; 
                         
                         var footer = \'<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>\'
                             footer += \'<button type="button" class="btn btn-primary" onclick="questions_add_now();">Add question</button>\';

                      $("#modal_custom_title").html("Adding new question");
                      $("#modal_custom_body").html(body);
                      
                      $("#modal_custom_footer").html(footer);
                      
                      $("#modal_custom").modal({
                          backdrop:"static"
                          });
                         
                    }
               
               
                    function display_links()
                        {
                            
                             var partner = $("#partner").val();
                              
                             var body = "<p>You can access your questionnaire and view results anytime by visiting following links.</p>";
                             
                             var link_own = $("#link_own").val();
                             
                             if(partner != 1)
                                {
                                    var link_partner = $("#link_partner").val();
                                }
                           
                             var link_results = $("#link_results").val();
                             
                             body += \'<div class="form-group"><label for="your_link">Your link</label><input type=text id=your_link class="form-control" readonly="readonly" value="\'+link_own+\'"></div>\';
                             
                             if(partner != 1)
                                {
                                    body += \'<div class="form-group"><label for="partner_link">Partner\\\'s link</label><input type=text id=partner_link class="form-control" readonly="readonly" value="\'+link_partner+\'"></div>\';
                                }
                           
                             body += \'<div class="form-group"><label for="results_link">Results link</label><input type=text id=results_link class="form-control" readonly="readonly" value="\'+link_results+\'"></div>\';
                        
                        
                       
                             
                             
                             var footer = \'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>\'                             

                              $("#modal_custom_title").html("Permanent links to your questionnaire");
                              $("#modal_custom_body").html(body);
                              
                              $("#modal_custom_footer").html(footer);
                              
                              $("#modal_custom").modal({
                                  backdrop:"static"
                                  });
                                  
                        }
                   
                   
                   function check_answer(q_id,group_id,group_index,show_scale)
                    {
                       
                       if($("#question_row_"+q_id).closest("tr").is(":last-child"))
                        { 
                        
                          $("#collapse_"+group_id).collapse("toggle");
                          
                          group_index = parseInt(group_index);
                          group_index = group_index+1;
                          
                          $(".group_index_"+group_index).collapse("show");
                            
                        }
                   
                    
                       if(show_scale == 1)
                        {                            
                           $("#scale_box_"+q_id).show("fast"); 
                        }
                        else
                        {
                           $("#scale_box_"+q_id).hide("fast");
                        }
                   
                          
                    }
                
                function set_scale(q_id,scale)
                    {
                       if((q_id > 0) && (scale > 0))
                        { 
                        
                            scale = parseInt(scale);                        
                            $("#scale_"+q_id).val(scale);
                            
                           
                            
                            
                            
                            
                             
                            //highlight
                             for(var k=1;k<=scale;k++)
                                {                                
                                  $("#star_"+k+"_"+q_id).addClass("filled");                               
                                } 
                             for(var k=scale;k<6;k++)
                                {        
                                    if(k!=scale)
                                        {                        
                                            $("#star_"+k+"_"+q_id).removeClass("filled");
                                        }                               
                                } 
                                        
                            
                           
                           
                           
                        }
                     
                    }
               
                </script>
              
              
              ';
              
              
             return $ret_fin;   
                
                
            }
        
        
    }



?>