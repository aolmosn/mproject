<?php
class Servicios extends CI_Model{

	private $id_Servicio ;
	private $descripcion_Servicio ;
	private $cuenta_Asociada=0;

	function __construct(){
		parent::__construct();
	}
	static function __construct1($id, $descripcion , $cuenta ){
		$nuevoServicio = new Servicios();
		$nuevoServicio->setId_Servicio($id);
		$nuevoServicio->setDescripcion_Servicio($descripcion);
		$nuevoServicio->setCuenta_Asociada($cuenta);
		return $nuevoServicio;
	}
	static function __construct2($descripcion , $cuenta){
		$nuevoServicio = new Servicios();
		$nuevoServicio->setDescripcion_Servicio($descripcion);
		$nuevoServicio->setCuenta_Asociada($cuenta);
		return $nuevoServicio;
	}


	public function getId_Servicio(){return $this->id_Servicio;}
	public function setId_Servicio($id = 0){$this->id_Servicio = $id;}

	public function getDescripcion_Servicio(){return $this->descripcion_Servicio;}
	public function setDescripcion_Servicio($descripcion = null) {$this->descripcion_Servicio = $descripcion;}

	public function getCuenta_Asociada(){return $this->cuenta_Asociada;}
	public function setCuenta_Asociada($cuenta = 0){$this->cuenta_Asociada = $cuenta;}

	public function createServicio($Servicio){
		$data = array(
     		'ID' => $Servicio->getId_Servicio(),
     		'DESCRIPCION' => $Servicio->getDescripcion_Servicio(),
     		'CUENTA' => $Servicio->getCuenta_Asociada()
     		);
     	//Metodo que inserta los datos a la base de datos
     	//Parametros son 'tabla',$data
     	$resultado = $this->db->insert('SERVICIO',$data);
     	if ($resultado==1){
     		return true;
     	}
     	return false;

	}
	public function updateServicio($id, $Servicio){
		$data = array(
     		'DESCRIPCION' => $Servicio->getDescripcion_Servicio(),
     		'CUENTA' => $Servicio->getCuenta_Asociada()
     		);
     	$this->db->where('ID',$id);
     	$resultado = $this->db->update('SERVICIO',$data);
     	if($resultado=1){
     		return true;
     	}
     	return false;
	}
	public function deleteServicio($id){
		$resultado = $this->db->delete('SERVICIO',array('ID' => $id));
		if($resultado == 1){
			return true;
		}
		return false;
	}

	public function listar_Tabla(){
     	$this->db->select('*')->from('SERVICIO');
     	$query = $this->db->get();
     	$servicios = array();
     	if($query->num_rows()>0){
     		return $query->result();
     	}
    }

    public function to_table($consulta){
     	echo "<table>";
     	$titulo = false;
		if($consulta != null){
            $titulo = false;
            foreach ($consulta as $fila) {
                //Recupera Titulos
                if(!$titulo){
                    echo "<tr>";
                    foreach ($fila as $key => $value) {
                        echo "<td>$key</td>";
                    }
                    echo "</tr>";
                $titulo=true;
                }
                //Recupera valor
                echo "<tr>";
                foreach ($fila as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
		echo "</table>";
    }

  

}