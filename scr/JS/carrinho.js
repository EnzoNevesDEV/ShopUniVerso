//Variáveis e seleção de elementos

const main = document.querySelector('main');

const roletaProdutos = document.getElementById('roletaProdutos');

const produto = document.querySelector('.produto');

const listaCarrinho = document.getElementById('listaCarrinho');

const botaoCarrinho = document.getElementById('botaoCarrinho');

const telaCarrinho = document.getElementById('telaCarrinho');

const paginaCarrinho = document.getElementById('paginaCarrinho');

const confirmCompra = document.getElementById('confirmCompra');

const contCompra = document.getElementById('contCompra');

const nenhumItem = document.getElementById('nenhumItem');

let countItem = document.getElementById("countItem");

let quantItens = 0;


const itens = [

    {

        id: 0,
        img: 'img-produto/Monitor.png',
        nome: 'monitor.png',
        precoAnterior: 'R$ 2.999,99',
        precoAtual: 'R$ 1.899,99'

    },

    
    {

        id: 1,
        img: 'imgs/smarthphone.jpg',
        nome: 'Smarthphone Samsung Galaxy A04E',
        precoAnterior: 'R$ 1.849,99',
        precoAtual: 'R$ 1.455,98'

    },

    {

        id: 2,
        img: 'imgs/relógio.jpg',
        nome: 'Relógio Seiko Retro',
        precoAnterior: 'R$1.100,00',
        precoAtual: 'R$840,00'

    },

]

//Eventos

document.addEventListener("DOMContentLoaded", (e) => {

    if(telaCarrinho.scrollHeight > telaCarrinho.style.maxHeight) {

        telaCarrinho.style.overflow = "auto";
    
    }

});