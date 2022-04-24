<?php

  echo"
    <div class='row'>
        <div class='col-8'>
            <div class='numbers'>
                <p class='text-sm mb-0 text-uppercase font-weight-bold'>Total Applicant
                </p>
                <h5 class='font-weight-bolder'>
                  ".$_SESSION['applicant']."
                </h5>
                <p class='mb-0'>
                    <br />
                </p>
            </div>
        </div>
        <div class='col-4 text-end'>
            <div>
                <span class='material-icons'>Applicants</span>
            </div>
        </div>
    </div>
  ";
 ?>
