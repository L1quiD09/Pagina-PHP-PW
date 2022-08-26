<?php include '../template/header.php' ?>
<?php include '../../controller/alquileres/view.php'?>
<section class="content">
    <div>
        <H3>Datos de alquiler</H3>
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
                    <th scope="row" id="alq_id">ID</th>
                    <td><?php echo $row['alq_id'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_id">Socio</th>
                    <td><?php echo $row['soc_nombre'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="pel_id">Pelicula</th>
                    <td><?php echo $row['pel_nombre'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="alq_fecha_desde">Fecha del alquiler</th>
                    <td><?php echo $row['alq_fecha_desde'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="alq_fecha_hasta">Fecha de vencimiento</th>
                    <td><?php echo $row['alq_fecha_hasta'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="alq_valor">Valor</th>
                    <td><?php echo $row['alq_valor'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="alq_fecha_entrega">Fecha de entrega</th>
                    <td><?php echo $row['alq_fecha_entrega'];?></td>
                </tr>
            </tbody>
        </table>
        </div>
        <form action="../../controller/alquileres/view.php" method="post">
            <input type="hidden" name="alq_id" value="<?php echo $row['alq_id'];?>">
        </form>
    </div>

</section>
<?php include '../template/footer.php' ?>