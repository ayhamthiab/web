<?php
session_start();

if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != 1) {
    header("Location: ../php/Login.php");
    exit;
}

// إذا في طلب POST، معناها جاي من الجافاسكربت
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['html'], $_POST['css'], $_POST['type'])) {
    $html = $_POST['html'];
    $css = $_POST['css'];
    $type = $_POST['type'];

    // الاتصال بقاعدة البيانات
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "projectweb";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

        $stmt = $conn->prepare("INSERT INTO user_input (HTML, CSS, TYPE) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $html, $css, $type);

        if ($stmt->execute()) {
            echo "Saved successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
        exit; // مهم جداً نوقف الصفحة إذا كنا بس بنرد على POST

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Code Syntax Checker with Monaco</title>
    <link rel="stylesheet" href="../css/creat.css" />


    <style>


        iframe {   width: 70%; height: 300px;  display: block; margin: 10px auto;
        }
    </style>
</head>
<header class="header">
    <span style="font-size: 42px" class="project-name">PixelSyntax</span>
    <span class="left-slider">
                <a href="homepage.php" class="sidebar-btn" >Home</a>
                <a href="buttons.php" class="sidebar-btn" >Buttons</a>
                <a href="checkboxes.php" class="sidebar-btn">Checkboxes</a>
                <a href="togleswitches.php" class="sidebar-btn">Toggle switches</a>
                <a href="cards.php" class="sidebar-btn">Cards</a>
                <a href="Loaders.php" class="sidebar-btn">Loaders</a>
                <a href="inputs.php" class="sidebar-btn">Inputs</a>
                <a href="radio.php" class="sidebar-btn">Radio buttons</a>
                <a href="creat.php" class="sidebar-btn" style="padding-top: 25px;padding-bottom: 25px;border-radius: 50px;transform: scale(1.1);box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);">Creat </a>



            </span>
</header>
<body>

<h1>Code Syntax Checker</h1>

<div id="editors">
    <label>HTML Code :</label>
    <div id="htmlEditor" class="editor-container"></div>
    <div class="error" id="htmlError"></div>

    <label>CSS Code :</label>
    <div id="cssEditor" class="editor-container"></div>
    <div class="error" id="cssError"></div>


</div>
<div class="btn_cont">
<button class="preview_btn">
    <span>Preview</span>
    <svg width="15px" height="10px" viewBox="0 0 13 10">
        <path d="M1,5 L11,5"></path>
        <polyline points="8 1 12 5 8 9"></polyline>
    </svg>
</button>

</div>

<div class="radio-input">
    <label>
        <input type="radio" id="value-1" name="value-radio" value="value-1">
        <span>BUTTONS</span>
    </label>
    <label>
        <input type="radio" id="value-2" name="value-radio" value="value-2">
        <span>CHECKBOXES</span>
    </label>
    <label>
        <input type="radio" id="value-3" name="value-radio" value="value-3">
        <span>TOGGLE SWITCHES</span>
    </label>
    <label>
        <input type="radio" id="value-4" name="value-radio" value="value-4">
        <span>CARDS</span>
    </label>
    <label>
        <input type="radio" id="value-5" name="value-radio" value="value-5">
        <span>LOADERS</span>
    </label>
    <label>
        <input type="radio" id="value-6" name="value-radio" value="value-6">
        <span>INPUTS</span>
    </label>
    <label>
        <input type="radio" id="value-7" name="value-radio" value="value-7">
        <span>RADIO BUTTONS</span>
    </label>
    <span class="selection"></span>
</div>

<iframe id="preview"></iframe>
<script src="https://cdn.jsdelivr.net/npm/monaco-editor@0.44.0/min/vs/loader.js"></script>
<script src="../js/creat.js"></script>
</body>
</html>
