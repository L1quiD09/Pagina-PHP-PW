<?php include '../template/header.php' ?>
<?php include '../../controller/actores/delete.php'?>
<section class="content">
    <div>
        <H3>Eliminar actor</H3>
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
                        <th scope="row">ID</th>
                        <td><?php echo $row['act_id'];?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td><?php echo $row['act_nombre'];?></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <form action="../../controller/actores/delete.php" method="post">
            <input type="hidden" name="act_id" value="<?php echo $row['act_id'];?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
</section>
<?php include '../template/footer.php' ?>