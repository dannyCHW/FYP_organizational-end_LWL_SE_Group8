<?php

    session_start();
    $_SESSION["applicantID"] =  $_POST["applicantID"];

    echo "<script>
    window.location.href='orgApplicantAnswerHTML.php';
    </script>";

 ?>
