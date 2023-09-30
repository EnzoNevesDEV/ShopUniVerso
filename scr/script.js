function Logar(){

    var username = document.getElementById('user').value;
    var senha = document.getElementById('password').value;

    if(username == "admin@demo.com" && senha == "admin"){
        location.href = "Index.html";
    }else{
        alert('Email ou senha incorretos.');
    }
}