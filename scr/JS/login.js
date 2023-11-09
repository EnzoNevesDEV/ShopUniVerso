function Logar(){

    var username = document.getElementById('user').value;
    var senha = document.getElementById('password').value;
    var mensagemErro = document.querySelector('.span-required');

    if(username == "admin@demo.com" && senha == "admin"){
        location.href = "Index.html";
    } else {
        mensagemErro.style.display = 'flex';
    }
}