const signup = document.querySelector("#signup");
const form = document.querySelector(".form");
var err = document.getElementById('errorblock');
err.style.display = "none";

console.log();
form.onsubmit = (e)=>{
    e.preventDefault();
}

signup.addEventListener('click' , signupfun);
function signupfun(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST" , './php/index.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if (data === "success"){
                    location.href = "login.php";
                }else{
                    err.textContent = data;
                    err.style.display = "block";
                    console.log(data);
                }
            }
        }
    }
    let formData =new FormData(form);
    xhr.send(formData);
}
