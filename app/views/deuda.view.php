<?php 

class GeneroView {
    function showGenero($generos) {
        require_once 'templates/header.php';
 
    ?>
    
        <ul>
            <?php foreach ($generos as $genero) { ?>
                <li>
                    <div>
                        <b><a href=""><?php echo $genero->descripcion ?></a></b>
                    </div>
                </li>
            <?php } ?>
        </ul>
    
    <?php
    require_once 'templates/footer.php';
    }    

    function showCancion($canciones) {
        require_once 'templates/header.php';
    ?>
        <ul>
            <?php foreach ($canciones as $cancion) { ?>
                <li>
                    <div>
                        <b><a><?php echo $cancion->titulo ?></a></b>
                    </div>
                </li>
            <?php } ?>
        </ul>   
    <?php
    require_once 'templates/footer.php';
    }

    public function showError($error) {
        require 'templates/header.php';
        
        echo "
            <div class='alert alert-danger' role='alert'>
                $error
            </div> 
        ";
        require 'templates/footer.php';
    }
}