
<?php
/**
 * Clase de proveedores que prestan servicio a la empresa.
 */
class Proveedor extends CI_Model{
	
	/**
	*	VARIABLES DE LA CLASE
	*/	


	/**
     * @var Sting Analitico del proveedor
     */
	private $analitico;
	/**
     * @var String Razón Social del proveedor.
     */
	private $razon_Social;
    /**
     * @var String Razón Social del proveedor.
     */
    private $servicio;


	/**
	*	METODOS DE LA CLASE
	*/

	
	/**
     * Constructor por defecto de la clase Proveedor
     */
	public function __construct()
    {
        parent::__construct();

    }


    /**
     * Asigna un valor a la variable
     * Folio_Contable
     * @param int $folio Valor que se asignara a la variable
     */



    /**
     * Obtiene la variable
     * 
     */



    /**
     * Obtiene la variable
     * analitico.
     */
    public function get_Analitico(){
    	return $this->analitico;
    }
    /**
     * Asigna un valor a la variable
     * analitico
     * @param string $analitico_proveedor analitico que se le asignara a la variable
     */
    public function set_Analitico($analitico_proveedor){
    	$this->analitico = $analitico_proveedor;
    }

    /**
     * Obtiene la variable
     * razon_Social
     */
    public function get_Razon_Social(){
    	return $this->razon_Social;
    }
    /**
     * Asigna un valor a la variable
     * razon_Social
     * @param string $razon_Social_Proveedor será la razon social que se le asignara al objeto
     */
    public function set_Razon_Social($razon_Social_Proveedor){
    	$this->razon_Social = $razon_Social_Proveedor;
    }
     /**
     * Obtiene la variable
     * razon_Social
     */
    public function get_Servicio(){
        return $this->servicio;
    }
    /**
     * Asigna un valor a la variable
     * razon_Social
     * @param string $razon_Social_Proveedor será la razon social que se le asignara al objeto
     */
    public function set_Servicio($servicio){
        $this->servicio = $servicio;
    }

     /**
     * Ingresa el objeto Proveedor a la base de datos
     * @param proveedor $proveedor que sera ingresado en la base de datos
     * @return bool si fue ingresado correctamente
     */
    public function create_Proveedor($proveedor){

     	$data = array(
     		'ANALITICO' => $proveedor->get_Analitico(),
     		'RAZON_SOCIAL' => $proveedor->get_Razon_Social(),
            'SERVICIO' => $proveedor->get_Servicio()
     		);
     	//Metodo que inserta los datos a la base de datos
     	//Parametros son 'tabla',$data
     	$resultado = $this->db->insert('PROVEEDOR',$data);
     	if ($resultado==1){
     		return true;
     	}
     	return false;

    }

	 /**
     * Elimina un proveedor de la base de datos
     * @param string $analitico del proveedor que será eliminado
     * @return bool si fue eliminado 
     */
	public function delete_Proveedor($analitico){

		$resultado = $this->db->delete('PROVEEDOR',array('ANALITICO' => $analitico));
		if($resultado == 1){
			return true;
		}
		return false;

	}
	 /**
     * Actualiza un proveedor de la base de datos
     * @param string $analitico del proveedor que será actualizado
     * @param string $razonSocial del proveedor que será actualizada
     * @return bool si fue actualizado
     */
     public function update_Proveedor($analisis, $proveedor){

     	$data = array(
     		'RAZON_SOCIAL' => $proveedor->get_Razon_Social(),
            'SERVICIO' => $proveedor->get_Servicio()
     		);
     	$this->db->where('ANALITICO',$analisis);
     	$resultado = $this->db->update('PROVEEDOR',$data);
     	if($resultado=1){
     		return true;
     	}
     	return false;

     }

      /**
     * Lista una tabla con los proveedores que existen
     * @return string con la tabla 
     */
     public function listar_Proveedor(){
     	$this->db->select('*')->from('PROVEEDOR');
     	$query = $this->db->get();
     	if($query->num_rows()>0){
     		return $query->result();
     	}
     }

     public function to_table($consulta){
     	echo "<table>";
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