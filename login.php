<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_table WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
        session_start();
        $_SESSION['username'] = $username; // Set username in session
        header("Location: index.php");
    } else {
        echo '<script>
                window.location.href = "index.html";
                alert("Login failed. Invalid username or password!")
              </script>';
    }
}
?>
