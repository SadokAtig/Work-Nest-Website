
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



          const selectImage = document.querySelector('.select-image');
          const inputFile = document.querySelector('#file');
          const imgArea = document.querySelector('.img-area');
          
          selectImage.addEventListener('click', function () {
            inputFile.click();
          })
          
          inputFile.addEventListener('change', function () {
            const image = this.files[0]
            if(image.size < 2000000) {
              const reader = new FileReader();
              reader.onload = ()=> {
                const allImg = imgArea.querySelectorAll('img');
                allImg.forEach(item=> item.remove());
                const imgUrl = reader.result;
                const img = document.createElement('img');
                img.src = imgUrl;
                imgArea.appendChild(img);
                imgArea.classList.add('active');
                imgArea.dataset.img = image.name;
              }
              reader.readAsDataURL(image);
            } else {
              alert("Image size more than 2MB");
            }
          })
          function handleSubmit () {
            const names = document.getElementById('pseud').value;
           localStorage.setItem("pseud", names); 
          }