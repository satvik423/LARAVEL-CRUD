<x-layout>
    <form action="{{ route('students.store')}}" method="POST" >
        @csrf

        <h2>This is Create page</h2>
        <label for="name">Student Name: </label>
        <input type="text" name="name" id="name" required>
        <label for="name">Student Class: </label>
        <select name="class" id="class">
            <option value="" disabled selected> Select a class</option>
            <option value="1">Class 1</option>
            <option value="2">Class 2</option>
            <option value="3">Class 3</option>
            <option value="4">Class 4</option>
            <option value="5">Class 5</option>
            <option value="6">Class 6</option>
            <option value="7">Class 7</option>
            <option value="8">Class 8</option>
            <option value="9">Class 9</option>
            <option value="10">Class 10</option>
        </select>
        <label for="name">Student Mark: </label>
        <input type="number" name="mark" id="mark" required>
        <label for="name">Student Bio: </label>
        <textarea rows="5" name="bio" id="bio" required></textarea>

        <button type="submit" class="btn mt-4"> Add Student</button>
    </form>
</x-layout>