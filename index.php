<?php

	function saldoVitorias($vitorias, $derrotas)
	{
		return $vitorias - $derrotas;
	}	

	$nome = "Francisgleydisson";
	$vitorias = 14;
	$derrotas = 5;
	$tipo = "";

	if($vitorias <= 10)
	{
		$tipo = "Ferro";
	}
	elseif($vitorias > 10 && $vitorias <= 20)
	{
		$tipo = "Bronze";
	}
	elseif($vitorias > 20 && $vitorias <= 50)
	{
		$tipo = "Prata";
	}
	elseif($vitorias > 50 && $vitorias <= 80)
	{
		$tipo = "Ouro";
	}
	elseif($vitorias > 80 && $vitorias <= 90)
	{
		$tipo = "Diamente";
	}
	elseif($vitorias > 90 && $vitorias <= 100)
	{
		$tipo = "Lendário";
	}
	else
	{
		$tipo = "Imortal";
	}

	

	echo "O Herói tem de saldo de ".saldoVitorias($vitorias, $derrotas)." está no nível de ".$tipo;
?>
