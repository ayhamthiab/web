<?php
session_start();

if (isset($_SESSION['isLoggedIn'])  && $_SESSION['isLoggedIn']==1){

}
else{
    header("location:../php/Login.php");
    exit;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creat</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/htmlmixed/htmlmixed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/css/css.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/lint/lint.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/lint/lint.min.css">

    <script src="https://cdn.jsdelivr.net/npm/htmlhint@0.11.0/dist/htmlhint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/csslint/1.0.5/csslint.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/lint/html-lint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/addon/lint/css-lint.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/javascript/javascript.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/htmlmixed/htmlmixed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/theme/dracula.min.css">




    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="stylesheet" href="../css/unifid.css">
    <link rel="stylesheet" href="../css/creat.css">
</head>

<body>

<header class="header">
    <span style="font-size: 38px" class="project-name">PixelSyntax</span>
    <span class="left-slider">
        <a href="homepage.php" class="sidebar-btn">Home</a>
        <a href="buttons.php" class="sidebar-btn">Buttons</a>
        <a href="checkboxes.php" class="sidebar-btn">Checkboxes</a>
        <a href="togleswitches.php" class="sidebar-btn">Toggle switches</a>
        <a href="cards.php" class="sidebar-btn">Cards</a>
        <a href="Loaders.php" class="sidebar-btn">Loaders</a>
        <a href="inputs.php" class="sidebar-btn">Inputs</a>
        <a href="radio.php" class="sidebar-btn">Radio buttons</a>
        <a href="creat.php" class="sidebar-btn" style="padding-top: 25px;padding-bottom: 25px;border-radius: 50px;transform: scale(1.1);box-shadow: 0 0 30px rgba(255, 255, 255, 0.9);">Creat</a>
    </span>

</header>

<main>
    <br><br>
    <div style="font-size: 50px; font-weight: bold; text-align: center ">
        <div>Create your own designs here.</div>
    </div>
    <br><br>
    <div class="editor-row">
        <div class="editor-column">
            <label style="text-align: center; font-size: 40px; font-weight: bold">HTML</label>
            <div><br></div>
            <textarea id="htmlEditor"><!-- Write your HTML here --></textarea>
        </div>
        <div class="editor-column">
            <label style="text-align: center; font-size: 40px; font-weight: bold">CSS</label>
            <div><br></div>
            <textarea id="cssEditor">/* Write your CSS here */</textarea>
        </div>
    </div>
    <br>
    <div class="buttons_container">
    <button onclick="runCode()"><a href="#previewFrame">Preview code</a></button>
    </div>
    <div class="previewFrame_container">
    <iframe id="previewFrame"></iframe>
    </div>
</main>

<script>


    window.onload = function () {
        const htmlEditor = CodeMirror.fromTextArea(document.getElementById("htmlEditor"), {
            mode: "htmlmixed",
            theme: "dracula",
            lineNumbers: true,
            gutters: ["CodeMirror-lint-markers"],
            lint: {
                getAnnotations: CodeMirror.lint.html,
                async: false
            }

        });

        const cssEditor = CodeMirror.fromTextArea(document.getElementById("cssEditor"), {
            mode: "css",
            theme: "dracula",
            lineNumbers: true,
            gutters: ["CodeMirror-lint-markers"],
            lint: {
                getAnnotations: CodeMirror.lint.css,
                async: false
            }
        });

        htmlEditor.setValue("<!DOCTYPE html>\n<html>\n<head>\n  <title>My Page</title>\n</head>\n<body>\n  <h1>Hello World</h1>\n</body>\n</html>");
        cssEditor.setValue("body {\n  background-color: #f0f0f0;\n  font-family: Arial, sans-serif;\n}");

        window.runCode = function () {
            const html = htmlEditor.getValue();
            const css = cssEditor.getValue();
            const code = `<style>${css}</style>${html}`;
            document.getElementById("previewFrame").srcdoc = code;
        };
    };



</script>

</body>
</html>
