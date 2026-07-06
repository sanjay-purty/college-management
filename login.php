 <?php
session_start();

$error = "";

// Hardcoded credentials
$valid_username = "sanjay";
$valid_password = "1234";

if(isset($_POST['login'])){

    $username = $_POST['valid_username'];
    $password = $_POST['valid_password'];

    if($username == $valid_username && $password == $valid_password){

        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit();

    }
    else{
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body>


    <?php
    if($error != ""){
        echo "<p style='color:red;'>$error</p>";
    }
    ?> 

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>

            <form method="POST">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="valid_username" placeholder="Enter Username" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="valid_password" placeholder="Enter Password" required>
                </div>

                <button type="submit" name="login">Login</button>
            </form>

            <p class="register-text">
                Don't have an account?
                <a href="#">Register</a>
            </p>
        </div>
    </div>

</body>
</html>