<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Network | Home</title>
</head>
<body>
    <h2>Currently Available Students</h2>
    <p> {{ $greeting }} </p>
    <ul>
        <li><a href="/students/{{ $students[0]['rollno'] }}"> {{ $students[0]['name'] }} </a></li>
        <li><a href="/students/{{ $students[1]['rollno'] }}"> {{ $students[1]['name'] }} </a></li>
        <li><a href="/students/{{ $students[2]['rollno'] }}"> {{ $students[2]['name'] }} </a></li>
    </ul>
</body>
</html>