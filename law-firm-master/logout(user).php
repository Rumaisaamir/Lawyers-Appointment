<?php
session_start();

unset($_SESSION['cname']);
unset($_SESSION['cpic']);
session_destroy();

header('Location:login(user).php');

?>