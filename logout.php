<?php
    session_start();
    session_unset();
    session_destroy();

    session_start();
    $_SESSION['logout']="Logout Successfully!";
    header('Location:login.php');
?>