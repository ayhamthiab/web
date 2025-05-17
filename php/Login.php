<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "projectweb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['isLoggedIn'] = 1;
            header("Location: ../php/homepage.php");
            exit();
        } else {
            $message = "Incorrect password ❗";
        }
    } else {
        $message = "No user found with this email. ❗";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Login_style.css">
    <link rel="stylesheet" href="../css/unifid.css">
    <script>
        function showFormd(id) {
            const loginBox = document.querySelector('.login');
            const signupBox = document.querySelector('.Signup');


            loginBox.classList.remove('fade-in', 'fade-out');
            signupBox.classList.remove('fade-in', 'fade-out');


            if (id === 'Login-id') {
                signupBox.classList.add('fade-out');
                setTimeout(() => {
                    signupBox.style.display = 'none';
                    loginBox.style.display = 'flex';
                    loginBox.classList.add('fade-in');
                }, 300);
            } else {
                loginBox.classList.add('fade-out');
                setTimeout(() => {
                    loginBox.style.display = 'none';
                    signupBox.style.display = 'flex';
                    signupBox.classList.add('fade-in');
                }, 300);
            }
        }

        window.onload = function () {
            showFormd('Login-id');
        }
    </script>


</head>



<body>

<header class="header">
    <span style="font-size: 44px" class="project-name">PixelSyntax</span>
    <span class="left-slider">
        <a href="#" class="sidebar-btn">Home</a>
        <a href="#" class="sidebar-btn">Buttons</a>
        <a href="#" class="sidebar-btn">Checkboxes</a>
        <a href="#" class="sidebar-btn">Toggle switches</a>
        <a href="#" class="sidebar-btn">Cards</a>
        <a href="#" class="sidebar-btn">Loaders</a>
        <a href="#" class="sidebar-btn">Inputs</a>
        <a href="#" class="sidebar-btn">Radio buttons</a>
        <a href="#" class="sidebar-btn">Forms</a>
    </span>
</header>

<div class="inside_5">
    <div class="A">
        <section class="site-description">
            <h2>Welcome to PixelSyntax</h2>
            <div class="site-description-text">
                PixelSyntax<br>
                PixelSyntax is a community platform where developers and designers share free, customizable UI components built with HTML and CSS.<br>
                It offers a wide variety of elements like buttons, loaders, forms, and toggles, making it easy to enhance your web projects with stylish, ready-to-use designs.
            </div>
        </section>
    </div>
</div>

<div class="blured"></div>

<div class="login">



    <form action="../php/Login.php" method="post" id="Login-id">
        <span style="font-size: 50px;font-weight: bold ; padding: 10px">Login</span>

        <?php if (!empty($message)) : ?>
            <div style="color: red; font-weight: bold; margin: 0px 0;">
                <?= $message ?>
            </div>
        <?php endif; ?>


        <div class="row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button class="submit" type="submit">Log In</button>

        <br>
        <span style="font-size: 20px ; font-weight: bold">Don't have an account?</span>
        <a style="text-decoration: none; color: #ffb31a; font-size: 28px; font-weight: bold" onclick="showFormd('Signup-id')" href="javascript:void(0)">Sign up</a>
    </form>
</div>

<div class="Signup">
    <form action="../php/Signup.php" method="post" id="Signup-id">

        <span style="font-size: 50px;font-weight: bold ; padding: 10px">Sign up</span>




        <div class="row">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="row">
            <label for="email2">Email</label>
            <input type="email" id="email2" name="email2" required>
        </div>
        <div class="row">
            <label for="password2">Password</label>
            <input type="password" id="password2" name="password2" required>
        </div>

        <button class="submit" type="submit">Create Account</button>

        <br>
        <span style="font-size: 20px ; font-weight: bold">Already have an account?</span>
        <a style="text-decoration: none; color: #ffb31a; font-size: 28px; font-weight: bold" onclick="showFormd('Login-id')" href="javascript:void(0)">Log in</a>
    </form>
</div>

</body>
</html>
