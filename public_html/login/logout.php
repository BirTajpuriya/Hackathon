<?php
session_start();
session_unset();
session_destroy();
    header('location:../../public_html/pages/index.php');
    die();


?>