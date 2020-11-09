<?php require_once INCLUDES.'inc_header.php'; ?>

<section class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center" style="background: #fff">

                <h3 class="text-center mt-3 ">LISTA DE USUARIOS</h3>
                <br>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Permisos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $usuario):  ?>

                            <tr>
                                <th><?php echo $usuario->id ?></th>
                                <td><?php echo $usuario->apellido.', '.$usuario->nombre ?></td>
                                <td><?php echo $usuario->sexo ?></td>
                                <td><?php echo $usuario->correo ?></td>
                                <td>
                                    <?php 
                                        if($usuario->check1){
                                            echo '<button class="btn btn-info"><i class="fas fa-user-check"></i></button>';
                                        }else{
                                            echo '<button class="btn btn-danger"><i class="fas fa-user-times"></i></button>';
                                        }

                                        if($usuario->check2){
                                            echo '<button class="btn btn-info ml-2"><i class="fas fa-user-check"></i></button>';
                                        }else{
                                            echo '<button class="btn btn-danger ml-2"><i class="fas fa-user-times"></i></button>';
                                        }
                                    ?>
                                </td>
                            </tr>

                        <?php endforeach  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php require_once INCLUDES.'inc_footer.php'; ?>
