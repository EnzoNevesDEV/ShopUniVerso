function Logar(){

    var username = document.getElementById('user').value;
    var senha = document.getElementById('password').value;

    if(username == "admin" && senha == "admin"){
        alert('sucesso!')
        location.href = "./LoginPage.html";
    }else{
        alert('Email ou senha incorretos.');
    }
}