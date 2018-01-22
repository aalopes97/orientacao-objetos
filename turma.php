<?php

class Turma
{
	public $periodo;
	public $serie;
	public $sigla;
	public $tipoDeEnsino;
}

$turma1 = new Turma();
$turma2 = new Turma();

$turma1->periodo = "Tarde";
$turma1->serie = "8";
$turma1->sigla = "A";
$turma1->tipoDeEnsino = "Fundamental";

$turma2->periodo = "Manha";
$turma2->serie = "5";
$turma2->sigla = "B";
$turma2->tipoDeEnsino = "Fundamental";


print_r($turma1);
print_r($turma2);
