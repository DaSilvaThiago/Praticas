

<?php include("head.php")?>
<?php include("conectionDB.php")?>
<div class="box1"> 
    <h2>All Students</h2>
<button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD STUDENTS
</button>
</div>
<table class="table table-hover table-bordered table striped">
  <thead>
      <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>Update</th>
          <th>Delete</th>
      </tr>
  </thead>
  <tbody>
    <?php
      $query = "select * from `alunos`"; 
      $result = mysqli_query($conection, $query);
        if(!$result){
          die("query failed".mysqli_error($e));
        }else {
          while($row = mysqli_fetch_assoc($result) ){
            ?>
              <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["primeiroNome"];?></td>
                <td><?php echo $row["segundoNome"];?></td>
                <td><?php echo $row["idade"];?></td>
                <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'];?>"class="btn btn-danger">Delete</a></td>
              </tr>
            <?php
          }
        }
    ?>
  </tbody>
</table>
<?php 
  if(isset($_GET['insert_msg'])){
    echo "<h6>".$_GET['insert_msg']."</h6>";
  }
  if(isset($_GET['update_msg'])){
    echo "<h6>".$_GET['update_msg']."</h6>";
  }
  if(isset($_GET['delete_msg'])){
    echo "<h6>".$_GET['delete_msg']."</h6>";
  }
  
?>

<?php //adicionar estudante?>

<form action="insertDatas.php" method="post">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="fnome">First Name</label>
            <input type="text" name="fnome" class="form-control" required>
            <label for="lome">Last Name</label>
            <input type="text" name="lnome" class="form-control" required>
            <label for="age">age</label>
            <input type="text" name="age" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success" name="addStudent" value="ADD">
        </div>
      </div>
    </div>
  </div>
</form>
<?php include("footer.php")?>