<?php

class Conta
{
    public $numero; //Atributo
    public $saldo; //Atributo
    public $limite; //Atributo

}

$x = new Conta();
$x ->  numero = "0";
$x ->  saldo = "125";
$x ->  limite =  "560,00"

echo "Conta  = ". $x -> numero  ."\n" ;
echo "Saldo  = ". $x -> saldo   ."\n";
echo "Limite = ". $x -> limite  ."\n";
