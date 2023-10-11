<?php

class CancionView
{
    function showCanciones($canciones)
    {
        require_once 'templates/header.php';
        require_once 'templates/listar_canciones.phtml';
        require_once 'templates/footer.php';
    }

    function showCancion($cancion)
    {
        require_once 'templates/header.php';
        require_once 'templates/listar_cancion.phtml';
        require_once 'templates/footer.php';
    }    
    
}
