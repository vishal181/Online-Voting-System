<?php

include("connect.php");

$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role'];

$check=mysqli_query($connect,"SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role' ");
