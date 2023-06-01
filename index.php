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
                        <input type="text" name="num_int" class="form-control " placeholder="x" maxlength="20" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Numero CDI</h6>
                        <input type="text" name="num_cdi" class="form-control" placeholder="x" maxlength="25" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Municipio</h6>
                        <select name="municipio" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Municipio</option>
                            <option  value="ahualulco" >Ahualulco</option>
                           <!--
                            <option value="alaquines">Alaquines</option>
                            <option value="aquismon">Aquismón</option>
                            <option value="armadillo de los infante">Armadillo de los Infante</option>
                            <option value="cardenas">Cárdenas</option>
                            <option value="real de catorce">Real de Catorce</option>
                            <option value="cedral">Cedral</option>
                            <option value="cerritos">Cerritos</option>
                            <option value="cerro de san pedro">Cerro de San Pedro</option>
                            <option value="ciudad del maiz">Ciudad del Maíz</option>
                            <option value="ciudad fernandez">Ciudad Fernández</option>
                            <option value="tancanhuitz">Tancanhuitz</option>
                            <option value="ciudad valles">Ciudad Valles</option>
                            <option value="coxcatlan">Coxcatlán</option>
                            <option value="charcas">Charcas</option>
                            <option value="ebano">Ebano</option>
                            <option value="guadalcazar">Guadalcázar</option>
                            <option value="huehuetlan">Huehuetlán</option>
                            <option value="lagunillas">Lagunillas</option>
                            <option value="matehuala">Matehuala</option>
                            <option value="mexquitic de carmona">Mexquitic de Carmona</option>
                            <option value="moctezuma">Moctezuma</option>
                            <option value="rayon">Rayón</option>
                            <option value="rioverde">Rioverde</option>
                            <option value="salinas">Salinas</option>
                            <option value="san antonio">San Antonio</option>
                            <option value="san ciro de acosta">San Ciro de Acosta</option>
                            <option value="san luis potosi">San Luis Potosí</option>
                            <option value="san martin chalchicuautla">San Martín Chalchicuautlac</option>
                            <option value="san nicolas tolentino">San Nicolás Tolentino</option>
                            <option value="santa catarina">Santa Catarina</option>
                            <option value="santa maria del río">Santa María del Río</option>
                            <option value="santo domingo">Santo Domingo</option>
                            <option value="san vicente tancuayalab">San Vicente Tancuayalab</option>
                            <option value="soledad de graciano sanchez">Soledad de Graciano Sánchez</option>
                            <option value="tamasopo">Tamasopo</option>
                            <option value="tamazunchale">Tamazunchale</option>
                            <option value="tampacan">Tampacán</option>
                            <option value="tampamolon corona">Tampamolón Corona</option>
                            <option value="tamuin">Tamuín</option>
                            <option value="tanlajss">Tanlajás</option>
                            <option value="tanquian de escobedo">Tanquián de Escobedo</option>
                            <option value="tierra nueva">Tierra Nueva</option>
                            <option value="vanegas">Vanegas</option>
                            <option value="venado">Venado</option>
                            <option value="villa de arriaga">Villa de Arriaga</option>
                            <option value="villa de guadalupe">Villa de Guadalupe</option>
                            <option value="villa de la paz">Villa de la Paz</option>
                            <option value="villa de ramos">Villa de Ramos</option>
                            <option value="villa de reyes">Villa de Reyes</option>
                            <option value="villa hidalgo">Villa Hidalgo</option>
                            <option value="villa juarez">Villa Juárez</option>
                            <option value="axtla de terrazas">Axtla de Terrazas</option>
                            <option value="xilitla">Xilitla</option>
                            <option value="zaragoza">Zaragoza</option>
                            <option value="villa de arista">Villa de Arista</option>
                            <option value="matlapa">Matlapa</option>
                            <option value="el naranjo">El Naranjo</option>-->
                        </select>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Colonia</h6>
                        <input type="text" name="colonia" class="form-control" placeholder="x" maxlength="50" autofocus>
                    </div>
                </div>

                <br>

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
                        <input type="text" name="denunciante" class="form-control" placeholder="x" maxlength="50" autofocus>
                    </div>

                    <br>

                    <div class="form-group">
                        <h6>Victima</h6>
                        <input type="text" name="victima" class="form-control" placeholder="x" maxlength="50" autofocus>
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
                    <input type="number" name="edad" class="form-control" placeholder="x" maxlength="2" autofocus>
                </div>

                <br>

                <div class="form-group">
                    <h6>Sexo</h6>
                    <select name="sexo" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>SEXO</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>

                <br>

                <div class="form-group">
                    <h6>Estatus</h6>
                    <select name="estatus" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Estatus</option>
                        <option value="no localizado">No localizado</option>
                        <option value="localizado">Localizado</option>
                        <option value="desaparecido">Desaparecido</option>
                    </select>
                </div>

                <br>

                <div class="form-group">
                    <h6>Delitos</h6>
                    <select name="delito" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Delitos</option>
                        <option value="desaparicion forzada">Desaparición forzada</option>
                        <option value="desaparicion por particulares">Desaparición por particulares</option>
                        <option value="delitos vinculados">Delitos vinculados</option>
                    </select>
                </div>

                <br>

                <div class="form-group">
                    <h6>Fecha de localización</h6>
                    <input type="date" name="fe_localizacion" class="form-control" placeholder="x" autofocus>
                </div>

                <br>

                <div class="form-group">
                    <h6>Agente Fiscal</h6>
                    <input type="text" name="mp" class="form-control" placeholder="MP" maxlength="50" autofocus>
                </div>

                <!--Esto pertenece a la imprenta de la información-->
                <div class="col-md-1">

                </div>


                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
            </form>
        </div>




    </div>

</div>



<?php include("includes/footer.php"); ?>