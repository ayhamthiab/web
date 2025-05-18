<?php
session_start();

$html_code = "";
$css_code = "";
if (isset($_SESSION['isLoggedIn'])  && $_SESSION['isLoggedIn']==1){

}
else{
    header("location:../php/Login.php");
    exit;

}

$host = "localhost";
$user = "root";
$pass = "";
$db = "projectweb";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_id'])) {
    $id = $_POST['item_id'];

    $stmt = $conn->prepare("SELECT HTML, CSS FROM buttons WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($html_code, $css_code);
    $stmt->fetch();
    $stmt->close();
}

$conn->close();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/script.js"></script>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="../css/unifid.css">
</head>
<body>

<header class="header">

    <span style="font-size: 44px" class="project-name">PixelSyntax</span>

    <span class="left-slider">
                <a href="homepage.php" class="sidebar-btn">Home</a>
                <a href="buttons.php" class="sidebar-btn">Buttons</a>
                <a href="checkboxes.php" class="sidebar-btn">Checkboxes</a>
                <a href="togleswitches.php" class="sidebar-btn">Toggle switches</a>
                <a href="cards.php" class="sidebar-btn">Cards</a>
                <a href="Loaders.php" class="sidebar-btn">Loaders</a>
                <a href="inputs.php" class="sidebar-btn">Inputs</a>
                <a href="radio.php" class="sidebar-btn">Radio buttons</a>


            </span>
</header>

<div class="bodyCode">
    <br>
<h1 class="codes">Code's</h1>


    <div class="code_textarea">
        <table>
            <tr>
                <td>
                    <h1 style="color: #ffffff ; text-align: center">HTML</h1>
                    <textarea class="html_code" name="html_code" id="html_code" cols="500" readonly><?php echo htmlspecialchars($html_code); ?></textarea>
                </td>
                <td>
                    <h1 style="color: #ffffff ; text-align: center">CSS</h1>
                    <textarea class="css_code" name="css_code" id="css_code" cols="500" readonly><?php echo htmlspecialchars($css_code); ?></textarea>
                </td>
            </tr>
        </table>
    </div>




</div>