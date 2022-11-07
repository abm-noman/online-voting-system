<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <title>Online Voting System</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">Online Voting System</div>

        <div class="form">
            <div class="input-data">
                <form action="api/login.php" method="post">
                    <input type="number" name="mobile" placeholder="Enter Mobile Number"><br><br>
                    <input type="password" name="password" placeholder="Enter Your Password"><br><br>
                    <select name="role">
                        <option value="1">Select Role</option>
                        <option value="2">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>
                        <button id="send-btn" type="submit">Log in</button><br><br>
                    <div class="new-user">
                        <p>New User? <a href="routes/registration.php">Register Now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>