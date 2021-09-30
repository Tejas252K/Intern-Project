
    <?php
    include_once 'connect_db.php';
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $sqlquery = "INSERT INTO users VALUES ('$fname','$mname','$lname','$email','$password','$cpassword')";
    if (mysqli_query($conn, $sqlquery)) {
        header("location: login.php");            
    }
     else {
        echo '<script>alert("Email id already exists")</script>';
    }
    
    mysqli_close($conn);
    

    ?>