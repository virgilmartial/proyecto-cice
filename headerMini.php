<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>open digital school</title>
    <link rel="stylesheet" href="scss/style.css">

</head>

<body>
    <header class="header">
        <div>
            <div class="bgc1 flex flex--between mb5">
                <div id="date_heure"></div>
                <div class="flex  "><span><select class="flex bn bgc1 language" name="language" id="language">
                            <option value="CA">EN</option>
                            <option value="AF">ES</option>
                            <option value="AF">FR</option>

                        </select> </span> <span class="iconito" id="btnbuscador" href=""><img
                            src="icon/search-solid.svg" alt=""></span> </div>
            </div>
            <div class="flex flex--between">
                <a href="index.php" class="logo flex vCenter bloc"> <img src="img/logo.png" alt=""> <span
                        class="block">Open Dgital
                        School</span></a>
                <?php if(isset($usuario)) {echo " <div><p>hola, $usuario<p/></div>";}?>
                <a href='loginForm.php' class=''>deconection</a>
                

                <div class="fotoPerfil " href='#'> <img class="ico" src="img/cara1.jpg" alt=""></div>
                

            </div>
            <div class="flex cajabuscador hide" id="cajabuscador">
                <form class="flex nowrap" action="form_matricula_paso5.php">
                    <div class=""><input type="search" name="buscador" id="buscador" placeholder="Buscar"></div>
                    <div class=""><input class="bgc2" type="submit" value="Go"></div>
                </form>

            </div>
        </div>

        <main>