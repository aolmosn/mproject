<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Servicio extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('proveedor');
		$this->load->model('servicios');
		$this->load->model('cuenta');
		$this->load->model('Cliente_Servicio');
	}
	public function index(){
		$this->load->view('index.html');
	}
	
	//Controladores de Proveedor
	public function administrarProveedor(){
		$this->load->view('proveedor.html');
		$proveedor = new Proveedor();
		$proveedor->to_table($proveedor->listar_Proveedor());
	}
	public function ingresarProveedor(){
		$analisis = $_POST['analisis'];
		$razonSocial = $_POST['razonSocial'];
		$servicio = $_POST['ingresarServicio'];
		$proveedor = new Proveedor();
		$proveedor->set_Analitico($analisis);
		$proveedor->set_Razon_Social($razonSocial);
		$proveedor->set_Servicio($servicio);
		$proveedor->create_Proveedor($proveedor);
		$this->load->view('proveedor.html');
		$proveedor->to_table($proveedor->listar_Proveedor());
	}
	public function eliminarProveedor(){
		$analisis = $_POST['ELIMINAR'];
		$proveedor = new Proveedor();
		$proveedor->delete_Proveedor($analisis);
		$this->load->view('proveedor.html');
		$proveedor->to_table($proveedor->listar_Proveedor());
	}
	public function modificarProveedor(){
		$analisis = $_POST['modificarAnalisis'];
		$razonSocial = $_POST['modificarRazonSocial'];
		$servicio = $_POST['modificarServicio'];
		$proveedor = new Proveedor();
		$proveedor->set_Razon_Social($razonSocial);
		$proveedor->set_Servicio($servicio);
		$proveedor->update_Proveedor($analisis,$proveedor);		
		$this->load->view('proveedor.html');
		$proveedor->to_table($proveedor->listar_Proveedor());
	}
	//Fin controles de Proveedor

	//Controles de Cuenta
	public function administrarCuenta(){
		$this->load->view('cuenta.html');
		$cuenta = new Cuenta();
		$cuenta->to_table($cuenta->listar_Tabla());
	}
	public function ingresarCuenta(){
		$id = $_POST['ingresarID'];
		$descripcion = $_POST['ingresarDescripcion'];
		$cuenta = Cuenta::construct($id,$descripcion);
		$cuenta->create_Cuenta($cuenta);
		$this->load->view('cuenta.html');
		$cuenta->to_table($cuenta->listar_Tabla());
	}
	public function modificarCuenta(){
		$id = $_POST['modificarID'];
		$descripcion = $_POST['mdificarDescripcion'];
		$cuenta = Cuenta::construct($id,$descripcion);
		$cuenta->update_Cuenta($id,$cuenta);
		$this->load->view('cuenta.html');
		$cuenta->to_table($cuenta->listar_Tabla());
	}
	public function eliminarCuenta(){
		$id = $_POST['eliminarID'];
		$cuenta = new Cuenta();
		$cuenta->delete_Cuenta($id);
		$this->load->view('cuenta.html');
		$cuenta->to_table($cuenta->listar_Tabla());
	}
	//Fin controles de Cuenta

	//Controles de Servicio
	public function administrarServicio(){
		$this->load->view('servicio.html');
		$servicio = new Servicios();
		$servicio->to_table($servicio->listar_Tabla());
		//$servicio->array_to_table($servicio->lista());
		//$servicio->imprimir(key);
	}
	public function ingresarServicio(){
		$id = $_POST['ingresarID'];
		$descripcion = $_POST['ingresarDescripcion'];
		$cuenta = $_POST['ingresarCuenta'];
		$servicio = Servicios::__construct1($id,$descripcion,$cuenta);
		$servicio->createServicio($servicio);
		$this->load->view('servicio.html');
		$servicio->to_table($servicio->listar_Tabla());
	}
	public function modificarServicio(){
		$id=$_POST['modificarID'];	
		$descripcion = $_POST['modificarDescripcion'];
		$cuenta = $_POST['modificarCuenta'];
		$servicio = Servicios::__construct2($descripcion,$cuenta);
		$servicio->updateServicio($id,$servicio);
		$this->load->view('servicio.html');
		$servicio->to_table($servicio->listar_Tabla());
	}
	public function eliminarServicio(){
		$id=$_POST['eliminarID'];
		$servicio = new Servicios();
		$servicio->deleteServicio($id);
		$this->load->view('servicio.html');
		$servicio->to_table($servicio->listar_Tabla());
	}
	//Fin Controles de Servicio

	//Controles Cliente_Servicio
	public function administrarCliente(){
		$this->load->view('administrarCliente.html');
	}
	public function ingresarCliente(){
		$id = $_POST['ingeresarID'];
		$proveedor = $_POST['ingresarProveedor'];
		$local = $_POST['ingresarLocal'];
		$cliente = Cliente_Servicio::__construct1($id,$proveedor,$local);
		$cliente->create_CleinteServicio($cliente);
		$this->load->view('administrarCliente.html');
	}
	public function modificarCliente(){
		$id = $_POST['modificarID'];
		$proveedor = $_POST['modificarProveedor'];
		$local = $_POST['modificarLocal'];
		$cliente = CLiente_Servicio::__construct2($proveedor,$local);
		$cliente->update_ClienteServicio($id,$cliente);
		$this->load->view('administrarCliente.html');
	}
	public function eliminarCliente(){
		$id = $_POST['modificarID'];
		$cliente = new Cliente_Servicio();
		$cliente->delete_ClienteServicio($id);
	}	
	//Fin Controles CLiente_Servicio
}