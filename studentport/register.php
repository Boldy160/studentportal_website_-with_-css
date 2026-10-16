<?php

require_once "config/database.php";

$message = "";
$message_type = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = trim($_POST["full_name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";

    // Check required fields
    if ($full_name === "" || $email === "" || $password === "" || $confirm_password === "") {

        $message = "Please fill in all fields.";
        $message_type = "error";

    // Check email format
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Please enter a valid email address.";
        $message_type = "error";

    // Check password length
    } elseif (strlen($password) < 6) {

        $message = "Password must be at least 6 characters.";
        $message_type = "error";

    // Check password confirmation
    } elseif ($password !== $confirm_password) {

        $message = "Passwords do not match.";
        $message_type = "error";

    } else {

        // Check if email already exists
        $checkStmt = $pdo->prepare(
            "SELECT id FROM students WHERE email = ?"
        );

        $checkStmt->execute([$email]);

        if ($checkStmt->fetch()) {

            $message = "A student with this email already exists.";
            $message_type = "error";

        } else {

            // Hash password
            $hashed_password = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            // Insert student
            $stmt = $pdo->prepare("
                INSERT INTO students
                (full_name, email, password)
                VALUES (?, ?, ?)
            ");

            $stmt->execute([
                $full_name,
                $email,
                $hashed_password
            ]);

            $message = "Registration successful! You can now login.";
            $message_type = "success";

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

    <title>Student Registration</title>

    <link rel="stylesheet"
          href="assets/style.css">

</head>

<body>

<div class="container">

    <h1>Student Registration</h1>

    <?php if ($message !== ""): ?>

        <p class="<?php echo $message_type; ?>">
            <?php echo htmlspecialchars($message); ?>
        </p>

    <?php endif; ?>

    <form method="POST">

        <input
            type="text"
            name="full_name"
            placeholder="Full Name"
            required
        >

        <br><br>

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

        <input
            type="password"
            name="confirm_password"
            placeholder="Confirm Password"
            required
        >

        <br><br>

        <button type="submit">
            Register
        </button>

    </form>

    <br>

    <a href="login.php">
        Already have an account? Login
    </a>

</div>

</body>

</html>
