<?php
include("headerMat.php");
?>
<br>
<div class=" center" id="section1">
    <div class=" bgc2 center txtc maxw1">
        <p>Open Digital School</p>
        <h3 class="">formulario de matricula</h3>

    </div>
</div>
<br>

<div class=" maxw1 center flex nowrap">
    <div class="txtc pt5 pb5 w--25">
        <span class="circle bgc2">1</span>
        <span class="barra bgc2"></span>
        <div class="pr5 pl5">
            <small>informacion</small>
            <small>personal</small>
        </div>

    </div>
    <div class="txtc pt5 pb5 w-25">
        <span class="circle bgc2">2</span>
        <span class="barra bgc2"></span>
        <div class="pr5 pl5">
            <small>informacion</small>
            <small>Academica</small>
        </div>

    </div>
    <div class="txtc pt5 pb5 w-25">
        <span class="circle bgc2">3</span>
        <span class="barra bgc2"></span>
        <div class="pr5 pl5">
            <small>informacion</small>
            <small>adicional</small>
        </div>

    </div>
    <div class="txtc pt5 pb5 w-25">
        <span class="circle bgc8">4</span>
        <span class="barra bgc8"></span>
        <div class="pr5 pl5">
            <small>informacion</small>
            <small>resumida</small>
        </div>

    </div>
</div>
<br>
<br>



<div class="w60 center">

    <div class="w100 center">
        <form action="form_matricula_paso4.php">
            <div class="flex">
                <div class="w50">
                    <p>Trabajas ahora?<span class="etoile c4">*</span></p>
                </div>
                <div class="w50 flex">
                    <div class="">
                        <input class="" type="radio" name="sexo" id="masculino" value="masculino" checked>
                        <label class="" for="masculino">
                            si
                        </label>
                    </div>
                    <div class="">
                        <input class="" type="radio" name="sexo" id="femenino" value="femenino">
                        <label class="" for="femenino">
                            no
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Enque puesto de trabajo?<span class="etoile c4">*</span></p>
                </div>
                <div class="w50">
                    <input type="text" class="form-control" id="nonbre">
                </div>
            </div>

            <div class="flex">
                <div class="w50">
                    <p>Que quieres hacer despues de estudiar?<span class="etoile c4">*</span></p>
                </div>
                <div class="w50">
                    <select class="form-control custom-select custom-select-md">
                        <option value="CA"> </option>
                        <option value="CA">seguir estudiando</option>
                        <option value="CA">Buscar un empleo</option>
                        <option value="CA">Trabajar a su propia cuenta</option>
                        <option value="CA">otro</option>
                    </select>
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Quien finanzia tu estudios?<span class="etoile c4">*</span></p>
                </div>
                <div class="w50">
                    <input type="text" class="form-control" id="nonbre">
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>Nombre de una persona que podemos contactar si es necesario?<span class="etoile c4">*</span></p>
                </div>
                <div class="w50">
                    <input type="text" class="form-control" id="nonbre">
                </div>
            </div>
            <div class="flex">
                <div class="w50">
                    <p>cual es su numero de telefono?<span class="etoile c4">*</span></p>
                </div>
                <div class="w50">
                    <input type="tel" class="form-control" id="telefono">
                </div>
            </div>







            <div class="flex flex--between">
                <button class=""><a href="form_matricula_paso2.php">volver</a></button>
                <div><input class="bgc2" type="submit" value="continuar"></div>
            </div>


        </form>
    </div>
</div>


    <?php
include("footer.php");
?>