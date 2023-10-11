<?php 

class GeneroView {
    function showGenero($generos) {
        require_once 'templates/header.php';
 
    ?>
    
        <ul>
            <?php foreach ($generos as $genero) { ?>
                <li>
                    <b><a href="filtroCanciones/<?php echo $genero->id_genero?>"><?php echo $genero->descripcion?></a>
                </li>
            <?php } ?>
        </ul>
    
    <?php
    require_once 'templates/footer.php';
    }

}