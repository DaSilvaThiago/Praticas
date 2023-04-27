<?php include("head.php")?>
<?php include("conectionDB.php")?>

<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];        
        $query = "select *from `alunos` where `id` = '$id'"; 
        $result = mysqli_query($conection, $query);
        if(!$result){
            die("query failed".mysqli_error($e));
        }else {
            $row = mysqli_fetch_assoc($result);
}        
    }
?>
<?php 
if(isset($_POST['updateStudent'])){
    if(isset($_GET['idNovo'])){
        $idnew = $_GET['idNovo'];
    }

    $fnome = $_POST['fnome'];
    $lnome = $_POST['lnome'];
    $age = $_POST['age'];

    $query = "update `alunos` set `primeiroNome`='$fnome', `segundoNome`='$lnome', `idade`='$age' where `id`='$idnew'";    
    $result = mysqli_query($conection, $query);

    if(!$result){
        die("query Failed".mysqli_error($mysqli));
    }else{
        header('location:index.php?update_msg=You have succesfully update the data.');
    }
}

?>
    <form action="update.php?idNovo=<?php echo $id;?>" method="post">
        <div class="form-group">
            <label for="fnome">First Name</label>
            <input type="text" name="fnome" class="form-control" value="<?php echo $row['primeiroNome']?>">
            <label for="lome">Last Name</label>
            <input type="text" name="lnome" class="form-control" value="<?php echo $row['segundoNome']?>">
            <label for="age">age</label>
            <input type="text" name="age" class="form-control" value="<?php echo $row['idade']?>">
        </div>
        <input type="submit" class="btn btn-success" name="updateStudent" value="UPDATE">
    </form>



<?php include("footer.php")?>