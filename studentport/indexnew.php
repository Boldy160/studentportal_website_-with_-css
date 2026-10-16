`
<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simple login for teaching
    if ($username == "boldman" && $password == "abcd") {

        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My School</title>

    <link rel="stylesheet" href="style.css">
</head>

<body class="login-page">

    <div class="login-box">

        <h1>MY SCHOOL</h1>
        <p>Admin Login</p>

        <?php if ($error != "") { ?>
            <div class="error">
                <?php echo $error; ?>
            </div>
        <?php } ?>

        <form method="POST">

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>

        </form>

        <p class="login-info">
            Username: boldman<br>
            Password: abcd
        </p>

    </div>

</body>
</html>

