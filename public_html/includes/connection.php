<?php
session_start();

//connect to database
$mysqli = mysqli_connect('localhost', 'root', '', 'barlingsbeach');

require_once('includes/function.php');