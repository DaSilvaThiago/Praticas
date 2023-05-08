<?php include('dbcon.php')?>
<?php
    session_start();
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        $query =  "INSERT INTO pessoa
                    (nome, email, idade)
                    VALUES
                    (:nome, :email, :idade)";

        $queryRun = $conexao->prepare($query);

        $data = [
            ':nome'=> $nome,
            ':email'=> $email,
            ':idade'=> $idade
        ];

        $queryExe = $queryRun -> execute($data);

        if($queryExe){
            $_SESSION['message'] = "Sucesso";
            header('Location: insert.php');
            exit(0);
        }else{
            $_SESSION['message'] = "Falha";
            header('Location: insert.php');
            exit(0);
        }
    }
?>