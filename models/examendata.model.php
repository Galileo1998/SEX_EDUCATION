<?php
require_once "libs/dao.php";

// Elaborar el algoritmo de los solicitado aquí.
/*
SELECT `juguetes`.`idjuguetes`,
    `juguetes`.`nomjuguete`,
    `juguetes`.`preciojuguete`,
    `juguetes`.`estadojuguete`
FROM `examen`.`juguetes`;
*/
/**
 * Obtiene los registro de la tabla de modas
 *
 * @return Array
 */
function obtenerListas()
{
    $sqlstr = "select `juguetes`.`idjuguetes`,
              `juguetes`.`nomjuguete`,
              `juguetes`.`preciojuguete`,
              `juguetes`.`estadojuguete`
          from `examen`.`juguetes`";

    $modas = array();
    $modas = obtenerRegistros($sqlstr);
    return $modas;
}

?>
