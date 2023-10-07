<?php

class CancionView
{

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

    function showCancion($cancion)
    {
        require_once 'templates/header.php';
        var_dump($cancion);
        require_once 'templates/footer.php';
    }
}