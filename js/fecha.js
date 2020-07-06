function date_heure(id)
{
        date = new Date;
        annee = date.getFullYear();
        moi = date.getMonth();
        mois = new Array('Enero', 'Febrero', 'Marso', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto;t', 'Septiembre', 'Octubre', 'Novienbre', 'Diciembre');
        j = date.getDate();
        jour = date.getDay();
        jours = new Array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        resultat = '' + ' '+jours[jour]+' '+' '+j+' '+'de'+' '+''+mois[moi]+' '/* +annee+'son las'+h+':'+m+':'+s */;
        document.getElementById(id).innerHTML = resultat;
        setTimeout('date_heure("'+id+'");','1000');
        return true;
}