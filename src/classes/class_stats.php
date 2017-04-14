<?

    class stats {
        
     
        function display()
            {
                
               //show statistics
               global $db,$conf;
                
                
              //top 20 YES for all
              //SELECT count(qa.id) as countit,qa.question_id,q.body FROM question_answer qa, question q where qa.answer_id=3 AND q.id=qa.question_id group by qa.question_id ORDER BY countit DESC LIMIT 0,10;
              
              //top 20 females  
              //SELECT count(qa.id) as countit,qa.question_id,q.body FROM question_answer qa, question q, user u where qa.answer_id=3 AND q.id=qa.question_id AND u.id=qa.user_id AND u.sex='f' group by qa.question_id ORDER BY countit DESC LIMIT 0,20;
  
               echo "<h3>Statistics</h3>";  
               
               if($_REQUEST['b'] == 'filter')
                {
                   //apply filter   
                   $answer_id = $_REQUEST['stats_answer'];
                   if((!is_numeric($answer_id)) || ($answer_id < 0) || ($answer_id > 10))
                    {
                      $answer_id = 3;   
                    }
                    
                   $sex = $_REQUEST['stats_sex'];
                   if(($sex != 'm') && ($sex != 'f'))
                    {
                      $sex = '';   
                    }
                    
                   $age = $_REQUEST['stats_age'];
                   if(($age != '18-20') && ($age != '22-25') && ($age != '26-30') && ($age != '31-35') && ($age != '36-40') && ($age != '41-50') && ($age != '51-60') && ($age != '61'))
                    {
                      $age = '';   
                    } 
                    
                    $limit = $_REQUEST['stats_limit'];
                    if((!is_numeric($limit)) || ($limit < 1) || ($limit > 50))
                        {
                          $limit = 20;   
                        }
                    
                    
                }
                else
                {
                  //apply defaults
                  $sex = '';
                  $age = '';
                  $answer_id = 3;   //YES
                   
                  $limit = 20;  
                }
                 
                $search_cond = '';
                //building search cond
                if(is_numeric($answer_id))
                    {                        
                        $search_cond = "qa.answer_id='$answer_id'";
                    }
                
                if($sex != '')
                    {
                        if($search_cond != '')
                            {
                              $search_cond .= ' AND ';   
                            }
                        $search_cond .= "u.sex='$sex'";
                    }
                    
                if($age != '')
                    {
                        if($search_cond != '')
                            {
                              $search_cond .= ' AND ';   
                            }
                        $search_cond .= "u.age='$age'";  
                    }   
                if($search_cond != '')
                    {
                      $search_cond = ' AND '.$search_cond;   
                    } 
                
 
               echo '
               <form class="form-inline" role="form" method="get">
               <input type=hidden name=a value=stats>
               <input type=hidden name=b value=filter>
               
                  <div class="form-group">
                    <label class="sr-only" for="stats_answer">Answer</label>
                     <select name=stats_answer id=stats_answer class="form-control">
                       <option value=3';
                          if($answer_id == 3)
                            {
                              echo ' selected';   
                            }
                       echo '>Yes</option>
                       <option value=1';
                          if($answer_id == 1)
                            {
                              echo ' selected';   
                            }
                       echo '>No</option>

                       <option value=2';
                          if($answer_id == 2)
                            {
                              echo ' selected';   
                            }
                       echo '>We already do that</option>
                       
                       <option value=4';
                          if($answer_id == 4)
                            {
                              echo ' selected';   
                            }
                       echo '>If my partner interested</option>
                       
                        <option value=5';
                          if($answer_id == 5)
                            {
                              echo ' selected';   
                            }
                       echo '>I want more</option>
                       
                        <option value=6';
                          if($answer_id == 6)
                            {
                              echo ' selected';   
                            }
                       echo '>Maybe later</option>



                       
                     </select>
                     
                     
                  </div>
                  
                  
                    <div class="form-group">
                    <label class="sr-only" for="stats_sex">Sex</label>
                     <select name=stats_sex id=stats_sex class="form-control">
                       <option value=all';
                          if($sex == 'a')
                            {
                              echo ' selected';   
                            }
                       echo '>Any Sex</option>
                       <option value=f';
                          if($sex == 'f')
                            {
                              echo ' selected';   
                            }
                       echo '>Female</option>
                       
                        <option value=m';
                          if($sex == 'm')
                            {
                              echo ' selected';   
                            }
                       echo '>Male</option>

                       
                     </select>
                     
                     
                  </div>
                  
                   
                    <div class="form-group">
                    <label class="sr-only" for="stats_age">Age</label>
                     <select name=stats_age id=stats_age class="form-control">
                       <option value=all';
                          if($age == '')
                            {
                              echo ' selected';   
                            }
                       echo '>Any Age</option>
                       <option value=18-20';
                          if($age == '18-20')
                            {
                              echo ' selected';   
                            }
                       echo '>18-20</option>
                       <option value=22-25';
                          if($age == '22-25')
                            {
                              echo ' selected';   
                            }
                       echo '>22-25</option>
                       <option value=26-30';
                          if($age == '26-30')
                            {
                              echo ' selected';   
                            }
                       echo '>26-30</option>
                       <option value=31-35';
                          if($age == '31-35')
                            {
                              echo ' selected';   
                            }
                       echo '>31-35</option>
                       <option value=36-40';
                          if($age == '36-40')
                            {
                              echo ' selected';   
                            }
                       echo '>36-40</option>
                       <option value=41-50';
                          if($age == '41-50')
                            {
                              echo ' selected';   
                            }
                       echo '>41-50</option>
                       <option value=51-60';
                          if($age == '51-60')
                            {
                              echo ' selected';   
                            }
                       echo '>51-60</option>
                       <option value=61';
                          if($age == '61')
                            {
                              echo ' selected';   
                            }
                       echo '>60+</option>

                       
                     </select>
                     
                      </div>
                     
                      <div class="form-group">
                    <label class="sr-only" for="stats_limit">Limit</label>
                     <select name=stats_limit id=stats_limit class="form-control">
                       <option value=10';
                          if($limit == 10)
                            {
                              echo ' selected';   
                            }
                       echo '>Top 10</option>
                       <option value=20';
                          if($limit == 20)
                            {
                              echo ' selected';   
                            }
                       echo '>Top 20</option>
                       <option value=50';
                          if($limit == 50)
                            {
                              echo ' selected';   
                            }
                       echo '>Top 50</option>

                       
                     </select>
                     
                     
                  </div>
                  
                  
                     <button type="submit" class="btn btn-default">Search</button>
                     
                 
                  
              </form>
              <P>
                  '; 
              
               
               //getting top 20                
               $query = "SELECT count(qa.id) as countit,q.body FROM question_answer qa, question q, user u where q.id=qa.question_id $search_cond AND u.id=qa.user_id group by qa.question_id ORDER BY countit DESC LIMIT 0,$limit";
               $ret = $db->get_data($query);
               if($ret['rows'] > 0)
                {
                   
                   echo '<table class="table">
                    <tr><th>Count</th>
                        <th>Question</th>
                    </tr>';
                    
                    for($i=0;$i<$ret['rows'];$i++)
                        {
                          $countit = $ret['data'][$i]['countit'];   
                          $body = $ret['data'][$i]['body'];
                          
                          echo "<tr>
                            <td>$countit</td>  
                            <td>$body</td>
                           </tr>";
                           
                        }
                   
                   
                   echo '</table>';
                   
                   echo '<P class="text-muted">You are free to use this statistics for academic or any other purposes. If you do, please mention our website: <a href="https://www.weshouldtryit.com">www.weshouldtryit.com</a> </p>';
                    
                }
                else
                {
                  echo "<P>Nothing has been found.</p>";   
                }
               
                
                
            }   
        
        
    }
    


?>