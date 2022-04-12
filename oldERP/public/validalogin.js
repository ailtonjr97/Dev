let login1 = 'informatica04@fibracem.com';
let senha1 = 'teste1'

if (document.querySelector("#botao").addEventListener("click", function(){
  if (document.querySelector('#campo-login').value == login1 && document.querySelector('#senha').value == senha1){
    window.location.href = "/";
  } else{
    alert('Conta não encontrada')
  }
}));
