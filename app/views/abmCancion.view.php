<?php

class AbmCancionView
{
    function listarCanciones($canciones, $generos, $id_editar = null)
    {
        require_once 'templates/headerAbm.php';
        require_once 'templates/Cancion_Completa.phtml';
        require_once 'templates/form_cancion.phtml';
        require_once 'templates/footer.php';
    }

    function listarLetra($cancion, $id_editar = null)
    {
        require_once 'templates/headerAbm.php';
        require_once 'templates/ver_letra.phtml';
        require_once 'templates/footer.php';
    }

    function editarLetra($canciones, $id_editar = null)
    {
        require_once 'templates/headerAbm.php';
        require_once 'templates/editar_letra.phtml';
        require_once 'templates/footer.php';
    }

    function showFormCancion($generos)
    {
        require_once 'templates/headerAbm.php';
        require_once 'templates/form_cancion.phtml';
        require_once 'templates/footer.php';
    }
}
