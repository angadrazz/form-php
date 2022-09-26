<?php

session_start();

// initialising variables

$username = "";
$email = "";

// connect to db

$db = mysqli_connect('localhost', 'root','','userlogin') or die("could not connect to database");

// Register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);