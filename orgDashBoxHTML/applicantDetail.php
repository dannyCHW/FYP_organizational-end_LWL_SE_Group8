<?php


  $applicantID = "";

    echo"
      <div class='col-lg-7 mb-lg-0 mb-4'>
          <div class='card z-index-2 h-100'>
              <div class='card-header pb-0 pt-3 bg-transparent'>
                  <h2><span class='material-icons'>Applicants List</span></h2>
              </div>
              <div class='card-body p-3'>
                  <div class='table-responsive' style='height: 25rem;'>
                      <table class='table table-striped table-sm' id='t'>
                        <thead>
                          <tr>
                            <th scope='col'>Applicant Name</th>
                            <th scope='col'> Gender</th>
                            <th scope='col'>Apply Date</th>
                          </tr>
                        </thead>
                        <tbody>";
                        $colle = $db->collection('response');
                        $doc = $colle->where('serviceID', '=', $eventID);
                        $result = $doc->documents();

                        foreach ($result as $result) {
                            if ($result->exists()) {
                              $applicantID = $result->id();
                              $date = $result->data()['date'];
                              $Str = $result->data()['autoFillWithAns'];
                              $newStr = str_replace('\'', '"', $Str);
                              $str_json = substr($newStr, 18, -3);
                              $str_json1 = str_replace('{', '', $str_json);
                              $str_json2 = str_replace('}', '', $str_json1);
                              $json = "{".$str_json2."}";
                              //'{"hkid":"A1234567(8)","chName":"李智","birthday":"1997-12-01","gender":"M"}'
                              $obj = json_decode($json);
                              //'{"a":1,"b":2,"c":3,"d":4,"e":5}';

                              $name = $obj->{'chName'};
                              $obj = json_decode($json);
                              $gender = $obj->{'gender'};


                              echo"
                                <tr>
                                  <td>$name</td>
                                  <td>$gender</td>
                                  <td>$date</td>
                                  <td><button id='btnAnswer'>Show Answer</button>"."</td><td id='applicantID' hidden>".$applicantID."</td></td>
                                </tr>";
                            }
                          }

                            echo"
                        </tbody>
                      </table>
                    </div>
              </div>
          </div>
      </div>
  ";
 ?>
