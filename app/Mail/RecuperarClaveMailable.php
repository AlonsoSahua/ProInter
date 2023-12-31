<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecuperarClaveMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "RESTABLECER CONTRASEÑA"; //ESTO ES EL ASUNTO DEL CORREO
    public $correo; //solo creamos para pasar variables a la vista y ENVIARSELOS
    public $codigo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($correo, $codigo)
    {
        $this->correo = $correo; //ALMACENAMOS LOS DATOS QUE SE RECIBEN PARA MOSTRAR EN LA VISTA
        $this->codigo = $codigo;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('auth/reset/vistaEnviarCorreo');
    }
}
