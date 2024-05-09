<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Address;


class MyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    /*public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'My Email',
            from: new Address('mailtrapUKF@test.sk', 'Ivan')
        );
    }*/

    /**
     * Get the message content definition.
     */
   /* public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }*/

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    




/*public function build()
{
    return $this->from('mailtrapUKF@test.sk', 'Ivan')
                ->subject('My Email')
                ->view(\Illuminate\Support\Facades\View::make('This is the body of the email.'));
}*/




public function build()
{
    return $this->from('mailtrapUKF@demomailtrap.com', 'Ivan')
                ->to('ivan.gabris2@student.ukf.sk')
                ->subject('My Email')
                ->view('email');
}








}
