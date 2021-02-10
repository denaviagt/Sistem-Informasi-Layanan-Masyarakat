<?php

namespace App\Mail;

use \App\Models\Admin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
// use App\Mail\Crypt;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;

class SendPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var \App\Models\Order
     */
    public $admin;
    public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Admin $admin, $password)
    {
        $this->admin = $admin;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('esilam@gmail.com')
            ->markdown('email.mail-template')
            // ->markdown('vendor.mail.html.layout')
            ->with(["admin" => $this->admin, "code" => Crypt::encryptString($this->admin->id), "password" => $this->password])
            ->subject('Verifikasi Akun');
    }
}