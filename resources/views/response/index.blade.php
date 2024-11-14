<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/response.js','resources/css/app.css'])
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div id="output" style="white-space: pre-wrap;" class="flex"></div>
    <div class="pagination">
        <button class="prev">-1</button>
        <button class="next">+1</button>
    </div>
</body>
</html>
