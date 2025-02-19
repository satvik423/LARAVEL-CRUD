<x-layout>
    <h2>Edit Student</h2>

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}" required>

        <label for="class">Class:</label>
        <select name="class" id="class">
            <option value="" disabled selected> Select a class</option>
            <option value="1"  {{ $student->class == 1 ? 'selected' : '' }}>Class 1</option>
            <option value="2"  {{ $student->class == 2 ? 'selected' : '' }}>Class 2</option>
            <option value="3"  {{ $student->class == 3 ? 'selected' : '' }}>Class 3</option>
            <option value="4"  {{ $student->class == 4 ? 'selected' : '' }}>Class 4</option>
            <option value="5"  {{ $student->class == 5 ? 'selected' : '' }}>Class 5</option>
            <option value="6"  {{ $student->class == 6 ? 'selected' : '' }}>Class 6</option>
            <option value="7"  {{ $student->class == 7 ? 'selected' : '' }}>Class 7</option>
            <option value="8"  {{ $student->class == 8 ? 'selected' : '' }}>Class 8</option>
            <option value="9"  {{ $student->class == 9 ? 'selected' : '' }}>Class 9</option>
            <option value="10" {{ $student->class == 10 ? 'selected' : '' }}>Class 10</option>
        </select>
        <label for="bio">Bio:</label>
        <textarea rows="5" id="bio" name="bio">{{ old('bio', $student->bio) }}</textarea>

        <label for="mark">Mark:</label>
        <input type="number" id="mark" name="mark" value="{{ old('mark', $student->mark) }}" required>

        <label for="branch">Branch:</label>
        <select id="branch" name="branch_id" required>
            @foreach ($branches as $branch)
                <option value="{{ $branch->id }}" {{ $branch->id == $student->branch_id ? 'selected' : '' }}>
                    {{ $branch->name }}
                </option>
            @endforeach
        </select>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            @foreach (config('constants.student_status') as $status)
                <option value="{{ $status }}" {{ $status == $student->status ? 'selected' : '' }}>
                    {{ ucfirst($status) }}
                </option>
            @endforeach
        </select>

        <div style="display: flex; gap: 10px; margin-top: 10px;">
            <a class="btn" href="javascript:history.back()" >Cancel</a>
            <button class="btn" type="submit">Update Student</button>
        </div>
    </form>

     @if ($errors->any())
            <div class="border border-red-500 rounded text-red-700 text-center mt-1">
                <ul class="mt-1 mb-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</x-layout>
