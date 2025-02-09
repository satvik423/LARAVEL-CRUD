<x-layout>
<h2>Currently Available Students</h2>

@if($greeting == "Hello") 
    <p>There are no students available</p>
@endif    

<ul>
    @foreach ($students as $student)
                <li>
                   <x-card href="/students/{{ $student['rollno'] }}" :highlight='$student["age"] > 22'>
                        <h3>{{ $student['name'] }}</h3>
                   </x-card>
                </li>
    @endforeach
</ul>
</x-layout>