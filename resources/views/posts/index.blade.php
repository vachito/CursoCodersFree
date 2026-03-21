<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VachoCode</title>
</head>

<body>
    <h1>Aqui se mostrará el listado de posts</h1>

    @if (true)
        <p>Este mensaje se muestra si el valor de la condicional es verdadero</p>
    @else
        <p>Este mensaje se muestra si el valor de la condicional es false</p>
    @endif

    @unless (false)
        <p>Solo se muestra si la directiva unless recibe un valor falso</p>
    @endunless

    @isset($msg)
        <p>La variable msg esta compartida para todas las vistas</p>
    @else
        <p>La variable no existe o no tiene un valor asignado</p>
    @endisset

    @empty($valor_null)
        <p>La variable no existe o no tiene un valor asignado</p>
    @endempty
</body>

</html>
