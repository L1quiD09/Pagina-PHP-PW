<?php  include '../template/header.php'?>
<?php  include '../../controller/socios/index.php' ?>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-7 mt-5">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col"><b>Socios registrados</b></div>
                        <div class="col"></div>
                        <div class="col"><a href="create.php"><button type="button" class="btn btn-success">Agregar</button></a></div>
                    </div>
                </div>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Ord</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <?php
                            if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                echo '<th scope="row">'.$row["soc_id"].'</th>';
                                echo'<td>'.$row["soc_cedula"].'</td>';
                                echo'<td>'.$row["soc_nombre"].'</td>';
                                echo'<td>'.$row["soc_telefono"].'</td>';
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
                </table>
            </div>
        </div>
    </div>
<?php  include '../template/footer.php'?>