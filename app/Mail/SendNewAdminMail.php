<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Formulaire;
class SendNewAdminMail extends Mailable
{
    use Queueable, SerializesModels;
   public $connexions;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($connexions)
    {
        $this->connexions=$connexions;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Send New Admin Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'mail.send-new-admin-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
    public function build()
    {
        return $this->markdown('mail.send-new-admin-mail')
        ->subject("Nouvelle Demande - ".$this->connexions->nom);
       /* return $this->from('diagnenafissatou595@gmail.com', 'Me')
            ->to($email, $name)
            ->view('emails.myemailview')
            ->with([
                'contact' => $this->contact
            ]);*/
    }
}
