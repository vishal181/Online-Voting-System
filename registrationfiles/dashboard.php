<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:../");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Online Voting System -Dashboard</title>
</head>

<body>
    <style>
        #backbtn {
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            float: left;
        }

        #logoutbtn {
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            float: right;
        }
    </style>

    <div id="headersection">

        <button id="backbtn"> back</button>
        <button id="logoutbtn">logout</button>
        <h1>Online Voting System</h1>

    </div>

    <hr>
    <div id="profile">
    </div>

    <div id="group">
    </div>

</body>

</html>