<?php
    session_start();

    if(isset($_SESSION['identity'])){

    } else {

        echo "<script type='text/javascript'>
            alert('You need to login First.');
            </script>";

            sleep(1);

        echo "<script type='text/javascript'>
            window.location.href = 'adminLoginHTML.php';
            </script>";

    }
?>
