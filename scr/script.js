function Logar(){

    var username = document.getElementById('username').value;
    var senha = document.getElementById('password').value;

    if(username == "admin" && senha == "admin"){
        location.href = "./Index.html";
    }else{
        alert('Usuario ou senha incorretos');
    }
}