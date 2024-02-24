let docTitle = document.title;
window.addEventListener("blur", () =>{
  document.title = "Thanks for visitings us";
})
window.addEventListener("focus", () =>{
  document.title = docTitle;
})
document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
      document.querySelector(".preloader").style.display = "none";
  }, 1500);
});
var icon = document.getElementById("icon");
icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
      icon.src = "assets/images/sun.png";
    }else{
      icon.src = "assets/images/moon.png";
    }
  }