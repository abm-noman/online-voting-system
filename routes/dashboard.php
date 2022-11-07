<?php
session_start();
if (!isset($_SESSION['userData'])) {
    header("location: ../");
}

$userData = $_SESSION['userData'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <title>Dashboard - Online Voting System</title>
</head>

<body>
    <div id="mainSection">
        <center>
            <div class="headerSection">
                <button class="back-btn">Back</button>
                <button class="logout-btn">Log Out</button>
                <h1>Online Voting System</h1>
            </div><br><hr>
        </center>

        
        <div id="profile">
            <b>Name: </b> <?php echo $userData['name'] ?> <br>
            <b>Mobile: </b> <?php echo $userData['mobile'] ?> <br>
            <b>Address: </b> <?php echo $userData['address'] ?> <br>
            <b>Status: </b> <?php echo $userData['status'] ?> <br>
        </div>

        <div id="group">
            <b>Name: </b><br>
            <b>Mobile: </b><br>
            <b>Address: </b><br>
            <b>Status: </b><br>
        </div>



    </div>




</body>

</html>