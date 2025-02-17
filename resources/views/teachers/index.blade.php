<x-layout>
@if (session('success'))
    <div id="flash-message" class="p-1 text-center border-collapse rounded bg-green-100 text-green-500 font-bold" role="alert">
        {{ session('success') }}
    </div>
@endif
<h2>Currently Available Teachers</h2> 

<ul>
    @foreach ($teachers as $teacher)
                <li>
                   <x-card href="{{ route('teachers.show', $teacher->id) }}" >
                    <div>    
                        <h3>{{ $teacher->name }}</h3> 
                        <p>{{ $teacher->branch->name }}</p>
                    </div>
                   </x-card>
                </li>
    @endforeach
</ul>

{{ $teachers->links() }}
</x-layout>