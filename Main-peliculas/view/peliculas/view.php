<?php include '../template/header.php' ?>
<?php include '../../controller/peliculas/view.php'?>
<section class="content">
    <div>
        <H3>Datos de pelicula</H3>
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
                    <th scope="row" id="pel_id">ID</th>
                    <td><?php echo $row['pel_id'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="gen_id">Genero</th>
                    <td><?php echo $row['gen_nombre'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="pel_nombre">Nombre</th>
                    <td><?php echo $row['pel_nombre'];?></td>
                <tr>
                    <th scope="row" id="pel_costo">Costo</th>
                    <td><?php echo $row['pel_costo'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="pel_fecha_estreno">Fecha de estreno</th>
                    <td><?php echo $row['pel_fecha_estreno'];?></td>
                </tr>

            </tbody>
        </table>
        </div>
        <form action="../../controller/peliculas/view.php" method="post">
            <input type="hidden" name="pel_id" value="<?php echo $row['pel_id'];?>">
        </form>
    </div>

</section>
<?php include '../template/footer.php' ?>