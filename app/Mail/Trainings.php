<?php

namespace App\Mail;

use App\Training;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Trainings extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $trainings;
    public function __construct(Training $trainings)
    {
        $this->Training = $trainings;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.training')->with(['name' => $this->Training->name, 'eprofile'=>$this->Training->exams_profile]);
    }
}
