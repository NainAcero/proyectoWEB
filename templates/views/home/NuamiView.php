<?php require_once INCLUDES.'inc_header.php'; ?>

<section class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center" style="background: #fff">

                <h3 class="text-center mt-3">FORMULARIO DE REGISTRO</h3>

                <form class="mt-4 bee_add_usuario">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombre: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Apellido: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="apellido" id="apellido">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sexo: </label>
                        <div class="col-sm-10 text-left">
                            <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="Hombre" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Hombre
                            </label>

                            <input class="form-check-input ml-1" type="radio" name="sexo" id="exampleRadios1" value="Mujer">
                            <label class="form-check-label ml-4" for="exampleRadios1">
                                Mujer
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Correo: </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="correo" id="email">
                        </div>
                    </div>

                    <div class="form-check text-left ml-5">
                        <input class="form-check-input" type="checkbox" id="check1" >
                        <label class="form-check-label" for="defaultCheck1">
                            Deseo recifir información sobre novedades y ofertas
                        </label>
                    </div>

                    <div class="form-check text-left ml-5">
                        <input class="form-check-input" type="checkbox" id="check2">
                        <label class="form-check-label" for="defaultCheck1">
                            Declaro haber leído y aceptado las condiciones generales del programa y la normaltiva sobre protección de datos
                        </label>
                    </div>

                    <div class="text-left ml-5 mt-3 mb-3">
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</section>

<?php require_once INCLUDES.'inc_footer.php'; ?>
