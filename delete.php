<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `items_table` where id=$id";
        $conn->query($sql);
    }
    header('location:index3.php');
    exit;
?>