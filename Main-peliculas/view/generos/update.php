<?php include '../template/header.php' ?>
<?php include '../../controller/generos/update.php'?>
<section class="content">
    <?php $row = $result -> fetch_assoc()?>
    <div class="container p-3">
    <h2>Nuevo Género Cinemátografico</h2>
        <form class="row g-3 needs-validation" action="../../controller/generos/update.php" method="post" novalidate>
            <div class="col-md-12">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="gen_nombre" name="gen_nombre" placeholder="Ingrese el género cinematográfico" value = "<?php echo $row['gen_nombre'];?>"required>
                <div class="valid-feedback">
                    Válido!
                </div>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese un género cinematográfico.
                </div>
                
            </div>
            
            <div class="col-12">
                <input type="hidden" name="gen_id" value="<?php echo $row['gen_id'];?>">
                <br><button class="btn btn-primary" type="submit"><i class="fa-solid fa-pen p-1"></i>Actualizar</button>
            
            </div>
        </form>
    </div>
</section>
<script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
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