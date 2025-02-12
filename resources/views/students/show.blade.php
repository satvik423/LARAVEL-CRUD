<x-layout>
    <h2> {{ $student->name }} </h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Class: </strong> {{ $student->class }} </p>
        <p><strong>Mark: </strong> {{ $student->mark }} </p>
        <p><strong>About me: </strong> {{ $student->bio }} </p>
    </div>

    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        
        <button class="btn my-4"> Delete Student </button>
    </form>
</x-layout>