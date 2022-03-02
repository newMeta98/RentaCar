/*!  - v1.0- 2020-07-20
* Copyright MetaSoft - webprograming */
  var x = document.getElementById("lng-btn");
  var xx = document.getElementById("arrow_down");
  var x1 = document.getElementById("Srb");
  var x2 = document.getElementById("Rus");
  var x3 = document.getElementById("Eng");
  var x4 = document.getElementById("Hrv");
    
function displayFlags() {
  if (x1.style.display === "block") {
    x.style.borderRadius = "5px";
    x.style.paddingBottom = "10px";
    x1.style.display = "none";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";
    xx.innerHTML = '<img src="img/icons8-triangle-arrow.png">';
  } else {
    x.style.borderRadius = "5px 5px 0px 0px";
    x.style.paddingBottom = "25px";
    x1.style.display = "block";
    x2.style.display = "block";
    x3.style.display = "block";
    x4.style.display = "block";
    xx.innerHTML = '<img src="img/icons8-triangle-arrow-up.png">';
  }
}
 
            function flagSrb(){
    x.style.borderRadius = "5px";
    x.style.paddingBottom = "10px";
    x1.style.display = "none";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";
    window.location.href = '?lan=srb';
         }
             function flagEng(){
    x.style.borderRadius = "5px";
    x.style.paddingBottom = "10px";
    x1.style.display = "none";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";
    window.location.href = '?lan=eng';
           }
             function flagRus(){
    x.style.borderRadius = "5px";
    x.style.paddingBottom = "10px";
    x1.style.display = "none";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";
    window.location.href = '?lan=rus';
           }
             function flagHrv(){
    x.style.borderRadius = "5px";
    x.style.paddingBottom = "10px";
    x1.style.display = "none";
    x2.style.display = "none";
    x3.style.display = "none";
    x4.style.display = "none";
    window.location.href = '?lan=hrv';
               }
       function logOut(){
    window.location.href = '?logout="1"';
               }        
(jQuery);