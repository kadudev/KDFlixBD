const menuToggle = document.getElementById('menu-toggle');
const contentPr = document.querySelector('.content-pr');
const contentPr2 = document.querySelector('.content-pr2');

menuToggle.addEventListener('change', function() {
  if (this.checked) {
    contentPr2.classList.add('hidden');
  } else {
    contentPr2.classList.remove('hidden');
  }
});

function cadastro(){
  const cadastro = document.getElementById('cadastro');
  const login = document.getElementById('retang-login');
  cadastro.addEventListener('change', function() {
    if (this.checked) {
      retang-login.hidden==true;
  }
  else{
    retang.login.hidden==false;
  }
  
});
}
