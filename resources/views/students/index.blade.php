<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <header>
        <a href="{{ route('home')}}">Torna Indietro</a>
    </header>
    
    <ul>
    @foreach ($students as $student)
        <li>{{$student}}</li>
    @endforeach
    </ul>
    
</body>
</html>