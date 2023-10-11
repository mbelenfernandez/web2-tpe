<?php

class GeneroView
{
    function showGenero($generos)
    {
        require_once 'templates/header.php';
        require_once 'templates/listar_genero.phtml';
        require_once 'templates/footer.php';
    }
}
