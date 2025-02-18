<?php

namespace App\Listeners;

use App\Events\StudentDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminNotificationMail;

class SendStudentDeleteMail
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
    public function handle(StudentDeleted $event): void
    {
        $student = $event->student;
        Mail::to('satvikrshetty423@gmail.com')->send(new AdminNotificationMail($student, "deleted"));
    }
}
