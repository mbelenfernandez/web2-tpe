<?php

class CancionView
{

    function showCanciones($canciones)
    {
        require_once 'templates/header.php';
?>
        <ul class="list-group">
            <?php foreach ($canciones as $cancion) { ?>
                <li class="list-group-item">
                    <div>
                        <a href="#" class="text-decoration-none text-dark"><b><?php echo $cancion->titulo ?></b></a>
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
        if (isset($cancion[0]) && isset($cancion[0]->titulo)) {
            $titulo = $cancion[0]->titulo;
            $artista = $cancion[0]->artista;
            $duracion = $cancion[0]->duracion;
            $letra = $cancion[0]->letra;
            $genero = $cancion[0]->descripcion;
            ?>
        
            <div class="container mt-4">
                <h1 class="display-4"><?php echo $genero; ?></h1>
                <h2><?php echo $titulo; ?></h2>
                <h3><?php echo $artista; ?></h3>
                <h6><?php echo "Duración: " . $duracion . " minutos"; ?></h6>
                <pre class="mt-4"><?php echo $letra; ?></pre>
            </div>
        
            <?php
        } else {
            echo "No se pudo acceder a la propiedad del arreglo";
        }
        require_once 'templates/footer.php';
    }    
    
}
