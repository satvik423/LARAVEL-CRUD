<x-layout>
@if (session('success'))
    <div id="flash-message" class="p-1 text-center border-collapse rounded bg-green-100 text-green-500 font-bold" role="alert">
        {{ session('success') }}
    </div>
@endif
<h2>Currently Available Students</h2> 

<ul>
    @foreach ($students as $student)
                <li>
                   <x-card href="{{ route('students.show', $student->id) }}" :highlight-red='$student["mark"] < 40' :highlight-blue='$student["mark"] >= 40 && $student["mark"] < 60' :highlight-green='$student["mark"] >= 60 && $student["mark"] < 80' :highlight-gold='$student["mark"] >= 80'>
                        <h3>{{ $student->name }}</h3>
                   </x-card>
                </li>
    @endforeach
</ul>

{{ $students->links() }}
</x-layout>