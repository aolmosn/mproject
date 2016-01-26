<?php

/**
 * Short description of class Numero_Ciente
 *
 * @access public
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
class Cliente_Servicio extends CI_Model
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Número identificador del cliente
     *
     * @access private
     * @var int
     */
    private $id = 0;

    /**
     * rut del proveedor al que pertenece
     *
     * @access private
     * @var int
     */
    private $proveedor = 0;

    /**
     * numero de local al que esta asignado
     *
     * @access private
     * @var int
     */
    private $local = 0;

    // --- OPERATIONS ---

    /**
     * Short description of method __construct
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public static function __construct1($id,$proveedor,$local){
        $cliente = new Cliente_Servicio();
        $cliente->setID_Cliente($id);
        $cliente->setProveedor($proveedor);
        $cliente->setLocal($local);
        return $cliente;
    }
    public static function __construct2($proveedor,$local){
        $cliente = new Cliente_Servicio();
        $cliente->setProveedor($proveedor);
        $cliente->setLocal($local);
        return $cliente;
    }
    /**
     * Obtienen el valor de la variable id.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return int
     */
    public function getId()
    {
        $returnValue = (int) $this->id;
        return (int) $returnValue;
    }

    /**
     * asigna valor a la variable id de cliente
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int id id que se le quiere asignar a la variable id
     * @return void
     */
    public function setID_Cliente($id)
    {
        $this->id = $id;
    }
    /**
     * Obtiene el rut al que pertenece ese numero de cliente
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return String
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Asigna un valor a la variable rut_Proveedor
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int rut Rut del proveedor a  asignar
     * @return void
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }

    /**
     * Obtiene el local al cual perteneceel cliente
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return int
     */
    public function getLocal()
    {
        
        return $this->local;
    }

    /**
     * Asigna un valor a lavariable local
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int local nuemreo de local que se desea asignar
     * @return void
     */
    public function setLocal($local)
    {
        $this->local = $local;
    }

    /**
     * Ingresa un numero de cliente a la base de datos
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  Numero_Ciente Numero_Cliente Objeto cliente que se desea ingrear
     * @return void
     */
    public function create_CleinteServicio($Cliente)
    {
        $data = array(
            'ID' => $Cliente->getId(),
            'PROVEEDOR' => $Cliente->getProveedor(),
            'LOCAL' => $Cliente->getLocal()
            );
        //Metodo que inserta los datos a la base de datos
        //Parametros son 'tabla',$data
        $resultado = $this->db->insert('CLIENTE_SERVICIO',$data);
        if ($resultado==1){
            return true;
        }
        return false;
    }

    /**
     * modifica un cliente existente
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int id identificador del cliente que se desea modificar
     * @param  Numero_Ciente numero_cliente Objeto cliente que reemplazara la información
     * @return void
     */
    public function update_ClienteServicio($id, $Cliente)
    {
        $data = array(
            'PROVEEDOR' => $Cliente->getProveedor(),
            'LOCAL' => $Cliente->getLocal()
            );
        $this->db->where('ID',$id);
        $resultado = $this->db->update('CLIENTE_SERVICIO',$data);
        if($resultado=1){
            return true;
        }
        return false;
    }

    /**
     * Elimina un numero de cliente
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int id Identificador del cliente a eliminar
     * @return void
     */
    public function delete_ClienteServicio($id)
    {
        $resultado = $this->db->delete('CLIENTE_SERVICIO',array('ID' => $id));
        if($resultado == 1){
            return true;
        }
        return false;
    }
      /**
     * Lista una tabla con los proveedores que existen
     * @return string con la tabla 
     */
     public function listar_Cliente(){
        $this->db->select('*')->from('CLIENTE_SERVICIO');
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

} /* end of class Numero_Ciente */

?>