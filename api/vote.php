<?php
    session_start();
    include('connect.php');

    $votes = $_POST['groupVotes'];
    $totalVotes = $votes+1;

    $groupID = $_POST['groupID'];
    $userID = $_SESSION['userData']['id'];

    $updateVotes = mysqli_query($connect, "UPDATE user SET votes='$totalVotes' WHERE id='$groupID'");
    $updateUserStatus = mysqli_query($connect, "UPDATE user SET status=1 WHERE id='$userID'");

    if($updateVotes and $updateUserStatus){
        $group = mysqli_query($connect, "SELECT id, name, votes FROM user WHERE role=2");
        $groupData = mysqli_fetch_all($group, MYSQLI_ASSOC);
        
        $_SESSION['userData']['status'] = 1;
        $_SESSION['groupData'] = $groupData;

        echo "
            <script>
                alert('Voting Successful');
                window.location = '../routes/dashboard.php';
            </script> ";
    }else{
        echo "
            <script>
                alert('Some Error occured');
                window.location = '../routes/dashboard.php';
            </script> ";
    }
?>