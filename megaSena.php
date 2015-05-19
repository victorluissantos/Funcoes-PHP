<?php
echo '<pre>';
var_dump(sortValue());

/**
*@author: Victor Santos
*@date : 05/2015
*@param: $conjuntos = (int) grupos de quanto em quanto serão montados, $minValue = (int) Valor mínimo do sorteio, $maxValue = (int)Valor maximo do sorteio, $order = (int) 0=não ordenar, 1=crescente, 2=decrescente
*/
function sortValue($conjuntos = 10, $minValue = 1, $maxValue = 60, $ordenar = 1)
{

	$error		= array();
	if($conjuntos < 1 || $conjuntos > $maxValue)
		$error[] = "Parametro conjunto inválido, conjunto deve ser maior que 1 e menor que o parametro de maximo valor a ser sorteado !";
	if($ordenar < 0 || $ordenar > 2)
		$error[] = "Parametro ordenar inválido, deve conter 0 = não ordenar, 1 = ordem crescente, 2 = ordem decrescente!";
	if(!empty($error))
		return var_dump($error);

	$matriz 	= array();
	$allValues 	= array();
	$valores 	= array();
	$indice 	= 0;
	$conjIndi 	= 1;
	while($indice < $maxValue)
	{
		$rand = mt_rand($minValue, $maxValue);

		if( !in_array($rand, $allValues) )
		{
			$allValues[$indice] = $rand;
			$matriz[$indice] = $rand;
			$indice++;
			if(count($matriz) == $conjuntos)
			{
				//Controle de ordenação
				if($ordenar == 1)
					sort($matriz);
				else if($ordenar == 2)
					rsort($matriz);

				foreach ($matriz as $key => $value) {
					$valores[$conjIndi-1] = $valores[$conjIndi-1]." | ".$value;
				}

				$conjIndi++;
				$matriz = array();
			
			}
		}
	}
	return $valores;
}
