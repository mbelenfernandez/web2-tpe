<?php

use function PHPSTORM_META\type;

class AbmGeneroView
{
    function listarGeneros($generos, $id_editar = null)
    {
        require_once 'templates/headerAbm.php';
        require_once 'templates/admin_genero.phtml';
        require_once 'templates/footer.php';
    }

    function showFormGenero()
    {
        require_once 'templates/headerAbm.php';
        require_once 'templates/form_genero.phtml';
        require_once 'templates/footer.php';
    }

    function showFormEditGenero($generos = null)
    {
        require_once 'templates/headerAbm.php';
        require_once 'templates/form_edit_genero.phtml';
        require_once 'templates/footer.php';
    }
}
