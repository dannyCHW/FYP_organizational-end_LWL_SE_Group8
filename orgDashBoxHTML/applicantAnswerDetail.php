<?php

    include('firebaseConfig.php');

    $applicantID = $_SESSION["applicantID"];
    $eventID = $_SESSION["orgSelectEventID"];

    echo"
      <div class='col-lg-7 mb-lg-0 mb-4'>
          <div class='card z-index-2 h-100'>
              <div class='card-header pb-0 pt-3 bg-transparent'>
                  <h2><span class='material-icons'>Question List</span></h2>
              </div>
              <div class='card-body p-3'>
                  <div class='table-responsive' style='height: 25rem;'>
                      <table class='table table-striped table-sm' id='t'>
                        <thead>
                          <tr>
                            <th scope='col'>Index</th>
                            <th scope='col'>Question</th>
                            <th scope='col'>Description</th>
                            <th scope='col'>Answer</th>
                          </tr>
                        </thead>
                        <tbody>";
                        $firstLayer = $db->collection('service')->document($eventID);
                        $collections = $firstLayer->collection('questions');
                        $ready_documents = $collections->orderBy('index', 'ASC');
                        $documents = $ready_documents->documents();

                        foreach ($documents as $documents) {
                          $index = $documents->data()['index'];
                          $question = $documents->data()['question'];
                          $description = $documents->data()['description'];

                          $colle = $db->collection('response')->document($applicantID);
                          $doc = $colle->collection('answers');
                          $ready_documents = $doc->orderBy('questionIndex', 'ASC');
                          $documents = $ready_documents->documents();


                          foreach ($documents as $documents) {

                                $answer = $documents->data()['ansContent'];
                            }

                          echo"<tr><td>".$index."</td><td>".$question."</td><td>$description</td><td>$answer</td></tr>";
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
