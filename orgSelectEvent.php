<?php

  session_start();

  $_SESSION["orgSelectEventID"] =$_POST['eventId'];

  echo $_SESSION['orgSelectEventID'];
 ?>
