<?php
session_start();

unset($_SESSION['lname']);
session_destroy();

header('Location:sign-in.php');
