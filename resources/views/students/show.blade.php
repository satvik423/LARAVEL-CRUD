<x-layout>
    <h2> {{ $student->name }} </h2>
    <div class="show">
        <p><strong>Class: </strong> {{ $student->class }} </p>
        <p><strong>Branch: </strong> {{ $student->branch->name }} </p>
        <p><strong>Mark: </strong> {{ $student->mark }} </p>
        <p><strong>About me: </strong> {{ $student->bio }} </p>
    </div>

    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        
        <button class="btn my-4"> Delete Student </button>
        
        <a class="btn" href="{{ route('students.edit', $student->id) }}"> Edit Student </a>
    </form>
</x-layout>