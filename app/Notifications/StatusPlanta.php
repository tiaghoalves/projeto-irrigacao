<?php

namespace projetoIrrigacao\Notifications;

use projetoIrrigacao\Planta;
use projetoIrrigacao\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class StatusPlanta extends Notification
{
    use Queueable;

    protected $planta;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Planta $planta)
    {
        $this->planta = $planta;
        
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

        return (new MailMessage)
                    ->subject('Status Alterado')
                    ->greeting('Olá')
                    ->line('A planta '. $this->planta->nome .' teve seu Status alterado por uma ação de usuário.')
                    ->action('Visualizar Planta', url('/planta/visualizar/'.$this->planta->idPlanta))
                    ->line('Obrigado por usar nossa aplicação!');
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
