<!DOCTYPE html>
<html>
<head>
    <title>Message</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .content { text-align: center; }
        .title { font-size: 84px; }
    </style>
</head>
<body>
<br />
<div class="container box" style="width: 970px;">
    <h2> Correo enviado de la sección de contacto</h2>
    <h3 style="">Nombre: {{ $data['name'] }} </h3>
    <h3 align="">Email: {{ $data['mail'] }}</h3>
    <h3 align="">Mensaje: {{ $data['message'] }}</h3>

</div>
</body>
</html>



