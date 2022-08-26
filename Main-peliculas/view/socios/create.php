<?php include '../template/header.php' ?>

<section class="content">

    <div class="container p-3">
    <h2>Nuevo Socio</h2>
        <form class="row g-3 needs-validation" action ="../../controller/socios/create.php" method = "POST" novalidate>
            <div class="col-md-12">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="soc_nombre" name="soc_nombre" placeholder="Ingrese su nombre" required>
                <div class="valid-feedback">
                    Válido!
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Cédula</label>

                <input type="number" class="form-control" id="soc_cedula" name="soc_cedula" placeholder="Ingrese un número de cédula." required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese un número de cédula.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label">Dirección</label>
                <input type="text" class="form-control " id="soc_direccion" name="soc_direccion" placeholder="Ingrese su dirección" required>
                <div  class="invalid-feedback">
                    Ingrese una dirección.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Teléfono</label>

                <input type="number" class="form-control" id="soc_telefono" name="soc_telefono" placeholder="Ingrese un número telefónico." required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese un número telefónico.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label">Correo</label>
                <input type="email" class="form-control " id="soc_correo" name="soc_correo" placeholder="Ingrese un correo electrónico" required>
                <div  class="invalid-feedback">
                    Ingrese un correo electrónico.
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
