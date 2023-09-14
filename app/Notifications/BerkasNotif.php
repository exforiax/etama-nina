<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BerkasNotif extends Notification
{
    use Queueable;
    protected $getStatus;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($getStatus)
    {
        $this->getStatus = $getStatus;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if ($this->getStatus->status_id == 4) {
            return (new MailMessage)
                ->greeting('ETAMA - APPS')
                ->subject('Pemberitahuan Berkas')
                ->line('Berkas dengan nomor ' . $this->getStatus->no_berkas . ' belum memenuhi syarat, silahkan menghubungi petugas kami.');
        }
        if ($this->getStatus->status_id == 3) {

            return (new MailMessage)
                ->greeting('ETAMA - APPS')
                ->subject('Pemberitahuan Berkas')
                ->line('Berkas dengan nomor ' . $this->getStatus->no_berkas . ' telah di verifikasi, Mohon agar mencetak kembali nomor antrian anda.')
                ->action('Ambil Disini', url(route('lacak.show', $this->getStatus->id)));
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
