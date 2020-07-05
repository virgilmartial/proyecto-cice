<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>open digital school</title>
    <link rel="stylesheet" href="scss/style.css">
    <link rel="stylesheet" href="mystyle.css">


</head>

<body onload=showDate();>
    <header class="header">
        <div class="header-container bx1" id="header-container">
            <div class="bgc1 flex flex--between mb5 pl10 pr10">
                <div id="date_heure"></div>
                <div class="flex  "><span><select class="flex bn bgc1 language" name="language" id="language">
                            <option value="CA">EN</option>
                            <option value="AF">ES</option>
                            <option value="AF">FR</option>

                        </select> </span> <span class="iconito" id="btnbuscador" href=""><img
                            src="icon/search-solid.svg" alt=""></span> </div>
            </div>
            <div class="flex cajabuscador hide" id="cajabuscador">
                <form class="flex nowrap" action="form_matricula_paso5.php">
                    <div class=""><input type="search" name="buscador" id="buscador" placeholder="Buscar"></div>
                    <div class=""><input class="bgc2" type="submit" value="Go"></div>
                </form>

            </div>
            <div class="flex flex--between pl10 pr10 ">
                <a href="index.php" id="logo" class="logo flex vCenter"> <img src="img/logo.png" alt=""> <span>Open
                        Dgital
                        School</span></a>
                <div class="">
                    <a href="form_matricula_paso1.php" class="btn--a">Matriculate</a>
                    <a href="loginForm.php" class=" btn--bb"> Conectate</a>
                </div>
            </div>

            <?php
        include('navbar.php');

        ?>

        </div>

    </header>
    <main>