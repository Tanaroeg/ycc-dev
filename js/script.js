
$(document).ready(function(){
$(".nav-toggle").click(function(){
  $(".fa-bars").toggleClass("fa-times");
});
});
function navToggle() {
  var x = document.getElementById("main-nav");
  if (x.className === "main-menu") {
    x.className += " respon";
  } else {
    x.className = "main-menu";
  }
}
window.scroll({
  top: 2500, 
  left: 0, 
  behavior: 'smooth'
});
// Scroll certain amounts from current position 
window.scrollBy({ 
  top: 100, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});
// Scroll to a certain element
document.querySelector('.hello').scrollIntoView({ 
  behavior: 'smooth' 
});
function Redi(link) {
  location.href = link;
}
