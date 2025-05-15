<?php
session_start();

session_unset();
session_destroy();

header("http://localhost/project1/main.php");
exit;
?>