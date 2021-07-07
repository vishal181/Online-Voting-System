<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:../");
}

$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];



if ($_SESSION['userdata']['status'] == 0) {
    $status = '<b style="color:red">Not Voted</b>';
} else {
    $status = '<b style="color:green">Voted</b>';
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
            margin: 10px;
        }

        #logoutbtn {
            padding: 5px;
            font-size: 15px;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            float: right;
            padding: 5px;
            margin: 10px;


        }

        #profile {

            background-color: white;
            width: 30%;
            padding: 20px;
            float: left;
            text-align: left;

        }

        #group {

            background-color: white;
            width: 60%;
            padding: 20px;
            float: right;
            text-align: left;

        }

        #mainpanal {
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
                <a href="../"> <button id="backbtn"> back</button></a>
                <a href="../api/logout.php"> <button id="logoutbtn"> logout</button></a>
                <h1>Online Voting System</h1>
            </div>
        </center>
        <hr>



        <div id="mainpanal">
            <div id="profile">
                <center> <img src="../uploads/<?php echo $userdata['photo'] ?>" height="100" width="100"></center> <br><br>
                <b>Name:</b><?php echo $userdata['name']   ?> <br><br>
                <b>Mobile:</b><?php echo $userdata['mobile']   ?><br><br>
                <b>Address:</b><?php echo $userdata['address']   ?><br><br>
                <b>Status:</b><?php echo $status ?><br><br>

            </div>



            <div id="group">
                <?php
                if ($_SESSION['groupsdata']) {
                    for ($i = 0; $i < count($groupsdata); $i++) {
                ?>
                        <div>
                            <img style="float: right;" src="../uploads/<?php echo  $groupsdata[$i]['photo'] ?>" height="100" width="100"><br>
                            <b>Group Name: </b><?php echo $groupsdata[$i]['name'] ?><br><br>
                            <b>Votes: </b><?php echo $groupsdata[$i]['votes'] ?><br><br>
                            <form action="../api/vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
                                <input type="submit" name="votebtn" value="vote" id="votebtn">

                            </form>

                        </div>
                        <br>
                        <br>
                        <hr>



                <?php

                    }
                } else {
                }



                ?>
            </div>
        </div>


    </div>

</body>

</html>