<?php

namespace App\Src;

use App\SrcPersonagemInterface;

class Guerreiro implements PersonagemInterface
{
    public function atacar(): string
    {
        return "O Guerreiro ataca com sua espada!";
    }

    public function defender(): string
    {
        return "O Guerreiro defende com seu escudo!";
    }

    public function esquivar(): string
    {
        return "O Guerreiro esquiva habilmente!";
    }
}
