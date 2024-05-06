<?php

/**
 * Script Actividad 1.2.
 * Script con dos funciones comentadas y con los siguientes elementos:
 *
 * - Parámetros de entrada de la función.
 * - Parámetros de devolución de la función.
 * - Autor y versión del script.
 * - Una anotación que solo sea visible en la documentación para desarrolladores.
 *
 * @author Candela Sánchez
 * @version 1.0
 *
 * Comentario solo visible para los desarrolladores: Script hecho por Candela Sánchez
 */

/**
 * Función para contar e imprimir diez números enteros (el número entero introducido).
 *
 * Esta función permite introducir un número y contar desde ese número hasta
 * el número más nueve consecutivos, imprimiendo cada uno de los números.
 *
 * @param int $inicio El número entero introducido para comenzar el conteo.
 * @return void No devuelve ningún valor.
 */
function contarDesde($numeroInicio) {
    for ($i = $numeroInicio; $i < $numeroInicio + 10; $i++) {
        echo $i . "<br>";
    }
}

/**
 * Función que cuenta el número de letras que tiene el nombre que pases por parámetro.
 *
 * La función recibe un nombre y devuelve el número de letras que tiene dicho nombre.
 *
 * @param string $nombre El nombre introducido del que se contará las letras.
 * @return int El número de letras que tiene el nombre introducido.
 */
function contarLetrasNombre($nombreIntroducido) {
    return strlen($nombreIntroducido);
}
?>
