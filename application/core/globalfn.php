<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|
|   FUNCIONES GLOBALES DEL PROYECTO.
|
*/

/**
* @todo : Funcion que permite validar el resultado de un SQL Query Result or Query Rows
*/
if(!function_exists('isQueryOk'))
{
	function isQueryOk($Query){
		if( (isset($Query[0]) && $Query[0] != '00' && $Query[0] != 'ERROR') || (!isset($Query['ERROR']) && !isset($Query[0]))):
        	return true;
    	else:
            return false;
        endif;
	}
}