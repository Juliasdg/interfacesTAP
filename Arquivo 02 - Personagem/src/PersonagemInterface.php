<?php

namespace App\Src;

interface PersonagemInterface
{
    public function atacar(): string;

    public function defender(): string;

    public function esquivar(): string;
}
