<?php 
include "conectionDB.php";
    $fnome = $_POST['fnome'];
    $lnome = $_POST['lnome'];
    $age = $_POST['age'];
    $query = "insert into `alunos` (`primeiroNome`,`segundoNome`,`idade`) values('$fnome','$lnome','$age')";
    if(mysqli_query($conection, $query)){
        header('location:index.php?insert_msg=You data has been added successfuly');
    }
?>