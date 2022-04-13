<?php
      $colle = $db->collection('response');
      $doc = $colle->where('serviceID', '=', $eventID);
      $result = $doc->documents();

      foreach ($result as $result) {
          if ($result->exists()) {
            $Str_json = $result->data()['autoFillWithAns'];
            $json = '"' . $Str_json . '"';

          }
        }
    echo"
      <div class='col-lg-7 mb-lg-0 mb-4'>
          <div class='card z-index-2 h-100'>
              <div class='card-header pb-0 pt-3 bg-transparent'>
                  <h2><span class='material-icons'>Applicants List</span></h2>
              </div>
              <div class='card-body p-3'>
                  <div class='table-responsive' style='height: 25rem;'>
                      <table class='table table-striped table-sm'>
                        <thead>
                          <tr>
                            <th scope='col'>Applicant Name</th>
                            <th scope='col'>Applicant Gender</th>
                            <th scope='col'>Applicant Age</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>3900</td>
                            <td>CHAN Tai Man</td>
                            <td>Old Age Living Allowance</td>
                            <td>04/07/2022</td>
                          </tr>
                          <tr>
                              <td>3901</td>
                              <td>CHEUNG Tai Tai</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>3902</td>
                              <td>CHAN Tai Man</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>3903</td>
                              <td>CHEUNG Tai Tai</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>3904</td>
                              <td>CHAN Tai Man</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>3905</td>
                              <td>CHEUNG Tai Tai</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>3906</td>
                              <td>CHAN Tai Man</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>39007</td>
                              <td>CHEUNG Tai Tai</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>3908</td>
                              <td>CHAN Tai Man</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>3909</td>
                              <td>CHEUNG Tai Tai</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                            <tr>
                              <td>3910</td>
                              <td>CHAN Tai Man</td>
                              <td>Old Age Living Allowance</td>
                              <td>04/07/2022</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
              </div>
          </div>
      </div>
  ";
 ?>
