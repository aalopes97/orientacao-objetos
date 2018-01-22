<?php

/*Coleta a biblioteca*/
require 'lib/Carbon.php';

use Carbon\Carbon;


/*Classe cartão de crédito*/
class CartaoDeCredito
{
   public $numero;         //atributo
   public $dataDeValidade; //Atributo

}

$c1 = new CartaoDeCredito();
$c2 = new CartaoDeCredito();

$c1 -> numero = "11111";
$c1 -> dataDeValidade = Carbon::createFromDate(2022, 3, 7, 'America/Sao_Paulo');

$c2 -> numero = "11111";
$c2 -> dataDeValidade = "01/01/2014";

echo "\n**********\n";
echo "Cartão 1 \n Nº = ".$c1->numero."\n Validade = ".$c1->dataDeValidade->format('d/m/Y')."\n";
echo "\n**********\n";
echo "\n**********\n";
echo "Cartão 2 \n Nº = ".$c2->numero."\n Validade = ".$c2->dataDeValidade."\n";
echo "\n**********\n";
