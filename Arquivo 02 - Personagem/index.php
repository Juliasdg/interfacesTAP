<?php

require 'vendor/autoload.php';

use App\Src\Guerreiro;
use App\Src\Mago;
use App\Src\Arqueiro;


$guerreiro = new Guerreiro();
$mago = new Mago();
$arqueiro = new Arqueiro();

echo "Ações do Guerreiro:\n";
echo $guerreiro->atacar();
echo $guerreiro->defender();
echo $guerreiro->esquivar();

echo "\nAções do Mago:\n";
echo $mago->atacar();
echo $mago->defender();
echo $mago->esquivar();

echo "\nAções do Arqueiro:\n";
echo $arqueiro->atacar();
echo $arqueiro->defender();
echo $arqueiro->esquivar();