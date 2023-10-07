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
                            <button>Editar</button>
                            <button>Borrar</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

<?php
        require_once 'templates/footer.php';
    }
}
