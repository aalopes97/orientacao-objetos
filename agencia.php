<?php

class Agencia
{
 public $numero; //Atributo
}

$ag1 = new Agencia();

$ag1-> numero = "1234";
$ag2-> numero = "5678";

echo "\n**********\n";
echo "Agencia 1 \n Nº = ".$ag1->numero."\n";
echo "\n**********\n";

echo "\n**********\n";
echo "Agencia 2 \n Nº = ".$ag2->numero."\n";
echo "\n**********\n";
