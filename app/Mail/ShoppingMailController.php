<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\DonHang;

class ShoppingMailController extends Mailable
{
    use Queueable, SerializesModels;
    private $donhang;
  

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($donhang)
    {
        $this->donhang=$donhang;
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mail.mail_shopping')->with([
            'donhang'=>$this->donhang,
            
        ]);
    }
}