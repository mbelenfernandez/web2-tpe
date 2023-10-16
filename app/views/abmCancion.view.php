<?php

class AbmCancionView
{
    function showCanciones($canciones, $generos, $id_editar = null)
    {
        require_once 'templates/headerAbm.phtml';
        require_once 'templates/admin_cancion.phtml';
        require_once 'templates/form_cancion.phtml';
        require_once 'templates/footer.phtml';
    }

    function showLetra($cancion, $id_editar = null)
    {
        require_once 'templates/headerAbm.phtml';
        require_once 'templates/ver_letra.phtml';
        require_once 'templates/footer.phtml';
    }

    function editLetra($canciones, $id_editar = null, $error = null)
    {
        require_once 'templates/headerAbm.phtml';
        require_once 'templates/editar_letra.phtml';
        require_once 'templates/footer.phtml';
    }

    function showFormCancion($generos)
    {
        require_once 'templates/headerAbm.phtml';
        require_once 'templates/form_cancion.phtml';
        require_once 'templates/footer.phtml';
    }
}
