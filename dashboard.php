<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $itemname = $_POST['item_name'];
        // mysqli_real_escape_string($conns, $_POST['item_name']);
        // $_POST['item_name'];
        $itemdesc = $_POST['item_desc'];
        // mysqli_real_escape_string($conns, $_POST['item_desc']);
        // $_POST['item_desc'];
        $itemprice = $_POST['item_price'];
        // mysqli_real_escape_string($conns, $_POST['item_price']);
        // $_POST['item_price'];
        $contact =  $_POST['contact']; 
        // mysqli_real_escape_string($conns, $_POST['contact']);
        // $_POST['contact'];


        $sql = "Select * from items_table where item_name='$itemname'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result); 
        $sql = " INSERT INTO items_table(item_name, item_desc, item_price, contact) VALUES ( '$itemname', '$itemdesc', '$itemprice', '$contact' )";
        $query = mysqli_query($conn,$sql);
        
                if ($result) {
                    header("Location: joblist.php");
                }
            } 
            else { 
                
            }     
    ?>