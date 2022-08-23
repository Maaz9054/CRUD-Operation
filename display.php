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
    <title>Display Page</title>
</head>

<body>

    <div class="container">

        <div class=" containt col-lg-12 ">

            <div class=" containt-header  my-4 ">
                <h1 class="text-center ">Display Table Data</h1>

            </div>

            <table class="table table-hover table-bordered table-strip ed">

                <tr class="text-center bg-dark text-white">
                    <th>ID</th>
                    <th>username</th>
                    <th>password</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>

                <?php

                include "connect.php";

                $q = "select * from crudtable";

                $query = mysqli_query($con, $q);

                while ($res = mysqli_fetch_array($query)) {

                ?>


                    <tr class="text-center">
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo $res['username'] ?></td>
                        <td><?php echo $res['password'] ?></td>
                        <td> <button class="btn btn-success"><a href="update.php?id=<?php echo $res['id'] ?>" class="text-white">Update</a></button></td>
                        <td> <button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'] ?>" class="text-white">Delete</a></button></td>
                    </tr>

                <?php
                }
                ?>


            </table>

            <h6>Insert new data -> <a href="insert.php"> here</a></h6>

        </div>
    </div>



</body>

</html>