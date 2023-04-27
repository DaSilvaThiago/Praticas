<?php include('conectionDB.php')?>
<?php 
    if(isset($_GET['id']))$id = $_GET['id'];
    $query = "delete from `alunos` where `id` = '$id'";
    $result = mysqli_query($conection, $query);
    if(!$result){
        die("query failed".mysqli_error($erro));
    }else{
        header('location:index.php?delete_msg=You have delete the record.');
    }
?>