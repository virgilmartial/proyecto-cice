var triangleleft = document.getElementById('triangleleft');
var trianglerigth  = document.getElementById('trianglerigth');
var circle1 = document.getElementById('circle1');
var circle2 = document.getElementById('circle2');
var circle3 = document.getElementById('circle3');
var circle4 = document.getElementById('circle4');
var circle5 = document.getElementById('circle5');


triangleleft.addEventListener("click", function(){
      var i = 0

         circle1.style.backgroundImage = `url('img/student${i+1}.jpg')`;  
         circle2.style.backgroundImage = `url('img/student${i+2}.jpg')`;  
         circle3.style.backgroundImage = `url('img/student${i+3}.jpg')`;  
         circle4.style.backgroundImage = `url('img/student${i+4}.jpg')`;  
         circle5.style.backgroundImage = `url('img/student${i+5}.jpg')`;  
        
   
 
})

trianglerigth.addEventListener("click", function(){
    var o = 5

    circle5.style.backgroundImage = `url('img/student${o-1}.jpg')`;  
    circle4.style.backgroundImage = `url('img/student${o-2}.jpg')`;  
    circle3.style.backgroundImage = `url('img/student${o-3}.jpg')`;  
    circle2.style.backgroundImage = `url('img/student${o-4}.jpg')`;  
    circle1.style.backgroundImage = `url('img/student${o-5}.jpg')`;  
   
   
 
})