<?php
    require('connection.inc.php');
    require('functions.inc.php');
        
    unset ($_SESSION['USER_LOGIN']);
    unset ($_SESSION['USER_ID']);
    unset ($_SESSION['USER_NAME']);
    unset ($_SESSION['USER_EMAIL']);
    header('location:index.php');
    die();
?>