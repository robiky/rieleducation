<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contacts extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $contact;
    public function __construct(Contact $contact)
    {
        $this->Contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.adminContact')->with(['contact_name' => $this->Contact->name,'contact_subject'=>$this->Contact->subject,'contact_email'=>$this->Contact->email,'contact_number'=>$this->Contact->number,'contact_message'=>$this->Contact->message]);
    }
}
