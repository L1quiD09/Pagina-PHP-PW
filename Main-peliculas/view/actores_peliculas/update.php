<?php include '../template/header.php' ?>
<?php include '../../controller/actores_peliculas/update.php'?>
<section class="content">
    <?php $row = $result_apl->fetch_assoc() ?>
    <div class="container p-3">
        <h2>Actualizar Actor/Actriz-Películas</h2>

        <form class="row g-3 needs-validation" action="../../controller/actores_peliculas/update.php" method="post" novalidate>
            <div class="col-md-6">
                <label for="act_input" class="form-label">Actor/Actriz</label>
                <select class="form-select form-control" id="act_id" name="act_id" required>
                    <option selected disabled value="">Elija un actor/actriz</option>
                    <?php
                    if ($result_act->num_rows > 0){
                        while($row_act = $result_act->fetch_assoc()) {
                            if($row["act_id"]==$row_act["act_id"]){
                                echo '<option selected name="act_id" value="'.$row_act["act_id"].'">'.$row_act["act_nombre"].'</option>';
                            }else{
                                echo '<option name="act_id" value="'.$row_act["act_id"].'">'.$row_act["act_nombre"].'</option>';
                            }
                        }
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione un actor/actriz.
                </div>
            </div>
            <div class="col-md-6">
                <label for="pel_input" class="form-label">Película</label>
                <select class="form-select form-control" id="pel_id" name="pel_id" required>
                    <option selected disabled value="">Elija una película</option>
                    <?php
                    if ($result_pel->num_rows > 0){
                        while($row_pel = $result_pel->fetch_assoc()) {
                            if($row["pel_id"]==$row_pel["pel_id"]){
                                echo '<option selected name="pel_id" value="'.$row_pel["pel_id"].'">'.$row_pel["pel_nombre"].'</option>';
                            }else{
                                echo '<option name="pel_id" value="'.$row_pel["pel_id"].'">'.$row_pel["pel_nombre"].'</option>';
                            }
                    }
                }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Seleccione una película.
                </div>
            </div>
            
            <div class="col-md-12">
                <label for="papel_input" class="form-label">Papel</label>
                <input type="text" class="form-control " id="apl_papel" name="apl_papel" placeholder="Ingrese un papel" value="<?php echo $row['apl_papel']?>"required>
                <div  class="invalid-feedback">
                    Ingrese un papel.
                </div>
            </div>

            <div class="col-12">
                <input type="hidden" name="apl_id" value="<?php echo $row['apl_id'];?>">
                <br><button class="btn btn-primary" type="submit"><i class="fa-solid fa-pen p-1"></i>Actualizar</button>
            </div>
        </form>
    </div>
</section>
<script>
(function() {
    'use strict'


    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
<?php include '../template/footer.php' ?>