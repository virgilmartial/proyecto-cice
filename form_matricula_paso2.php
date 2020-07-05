

<!-- $nonbre = $_POST["nonbre"];
$apellidos = $_POST["apellidos"];
$sexo = $_POST["sexo"];
$fechaNaci = $_POST["fechaNaci"];
$lugarnaci = $_POST["lugarnaci"];
$localidad = $_POST["localidad"];
$paisresi = $_POST["paisresi"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$usuario = $_POST["usuario"]; -->




<?php
include("headerMat.php");
?>

<br>
<br>
<div class=" center" id="section1">
    <div class=" bgc2 center txtc maxw1">
        <p>Open Digital School</p>
        <h3 class="">formulario de matricula</h3>

    </div>
</div>
<br>

    
    <div class=" maxw1 center flex nowrap">
        <div class="txtc pt5 pb5  w-25">
            <span class="circle bgc2">1</span>
            <span class="barra bgc2"></span>
            <div class="pr5 pl5">
                <small>informacion</small>
                <small>personal</small>
            </div>
         
        </div>
        <div class="txtc pt5 pb5  w-25">
            <span class="circle bgc2">2</span>
            <span class="barra bgc2"></span>
            <div class="pr5 pl5">
                <small>informacion</small>
                <small>Academica</small>
            </div>
        
        </div>
        <div class="txtc pt5 pb5  w-25">
            <span class="circle bgc8">3</span>
            <span class="barra bgc8"></span>
            <div class="pr5 pl5">
                <small>informacion</small>
                <small>adicional</small>
            </div>
         
        </div>
        <div class="txtc pt5 pb5  w-25">
            <span class="circle bgc8">4</span>
            <span class="barra bgc8"></span>
            <div class="pr5 pl5">
                <small>informacion</small>
                <small>resumida</small>
            </div>
           
        </div>
    </div>

</div>
<br>
<br>


<div class="w60 center">

    <div class="w100 center">
        <form action="form_matricula_paso3.php">
            <div class="flex">
                <div class="w50">
                    <p>Cual es tu nivel de estudios?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <select class="form-control custom-select custom-select-md" id="nivelEstudio">
                        <option value="CA">PRIMARIA</option>
                        <option value="CA">BACHILIRATO</option>
                        <option value="CA">LICENCIADO</option>
                        <option value="CA">MASTER</option>
                        <option value="CA">DOCTORADO</option>
                       
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Cual especialidad?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <input type="text" class="form-control" id="nonbre">    
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Cuando se finalizo<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <input type="date" class="form-control" id="fechaNaci">  
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>En que escuela?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <input type="text" class="form-control" id="nonbre">    
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Has realizado alguna otra formacion?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <div class="">
                        <input class="" type="radio" name="otraFormacion" id="otraFormacionSi" value="si">
                        <label class="" for="otraFormacionSi">
                            si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="otraFormacion" id="otraFormacionNo" value="no">
                        <label class="form-check-label" for="otraFormacionNo">
                            no
                        </label>
                    </div> 
                </div>
            </div>
            <script src="asset/js/js.js"></script>
            <div class="flex">
                <div class="w50">
                    <p>Cual formacion?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <input type="text" class="form-control" id="otraFormacion">    
                </div>
            </div>

            <div class="flex">
                <div class="w50">
                    <p>Cual especialedad quieres estudiar?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <select class="form-control custom-select custom-select-md">
                        <option value="CA">BANCAS Y FINANZAS</option>
                        <option value="CA">CONTABILIDAD</option>
                        <option value="CA">ARQUITECTURA</option>
                        <option value="CA">ELECTRICIDAD</option>
                        <option value="CA">INFORMATICA</option>
                        <option value="CA">ENFERMERIA</option>
                        <option value="CA">ECONOMIA DE EMPRESA</option>
                       
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Que ninel?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <select class="form-control custom-select custom-select-md">
                        <option value="CA">Superior</option>
                        <option value="CA">Grado medio</option>   
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Cual turno?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <select class="form-control custom-select custom-select-md">
                        <option value="CA">Mañana</option>
                        <option value="CA">Tarde</option>   
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Cual Forma?<span class="etoile c4">*</span></p> 
                </div>
                <div class="w50">
                    <select class="form-control custom-select custom-select-md">
                        <option value="CA">Presencial</option>
                        <option value="CA">Online</option>   
                    </select>
                </div>
            </div>

            <div class="flex flex--between">
                <button class="" ><a href="form_matricula_paso1.php">volver</a></button>
                <div><input class="bgc2" type="submit" value="continuar"></div>
            </div>

            

        </form>
    </div>
</div>

<?php
include("footer.php");
?>





