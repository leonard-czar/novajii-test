<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="text-center mt-5">
    <h4>Encrypted message: </h1>
        <p>{{$encrypted_msg}}</p>
        <h4>Decrypted message: </h1>
            <p>{{$decrypted_msg}}</p>

</body>

</html>