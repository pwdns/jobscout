<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

        
        
        $sql = "Select * from user_table where username='$username'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result);  

        if($count_user == 0 && $count_email==0){  
            
            if($password == $cpassword) {
     
                $sql = "INSERT INTO user_table(username, password) VALUES('$username', '$password')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    session_start();
                    $_SESSION['username'] = $username;
                    header("Location: index.php");
                }
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "index1.php";
                    </script>';
            }      
        }  
        else{  
            if($count_user>0){
                echo  '<script>
                        window.location.href = "index1.php";
                        alert("Username already exists!!")
                    </script>';
            }
            if($count_email>0){
                echo  '<script>
                        window.location.href = "index1.php";
                        alert("Email already exists!!")
                    </script>';
            }
        }     
    }
    ?>