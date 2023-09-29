function Logar(){

    var username = document.getElementById('user').value;
    var senha = document.getElementById('password').value;

    if(username == "admin" && senha == "admin"){
        location.href = "./LoginPage.html";
    }else{
        alert('Usuario ou senha incorretos');
    }
}