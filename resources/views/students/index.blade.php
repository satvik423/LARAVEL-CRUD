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

    @if($greeting == "Hello") 
        <p>There are no students available</p>
    @endif    

    <ul>
        @foreach ($students as $student)
                    <li>
                        <p> {{ $student['name'] }} </p>
                        <a href="/students/{{ $student['rollno'] }}"> View Details </a>
                    </li>
        @endforeach
    </ul>
</body>
</html>