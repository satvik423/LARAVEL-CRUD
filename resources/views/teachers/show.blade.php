<x-layout>
    <h2>{{ $teacher->name }}</h2>
    
    <div class="show">
        <p><strong>Subject:</strong> {{ $teacher->subject }}</p>
        <p><strong>Branch:</strong> {{ $teacher->branch->name }}</p>
        <p><strong>Bio:</strong> {{ $teacher->bio }}</p>
    </div>

    <h3>Students in {{ $teacher->branch->name }}</h3>
    @if ($students->isEmpty())
        <p>No students found in this branch.</p>
    @else
        <ul>
            @foreach ($students as $student)
                   <x-card href="{{ route('students.show', $student->id) }}" :is-inactive="$student->status === 'inactive'" :highlight-red='$student["mark"] < 40' :highlight-blue='$student["mark"] >= 40 && $student["mark"] < 60' :highlight-green='$student["mark"] >= 60 && $student["mark"] < 80' :highlight-gold='$student["mark"] >= 80'>
                    <div>
                        <p><strong>Name:</strong> {{ $student->name }}</p>
                        <p><strong>Class:</strong> {{ $student->class }}</p>
                        <p><strong>Mark:</strong> {{ $student->mark }}</p>
                    </div>
                </x-card>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn my-4">Delete Teacher</button>
    </form>
</x-layout>
