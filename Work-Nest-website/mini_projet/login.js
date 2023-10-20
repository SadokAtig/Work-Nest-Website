const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
function numberonly(input){

    var num = /[^0-9]/gi;
    input.value = input.value.replace(num,"");
    
      }
      function car(input){
        var c = /[^a-zA-Z]/gi;
       input.value = input.value.replace(c,"");
    
            }
          function mail(input){
            var e = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ; 
            input.value = input.value.replace(e,"");
          }
         
          
    function handleSubmit () {
      const names = document.getElementById('pseud').value;
     localStorage.setItem("pseud", names); 
    }