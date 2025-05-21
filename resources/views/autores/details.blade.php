<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalles de autor con codigo {{$autor->codigo_autor}}</h1>
    <table>
        <tr>
            <td>Nombre:</td>
            <td>{{$autor->nombre_autor}}</td>
        </tr>
        <tr>
            <td>Nacionalidad</td>
            <td>{{$autor->nacionalidad}}</td>
        </tr>
        
    </table>
</body>
</html>