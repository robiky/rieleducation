<?php

namespace App\Mail;

use App\Purchases;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Rieltutor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $purchases;

    public function __construct(Purchases $purchases)
    {
        $this->Purchases = $purchases;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $file = '';
        $name = '';
        if ($this->Purchases->book === 'pta'){
            $file = "pta.pdf";
            $name = 'Pearson Test of English Academic book.pdf';
        }elseif ($this->Purchases->book === 'ielts'){

            $file = 'ielts.pdf';
            $name = 'international English language testing system book.pdf';
        }elseif ($this->Purchases->book === 'toefl'){

            $file = "toefl.pdf";
            $name = 'test of English as a Foreign Language book.pdf';
        }elseif ($this->Purchases->book === 'sat'){

            $file = "sat.pdf";
            $name = 'Scholastic Aptitude Test book.pdf';
        }elseif ($this->Purchases->book === 'gre'){

            $file = "gre.pdf";
            $name = 'Graduate Record Examination book.pdf';
        }elseif ($this->Purchases->book === 'gmat'){

            $file = "gmat.pdf";
            $name = 'graduate management admission test book.pdf';
        }

        return $this->from('info@rieltutor.com')
            ->view('emails.welcome')->with(['purchase_book' => $this->Purchases->book, 'purchase_name'=>$this->Purchases->first_name,'link'=>$this->Purchases->book])->attach(storage_path($file), [
                'as' => $name,
                'mime' => 'application/pdf',
            ]);
    }
}
