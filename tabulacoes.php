<?php
/**
*@author: Victor Santos
*@date : 05/2015
*@param: $palavra = (string) Palavra que deseja verificar
*/
/*
1 . Crie um algoritmo para montar um array conforme a matriz abaixo.
| 0 | 2 | 4 |
| 2 | 4 | 6 |
| 4 | 6 | 8 |
*/
echo '<pre>';
print_r(montaArray());

function montaArray($linha = 3, $coluna = 3, $tabulacao = 2){

	$array = array();

	$lin = 1;
	for ($i=0; $i < $linha; $i++) {
		$array[$i] = "|".$i*$tabulacao;

		for($y = 1; $y < $coluna; $y++){
			
			$array[$i] = $array[$i]."|". $lin*$tabulacao;
			$lin++;
			
		}
		$lin--;
	}

	return $array;

}
