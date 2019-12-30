<?php

namespace App\Mail;

use App\Training;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class adminTrainer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $examTrainer;
    public function __construct(Training $examTrainer)
    {
        $this->Training = $examTrainer;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.adminTrainer')->with(['name' => $this->Training->name, 'eprofile'=>$this->Training->exams_profile,'number'=>$this->Training->whatsapp_number,'paid'=>$this->Training->payment_status]);
    }
}
