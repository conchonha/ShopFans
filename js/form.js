 const eye = document.querySelector(".fa-eye");
 const eye1 = document.querySelector(".fa-eye1");
 const eye2 = document.querySelector(".fa-eye2");
 eye.addEventListener('click', function() {
     var x = document.getElementById("pwd");
     if (x.type === "password") {
         x.type = "text";
     } else {
         x.type = "password";
     }

 })

 eye1.addEventListener('click', function() {
     var y = document.getElementById("rwd");
     if (y.type === "password") {
         y.type = "text";
     } else {
         y.type = "password";
     }
 })

 eye2.addEventListener('click', function() {
     var y = document.getElementById("zwd");
     if (y.type === "password") {
         y.type = "text";
     } else {
         y.type = "password";
     }
 })