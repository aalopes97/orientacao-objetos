<?php

class Cliente
{
  public $nome;   //Atributo
  public $codigo; //atributo
}

$c1 = new Cliente;
$c2 = new Cliente;

$c1 -> nome   = "Rafael Consentino";
$c1 -> codigo = "1";

$c2 -> nome   = "Jonas Hirata";
$c2 -> codigo = "2";

/*
echo "\n**********\n";
echo "Cliente 1 \n Nome = ".$c1->nome."\n Código = ".$c1->codigo."\n";
echo "\n**********\n";
echo "Cliente 2 \n Nome = ".$c2->nome."\n Código = ".$c2->codigo."\n";
echo "\n**********\n";
*/
