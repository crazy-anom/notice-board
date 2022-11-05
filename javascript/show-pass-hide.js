const pass = document.querySelector(".password input[type = 'password']");
const sorh = document.querySelector(".password i");

sorh.addEventListener('click' , hideorshow);

function hideorshow(){
    if (pass.type == "password"){
        pass.type = "text";
        sorh.style = "color:black; transition:.2s;"
    }
    else{
        pass.type = "password";
        sorh.style = "color: rgba(51, 51, 51, 0.322); transition:.2s;"
    }
}