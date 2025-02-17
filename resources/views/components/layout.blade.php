<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>College Network</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Pangolin&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <header class="sticky top-0 h-fit">
        <nav>
            <h1><a href="/">College Network</a></h1>
            <div class="hover-btn relative">
                View All
                <div class="dropdown absolute hidden shadow-md">
                    <a href="{{ route('students.index') }}" class="btn">Student</a>
                    <a href="{{ route('teachers.index') }}" class="btn">Teacher</a>
                </div>
            </div>
            
            <!-- Add New Students Dropdown -->
            <div class="hover-btn relative">
                Add New
                <div class="dropdown absolute hidden shadow-md">
                    <a href="{{ route('students.create') }}" class="btn">Student</a>
                    <a href="{{ route('teachers.create') }}" class="btn">Teacher</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>