<?php
include("headerMat.php");
?>


<div class="maxw1 center bgc1 txtc">
    <p>Open Digital School</p>
    <h4>FORMULARIO DE REGISTRO</h4>
</div>
<div class="w60 center">

    <div class="center w50 p20">

        <!-- Default form login -->
        <form class="text-center border border-light p-5" action="#.php" method="POST">

            <p class="txtc">Conecta te</p>

            <!-- error usuario -->
            <?php
            if(isset($_GET['errorusuario']) =='si'){

                echo "<div class='alert alert-danger' role='alert'>
                Nombre de usuario o contraseña incorecto
            </div>";
            };
            ?>

            <!-- numero de matricula -->
            <input type="text" name="numMatricula" id="numMatricula" class="" placeholder="Numero de matricula">
            <!-- Usernane -->
            <input type="text" id="usuario" name="usuario" class="" placeholder="Crea un nombre de usuario">

            <!-- Password -->
            <input type="password" name="contrasena" id="contrasena" class="" placeholder="Crea una contraseña">
            <!-- repeat Password -->
            <input type="password" name="contrasena" id="contrasena" class="" placeholder="Repite la contraseña">


            <div class="">

                <!-- Sign in button -->
                <button class="btn--cc block center" type="submit">Registrar</button>
                <p class="txtc">
                    <!-- matriculate -->
                    Si no tienes numero de matricula debes matricularte
                    <a href="form_matricula_paso1.php"> Aqui </a>
                </p>
            </div>



            <p class="txtc"><a href="index.php" class="btn--ccc">cancelar</a></p>

        </form>
        <!-- Default form login -->

    </div>
</div>
<?php
include("footer.php");
?>