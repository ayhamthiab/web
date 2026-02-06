document.addEventListener("DOMContentLoaded", function () {
    const previewButton = document.querySelector(".preview_btn");
    if (previewButton) {
        previewButton.addEventListener("click", checkAll);
    }

    require.config({ paths: { 'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor@0.44.0/min/vs' } });
    require(['vs/editor/editor.main'], function () {
        const htmlEditorContainer = document.getElementById('htmlEditor');
        const cssEditorContainer = document.getElementById('cssEditor');

        if (!htmlEditorContainer || !cssEditorContainer) {
            console.error("عنصر المحرر غير موجود في الصفحة!");
            return;
        }

        const savedHTML = sessionStorage.getItem("savedHTML") || "<h1>Hello, world!</h1>";
        const savedCSS = sessionStorage.getItem("savedCSS") || "body { background-color: #f0f0f0; }";

        window.htmlEditor = monaco.editor.create(htmlEditorContainer, {
            value: savedHTML,
            language: "html",
            theme: "vs-dark",
            automaticLayout: true
        });

        window.cssEditor = monaco.editor.create(cssEditorContainer, {
            value: savedCSS,
            language: "css",
            theme: "vs-dark",
            automaticLayout: true
        });

        htmlEditor.onDidChangeModelContent(() => {
            sessionStorage.setItem("savedHTML", htmlEditor.getValue());
        });

        cssEditor.onDidChangeModelContent(() => {
            sessionStorage.setItem("savedCSS", cssEditor.getValue());
        });
    });
});
let hasRun = false;
function checkAll() {
    if (hasRun) return;
    hasRun = true;

    const html = htmlEditor.getValue();
    const css = cssEditor.getValue();

    const htmlError = document.getElementById("htmlError");
    const cssError = document.getElementById("cssError");
    const preview = document.getElementById("preview");

    htmlError.textContent = "";
    cssError.textContent = "";

    let hasError = false;

    if (!html.trim()) {
        htmlError.textContent = "HTML Error: HTML code is required.";
        hasError = true;
    }

    try {
        const style = document.createElement("style");
        style.innerHTML = css;
    } catch (e) {
        cssError.textContent = "CSS Error: " + e.message;
        hasError = true;
    }

    if (hasError) {
        preview.srcdoc = "";
        hasRun = false;
        return;
    }

    const combined = `
    <!DOCTYPE html>
    <html>
    <head>
      <style>
        body {
          margin: 0;
          height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        ${css}
      </style>
    </head>
    <body>
      ${html}
    </body>
    </html>
    `;

    preview.srcdoc = combined;

    // إرسال البيانات للـ PHP
    const typeRadio = document.querySelector("input[name='value-radio']:checked");
    const type = typeRadio ? typeRadio.nextElementSibling.textContent.trim() : "";

    fetch("creat.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `html=${encodeURIComponent(html)}&css=${encodeURIComponent(css)}&type=${encodeURIComponent(type)}`
    })
        .then(response => response.text())
        .then(data => {
            // alert("Saved to database successfully!");
            hasRun = false;
        })
    );
}
