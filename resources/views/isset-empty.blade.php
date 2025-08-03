<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        @isset($nama)
            halo nama saya {{ $nama }}
        @endisset
    </p>
    <p>
        @empty($hobbies)
            i dont have any hobbies
        @endempty
    </p>
</body>
</html>