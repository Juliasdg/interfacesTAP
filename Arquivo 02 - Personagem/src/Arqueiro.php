<?php

namespace App\Src;

use App\Src\PersonagemInterface;

class Arqueiro implements PersonagemInterface
{
    public function atacar(): string
    {
        return "O Arqueiro dispara uma flecha precisa!";
    }

    public function defender(): string
    {
        return "O Arqueiro se camufla para se defender!";
    }

    public function esquivar(): string
    {
        return "O Arqueiro rola para o lado esquivando-se!";
    }
}
