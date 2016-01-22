<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Negocio extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('local');
	}
	public function index(){
		$this->load->view('administrar.html');
	}

	//Administrar Locales
	public function administrarLocal(){
		$this->load->view('administrarLocal.html');
		$local = new Local();
		$local->to_table($local->listar_Tabla());
	}
	public function ingresarLocal(){
		$sm = $_POST['ingresarSM'];
		$nombre = $_POST['ingresarNombre'];
		$direccion = $_POST['ingresarDireccion'];
		$local = Local::__construct1($sm,$nombre,$direccion);
		$local->create_Local($local);
		$this->load->view('administrarLocal.html');
		$local->to_table($local->listar_Tabla());
	}
	public function modificarLocal(){
		$sm = $_POST['modificarSM'];
		$nombre = $_POST['modificarNombre'];
		$direccion = $_POST['modificarDireccion'];
		$local = Local::__construct2($nombre,$direccion);
		$local->update_Local($sm,$local);
		$this->load->view('administrarLocal.html');
		$local->to_table($local->listar_Tabla());
	}
	public function eliminarLocal(){
		$sm = $_POST['EliminarSM'];
		$local = new Local();
		$local->delete_Local($sm);
		$this->load->view('administrarLocal.html');
		$local->to_table($local->listar_Tabla());
	}

	//Fin administrar Locales

}