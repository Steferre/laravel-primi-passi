<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTS</title>
    <style>
    body {margin: 0; padding: 0; box-sizing: border-box;}
    .container {width: 950px; margin: auto; text-align: center;}
    ul {list-style: none; padding-left: 0;}
    strong {color: lightseagreen;}       
    </style>
</head>
<body>
    <div class="container">
        <h1>CONTATTI</h1>

        <ul>
            <li>Numero Ufficio: <strong>{{ $numeroUfficio }}</strong></li>
            <li>Numero Cellulare: <strong>{{ $numeroCell }}</strong></li>    
        </ul>
    </div>

</body>
</html>