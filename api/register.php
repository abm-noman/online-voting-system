<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    if($password == $cpassword){
        $insert = mysqli_query($connect, "INSERT into user(name, mobile, password, address, role, status, votes) VALUES ('$name', '$mobile', '$password', '$address', '$role', 0, 0)");
        if($insert){
            echo "<script>
                alert('Registration Successful');
                window.location = '../';
            </script>";
        }
        else{
            echo "
            <script>
                alert('Some Error Occured');
                window.location = '../routes/registration.html';
            </script> ";
            }
    
    }
    else{
        echo "
            <script>
                alert('Use Same Password');
                window.location = '../routes/registration.html';
            </script> ";
    }
