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

    
        @for ($i = 1; $i <= $cant ; $i++)
            <p>
                @for ($j = 1 ; $j<$i ; $j++)    
                    *
                @endfor
            </p>
        @endfor
    
</body>

</html>
