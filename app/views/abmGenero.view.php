<?php

use function PHPSTORM_META\type;

class AbmGeneroView
{
    function listarGeneros($generos)
    {
        require_once 'templates/header.php';
?>
        <h3>Listado de géneros</h3>
        <table>
            <thead>
                <th> Id
                </th>
                <th> Descripción
                </th>
                <th> Acción
                </th>
            </thead>
            <tbody>
                <?php foreach ($generos as $genero) { ?>
                    <tr>
                        <td>
                            <?php echo $genero->id_genero ?>
                        </td>
                        <td>
                            <?php echo $genero->descripcion ?>
                        </td>
                        <td>
                            <a href="editarGenero/<?= $genero->id_genero ?>" type="button" class='btn btn-success ml-auto'>Editar</a>
                            <a href="eliminarGenero/<?= $genero->id_genero ?>" type="button" class='btn btn-danger ml-auto'>Borrar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div>
            <h3>Agregar nuevo género</h3>
            <?php require_once 'templates/form_genero.phtml'; ?>
        </div>
<?php
        require_once 'templates/footer.php';
    }

    function showFormGenero()
    {
        require_once 'templates/header.php';
        require_once 'templates/form_genero.phtml';
        require_once 'templates/footer.php';
    }
}