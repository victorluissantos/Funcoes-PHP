<?php
/**
*@author: Victor Santos
*@param: $x = (int), $y = (int)
*descript: método estático dividir( $x, $y ) da classe Calculadora.lançar uma exception caso o $y seja zero na tela a mensagem “Divisão por zero”
*/
class Calculadora {
	public static function dividir($x,$y) {
		if($y == 0)
			throw new Exception("Divisao por zero");
		echo $x/$y;
	}
}

//Call your method
try {
	Calculadora::dividir(10,0);	//10 and 0 is static values
} catch (Exception $e) {
	die($e->getMessage());
}

//Case you using PHP 5.3 or less
/*
$classname = 'Calculadora';
$classname::dividir(); // No PHP 5.3.0
*/
