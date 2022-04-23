<?php

  echo"
    <div class='row'>
        <div class='col-8'>
            <div class='numbers'>
                <p class='text-sm mb-0 text-uppercase font-weight-bold'>Number Of Questions
                </p>
                <h5 class='font-weight-bolder'>
                  ".$_SESSION['questionNum']."
                </h5>
                <p class='mb-0'>
                    <span class='text-success text-sm font-weight-bolder'>+1%</span>
                    since yesterday
                </p>
            </div>
        </div>
        <div class='col-4 text-end'>
            <div>
                <span class='material-icons'>Question</span>
            </div>
        </div>
    </div>
  ";
 ?>
