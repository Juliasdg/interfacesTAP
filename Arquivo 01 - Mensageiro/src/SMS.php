<?php

namespace App\Src;

class SMS implements Mensageiro {
    public function enviar(string $mensagem): void{
        echo "Enviando mensagem por SMS: {$mensagem}\n";
    }
}