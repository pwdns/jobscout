<?php
  include "connection.php";
    $id="";
    $itemname="";
    $itemprice="";

    $error="";
    $success="";

    if($_SERVER["REQUEST_METHOD"]=='GET'){
        if(!isset($_GET['id'])){
        header("location:index3.php");
        exit;
        }
        $id = $_GET['id'];
        $sql = "select * from items_table where id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        while(!$row){
        header("location:index3.php");
        exit;
        }
        $itemname=$row["item_name"];
        $itemprice=$row["item_price"];

    }
    else{
        $id = $_POST["id"];
        $itemname=$_POST["item_name"];
        $itemprice=$_POST["item_price"];

        $sql = "update items_table set item_name='$itemname', item_price='$itemprice'  where id='$id'";
        $result = $conn->query($sql);
        header("location:index3.php");
        exit;
    }
    
    
?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update price </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> ITEM NAME: </label>
 <input type="text" name="item_name" value="<?php echo $itemname; ?>" class="form-control"> <br>

 <label> ITEM PRICE: </label>
 <input type="text" name="item_price" value="<?php echo $itemprice; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index3.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>