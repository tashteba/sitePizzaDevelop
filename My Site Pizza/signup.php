<?php require("actions/signupAction.php"); ?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/signup.css">


<?php include 'includes/head.php'; ?>

<body>

<?php include 'includes/navbar.php';?>

    <br><br>
    <form class="container" method="POST">

        <?php if(isset($errorMsg)){ echo '<p class="error">'.$errorMsg.'</p>'; } ?>
        <?php if(isset($successMsg)){ echo '<p class="good">'.$successMsg.'</p>'; } ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label bigger">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label bigger">Last Name</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label bigger">First Name</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label bigger">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validateAll">Create</button>
        <br><br>
        <a href="login.php"><p class = "middle">I already have acount</p></a>
   </form>

</body>
</html>