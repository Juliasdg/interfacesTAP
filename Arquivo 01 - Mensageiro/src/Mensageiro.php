<?php

namespace App\Src;

interface Mensageiro{
    public function enviar(string $mensagem):void;
}