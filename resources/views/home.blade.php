<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL-PRIMI-PASSI</title>
    <style>
    body {margin: 0; padding: 0; box-sizing: border-box;}
    .container {width: 950px; margin: auto; text-align: center;}
    a {text-decoration: none; margin-right: 10px; text-transform: uppercase;}
    a:hover {color: red;}
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello World!!!</h1>

        <h2>Benvenuto {{ $name }}</h2>

        <a href="/contatti">contatti</a>
        <a href="/progetti">progetti</a>
        <a href="/descrizione">descrizione</a>
    </div>
</body>
</html>