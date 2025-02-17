<x-layout>
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf

        <h2>Create Teacher</h2>
        
        <label for="name">Teacher Name: </label>
        @error('name')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <input type="text" name="name" id="name" value="{{ old('name') }}">

        <label for="subject">Teacher Subject: </label>
        @error('subject')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <input type="text" name="subject" id="subject" value="{{ old('subject') }}">

        <label for="bio">Your Achievements [Reseach Paper/Conference/Others]: </label>
        @error('bio')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <textarea rows="5" name="bio" id="bio">{{ old('bio') }}</textarea>

        <label for="branch_id">Teacher Branch: </label>
        @error('branch_id')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        <select name="branch_id" id="branch_id">
            <option value="" disabled selected>Select a branch</option>
            @foreach ($branches as $branch)
                <option value="{{ $branch->id }}" {{ $branch->id == old('branch_id') ? 'selected' : '' }}>{{ $branch->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Add Teacher</button>
    </form>
</x-layout>
