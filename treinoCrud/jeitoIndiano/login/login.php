<?php include('header.php'); ?>
        <?php
            if(isset($_GET['message']))echo "<h4 class=text-danger>".$_GET['message']."</h4>";
        ?>
        <form action="processoLogin.php" method="post" class="form">
            <div class="form-group p-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group p-3">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" name="senha">
            </div>
            <div class="form-group">
                <input type="submit" name="entrar" value="entrar" class="btn btn-dark">
            </div>
        </form>
<?php include('footer.php');?>