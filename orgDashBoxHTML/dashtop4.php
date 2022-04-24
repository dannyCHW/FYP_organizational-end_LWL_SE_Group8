<?php

  echo"
    <div class='row'>
        <div class='col-8'>
            <div class='numbers'>
                <p class='text-sm mb-0 text-uppercase font-weight-bold'>Process Date
                </p>
                <h5 class='font-weight-bolder'>
                  ".$_SESSION['dash_startDate']." To " . $_SESSION['dash_endDate'] . "
                </h5>
                <p class='mb-0'>
                    <br />
                </p>
            </div>
        </div>
        <div class='col-4 text-end'>
            <div>
                <span class='material-icons'>Date</span>
            </div>
        </div>
    </div>
  ";
