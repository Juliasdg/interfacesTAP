<?php

namespace App\Src;

use App\Src\PersonagemInterface;

class Mago implements PersonagemInterface
{
    public function atacar(): string
    {
        return "O Mago lança um feitiço poderoso!";
    }

    public function defender(): string
    {
        return "O Mago conjura um escudo mágico!";
    }

    public function esquivar(): string
    {
        return "O Mago teleporta-se para evitar o ataque!";
    }
}
