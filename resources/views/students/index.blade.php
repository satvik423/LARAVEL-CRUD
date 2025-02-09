<x-layout>
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
</x-layout>