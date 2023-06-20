function abrirTelaCadastro() {
    var mainScreen = document.querySelector('.mainScreen');
    var Screen2 = document.querySelector('.Screen2');
  
    mainScreen.classList.add('hide');
    Screen2.classList.add('show');
  }
  
function voltarParaMainScreen() {
    var mainScreen = document.querySelector('.mainScreen');
    var screen2 = document.querySelector('.Screen2');
  
    mainScreen.classList.remove('hide');
    screen2.classList.remove('show');
  }

function abrirTelaFinal() {
    var nome = document.getElementById('nome').value;
    var mensagem = document.getElementById('mensagem');
    mensagem.innerHTML = 'Obrigado por se disponibilizar para ser um doador, ' + nome + '!';

    var screen2 = document.querySelector('.Screen2');
    var screen3 = document.querySelector('.Screen3');
  
    screen2.classList.add('hide');
    screen2.classList.remove('show'); 
    screen3.classList.add('show');
    screen3.classList.remove('hide');
  }

function closeScreen3() {
    var screen3 = document.querySelector('.Screen3');
    screen3.classList.add('hideon');
  }
  
  
  
