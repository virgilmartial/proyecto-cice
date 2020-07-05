var style_paragraphes = '';
   
  function rafraichir()
  {
  var date = new Date(); /* On créé une date.
C'est très important de la créer dans la fonction comme ça à
chaque seconde on recréé une date et donc le temps est mis à jour.
Si vous ne la créez pas dans la fonction alors la date ne sera pas
mise à jour. */
 
  var texte = '';
  texte += ''+date.getHours()+' : '+date.getMinutes()+' : '+date.getSeconds()+'';
 
  document.getElementById('date').innerHTML = texte;
  }
   
  document.write('<span id="date"></span>');
   
  setInterval('rafraichir()',1000); /* Toutes les 1 secondes
on réaffiche la date */
