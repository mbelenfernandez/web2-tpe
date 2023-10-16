<?php

class ErrorView
{

    public function showError($error)
    {
        require 'templates/header.phtml';
        require_once 'templates/show_error.phtml';
        require 'templates/footer.phtml';
    }
}
