<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">


    <title>Registration - Online Voting System</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">Online Voting System- Registration</div>

        <div class="form">
            <div class="input-data">
                <form action="../api/register.php" method="post">
                    <input type="text" name="name" placeholder="Enter Your Name"><br><br>
                    <input type="number" name="mobile" placeholder="Enter Mobile Number"><br><br>
                    <input type="password" name="password" placeholder="Choose a Password"><br><br>
                    <input type="password" name="cpassword" placeholder="Confirm Password"><br><br>
                    <input type="text" name="address" placeholder="Enter Your Address"><br><br>
                    <select name="role">
                        <option value="1">Select Role</option>
                        <option value="2">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>
                        <button id="reg-btn" type="submit">Sign Up</button><br><br>
                    <div class="existing-user">
                        <p>Already Registered? <a href="../index.php">Log in</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>