<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>bdcompiler</title>
<!-- Add a description for search engines and social media -->
<meta name="description" content="bdcompiler - A compiler for multiple programming languages.">
<!-- Set the apple-touch-icon for iOS devices -->
<link rel="apple-touch-icon" href="https://malisipi.github.io/ubuntu-tour/icons/unsplash/Tjbk79TARiE.jpg">
<style>
body {
    background-image: url('https://malisipi.github.io/ubuntu-tour/icons/unsplash/Tjbk79TARiE.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

select, button {
    margin-top: 10px;
    padding: 10px;
    font-size: 16px;
}

pre {
    white-space: pre-wrap;
}

</style>
</head>
<body>

<div class="container">
    <h1>bdcompiler</h1>
    <p>Select a programming language:</p>
    <select id="language">
        <option value="python">Python</option>
        <option value="javascript">JavaScript</option>
        <option value="java">Java</option>
        <option value="c">C</option>
        <!-- Add more options as needed -->
    </select>
    <button onclick="compile()">Compile</button>
    <h2>Output:</h2>
    <pre id="output"></pre>
</div>

<script>
function compile() {
    var language = document.getElementById("language").value;
    var outputElement = document.getElementById("output");
    var output = "";

    switch(language) {
        case "python":
            output = "Python code compilation result";
            break;
        case "javascript":
            output = "JavaScript code compilation result";
            break;
        case "java":
            output = "Java code compilation result";
            break;
        case "c":
            output = "C code compilation result";
            break;
        // Add more cases for other languages
        default:
            output = "Unsupported language";
    }

    outputElement.textContent = output;
}
</script>

</body>
</html>
