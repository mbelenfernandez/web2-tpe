<?php

class CancionView
{
    function showCanciones($canciones, $genero =null)
    {
        require_once 'templates/header.phtml';
        require_once 'templates/listar_canciones.phtml';
        require_once 'templates/footer.phtml';
    }

    function showCancion($cancion)
    {
        require_once 'templates/header.phtml';
        require_once 'templates/cancion.phtml';
        require_once 'templates/footer.phtml';
    }    
    
}
