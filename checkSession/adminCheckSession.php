<?php
function session_error_handling_function($code, $msg, $file, $line) {
// your handling code here
}

set_error_handler('session_error_handling_function');
session_start();
restore_error_handler();

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
