<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>API Key Required - Text to Image Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; padding: 20px; }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h1 { color: #d9534f; }
        p { line-height: 1.6; }
        code { background: #eee; padding: 3px 5px; border-radius: 4px; }
        .url-box {
            background: #f9f9f9;
            padding: 10px;
            border-left: 5px solid #007bff;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>🚫 API Key Missing or Invalid</h1>
    <p>This website requires a valid API key to generate images.</p>

    <h3>🛠 How to Fix:</h3>
    <ol>
        <li>Get a key from the API provider:</li>
        <div class="url-box">
        Step 1-  
            <a href="https://rapidapi.com/devify/api/text-to-image-generator-api-ai-image" target="_blank" style="display: inline-block; background-color: #007bff; color: #fff; padding: 12px 20px; border-radius: 5px; text-decoration: none; font-weight: bold;">
               Get API
            </a>
        </div>
        <div class="url-box">
        Step 2- Copy your api
            <a href="https://prnt.sc/-rFZH5THqeHS" target="_blank" style="display: inline-block; background-color: #007bff; color: #fff; padding: 12px 20px; border-radius: 5px; text-decoration: none; font-weight: bold;">
                Update
            </a>
        </div>
        <br>
        <li>Open the file: <code>includes/config.php</code></li><br>
        <li>Replace the line:
            <pre><code>$rapidapi_key = "024f60baaamshca377f";</code></pre>
            with your actual API key:
            <pre><code>$rapidapi_key = "YOUR_API_KEY_HERE";</code></pre>
        </li><br>
        <li>Save the file and try again.</li>
    </ol>

    <p>Once your key is updated, you can return to the <a href="index.php">homepage</a> to generate images.</p>
</div>
</body>
</html>
