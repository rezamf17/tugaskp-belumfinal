  function myFunction() {
     document.getElementById("myBtn").disabled = true;
     setTimeout(function(){
       document.getElementById("myBtn").disabled = false;
     }, 5000);

     }