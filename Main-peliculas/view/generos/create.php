<?php include '../template/header.php' ?>

<section class="content">

    <div class="container p-3">
    <h2>Nuevo Género Cinemátografico</h2>
        <form class="row g-3 needs-validation" action ="../../controller/generos/create.php" method = "POST" novalidate>
            <div class="col-md-12">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="gen_nombre" name="gen_nombre" placeholder="Ingrese el género cinematográfico" required>
                <div class="valid-feedback">
                    Válido!
                </div>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese un género cinematográfico.
                </div>
            </div>
            
            <div class="col-12">
            <br><button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk p-1"></i>Grabar</button>
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
