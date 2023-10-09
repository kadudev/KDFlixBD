<?php 
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['password'];
  
    $sql = "SELECT * FROM login WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql); //para executar o comando acima
    
    if(mysqli_num_rows($result)<1){
      unset($_SESSION['email']); 
      unset($_SESSION['senha']);
      header('Location: login.php');
      print_r("Credenciais incorretas");  
    }
    else{
      $_SESSION['email'] = $email; 
      $_SESSION['senha'] = $senha; 
      header('Location: acesso.php');
    }
}
  
  

?>
