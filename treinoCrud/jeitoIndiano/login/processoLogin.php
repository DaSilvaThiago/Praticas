<?php include('conexaoDB.php');?>
<?php session_start();?>
<?php
try{

    if(!isset($_POST['entrar']))new Exception("erro ao entrar");    
    
    $email = $_POST['email'];
    $senha = $_POST['senha']; 
    $query = "select * from `login` where `email` = '$email' and `senha` = '$senha'";

    $resultado = mysqli_query($conection, $query);

    if(!$resultado) new Exception("erro ao buscar");
    
    $row = mysqli_num_rows($resultado);
    
    if($row == 1){
        $_SESSION['email'] = $email;
        header('location:../index.php');
    }else header('location:login.php?message= email ou senha invalida');

}catch(\Exception $e){
    echo $e -> getMessage();
}

?>