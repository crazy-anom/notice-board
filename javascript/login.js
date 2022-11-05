const login = document.querySelector("#login");
const form = document.querySelector(".form");
var errs = document.getElementById('errorblock');

login.addEventListener('click' , loginfun);
function loginfun(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST' , 'php/login.php');
    xhr.onload = () =>{
        if (xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if (data == "success"){
                    location.href = "dashboard.php";
                }else{
                    errs.textContent = data;
                    errs.style.display = "block";
                    console.log(data);
                }
            }
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}