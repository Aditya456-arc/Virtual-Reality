<?php 
    $db_server="localhost";
    $db_user= "root";
    $db_pass= "";
    $dbname = "details";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $dbname);
    if(isset($_POST["submit"])){
        $name= $_POST["name"];
        $phno= $_POST["phno"];
        $email= $_POST["email"];
        $sql="INSERT INTO login_det (name, phno, email) VALUES ('$name', '$phno', '$email')";
    mysqli_query($conn, $sql);
    }
     mysqli_close($conn);
?>