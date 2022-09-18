

const button = document.querySelector("button");

button.addEventListener('click',function(){
   setInterval(() => {
       document.querySelector("h1").style.color = "pink";
   }, 2000);
});