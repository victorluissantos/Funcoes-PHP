<?php
/*
Função que verifica se uma palavra é palíndromo.
Dicionário Aurélio : palíndromo [Do gr. palíndromos.]
Adjetivo. 1.Diz-se de frase ou palavra que, ou se leia da esquerda para a direita, ou da direita para a esquerda, 
tem o mesmo sentido, como, p. ex., radar, osso, ovo.
*/
/**
*@author: Victor Santos
*@date : 05/2015
*@param: $palavra = (string) Palavra que deseja verificar
*/

function isPolidromo($palavra = NULL){

	$sizePalavra = strlen($palavra);
 	$primeiraPartePAlavra = substr($palavra, 0, $sizePalavra/2);
 
 	$comeco = ($sizePalavra%2) > 0?(int)($sizePalavra/2)+1:($sizePalavra/2);
 	$segundoPartePAlavra = strrev(substr($palavra, $comeco, $sizePalavra));
 
 	if($primeiraPartePAlavra == $segundoPartePAlavra)
  		return "VERDADEIRO";
	return "FALSO";
}
