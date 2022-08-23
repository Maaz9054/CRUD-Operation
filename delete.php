<?php

    include"connect.php";

    $id = $_GET['id'];
    $delete = "DELETE FROM crudtable WHERE id = $id";

    mysqli_query($con,$delete);

    header("location: display.php");
?>