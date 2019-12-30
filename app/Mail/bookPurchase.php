<?php

namespace App\Mail;

use App\Purchases;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class bookPurchase extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $purchases;
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
        return $this->view('emails.adminBookPurchase')->with(['purchase_book' => $this->Purchases->book, 'purchase_name'=>$this->Purchases->first_name,'amount'=>$this->Purchases->amount,'paid'=>$this->Purchases->payment_status,'phone'=>$this->Purchases->whatsapp_phone,'email'=>$this->Purchases->email,'cCourier'=>$this->Purchases->courier_choice,'courier'=>$this->Purchases->courier,'address'=>$this->Purchases->address,'quantity'=>$this->Purchases->quantity]);
    }
}
