<?php

error_reporting(E_ALL);

/**
 * servicios - class.Tipo_Documento.php
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
 * include DBConexion
 *
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
require_once('class.DBConexion.php');

/**
 * include Tipo_servicio
 *
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
require_once('class.Tipo_servicio.php');

/**
 * include Controles_Formulario
 *
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
require_once('interface.Controles_Formulario.php');

/* user defined includes */
// section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FC4-includes begin
// section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FC4-includes end

/* user defined constants */
// section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FC4-constants begin
// section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FC4-constants end

/**
 * Short description of class Tipo_Documento
 *
 * @access public
 * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
 */
class Tipo_Documento
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Identificador del Tipo de documento
     *
     * @access private
     * @var int
     */
    private $identificador_Documento = 0;

    /**
     * Nombre del tipo de documento
     *
     * @access private
     * @var String
     */
    private $nombre_Tipo_Documento = null;

    // --- OPERATIONS ---

    /**
     * Constructor por defecto
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return void
     */
    public function __construct()
    {
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FD3 begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FD3 end
    }

    /**
     * Obtiene el evalor de la variable identificador_Documento del objeto Tipo
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return int
     */
    public function getIdentificador_Documento()
    {
        $returnValue = (int) 0;

        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FD6 begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FD6 end

        return (int) $returnValue;
    }

    /**
     * Asigna un valor a la variable Identificador_Documento
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int identificador identificador que se le asignara a la variable
     * @return void
     */
    public function setIdentificador_Documento($identificador)
    {
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FDA begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FDA end
    }

    /**
     * Obtiene el valor de la variable nombre_tipo_Documento del objeto
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @return java_lang_String
     */
    public function getNombre_Tipo_Documento()
    {
        $returnValue = null;

        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FDF begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FDF end

        return $returnValue;
    }

    /**
     * Asigna un valor a la variable nombre_Tipo_Documento del objeto
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  String nombre_tipo_documento valor que se le quiere asignar a la variable
     * @return void
     */
    public function setNombre_Tipo_Documento( String $nombre_tipo_documento)
    {
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FE3 begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FE3 end
    }

    /**
     * Agrega un tipo de documento a la base de datos
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  Tipo_Documento tipo_documento objeto que será insertado en la base de datos.
     * @return void
     */
    public static function ingresar_Tipo_Documento( Tipo_Documento $tipo_documento)
    {
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FEA begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FEA end
    }

    /**
     * modifica un tipo de documento existente en la base de datos
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int identificador identificador del documento que se desea modificar
     * @param  Tipo_Documento tipo_documento Objeto que contiene los valores que se desean modificar en la base de datos.
     * @return void
     */
    public static function modificar_Tipo_Documento($identificador,  Tipo_Documento $tipo_documento)
    {
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FEF begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FEF end
    }

    /**
     * Elimina un tipo de documento.
     *
     * @access public
     * @author Andrés Olmos Navia, <andres.olmos.n@gmail.com>
     * @param  int identificador identificador del tipo de documento que se desea eliminar.
     * @return void
     */
    public static function eliminar_Tipo_Documento($identificador)
    {
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FF6 begin
        // section -84-17-6-96--1bde6f9e:15212f5fa88:-8000:0000000000000FF6 end
    }

} /* end of class Tipo_Documento */

?>