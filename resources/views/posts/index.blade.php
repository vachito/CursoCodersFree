<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VachoCode</title>
</head>
<body>
    <h1>Aca se mostrara el listado de posts</h1>
    
    <script>
            //convertir un array a formato json
            let posts = {!! json_encode($posts)!!}
            //segunda forma de convertir a json usando sintaxis de blade
            let posts2 = @json($posts)

            console.log(posts);
            console.log(posts2);
    </script>
    
</body>
</html>