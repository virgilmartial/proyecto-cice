
<nav class="nav flex flex--between">
    <span id="btnMenuId" class="btnMenu block" onclick="comamdMenu()">
        <span id="amburgerId" class="amburger"></span>
    </span>

    <ul id="topbarId" class="topbar topbarx nav-ul txtc">
        <li><a href="quienessomos.php">Quien es somos</a> <span class="linkanim"></span></li>
        <li><a href="especialidades.php">Especialidades <span class="iconito"></span></a> <span class="linkanim"></span>
            <ul class="submenu bgc9">
                <li><a href="especialidades.php#contabilidad">Contabilidad</a> </li>
                <li><a href="especialidades.php#informatica">Informatica </a></li>
                <li><a href="especialidades.php#economia">Econamia</a></li>
                <li><a href="especialidades.php#mecanica">Mecanica</a></li>
                <li><a href="especialidades.php#arquitectura">Arquitectura</a></li>
                <li><a href="especialidades.php#enfermeria">Enfermeria</a></li>
                <li><a href="especialidades.php#bancas">Bancas y finanzas</a></li>
            </ul>
        </li>
        <li><a href="tablondeanuncio.php">Tablon de anuncio</a> <span class="linkanim"></span></li>
        <li><a href="loginForm.php">Biblioteca</a> <span class="linkanim"></span></li>
        <li><a href="galeria.php">Galeria</a> <span class="linkanim"></span> </li>
        <li><a href="contacto.php">Contacto</a> <span class="linkanim"></span></li>
        <li class="pr" >
           
        </li>
    </ul>
   
</nav>


<style>
:root {
    --color-1: #1891a2;
    --color-2: #19bab3;
    --color-3: #17d4c4;
    --color-4: #fd5d5f;
    --color-41: #e97274;

    --color-5: #e2ad43;
    --color-6: #696562;
    --color-7: #837c7d;
    --color-8: #bdb7b8;
    --color-9: #fdfcfd;


}



.topbar {
    width: 100%;

}


@media(max-width:750px) {

    .topbar {
        position: absolute;
        z-index: 150;
        top: 92px;
        right: 0;
        background-color: var(--color-color2);
        clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 100%);
        transition: all .8s ease-in-out;


    }

    .topbarx {
        transition: ease-in-out .4s;
        z-index: 150;
        clip-path: polygon(100% 0, 100% 0%, 100% 100%, 100% 100%);

    }
}

.nav a {

    display: inline-block;
    transition: all .4s;
}

@media(max-width:750px) {
    .nav a {
        display: block;
       

    }


}

.nav a:hover {
    transition: all .3s;
    border-radius: 8px 8px 0px 0px;


}

.btnMenu {
    display: none;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color:rgba(14, 162, 172, 0.74);
   
    /* border: 1px solid var(--color-color3);
    border-radius: 100%; */
    cursor: pointer;
}

@media(max-width:750px) {
    .btnMenu {
        display: flex;


    }

}

.amburger {
    height: 1px;
    background-color: black;
    width: 60%;
    transition: ease-in-out .5s;


}

.amburger:after,
.amburger::before {
    content: "";
    display: block;
    height: 1px;
    background-color: black;
    position: relative;

}

.amburger:after {
    top: -8px;
    transition: ease-in-out .4s;
}

.amburger::before {
    top: 6px;
    transition: ease-in-out .3s;
}

.amburgerx {
    background-color: rgb(165, 106, 106);
    transform: rotate(45deg);

}

.amburgerx::after {
    opacity: 0;
}

.amburgerx::before {
    top: 0px;
    transform: rotate(-90deg);
}
</style>