<?php
    session_start();

    if($_SESSION['identity'] == "adminitor"){

    } else {

        echo "<script type='text/javascript'>
            alert('You need to login First.');
            </script>";

            sleep(1);

        echo "<script type='text/javascript'>
            window.location.href = 'loginHTML.php';
            </script>";

    }
?>
