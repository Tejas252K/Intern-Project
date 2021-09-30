<?php      
    include('connect_db.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script>alert('Login successful!')</script>";  
            sleep(5);
            header("location: user.php");
            return true;
        }  
        else{  
            echo "<script>alert('Login failed. Invalid email or password.')</script>";  
 
            return false;
        }     
?>  