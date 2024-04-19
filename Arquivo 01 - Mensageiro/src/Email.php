<?php

namespace App\Src;

class Email implements Mensageiro{
    public function enviar(string $mensagem): void {
        echo "Enviando mensagem por Email: {$mensagem}\n";
    }
}