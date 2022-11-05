const add = document.querySelector("#add");
const form = document.querySelector(".form");
var err = document.querySelector(".form .errortext");;

add.addEventListener('click' , addfun);
function addfun(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST" , 'php/dash.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if(data == 'done'){
                    err.textContent = 'Notice updated :)';
                    err.style = "display:block; color:green;font-weight:100;font-size:10px; background:lightgreen;padding:10px 12px ;border-radius: 5px; box-shadow: 0 0 2px;";
                    location.href = "./notify.php"
                }else{
                    err.textContent = data;
                    err.style = "display:block; color:crimson;font-weight:100;font-size:10px; background:lightcoral;padding:10px 12px ;border-radius: 5px; box-shadow: 0 0 2px;";
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
