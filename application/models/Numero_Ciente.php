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
        parent::__cosntruct();
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
    public static function create_CleinteServicio( Numero_Ciente $Numero_Cliente)
    {
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:000000000000111B begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:000000000000111B end
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
    public static function update_ClienteServicio($id,  Numero_Ciente $numero_cliente)
    {
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001120 begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001120 end
    }

    /**
     * Elimina un numero de cliente
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int id Identificador del cliente a eliminar
     * @return void
     */
    public static function delete_ClienteServicio($id)
    {
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001127 begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001127 end
    }

} /* end of class Numero_Ciente */

?>