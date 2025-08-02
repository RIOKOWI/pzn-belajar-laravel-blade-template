<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IF STATE</title>
</head>
<body>
    <p>
        @if (count($hobbies) == 1) 
            i have hobby !
         @elseif (count($hobbies) > 1) 
            i have multiple hobbies !
         @else 
            i have no hobbies
        @endif
    </p>
</body>
</html>