<?php  include '../template/header.php'?>
<?php  include '../../controller/peliculas/index.php' ?>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 mt-5">
        <div class="card">
            <div class="card-header">
                <b>Peliculas registradas</b>
                <a href="createPeliculas.php"><button type="button" class="btn btn-success"
                        style="margin-left:450px;">Agregar</button></a>
            </div>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Ord</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Fechas de estreno</th>
                        <th scope="col" colspan="3">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["pel_id"].'</th>';
                                echo'<td>'.$row["gen_id"].'</td>';
                                echo'<td>'.$row["pel_nombre"].'</td>';
                                echo'<td>'.$row["pel_costo"].'</td>';
                                echo'<td>'.$row["pel_fecha_estreno"].'</td>';
                                echo'
                                <td><button><a href="update.php "><i class="fa fa-pen text-success"></i></a></button> 
                                <button><a href="view.php"><i class="fa fa-eye text-primary"></i></a></button>
                                <button><a href="delete.php"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></button></td>';
                                echo '</tr>';
                            }
                            } else {
                            echo "0 results";
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php  include '../template/footer.php'?>