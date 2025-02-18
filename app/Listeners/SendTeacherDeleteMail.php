<?php

namespace App\Listeners;

use App\Events\TeacherDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminNotificationMail;

class SendTeacherDeleteMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TeacherDeleted $event): void
    {
        $teacher = $event->teacher;
        Mail::to('satvikrshetty423@gmail.com')->send(new AdminNotificationMail($teacher, "deleted"));
    }
}
