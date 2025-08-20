<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(47, 126, 169);
            font-family: sans-serif;
            padding: 40px 0;
        }
    </style>
</head>
<body>
    <div>
        <h2>grazie per averci contattato</h2>
        <p>recap: </p>
        <p>
            <ul>
                <li>nome: {{$content["username"]}}</li>
                <li>Email: {{$content["email"]}} </li>
                <li>Messaggio: {{$content["body"]}}</li>
            </ul>
        </p>
    </div>
</body>
</html>