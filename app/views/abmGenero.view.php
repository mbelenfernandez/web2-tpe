<?php

use function PHPSTORM_META\type;

class AbmGeneroView
{
    function showGeneros($generos, $id_editar = null)
    {
        require_once 'templates/headerAbm.phtml';
        require_once 'templates/admin_genero.phtml';
        require_once 'templates/footer.phtml';
    }

    function showFormGenero()
    {
        require_once 'templates/headerAbm.phtml';
        require_once 'templates/form_genero.phtml';
        require_once 'templates/footer.phtml';
    }

    function showFormEditGenero($generos = null)
    {
        require_once 'templates/headerAbm.phtml';
        require_once 'templates/form_edit_genero.phtml';
        require_once 'templates/footer.phtml';
    }
}
