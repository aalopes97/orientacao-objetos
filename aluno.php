<?php

Class Aluno
{
  public	$nome;
	public $rg;
	public $dataNascimento;
}

$aluno1 = new Aluno();

$aluno1->nome = "Marcelo Martins";
$aluno1->rg   = "33333333-3";
$aluno1->dataNascimento ="02/04/1985";

$aluno2 = new Aluno();

$aluno2->nome = "Marcelo Martins";
$aluno2->rg   = "33333333-3";
$aluno2->dataNascimento ="02/04/1985";

echo "Nome:".$aluno1->nome."\n";
echo "Rg:".$aluno1->rg."\n";
echo "Nascimento:".$aluno1->dataNascimento."\n\n";

echo "Nome:".$aluno2->nome."\n";
echo "Rg:".$aluno2->rg."\n";
echo "Nascimento:".$aluno2->dataNascimento."\n";
