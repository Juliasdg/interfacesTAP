<?php

require 'vendor/autoload.php';

use App\Src\Mensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

function enviarMensagem(Mensageiro $mensageiro, string $mensagem): void {
    $mensageiro->enviar($mensagem);
}

$email = new Email();
$sms = new SMS();
$whatsapp = new Whatsapp();

enviarMensagem($email, "Olá, este é um email!");
enviarMensagem($sms, "Olá, esta é uma mensagem SMS!");
enviarMensagem($whatsapp, "Olá, esta é uma mensagem pelo Whatsapp!");