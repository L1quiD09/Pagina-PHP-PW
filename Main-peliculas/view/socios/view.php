<?php include '../template/header.php' ?>
<?php include '../../controller/socios/view.php'?>
<section class="content">
    <div>
        <H3>Datos de socio</H3>
        <br>
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
                    <th scope="row" id="soc_id">ID</th>
                    <td><?php echo $row['soc_id'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_nombre">Nombre</th>
                    <td><?php echo $row['soc_nombre'];?></td>
                <tr>
                    <th scope="row" id="soc_cedula">Cedula</th>
                    <td><?php echo $row['soc_cedula'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_direccion">Direccion</th>
                    <td><?php echo $row['soc_direccion'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_telefono">Telefono</th>
                    <td><?php echo $row['soc_telefono'];?></td>
                </tr>
                <tr>
                    <th scope="row"id="soc_correo">Correo</th>
                    <td><?php echo $row['soc_correo'];?></td>
                </tr>
            </tbody>
        </table>
        </div>
        <form action="../../controller/socios/view.php" method="post">
            <input type="hidden" name="soc_id" value="<?php echo $row['soc_id'];?>">
        </form>
    </div>

</section>
<?php include '../template/footer.php' ?>