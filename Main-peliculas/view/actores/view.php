<?php include '../template/header.php' ?>
<?php include '../../controller/actores/view.php'?>
<section class="content">
    <div>
        <H3>Datos de actor</H3>
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
                        <th scope="row" id="act_id">ID</th>
                        <td><?php echo $row['act_id'];?></td>
                    </tr>
                    <tr>
                        <th scope="row" id="act_nombre">Nombre</th>
                        <td><?php echo $row['act_nombre'];?></td>
                    </tr>

                </tbody>
        </table>
        </div>
        <form action="../../controller/actores/view.php" method="post">
            <input type="hidden" name="act_id" value="<?php echo $row['act_id'];?>">
        </form>
    </div>

</section>
<?php include '../template/footer.php' ?>