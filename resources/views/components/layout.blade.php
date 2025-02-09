<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Network</title>
</head>
<body>
    <header>
        <nav>
            <h1>Student Network</h1>
            <a href="/students"> All students </a>
            <a href="/students/create"> Add New Students </a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>