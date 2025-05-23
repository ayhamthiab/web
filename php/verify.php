<?php
session_start();

if (!isset($_SESSION['pending_user'])) {
    header("Location: ../index.php");
    exit();
}

$pending = $_SESSION['pending_user'];
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_code = $_POST['code'];

    if ($entered_code === $pending['code']) {
        $conn = new mysqli("localhost", "root", "", "projectweb");
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $pending['name'], $pending['email'], $pending['password']);

        if ($stmt->execute()) {
            $message = "Account verified and created successfully. ✅ <a href='../index.php'>Login</a>";
            unset($_SESSION['pending_user']);
        } else {
            $message = "Error creating account. ❌";
        }
    } else {
        $message = "Incorrect verification code. ❌";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Account</title>
</head>
<body>
<h2>Email Verification</h2>
<p>We've sent a 6-digit code to your email. Enter it below:</p>

<?php if (!empty($message)) : ?>
    <p><strong><?= $message ?></strong></p>
<?php endif; ?>

<form method="post">
    <label for="code">Verification Code:</label>
    <input type="text" id="code" name="code" required>
    <button type="submit">Verify</button>
</form>
</body>
</html>
