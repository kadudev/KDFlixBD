<?php 
session_start();
$logado = $_SESSION['user'];
print_r($_SESSION);
if((!isset($_SESSION['email'])==true) && (!isset($_SESSION['senha'])==true)){
  header('Location: login.php');
}
$logado = $_SESSION['email'];
require('includes/header.html');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KDFlix - Área do usuário</title>
    <link rel="shortcut icon" href="imgs/logotab.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/style.css" media="all" />
    <link rel="stylesheet" href="styles/media-query.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>
  <body class="area-body">
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
            <li class="sair"><a href="sair.php">SAIR</a></li>
          </ul>
        </nav>
      </header>

      <main>
      <?php 
      echo "<h2> BEM VINDE</h2>";
      ?>
        <center>
        <h2 id="h2des">site em desenvolvimento, aguarde.</h2></center>

        <section class="posters">
        
        <div class="poster-sec1" id="ps1" >

        <div class="poster" >
          <img id="img-poster" src="imgs/posters/aot.png" alt=""  >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>

        <div class="poster" >
          <img src="imgs/posters/tpn.png" alt=""  >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>

        <div class="poster" >
          <img src="imgs/posters/mha.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>
        </div>

        <div class="poster-sec1" >
        <div class="poster" >
          <img src="imgs/posters/hky.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>

        <div class="poster" >
          <img src="imgs/posters/dms.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>

        <div class="poster" >
          <img src="imgs/posters/yn.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>
        </div>

        <div class="poster-sec1" >
        <div class="poster" >
          <img src="imgs/posters/sa.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>

        <div class="poster" >
          <img src="imgs/posters/bp.png" alt=""  >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>

        <div class="poster" >
          <img src="imgs/posters/jjk.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>
        </div>

        <div class="poster-sec1" >
        <div class="poster" >
          <img src="imgs/posters/ditf.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>
        
        <div class="poster" >
          <img src="imgs/posters/ohhc.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>

        <div class="poster" >
          <img src="imgs/posters/dn.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>
        </div>

        <div class="poster-sec1" >
        <div class="poster" >
          <img src="imgs/posters/bf.png" alt="" >
          <div class="poster-btn" ><button>PLAY</button></div> 
        </div>
        </div>

        </section>

      </main>

      <footer>
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

    </body>
    </html>