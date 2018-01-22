<?php


/*Classe cartão de crédito*/
class CartaoDeCredito
{
   public $numero;         //atributo
   public $dataDeValidade; //Atributo

}

$c1 = new CartaoDeCredito();
$c2 = new CartaoDeCredito();

$c1 -> numero = "11111";
$c1 -> dataDeValidade = "01/02/2014";

$c2 -> numero = "11111";
$c2 -> dataDeValidade = "01/01/2014";
