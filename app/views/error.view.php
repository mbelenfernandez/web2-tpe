<?php 

class ErrorView { 

    public function showError($error) {
        require 'templates/header.php';
        require_once 'templates/show_error.phtml';
        require 'templates/footer.php';
    }
}