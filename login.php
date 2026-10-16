<?php

session_start();

require_once "config/database.php";

$message = "";
$message_type = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    // Check required fields
    if ($email === "" || $password === "") {

        $message = "Please enter your email and password.";
        $message_type = "error";

    } else {

        // Find student by email
        $stmt = $pdo->prepare("
            SELECT id, full_name, email, password
            FROM students
            WHERE email = ?
            LIMIT 1
        ");

        $stmt->execute([$email]);

        $student = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($student && password_verify($password, $student["password"])) {

            // Create login session
            $_SESSION["student_id"] = $student["id"];
            $_SESSION["student_name"] = $student["full_name"];
            $_SESSION["student_email"] = $student["email"];

            // Redirect to dashboard
            header("Location: dashboard.php");
            exit;

        } else {

            $message = "Invalid email or password.";
            $message_type = "error";

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Student Login</title>

    <link rel="stylesheet"
          href="assets/style.css">

</head>

<body>

<div class="container">

    <h1>Student Login</h1>

    <?php if ($message !== ""): ?>

        <p class="<?php echo $message_type; ?>">
            <?php echo htmlspecialchars($message); ?>
        </p>

    <?php endif; ?>

    <form method="POST">

        <input
            type="email"
            name="email"
            placeholder="Email Address"
            required
        >

        <br><br>

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <br><br>

        <button type="submit">
            Login
        </button>

    </form>

    <br>

    <a href="register.php">
        Don't have an account? Register
    </a>

</div>

</body>

</html>
