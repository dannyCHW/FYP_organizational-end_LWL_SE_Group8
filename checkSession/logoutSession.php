<?php

    session_start();
    session_destroy();


    echo "<script type='text/javascript'>
        alert('Logout');
        window.location.href = '../homepageHTML.php';
        </script>";


?>
