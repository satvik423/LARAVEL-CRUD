@component('mail::message')
# {{ $action === 'deleted' ? ($model instanceof App\Models\Student ? 'Student' : 'Teacher') . ' Deleted' : 'New ' . ($model instanceof App\Models\Student ? 'Student' : 'Teacher') . ' Registered' }}

A {{ $model instanceof App\Models\Student ? 'student' : 'teacher' }} has been {{ $action === 'deleted' ? 'removed from' : 'added to' }} the website.

- Name: {{ $model->name }}

- Branch: {{ $model->branch->name }}

@endcomponent
