<x-layout>
    <form action="{{ route('students.store')}}" method="POST" >
        @csrf

        <h2>This is Create page</h2>
        <label for="name">Student Name: </label>
        @error('name')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <input type="text" name="name" id="name" value="{{ old('name')}}" required>
        <label for="class">Student Class: </label>
        @error('class')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <select name="class" id="class">
            <option value="" disabled selected> Select a class</option>
            <option value="1"  {{ old('class') == 1 ? 'selected' : '' }}>Class 1</option>
            <option value="2"  {{ old('class') == 2 ? 'selected' : '' }}>Class 2</option>
            <option value="3"  {{ old('class') == 3 ? 'selected' : '' }}>Class 3</option>
            <option value="4"  {{ old('class') == 4 ? 'selected' : '' }}>Class 4</option>
            <option value="5"  {{ old('class') == 5 ? 'selected' : '' }}>Class 5</option>
            <option value="6"  {{ old('class') == 6 ? 'selected' : '' }}>Class 6</option>
            <option value="7"  {{ old('class') == 7 ? 'selected' : '' }}>Class 7</option>
            <option value="8"  {{ old('class') == 8 ? 'selected' : '' }}>Class 8</option>
            <option value="9"  {{ old('class') == 9 ? 'selected' : '' }}>Class 9</option>
            <option value="10" {{ old('class') == 10 ? 'selected' : '' }}>Class 10</option>
        </select>
        <label for="mark">Student Mark: </label>
        @error('mark')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <input type="number" name="mark" id="mark" value="{{ old('mark')}}" required>
        <label for="bio">Student Bio: </label>
        @error('bio')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <textarea rows="5" name="bio" id="bio" required >{{ old('bio')}}</textarea>

        <button type="submit" class="btn mt-4"> Add Student</button>

        {{-- @if ($errors->any())
            <div class="border border-red-500 rounded text-red-700 text-center mt-1">
                <ul class="mt-1 mb-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </form>
</x-layout>