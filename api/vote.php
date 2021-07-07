<?php
session_start();

include('connect.php');
$votes=$_POST('gvotes');
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];
$update=mysqli_query($connect,"UPDATE user SET votes='$total_votes' WHERE id='$gid'");
$update=mysqli_query($connect,"UPDATE user SET status=1 WHERE id='$uid'");
?>