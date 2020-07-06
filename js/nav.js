
        var topbar = document.querySelector('#topbarId');
        var amburger = document.querySelector('#amburgerId')

         function comamdMenu(){   
          topbar.classList.toggle('topbarx')
          amburger.classList.toggle('amburgerx')

         }
   
       


var headerContainer = document.getElementById('header-container')
var section1 = document.getElementById('section1')

function stabheader() {
   section1.style.paddingTop = headerContainer.clientHeight + "px"
}
stabheader()



var volverarriba = document.querySelector(".volverarriba")
volverarriba.addEventListener("click",function(){
   body.scrollY = 0
})
     


var logo = document.getElementById("logo")
window.onscroll = function() {diminuerlogo()};

function diminuerlogo() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    logo.classList.add("logosmall")
  } else {
    logo.classList.remove("logosmall")
  }
}