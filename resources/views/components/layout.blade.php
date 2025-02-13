<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Network</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Pangolin&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <header class="sticky top-0 h-fit">
        <nav>
            <h1><a href="/">Student Network</a></h1>
            <a href="{{ route('students.index') }}"> All students </a>
            <a href="{{ route('students.create') }}"> Add New Students </a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>