const login = document.querySelector("#login");
const container = document.querySelector(".container");
var errs = document.getElementById('errorblock');


setInterval (()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('GET' , 'php/notify.php');
    xhr.onload = () =>{
        if (xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                console.log(data);
                container.innerHTML = data;
                let width = container.scrollHeight;
                console.log(container.scrollTop = -width);
            }
        }
    }
    xhr.send();
},500)