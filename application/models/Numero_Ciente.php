<?php

error_reporting(E_ALL);

/**
 * servicios - class.Numero_Ciente.php
 *
 * $Id$
 *
 * This file is part of servicios.
 *
 * Automatically generated on 21.01.2016, 18:26:46 with ArgoUML PHP module 
 * (last revised $Date: 2008-04-19 08:22:08 +0200 (Sat, 19 Apr 2008) $)
 *
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Proveedor
 *
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
require_once('class.Proveedor.php');

/**
 * include Tipo_servicio
 *
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
require_once('class.Tipo_servicio.php');

/* user defined includes */
// section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000001120-includes begin
// section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000001120-includes end

/* user defined constants */
// section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000001120-constants begin
// section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000001120-constants end

/**
 * Short description of class Numero_Ciente
 *
 * @access public
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
class Numero_Ciente extends CI_Model
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
    private $rut_proveedor = 0;

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
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000001134 begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000001134 end
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
        $returnValue = (int) 0;

        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:00000000000010FC begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:00000000000010FC end

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
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001100 begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001100 end
    }

    /**
     * Obtiene el rut al que pertenece ese numero de cliente
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return String
     */
    public function getRut()
    {
        $returnValue = null;

        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001105 begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001105 end

        return $returnValue;
    }

    /**
     * Asigna un valor a la variable rut_Proveedor
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int rut Rut del proveedor a  asignar
     * @return void
     */
    public function setRut($rut)
    {
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:000000000000110E begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:000000000000110E end
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
        $returnValue = (int) 0;

        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001113 begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001113 end

        return (int) $returnValue;
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
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001115 begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001115 end
    }

    /**
     * Ingresa un numero de cliente a la base de datos
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  Numero_Ciente Numero_Cliente Objeto cliente que se desea ingrear
     * @return void
     */
    public static function ingresar_Numero_Cliente( Numero_Ciente $Numero_Cliente)
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
    public static function modificar_Numero_Cliente($id,  Numero_Ciente $numero_cliente)
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
    public static function eliminar_Numero_Cliente($id)
    {
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001127 begin
        // section -84-17-6-96--31b9eddf:1521dec9e48:-8000:0000000000001127 end
    }

} /* end of class Numero_Ciente */

?>