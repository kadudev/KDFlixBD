<?php 
session_start();


if(isset($_SESSION['user'])){


    header('Location: acesso.php');


}
require('includes/header.html');

?>
  <body class="login-body">
    <div class="wrapper">
    <header>
      <a href="index.html"><h1 class="logo">KDFlix</h1></a>
      <form class="form">
        <label for="search">
            <input class="input" type="text" required="" placeholder="Pesquisar" id="search">
            <div class="fancy-bg"></div>
            <div class="search">
                <svg viewBox="0 0 24 24" aria-hidden="true" class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                    <g>
                        <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                    </g>
                </svg>
            </div>
            <button class="close-btn" type="reset">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </label>
    </form>
      <input type="checkbox" id="menu-toggle" class="menu-toggle">
      <label for="menu-toggle" class="burger">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <nav class="menu">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="explorar.html">+ ACESSADOS</a></li>
          <li><a href="explorar.html">MELHORES AVALIAÇÕES</a></li>
          <li><a href="explorar.html">EM ALTA</a></li>
          <li><a href="explorar.html">ANIMES FAMOSOS</a></li>
          <li><a href="login.php">LOGIN</a></li>
        </ul>
      </nav>
    </header>
    <main>

        <form action="Area.php" method="post" class="retang-login" id="retang-login">
          <a href="cadastro.php"><h2 id="entrar">CADASTRAR</h2></a>
          <div class="retang2-login">
            <div class="inputs">
          <input type="email" name="email" id="email" placeholder="E-mail" required>
          <input type="password" name="password" id="password" placeholder="Senha" required>

              <input type="submit" value="Acessar" id="acesso" name="submit">
              
        </div>
          <div class="retang-google"><div class="img-google"><img src="imgs/google.svg" alt="" draggable="false"></div>Entrar com o Google</div>
            </div>
        </form>
        <!--<button id="cadastro">Cadastrar</button>-->
    </main>
    <footer class="footer">
      <p class="copyright">© KDFlix, todos os direitos reservados.</p>
      <center><p>Siga-nos nas redes sociais:</p></center>
      <div class="redes" >
        <a href="https://instagram.com">
      <div class="icon"id="ig">
        <i class="fab fa-instagram"></i>
      </div></a>
      <a href="https://twitter.com">
      <div class="icon" id="tt">
        <i class="fab fa-twitter"></i>
      </div></a>
      <a href="https://youtube.com">
      <div class="icon" id="yt">
        <i class="fab fa-youtube"></i>
      </div></a>
      <a href="https://facebook.com">
      <div class="icon" id="fb">
        <i class="fab fa-facebook"></i>
      </div></a>
    </div>
  </footer>
</div>
  </body>
</html>