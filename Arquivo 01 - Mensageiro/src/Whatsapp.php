<?php

namespace App\Src;

class Whatsapp implements Mensageiro {
    public function enviar(string $mensagem): void {
        echo "Enviando mensagem por Whatsapp: {$mensagem}\n";
    }
}