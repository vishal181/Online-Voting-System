<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:../");
}

$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];

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
            float: left;
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            float: right;
        }

        #profile {

            background-color: white;
            width: 40%;
            padding: 20px;
            float: right;

        }

        #group {

            background-color: white;
            width: 60%;
            padding: 20px;
            float: left;

        }
        #mainpanal{
            padding: 10px;
        }

        #votebtn {
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            float: left;
        }
    </style>

    <div id="mainsection">
        <center>

            <div id="headersection">
                <button id="backbtn"> back</button>
                <button id="logoutbtn">logout</button>
                <h1>Online Voting System</h1>
            </div>
        </center>
        <hr>

        


            <div id="profile">
                <center> <img src="../uploads/<?php echo $userdata['photo'] ?>" height="100" width="100"></center> <br>
                <b>Name:</b> <?php echo $userdata['name']   ?> <br><br>
                <b>Mobile:</b><?php echo $userdata['mobile']   ?><br><br>
                <b>Address:</b><?php echo $userdata['address']   ?><br><br>
                <b>Status:</b><?php echo $userdata['status']   ?><br><br>

            </div>

            <div id="group">
                <?php
                if ($_SESSION['groupsdata']) {
                    for ($i = 0; $i < count($groupsdata); $i++) {
                ?>
                        <div>
                            <img src="../uploads/<?php echo  $groupsdata[$i]['photo'] ?>" height="100" width="100">
                            <b>Group Name: </b><?php echo $groupsdata[$i]['name'] ?><br> <br>
                            <b>Votes: </b><?php echo $groupsdata[$i]['votes'] ?><br> <br>
                            <form action="">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="submit" name="votebtn" value="vote" id="votebtn">
                            </form>
                        </div>
                        <hr>

                <?php

                    }
                } else {
                }



                ?>
            </div>
        

    </div>

</body>

</html>