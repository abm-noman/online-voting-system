<?php
session_start();
include("connect.php");

$mobile = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];

$check = mysqli_query($connect, "SELECT * FROM user WHERE mobile = '$mobile' AND password = '$password' AND role='$role'");
if (mysqli_num_rows($check) > 0) {
    $userData = mysqli_fetch_array($check);
    $group = mysqli_query($connect, "SELECT * FROM user WHERE role = 2");
    $groupData = mysqli_fetch_all($group, MYSQLI_ASSOC);

    $_SESSION['userData'] = $userData;
    $_SESSION['groupData'] = $groupData;

    echo "
    <script>
        window.location = '../routes/dashboard.php';
    </script> ";
} else {
    echo "
            <script>
                alert('Invalid Mobile Number or Password');
                window.location = '../';
            </script> ";
}
