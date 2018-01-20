<?php

class Conta
{
    public $numero; //Atributo
    public $saldo; //Atributo

}

$x = new Conta();
$x ->  numero = 0 ;
$x ->  saldo = 125;

echo "Conta = ". $x -> numero ."\n" ;
echo "Saldo = ". $x -> saldo  ."\n";
