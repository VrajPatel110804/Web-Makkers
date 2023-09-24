<!DOCTYPE html>
<html lang="en">
    
<?php

$conn = mysqli_connect("localhost", "root", "");

if(isset($_POST['login_Btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $_POST['username'] == 'vraj';
    // $_POST['password'] == '1234';
    $sql = "SELECT * FROM websitelogin.logindetails WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) {
        $resultPassword = $row['password'];
        if($password == $resultPassword) {
            header('Location:index.html');
        } else {
            echo  "alert('Login unsuccessfull')"; 
            
        }
    }
}


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginPage.css">
</head>
<body>
    <form method="post" action="loginPage.php">
        <h1>Login</h1>
        <div class="textbox">
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="textbox">
            <input type="password" placeholder="Password" name="password">
        </div>
        <input type="submit" value="Login" class="loginbtn" name="login_Btn">
        <div class="signup">
            Don't have an account ?
            <br>
            <a href="signUp.html">Sign up</a>
        </div>
    </form>
</body>
</html>
