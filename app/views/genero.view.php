<?php 

class GeneroView {
    function showGenero($generos) {
        require_once 'templates/header.php';
 
    ?>
    
        <ul>
            <?php foreach ($generos as $genero) { ?>
                <li>
                    <b><a href="canciones"><?php echo $genero->descripcion?></a>
                </li>
            <?php } ?>
        </ul>
    
    <?php
    require_once 'templates/footer.php';
    }  
    
    function showCanciones($canciones)
    {
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

}