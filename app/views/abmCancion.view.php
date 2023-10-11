<?php

class AbmCancionView
{
    function listarCanciones($canciones)
    {
        require_once 'templates/header.php';
        require_once 'templates/Cancion_Completa.phtml';
        require_once 'templates/form_cancion.phtml';
        require_once 'templates/footer.php';
    }

    function showFormCancion()
    {
        require_once 'templates/header.php';
        require_once 'templates/form_cancion.phtml';
        require_once 'templates/footer.php';
    }
}
