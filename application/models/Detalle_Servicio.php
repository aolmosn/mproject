<?php


/**
 * @author Andrés Felipe Olmos Navia
 */
class Detalle_Servicio extends CI_Model
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    public static function __construct1($local,$proveedor,$cliente,$periodo,$desde,$hasta,$total){
        $detalle = new Detalle_Servicio();
        $detalle->set_Local($local);
        $detalle->set_Proveedor($proveedor);
        $detalle->set_Cliente($cliente);
        $detalle->set_Periodo($periodo);
        $detalle->set_Desde($desde);
        $detalle->set_Hasta($hasta);
        $detalle->set_Total($total);
        return $detalle;
    }

    /**
     * @var Identificador auto incrementable del servicio
     */
    private $ID = 0;

    /**
     * @var numero del local al que esta referenciada este servicio
     */
    private $local;

    /**
     * @var Proveedor que presta el servicio
     */
    private $proveedor;

    /**
     * @var Numero de cliente al cual esta relacionado el servicio.
     */
    private $cliente;

    /**
     * @var Periodo en meses por nombre al cual pertenece el servicio.
     */
    private $periodo;

    /**
     * @var La fecha desde cuando es el servicio.
     */
    private $desde;

    /**
     * @var Fecha final del periodo del servicio
     */
    private $hasta;

    /**
     * @var Monto total del servicio que se presto
     */
    private $total;

    /**
     * Obtiene la ID
     */
    public function get_ID()
    {
        return $this->ID;
    }

    /**
     * Asigna una ID al Servicio.
     * @param $id id que se asignara al servicio
     */
    public function set_ID($id)
    {
        $this->ID=$id;
    }

    /**
     * Obtiene el local
     */
    public function get_Local()
    {
        return $this->local;
    }

    /**
     * @param $local local al que será asignado el servicio
     */
    public function set_Local($local)
    {
        $this->local = $local;
    }

    /**
     * Obtiene el proveedor asociado al servicio
     */
    public function get_Proveedor()
    {
        return $this->proveedor;
    }

    /**
     * Asigna el proveedor que presta el servicio
     * @param $proveedor Proveedor que presta el servicio (Rut Proveedor)
     */
    public function set_Proveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }

    /**
     * Obtiene el cliente asociado al servicio
     */
    public function get_Cliente()
    {
        return $this->cliente;
    }

    /**
     * Asigna  el cliente al cual pertenece el servicio(valor unico asiciado al proveedor)
     * @param $cliente cliente que será asociado al servicio
     */
    public function set_Cliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Obtiene el Periodo del Servicio
     */
    public function get_Periodo()
    {
        return $this->periodo;
    }

    /**
     * Periodo al cual está asociado el Servicio
     * @param $periodo Periodo que se asignara
     */
    public function set_Periodo($periodo)
    {
        $this->periodo  = $periodo;
    }

    /**
     * Indica la fecha inicial del periodo
     */
    public function get_desde()
    {
        return $this->desde;
    }

    /**
     * Asigna la fecha desde cuendo se presto el servicio
     * @param $desde Fecha desde cuando se prestó el servicio.
     */
    public function set_Desde($desde)
    {
        $this->desde = $desde;
    }

    /**
     * Obtiene la fecha final del servicio
     */
    public function get_Hasta()
    {
        return $this->hasta;
    }

    /**
     * @param $hasta fecha final del servicio
     */
    public function set_Hasta($hasta)
    {
        $this->hasta = $hasta;
    }

    /**
     * Obtiene el monto total del servicio
     */
    public function get_Total()
    {
        return $this->total;
    }

    /**
     * Monto en $ del total que costo el servicio.
     */
    public function set_Total($total)
    {
        $this->total = $total;
    }

    /**
     * Ingresa un detalle servicio a la base de datos
     * @param $DetalleServicio Objeto detale servicio que se ingresara en la base de datos.
     */
    public function create_Detalle_Servicio($DetalleServicio)
    {
        $data = array(
            'ID' => $DetalleServicio->get_ID(),
            'LOCAL' => $DetalleServicio->get_Local(),
            'PROVEEDOR' => $DetalleServicio->get_Proveedor(),
            'CLIENTE' => $DetalleServicio->get_Cliente(),
            'PERIODO' => $DetalleServicio->get_Periodo(),
            'DESDE' => $DetalleServicio->get_desde(),
            'HASTA' => $DetalleServicio->get_Hasta(),
            'TOTAL' => $DetalleServicio->get_Total()
            );
        //Metodo que inserta los datos a la base de datos
        //Parametros son 'tabla',$data
        $resultado = $this->db->insert('DETALLE_SERVICIO',$data);
        if ($resultado==1){
            return true;
        }
        return false;
    }

    /**
     * modifica un detalle servicio en la base de datos
     * @param $id
     * @param $DetalleServicio Objeto detalle_Servicio que modificara los datos de la base de datos
     */
    public function update_Detalle_Servicio($id, $DetalleServicio)
    {
        $data = array(
            'LOCAL' => $DetalleServicio->get_Local(),
            'PROVEEDOR' => $DetalleServicio->get_Proveedor(),
            'CLIENTE' => $DetalleServicio->get_Cliente(),
            'PERIODO' => $DetalleServicio->get_Periodo(),
            'DESDE' => $DetalleServicio->get_desde(),
            'HASTA' => $DetalleServicio->get_Hasta(),
            'TOTAL' => $DetalleServicio->get_Total()
            );
        $this->db->where('ID',$id);
        $resultado = $this->db->update('DETALLE_SERVICIO',$data);
        if($resultado=1){
            return true;
        }
        return false;
    }

    /**
     * Elimina un detalle de la base de datos
     * @param $id Identificador del servicio que se quiere eliminar
     */
    public function delete_Detalle_Servcio($id)
    {
        $resultado = $this->db->delete('DETALLE_SERVICIO',array('ID' => $id));
        if($resultado == 1){
            return true;
        }
        return false;
    }

    /**
     * Lista la información de la base de datos.
     */
    public function listar_Detalle_Servicio()
    {
        $this->db->select('*')->from('DETALLE_SERVICIO');
                $query = $this->db->get();
                if($query->num_rows()>0){
                    return $query->result();
                }
    }

    /**
     * Genera una tabla con la informacion entregada
     * @param $consulta Informacion que se pasara a tabla
     */
    public function to_table($consulta)
    {
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
