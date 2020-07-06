<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>open digital school</title>
    <link rel="stylesheet" href="scss/style.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="apple-touch-icon" sizes="57x57" href="flavicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="flavicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="flavicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="flavicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="flavicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="flavicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="flavicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="flavicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="flavicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="flavicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="flavicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="flavicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="flavicon/favicon-16x16.png">
    <link rel="manifest" href="flavicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff00">

</head>

<body>
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
            <a href="index.php" class="logo flex vCenter"> <img id="logo" class="imglogo" src="img/logo.png" alt="">
                    <span><strong>Open
                            Dgital School</strong>
                    </span></a>

            </div>

            <?php
        include('navbar.php');

        ?>

        </div>

    </header>
    <main>