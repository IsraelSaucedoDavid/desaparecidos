<?php include("db.php"); ?>
<?php include("includes/header.php"); ?>


<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" type="button" class="btn btn-primary">Inicio</a>
    </div>

</nav>

.<div class="container p-4">

    <div class="row">



        <!--Esto pertenece al formulario-->

        <div class="card card-body">
            <form action="save.php" method="POST">


                <div class="col-md-3">
                    <div class="form-group">
                        <h6> Numero Interior</h6>
                        <input type="text" name="num_int" class="form-control" maxlength="20" autofocus required>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Numero CDI</h6>
                        <input type="text" name="num_cdi" class="form-control" maxlength="25" autofocus required>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Municipio</h6>
                        <select name="municipio" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                            <option selected>Municipio</option>
                            <?php
                            $consulta = "SELECT * FROM municipios";
                            $ejecutar = mysqli_query($con, $consulta) or die(mysqli_error($con));

                            ?>

                            <?php foreach ($ejecutar as $opciones) : ?>

                                <option value="<?php echo $opciones['id']  ?>"><?php echo $opciones['municipio']  ?>"</option>

                            <?php endforeach ?>
                        </select>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Colonia</h6>
                        <input type="text" name="colonia" class="form-control" maxlength="50" autofocus required>
                    </div>
                </div>

                <br>

                <div class="col-md-3">

                    <div class="form-group">
                        <h6>Fecha de denuncia</h6>
                        <input type="date" name="fe_denuncia" class="form-control" autofocus required>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Fecha de denuncia</h6>
                        <input type="date" name="de_ausencia" class="form-control" autofocus required>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Denunciante</h6>
                        <input type="text" name="denunciante" class="form-control" maxlength="50" autofocus required>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Victima</h6>
                        <input type="text" name="victima" class="form-control" maxlength="50" autofocus required>
                    </div>

                </div>


                <br>

                <div class="form-group">
                    <h6>Fecha de Nacimiento</h6>
                    <input type="date" name="fe_nacimiento" class="form-control" autofocus required>
                </div>

                <br>

                <div class="form-group">
                    <h6>Edad</h6>
                    <input type="number" name="edad" class="form-control" min="1" max="110" oninput="limitarDigitos(this)" autofocus required>
                </div>

                <br>

                <div class="form-group">
                    <h6>Sexo</h6>
                    <select name="sexo" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                        <option selected>SEXO</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>

                <br>

                <div class="form-group">
                    <h6>Estatus</h6>
                    <select name="estatus" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                        <option selected>Estatus</option>
                        <option value="no localizado">No localizado</option>
                        <option value="localizado">Localizado</option>
                        <option value="desaparecido">Desaparecido</option>
                    </select>
                </div>

                <br>

                <div class="form-group">
                    <h6>Delitos</h6>
                    <select name="delito" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                        <option selected>Delitos</option>
                        <option value="desaparicion forzada">Desaparición forzada</option>
                        <option value="desaparicion por particulares">Desaparición por particulares</option>
                        <option value="delitos vinculados">Delitos vinculados</option>
                    </select>
                </div>

                <br>

                <div class="form-group">
                    <h6>Fecha de localización</h6>
                    <input type="date" name="fe_localizacion" class="form-control" autofocus required>
                </div>

                <br>

                <div class="form-group">
                    <h6>Agente Fiscal</h6>
                    <select name="mp" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                        <option selected>Agente Fiscal</option>
                        <?php
                        $consulta = "SELECT * FROM mp";
                        $ejecutar = mysqli_query($con, $consulta) or die(mysqli_error($con));

                        ?>

                        <?php foreach ($ejecutar as $mp) : ?>

                            <option value="<?php echo $mp['id']  ?>"><?php echo $mp['mp']  ?>"</option>

                        <?php endforeach ?>     
                    </select>
                </div>

                <!--Esto pertenece a la imprenta de la información-->
                <div class="col-md-1">

                </div>

                <br>

                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
            </form>
        </div>




    </div>

</div>



<?php include("includes/footer.php"); ?>