<?php
include("headerMat.php");
?>

<br>
<div class=" center" id="section1">
    <div class=" bgc2 center txtc maxw1">
        <p>Open Digital School</p>
        <h3>ESPACIO PRIVADO</h3>

    </div>
</div>
<br>

<div class="center maxw1">
    <br>



    <div class=" center w30 ">
      

        <!-- Default form login -->
        <form class="text-center border border-light p-5" action="autentification.php" method="POST">

            <!-- <p class="txtc">Conecta te</p> -->

            <!-- error usuario -->
            <?php
            if(isset($_GET['errorusuario']) =='si'){

                echo "<div class='alert1 txtc c4 bx1' role='alert'>
                <small>Nombre de usuario o contraseña incorecto</small> 
                
             </div><br>";
            };
            ?>


            <!-- Usernane -->
            <input type="text" id="usuario" name="usuario" class="" placeholder="Nombre de usuario">

            <!-- Password -->
            <input type="password" name="contrasena" id="contrasena" class="" placeholder="contraseña">

            <div class="">
                <div>
                    <!-- Remember me -->
                    <div class="">
                        <input type="checkbox" class="" id="recordarme">
                        <label class="custom-control-label" for="recordarme">Recordar me</label>
                    </div>
                </div>
                <br>

                <!-- Sign in button -->
                <button class="btn--cc block center" type="submit">entrar</button>
                <br>
                <div class="txtc">
                    <!-- Forgot password -->
                    <a href="">Olvidastes tu contrasena?</a>
                </div>
            </div>



            <!-- Register -->
            <p class="txtc">Aun no tienes cuenta?
                <a href="registro.php">Registrate</a>
            </p>

            <!-- Social login -->
            <br>
            <p class="txtc"><a href="index.php" class="block btn--ccc">cancelar</a></p>
            <br>
        </form>
        <!-- Default form login -->

    </div>
</div>
</div>
<?php
include("footer.php");
?>