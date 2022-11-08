<?php
session_start();
if (!isset($_SESSION['userData'])) {
    header("location: ../");
}

$userData = $_SESSION['userData'];
$groupData = $_SESSION['groupData'];

if ($_SESSION['userData']['status'] == 0) {
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
                <a href="../"><button class="back-btn">Back</button></a> 
                <a href="logout.php"><button class="logout-btn">Log Out</button></a> 
                <h1>Online Voting System</h1>
            </div><br>
            <hr>
        </center>

        <div id="main-panel">
            <div id="profile">
                <b>Name: </b> <?php echo $userData['name'] ?> <br>
                <b>Mobile: </b> <?php echo $userData['mobile'] ?> <br>
                <b>Address: </b> <?php echo $userData['address'] ?> <br>
                <b>Status: </b> <?php echo $status ?> <br>
            </div>

            <div id="group">
                <?php
                if (($_SESSION['groupData'])) {
                    for ($i = 0; $i < count($groupData); $i++) {
                ?>
                        <div>
                            <b>Group Name: </b><?php echo $groupData[$i]['name'] ?><br>
                            <b>Votes: </b><?php echo $groupData[$i]['votes'] ?><br>
                            <form action="../api/vote.php " method="POST">
                                <input type="hidden" name="groupVotes" value="<?php echo $groupData[$i]['votes'] ?>">
                                <input type="hidden" name="groupID" value="<?php echo $groupData[$i]['id'] ?>">
                                <?php
                                    if($_SESSION['userData']['status'] == 0){
                                ?>
                                <input type="submit" name="vote-btn" value="vote" id="vote-btn">
                                <?php
                                    }else{
                                        ?>
                                        <button disabled type="submit" name="vote-btn" value="vote" id="voted">Voted</button>
                                <?php
                                    }
                                ?>
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
    </div>
</body>

</html>