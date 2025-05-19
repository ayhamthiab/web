<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/input.js"></script>
    <link rel="stylesheet" href="../css/input.css">
    <meta charset="UTF-8">
    <title>HTML/CSS/JS Combined Checker</title>

</head>
<body>

<h2>HTML</h2>
<textarea id="htmlCode" placeholder="Enter HTML code..."></textarea>
<div id="htmlError" class="error"></div>

<h2>CSS</h2>
<textarea id="cssCode" placeholder="Enter CSS code..."></textarea>
<div id="cssError" class="error"></div>

<h2>JavaScript</h2>
<textarea id="jsCode" placeholder="Enter JavaScript code..."></textarea>
<div id="jsError" class="error"></div>

<button onclick="checkAll()">Run & Check All</button>

<iframe id="preview"></iframe>