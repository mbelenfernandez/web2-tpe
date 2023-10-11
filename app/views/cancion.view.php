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
        if (isset($cancion[0]) && isset($cancion[0]->titulo)) {
            $titulo = $cancion[0]->titulo;
        ?>
            <h1>
                <?php echo $titulo; ?>
            </h1>
            <?php $artista = $cancion[0]->artista; ?>
            <h3>
                <?php echo $artista; ?>
            </h3>
            <?php $duracion = $cancion[0]->duracion; ?>
            <h6>
                <?php echo "Duración: " . $duracion . " minutos"; ?>
            </h6>
            <?php $letra = $cancion[0]->letra; ?>
            <pre>
            <?php echo $letra; ?>
            </pre><?php
                } else {
                    echo "No se pudo acceder a la propiedad del arreglo";
                }
                require_once 'templates/footer.php';
            }

        }

