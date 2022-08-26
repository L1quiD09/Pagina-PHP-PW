<?php include '../template/header.php' ?>
<?php include '../../controller/actores_peliculas/delete.php'?>
<section class="content">
    <div>
        <H3>Eliminar actor-pelicula</H3>
        <br><br>
        <div class="container">
            <?php
                $row = $result->fetch_assoc();
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Datos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" id="apl_id">ID</th>
                        <td><?php echo $row['apl_id'];?></td>
                    </tr>
                    <tr>
                        <th scope="row" id="act_id">Nombre actor</th>
                        <td><?php echo $row['act_nombre'];?></td>
                    </tr>
                    <tr>
                        <th scope="row" id="pel_id">Nombre pelicula</th>
                        <td><?php echo $row['pel_nombre'];?></td>
                    </tr>
                    <tr>
                        <th scope="row" id="apl_papel">Papel</th>
                        <td><?php echo $row['apl_papel'];?></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <form action="../../controller/actores_peliculas/delete.php" method="post">
            <input type="hidden" name="apl_id" value="<?php echo $row['apl_id'];?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
        <!--<button type="button" class="btn btn-danger"> <img src="../../img/bote-de-basura-abierto.png" width="30px" heigth="30px">Eliminar</button>-->

    </div>

</section>
<?php include '../template/footer.php' ?>