<?php

class AbmCancionView
{
    function listarCanciones($canciones)
    {
        require_once 'templates/header.php';
?>

        <table>
            <thead>
                <th>Id</th>
                <th>Título</th>
                <th>Artista</th>
                <th>Duración</th>
                <th>Acción</th>
            </thead>
            <tbody>
                <?php foreach ($canciones as $cancion) { ?>
                    <tr>
                        <td>
                            <?php echo $cancion->id_cancion ?>
                        </td>
                        <td>
                            <?php echo $cancion->titulo ?>
                        </td>
                        <td>
                            <?php echo $cancion->artista ?>
                        </td>
                        <td>
                            <?php echo $cancion->duracion ?>
                        </td>
                        <td>
                            <?php echo $cancion->id_cancion ?>
                        </td>
                        <td>
                            <a href="editarCancion/<?= $cancion->id_cancion ?>" type="button" class='btn btn-success ml-auto'>Editar</a>
                            <a href="eliminarCancion/<?= $cancion->id_cancion ?>" type="button" class='btn btn-danger ml-auto'>Borrar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <h3>Agregar nueva canción</h3>
            <?php require_once 'templates/form_cancion.phtml'; ?>
        </div>

<?php
        require_once 'templates/footer.php';
    }

    function showFormCancion()
    {
        require_once 'templates/header.php';
        require_once 'templates/form_cancion.phtml';
        require_once 'templates/footer.php';
    }
}
