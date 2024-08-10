<?php 
    include('db_connection.php');
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
     
   
    if($con->connect_error) 
    {
        die("failed to connect : ".$con->connect_error);
    }
    else 
    {
        $stmt = $con->prepare("select *from registration where username= ? and password= ?");
        $stmt->bind_param("ss", $uname,$psw);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows >0) {
           $data =$stmt_result->fetch_assoc();
           if($data['password']== $psw) {
            echo "<h2>login successful</h2>";
            header("Location:main.php");
            exit();
           }
           else {
            echo "<h2>invalid email or password</h2>";
           }
        }
        else {
            echo "<h2>Invalid username or password</h2>";
        }
    }
}
 else {
    echo "<h2>Invalid access to the page</h2>";
 }

?>