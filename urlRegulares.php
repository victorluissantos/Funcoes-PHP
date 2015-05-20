<?php
/**
*@author: victor Santos
*@param: $url (string)
*/

/*
Dada a url www.teste.com/hotel546­hotel­burbon­curitiba com um código identificador (546) para o hotel
(Hotel Burbon Curitiba), utilize expressões regulares para CAPTURAR o código identificador e também o
nome do hotel. O prefixo (hotel) do código identificador deverá ser descartado.
*/
echo '<pre>';
var_dump(montaObjetoHotel("www.teste.com/hotel546­hotel­burbon­curitiba"));

function montaObjetoHotel($url){

	$nome = split("­hotel",$url);

	$hotel = array(
		'id' => preg_replace( "/.+hotel([0-9]{1,9}).*/i", "$1", $url ),
		'nome' => str_replace("-"," ", $nome[1])
		);

	return $hotel;

}
