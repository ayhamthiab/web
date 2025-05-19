function checkAll() {
    const html = document.getElementById("htmlCode").value;
    const css = document.getElementById("cssCode").value;
    const js = document.getElementById("jsCode").value;

    const htmlErrorBox = document.getElementById("htmlError");
    const cssErrorBox = document.getElementById("cssError");
    const jsErrorBox = document.getElementById("jsError");
    const iframe = document.getElementById("preview");

    // Clear previous errors
    htmlErrorBox.textContent = "";
    cssErrorBox.textContent = "";
    jsErrorBox.textContent = "";

    let hasError = false;

    try {
        new Function(js);
    } catch (e) {
        jsErrorBox.textContent = "JavaScript Error: " + e.message;
        hasError = true;
    }

    try {
        const testStyle = document.createElement("style");
        testStyle.innerHTML = css;
    } catch (e) {
        cssErrorBox.textContent = "CSS Error: " + e.message;
        hasError = true;
    }

    if (!html.trim()) {
        htmlErrorBox.textContent = "HTML Error: HTML code is empty or invalid.";
        hasError = true;
    }

    if (hasError) {
        iframe.srcdoc = "";
        return;
    }

    const combined = `
    <!DOCTYPE html>
    <html>
    <head>
      <style>
        body {
          margin: 0;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
        }
        ${css}
      </style>
    </head>
    <body>
      ${html}
      <script>
        try {
          ${js}
        } catch (err) {
          document.body.innerHTML += '<p style="color:red;">Runtime JS Error: ' + err.message + '</p>';
        }
      <\/script>
    </body>
    </html>
  `;

    iframe.srcdoc = combined;
}
