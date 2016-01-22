<?php

    class Cuenta extends CI_Controller
{
    // --- ATTRIBUTES ---

    /**
     * Identificador de la cuenta
     *
     * @access private
     * @var int
     */
    private $id_Cuenta = 0;

    /**
     * Descripcion de la cuenta
     *
     * @access private
     * @var String
     */
    private $descripcion_Cuenta = null;

    // --- OPERATIONS ---
   

    /**
     * Genera control select en html
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return String
     */
    public function control_Select($name)
    {
        
    }

    /**
     * Valida que un ingreso tenga los datos correctos
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return boolean
     */
    public function validar()
    {
        $returnValue = (bool) false;
        return (bool) $returnValue;
    }

    /**
     * Constructor de la clas
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return void
     */
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * Constructor de la clas
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return void
     */
    public static function construct($id,$descripcion){
        $nuevoCuenta = new Cuenta();
        $nuevoCuenta->setID_Cuenta($id);
        $nuevoCuenta->setDescripcion_Cuenta($descripcion);
        return $nuevoCuenta;
    }
        


    /**
     * Obtiene el identificador de la cuenta.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return int
     */
    public function getID_Cuenta()
    {
        $returnValue = $this->id_Cuenta;
        return (int) $returnValue;
    }

    /**
     * Inicializa el Identificador de la centa.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int identificador Identificador que se le dara a la cuenta.
     * @return void
     */
    public function setID_Cuenta($identificador)
    {
        $this->id_Cuenta = $identificador;
    }

    /**
     * Obtiene la descripción de la cuenta
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return String
     */
    public function getDescripcion_Cuenta()
    {
        $returnValue = $this->descripcion_Cuenta;
        return $returnValue;
    }

    /**
     * Da un valor a la descripción de la cuenta.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  String descripcion Descripcion que se le asignara a la variable
     * @return void
     */
    public function setDescripcion_Cuenta($descripcion)
    {
        $this->descripcion_Cuenta = $descripcion;
    }

    /**
     * Ingresa una cuenta a la base de datos.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  Cuenta Cuenta Cuenta que se desea agregar a la base de datos.
     * @return void
     */
    public function create_Cuenta($Cuenta)
    {
        $data = array(
            'ID' => $Cuenta->getID_Cuenta(),
            'DESCRIPCION' => $Cuenta->getDescripcion_Cuenta()
            
            );
        //Metodo que inserta los datos a la base de datos
        //Parametros son 'tabla',$data
        $resultado = $this->db->insert('cuenta',$data);
        if ($resultado==1){
            return true;
        }
        return false;
    }

    /**
     * Modifica la cuenta especificada con los datos especificados en la base de
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int id_Cuenta Identificador de la cuenta que se quiere modificar.
     * @param  Cuenta Cuenta Cuenta con los datos que se modificarán.
     * @return void
     */
    public function update_Cuenta($id_Cuenta,$Cuenta)
    {
        $data = array(
            'DESCRIPCION' => $Cuenta->getDescripcion_Cuenta()
            );
        $this->db->where('ID',$id_Cuenta);
        $resultado = $this->db->update('CUENTA',$data);
        if($resultado=1){
            return true;
        }
        return false;
    }

    /**
     * Elimina un acuenta de la base de datos.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int id_Cuenta Identificador de la cuenta que se quiere eliminar.
     * @return void
     */
    public function delete_Cuenta($id_Cuenta)
    {
        $resultado = $this->db->delete('CUENTA',array('id' => $id_Cuenta));
        if($resultado == 1){
            return true;
        }
        return false;
    }
     /**
     * Genera una tabla en html
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return String
     */
    public function listar_Tabla()
    {
        $this->db->select('*')->from('CUENTA');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function to_table($consulta){
         echo"<table>";
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
        echo"</table>";
    }

} /* end of class Cuenta */