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


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_id'])  && isset($_POST['target_table'])) {
    $id = $_POST['item_id'];
    $table = $_POST['target_table'];
    $stmt = $conn->prepare("SELECT HTML, CSS FROM $table WHERE id = ?");
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
        <div class="editor-wrapper">
            <div class="editor-box">
                <div class="editor-title">HTML</div>
                <div class="monaco-container-wrapper">
                    <button class="copy-btn" data-editor="htmlEditor">Copy</button>
                    <div class="monaco-container">
                        <div id="htmlEditor" class="editor"></div>
                    </div>
                </div>
            </div>

            <div class="editor-box">
                <div class="editor-title">CSS</div>
                <div class="monaco-container-wrapper">
                    <button class="copy-btn" data-editor="cssEditor">Copy</button>
                    <div class="monaco-container">
                        <div id="cssEditor" class="editor"></div>
                    </div>
                </div>
            </div>
    </div>




</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.34.1/min/vs/loader.min.js"></script>
<script>
    require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.34.1/min/vs' }});
    require(["vs/editor/editor.main"], function () {
        monaco.editor.create(document.getElementById("htmlEditor"), {
            value: `<?php echo $html_code; ?>`,
            language: "html",
            theme: "vs-dark",
            fontSize: 14,
            readOnly: true,
            minimap: { enabled: false }
        });

        monaco.editor.create(document.getElementById("cssEditor"), {
            value: `<?php echo htmlspecialchars($css_code); ?>`,
            language: "css",
            theme: "vs-dark",
            fontSize: 14,
            readOnly: true,
            minimap: { enabled: false }
        });
    });
</script>
    <script>
        let htmlEditorInstance, cssEditorInstance;

        require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.34.1/min/vs' }});
        require(["vs/editor/editor.main"], function () {
            htmlEditorInstance = monaco.editor.create(document.getElementById("htmlEditor"), {
                value: `<?php echo $html_code; ?>`,
                language: "html",
                theme: "vs-dark",
                fontSize: 14,
                readOnly: true,
                minimap: { enabled: false }
            });

            cssEditorInstance = monaco.editor.create(document.getElementById("cssEditor"), {
                value: `<?php echo htmlspecialchars($css_code); ?>`,
                language: "css",
                theme: "vs-dark",
                fontSize: 14,
                readOnly: true,
                minimap: { enabled: false }
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".copy-btn").forEach(btn => {
                btn.addEventListener("click", () => {
                    const editorId = btn.getAttribute("data-editor");
                    let textToCopy = "";

                    if (editorId === "htmlEditor" && htmlEditorInstance) {
                        textToCopy = htmlEditorInstance.getValue();
                    } else if (editorId === "cssEditor" && cssEditorInstance) {
                        textToCopy = cssEditorInstance.getValue();
                    }

                    navigator.clipboard.writeText(textToCopy).then(() => {
                        btn.textContent = "Copied!";
                        setTimeout(() => btn.textContent = "Copy", 1500);
                    });
                });
            });
        });
    </script>