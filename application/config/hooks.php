<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/



/* ****************************************************************** *//**
* @todo : validacion de session de usuario.
* | 
* | Valida que la session este activa o retorna.
*/ // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$hook['pre_controller'][] = array(
                                    'class'    => 'sessiondata',
                                    'function' => 'islogin',
                                    'filename' => 'loginChecked.php',
                                    'filepath' => 'hooks',
                                    'params'   => array()
                                );