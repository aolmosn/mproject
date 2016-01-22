<?php

/**
 * Short description of class Local
 *
 * @access public
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
class Local extends CI_Model
{
    // --- ATTRIBUTES ---

    /**
     * El munero del local correspondiente
     *
     * @access private
     * @var int
     */
    private $sm_Local = 0;

    /**
     * Nombre del local
     *
     * @access private
     * @var String
     */
    private $nombre_Local = null;

    /**
     * Short description of attribute direccion_Local
     *
     * @access private
     * @var String
     */
    private $direccion_Local = null;

    // --- OPERATIONS ---

    /**
     * Short description of method Local
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public static function __construct1($sm, $nombre, $direccion){
        $local = new Local();
        $local->set_SM_Local($sm);
        $local->setNombre_Local($nombre);
        $local->setDireccion_Local($direccion);
        return $local;
    }

    public static function __construct2($nombre, $direccion){
        $local = new Local();
        $local->setNombre_Local($nombre);
        $local->setDireccion_Local($direccion);
        return $local;
    }

    /**
     * Obtiene el sm del local
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return int
     */
    public function get_SM_Local()
    {
        $returnValue = (int) $this->sm_Local;
        return (int) $returnValue;
    }

    /**
     * Asigna valor a la variable sm.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int sm SM que se desea asignar al local
     * @return void
     */
    public function set_SM_Local($sm)
    {
        $this->sm_Local = $sm;
    }

    /**
     * Obtiene el nombre del local
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return String
     */
    public function getNombre_Local()
    {
        return $this->nombre_Local;
    }

    /**
     * Da un valor al local
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  String nombre nombre que se quiere asignar.
     * @return void
     */
    public function setNombre_Local($nombre)
    {
        $this->nombre_Local = $nombre;
    }

    /**
     * Obtiene la direccion del local
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return String
     */
    public function getDireccion_Local()
    {
        return $this->direccion_Local;
    }

    /**
     * Asigna una direccion al local
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  String direccion
     * @return void
     */
    public function setDireccion_Local($direccion)
    {
        $this->direccion_Local = $direccion;
    }

    /**
     * Agrega un local a la base de datos.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  Local local Objeto Local que se va a agregar a la base de datos
     * @return void
     */
    public function create_Local($local)
    {
       $data = array(
            'SM' => $local->get_SM_Local(),
            'NOMBRE' => $local->getNombre_Local(),
            'DIRECCION' => $local->getDireccion_Local()
            );
        //Metodo que inserta los datos a la base de datos
        //Parametros son 'tabla',$data
        $resultado = $this->db->insert('LOCAL',$data);
        if ($resultado==1){
            return true;
        }
        return false;
    }

    /**
     * Altera un local que exista en la base de datos
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int Identificador_Local Identificador del locla que se desea modificar
     * @param  Local local Objeto que contiene los nuevos datos del local
     * @return void
     */
    public function update_Local($Identificador_Local,$local)
    {
        $data = array(
            'NOMBRE' => $local->getNombre_Local(),
            'DIRECCION' => $local->getDireccion_Local()
            );
        $this->db->where('SM',$Identificador_Local);
        $resultado = $this->db->update('LOCAL',$data);
        if($resultado=1){
            return true;
        }
        return false;
    }

    /**
     * Elimina un local de la base de datos
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int identificador_Local Identificador del local que se eliminará.
     * @return void
     */
    public function delete_Local($identificador_Local)
    {
        $resultado = $this->db->delete('LOCAL',array('SM' => $identificador_Local));
        if($resultado == 1){
            return true;
        }
        return false;
    }

   
    public function listar_Tabla(){
        $this->db->select('*')->from('LOCAL');
        $query = $this->db->get();
        $servicios = array();
        if($query->num_rows()>0){
            return $query->result();
        }
        return null;
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
    }

} /* end of class Local */

?>