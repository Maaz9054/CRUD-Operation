<?php

include "connect.php";

if (isset($_POST['button'])) {

    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "UPDATE `crudtable` SET `id`=$id,`username`='$username',`password`='$password' WHERE id=$id";

    $query = mysqli_query($con, $q);

    header("location: display.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Update Page</title>
</head>

<body>

    <div class="col-lg-6 m-auto ">

        <form method="post" class="my-4">

            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Update Operation</h1>
                </div> <br>


                <label> Username : </label>
                <input type="text" name="username" class="form-control"> <br>

                <label> Password :</label>
                <input type="text" name="password" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="button"> Submit </button> <br>
            </div>

        </form>

    </div>




</body>

</html>