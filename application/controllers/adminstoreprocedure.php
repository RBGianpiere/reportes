<?php defined('BASEPATH') OR exit('No direct script access allowed');

class adminstoreprocedure extends MY_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->language('dialogo');
    }
    
	public function index(){
	
	}

	public function crear_nuevo_store(){
		$this->title 		= 'title';
		$this->description 	= 'description';
		$this->css 			= array(/*'styles1','ejemplo','prueba'*/);
		$this->js 			= array(/*'script1','ejemplo','prueba'*/);
		$this->css_lib 		= array(/*'libcss1','libcss2'*/);
		$this->js_lib 		= array(/*'libcjs1','libcjs2'*/);
		$this->urlstyle		= array(/*'http://domain/style.css'*/);
		$this->urlscript 	= array(/*'http://domain/script.js'*/);

		$this->Theme('crear_store');
	}

	public function subir_store(){
		$name  	= $this->input->post('store_name');
		$params = $this->input->post('store_params');
		$query 	= $this->input->post('store');

		// eliminar el store antes de crearlo.
		$delete = 'DROP PROCEDURE IF EXISTS '.$name;
		$this->store->query($delete);

		// crear el store procedure nuevamente.
		$crear  = 'CREATE PROCEDURE `'.$name.'` ('.$params.')';
		$crear .= "BEGIN\n".$query."\nEND";
		$this->store->query($crear);
	}

	public function listar_stores(){
		# $result = $this->store->query("SHOW PROCEDURE STATUS where Db = $this->db->database AND Name = CONCAT(store_name) AND type = 'PROCEDURE'");
		$db_name = (string) $this->db->database;
		$result = $this->store->query("SHOW PROCEDURE STATUS where Db = '".$db_name."' AND type = 'PROCEDURE'");
		$html = '';
		foreach ($result->result() as $key => $value) {
			#print_r($value);
			$html.='<li style="margin-bottom:20px;"><div><span>nombre: </span><strong style="text-transform:uppercase; color:orange;">'.$value->Name.'</strong></div><div style="font-size:12px;"><span>creado: </span><span>'.$value->Created.'</span><button onclick="javascript:_removeStore('."'".$value->Name."'".');" class="remove-store" data-remove="'.$value->Name.'" style="font-size:13px;display:inline-block; margin-left:20px;">eliminar</button></div></li>';
		}
		$this->storelist = $html;
		$this->Theme('listar_store');
		// return $result->result();
	}

	public function eliminar_store($name){
		// eliminar el store antes de crearlo.
		$delete = 'DROP PROCEDURE IF EXISTS '.$name;
		$result = $this->store->query($delete);
		echo $result;
	}
}

