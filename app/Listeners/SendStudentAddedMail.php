<?php

namespace App\Listeners;

use App\Mail\AdminNotificationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\NewStudentAdded;

class SendStudentAddedMail
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
    public function handle(NewStudentAdded  $event): void
    {
        //
        $student = $event->student;
        Mail::to('satvikrshetty423@gmail.com')->send(new AdminNotificationMail($student, "added"));
    }
}
