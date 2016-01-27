<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Detalles extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Detalle_Servicio');
	}

	public function index(){
		$this->load->view('detalle.html');
		$detalle = new Detalle_Servicio();
		$detalle->to_table($detalle->listar_Detalle_Servicio());
	}
	public function ingresarDetalle(){
		$local = $_POST['ingresarLocal'];
		$proveedor= $_POST['ingresarProveedor'];
		$cliente = $_POST['ingresarCliente'];
		$periodo = $_POST['ingresarPeriodo'];
		$desde = $_POST['ingresarDesde'];
		$hasta = $_POST['ingresarHasta'];
		$total = $_POST['ingresarTotal'];
		$detalle = Detalle_Servicio::__construct1($local,$proveedor,$cliente,$periodo,$desde,$hasta,$total);
		$detalle->create_Detalle_Servicio($detalle);
		$this->load->view('detalle.html');
		$detalle->to_table($detalle->listar_Detalle_Servicio());
	}
	public function eliminarDetalle(){
		$id = $_POST['eliminarID'];
		$detalle = new Detalle_Servicio();
		$detalle->delete_Detalle_Servcio($id);
		$detalle->to_table($detalle->listar_Detalle_Servicio());
		$this->load->view("detalle.html");
	}
}