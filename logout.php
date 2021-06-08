<?php
session_start();
session_unset();
header("refresh:1, url=http://localhost/practice/confess/index.php");
?>