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
        header("location:joblist.php");
    }
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBSCOUT - Sell Your Items</title>
    <link rel="stylesheet" type="text/css" href="css/stylesell.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function formatRupiah(value) {
            // Strip all characters except digits
            value = value.replace(/[^0-9]/g, '');
            // Format the number as Rupiah
            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0, // No decimal places for Rupiah
            });
            return formatter.format(value).replace(/(\s?\D+)/g, "$1 "); // Include a space after currency symbol
        }

        document.addEventListener("DOMContentLoaded", function() {
            const input = document.getElementById('amount');
            input.addEventListener('input', function(event) {
                const cursorPosition = input.selectionStart - (input.value.match(/\D/g) || []).length;
                const formattedValue = formatRupiah(input.value);
                input.value = formattedValue;
                // Adjust cursor position to handle non-digit characters
                input.selectionStart = input.selectionEnd = Math.min(cursorPosition + (input.value.match(/\D/g) || []).length, input.value.length);
            });
        });
    </script>
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="index.php">JOBSCOUT</a></h1>
            <ul>
                <li><a href="joblist.php">JOB</a></li>
                <li><a href="index.php">HOME</a></li>
                <li><a class="btn btn-info" type="submit" name="submit" href="logout.php">logout</a></li>
            </ul>
        </div>
    </header>
    <!-- sell form -->
    <section class="sell-form">
        <div class="container">
            <h2>Sell Your Items</h2>
            <form action="joblist.php" method="post">
                <label for="itemName">Item Name:</label>
                <input type="text" placeholder="Buat PPT" name="item_name" class="form-control"><br>

                <label for="itemDescription">Item Description:</label>
                <textarea id="item_desc" placeholder="Tentang mengapa indonesia harus merdeka" name="item_desc" rows="4" required></textarea>

                <!-- <label for="itemPrice">Item Price:</label>
                <input type="number" placeholder="Rp."  step="all" name="item_price" id="item_price" required="required"> -->
                <label for="amount">Amount (Rp):</label>
                <input type="text" id="item_price" name="item_price" placeholder="E.g 100.000">


                <label for="contactInfo">Contact Information:</label>
                <input type="text" id="contact" placeholder="+62xxxxxx" name="contact" required>

                <button class="btn btn-success" type="submit" name="submit"> Submit Listing </button>
                <button class="btn btn-info" type="submit" name="cancel" href="index3.php"> Cancel </a><br>
            </form>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="container">
            <small> Copyright &copy; 2023 - JOBSCOUT, All Rights Reserved</small>
        </div>
    </footer>
</body>
</html>
