<?php 
include('db_connection.php');
                
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $branch = $_POST['branch'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $password = $_POST['psw'];

    if (empty($uname)) {
        echo "Please enter your username";
    } else if (empty($password)) {
        echo "Please enter the password";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
              
        $query = "SELECT * FROM registration";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                if($row["username"]==$uname && $row["password"]==$password){
                    echo "<script>alert('User Already exists, Please login');</script>";
                    exit();
                }
            }
        }

        $query = "INSERT INTO registration(name,rollno,branch,phno,email,username,password) VALUES ('$name', '$rollno', '$branch', '$phno' , '$email', '$uname', '$password')";
        $result = mysqli_query($con, $query);
         if ($result) {
            echo '<meta http-equiv="refresh" content="0;url=log.php">';
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("images/bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            backdrop-filter: blur(10px);
            font-family: 'Poppins';

            /* background-color: mistyrose; */
        }

        /* .login-container {
            margin: 0 auto;
            
            border-radius: 5px;
            margin-top: 50px;
        } */
       
        /* form {
           
        } */
        input[type=text],input[type=password] {
            width:100%;
            padding:8px 12px;
            margin:8px 0;
            display :inline-block;
            border :1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: green;
            color:white;
            padding: 8px 12px;
            margin: 8px 0;
            border: none;
            cursor:pointer;
            width:100%;
        }
        button:hover {
            opacity :0.8;
        }
        
        
        .container {
            margin: 0 auto;
            border: 3px solid black;
            /* size: 100px; */
            width: 500px;
            height: 560px;
            padding:46px;
            margin: 0 auto;
            margin-left:420px;
            padding-top: 16px;
            background-color: rgb(217, 233, 247);
            border: 1px solid #3a7bd6;
        }
        .container input{
            border-radius: 5px;
        }
       
        /* .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        } */
        span.psw {
            float: right;
            padding-top: 16px;
        }
       

        

       
    </style>
</head>
<body>
    <!-- <div class="login-container"> -->
        <h2 align=center>SignUp</h2>
        <div class="container">
        <form action="registration.php" method="post">
       
        
            <label for="name"><b>name:</b></label>
            <input style="font-family: 'Poppins';border-radius: 5px;"  type="text" placeholder="enter name" name="name">
            <label for="rollno"><b>rollno:</b></label>
            <input style="font-family: 'Poppins';border-radius: 5px;" type="text" placeholder="enter rollno" name="rollno">
            <label for="branch"><b>branch:</b></label>
            <select style="font-family: 'Poppins';border-radius: 5px;" name="branch" id="branch">
                <option value="cse">cse</option>
                <option value="ece">ece</option>
                <option value="eee">eee</option>
                <option value="it">it</option>
                <option value="chem">chem</option>
                <option value="mech">mech</option>
                <option value="civil">civil</option>
            </select>
            <br>
            <label for="phno"><b>phno:</b></label>
            <input style="font-family: 'Poppins';border-radius: 5px;" type="text" placeholder="enter phno" name="phno">
            <label for="email"><b>email:</b></label>
            <input style="font-family: 'Poppins';border-radius: 5px;" type="text" placeholder="enter email" name="email">
            <label for="uname"><b>username:</b></label>
            <input style="font-family: 'Poppins';border-radius: 5px;" type="text" placeholder="enter username" name="uname">
            <label for="psw"><b>Password:</b></label>
            <input style="font-family: 'Poppins';border-radius: 5px;" type="password" placeholder="enter Password" name="psw">
            <button style="font-family: 'Poppins';border-radius: 5px;" type="submit">register</button>
           
           
        </form>
        <label>
            <input style="font-family: 'Poppins';border-radius: 5px;" type="checkbox" checked="checked">Remember me
        </label>
        <p align=center>already have an account?<a href="log.php">login</p>

    </div> 
    <!-- </div> -->
</body>
</html>