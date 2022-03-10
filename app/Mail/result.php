<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class result extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $rand;
    public function __construct($rand)
    {
        $this->rand=$rand;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
               return $this->view('pdf.index')->subject('Here is your ticket to attend Arab Fashion Week x d3 for Womenswear FW22/23')->attach(("pdf/$this->rand.pdf"));

    }
}
