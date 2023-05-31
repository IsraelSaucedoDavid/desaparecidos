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
                <form action="">

                
                    <div class="col-md-3">
                        <div class="form-group">
                            <h6> Numero Interior</h6>
                            <input type="text" name="num_int" class="form-control " placeholder="x" autofocus>
                        </div>

                        <br>

                        <div class="form-group">
                            <h6>Numero CDI</h6>
                            <input type="text" name="num_cdi" class="form-control" placeholder="x" autofocus>
                        </div>

                        <br>

                        <div class="form-group">
                            <h6>Municipio</h6>
                            <input type="text" name="municipio" class="form-control" placeholder="x" autofocus>
                        </div>

                        <br>

                        <div class="form-group">
                            <h6>Colonia</h6>
                            <input type="text" name="colonia" class="form-control" placeholder="x" autofocus>
                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <h6>Fecha de denuncia</h6>
                            <input type="date" name="fe_denuncia" class="form-control" placeholder="x" autofocus>
                        </div>

                        <br>

                        <div class="form-group">
                            <h6>Fecha de denuncia</h6>
                            <input type="date" name="de_ausencia" class="form-control" placeholder="x" autofocus>
                        </div>

                        <br>

                        <div class="form-group">
                            <h6>Denunciante</h6>
                            <input type="text" name="denunciante" class="form-control" placeholder="x" autofocus>
                        </div>

                        <br>

                        <div class="form-group">
                            <h6>Victima</h6>
                            <input type="text" name="victima" class="form-control" placeholder="x" autofocus>
                        </div>

                    </div>


                    <br>

                    <div class="form-group">
                        <h6>Fecha de Nacimiento</h6>
                        <input type="date" name="fe_nacimiento" class="form-control" placeholder="x" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Edad</h6>
                        <input type="int" name="edad" class="form-control" placeholder="x" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Sexo</h6>
                        <input type="text" name="sexo" class="form-control" placeholder="x" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Estatus</h6>
                        <input type="text" name="estatus" class="form-control" placeholder="x" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Delitos</h6>
                        <input type="text" name="delito" class="form-control" placeholder="x" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Fecha de localización</h6>
                        <input type="text" name="fe_localizacion" class="form-control" placeholder="x" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Agente Fiscal</h6>
                        <input type="text" name="mp" class="form-control" placeholder="x" autofocus>
                    </div>
                </form>
            </div>

     

        <!--Esto pertenece a la imprenta de la información-->
        <div class="col-md-1">

        </div>
    </div>

</div>



<?php include("includes/footer.php"); ?>