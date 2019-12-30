<?php

namespace App\Mail;

use App\examRegister;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class studentExamRegAlert extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $examReg;

    public function __construct(examRegister $examReg)
    {
        $this->examRegister = $examReg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.studentExamRegAlert')->with(['name' => $this->examRegister->name, 'book'=>$this->examRegister->test_type]);
    }
}
