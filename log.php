<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body{
            background-size:cover;
            background-image:url("images/bg2.jpg");
            background-repeat: no-repeat;
            height: 98vh;
            display: flex;      
            font-family: 'Poppins';     
        }

        .login-container {
            padding-top:100px;
            padding-left: 490px;
            border-radius: 5px;
            margin-top: 50px;
        }
        .login-container h2 {
            padding-left: 210px;
        }
        form {
            border: 3px solid black;
            size: 200px;
        }
        input[type=text],input[type=password] {
            width:100%;
            padding:12px 20px;
            margin:8px 0;
            display :inline-block;
            border :1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: green;
            color:white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor:pointer;
            width:100%;
        }
        button:hover {
            opacity :0.8;
        }
        .imgcontainer {
            text-align:center;
            margin:12px 0 12px 0;
        }
        img.avatar {
            width:10%;
            border-radius: 50%;
        }
        .container {
            padding-left: 16px;
            width: 450px;
            /* margin-left:100px; */
        }
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        span.psw {
            float: right;
            padding-top: 16px;
        }
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }

        

       
    </style>
</head>
<body>
    <div class="login-container">
    <h2>login form</h2>
        <form action="login.php" method="post">
        <div class="imgcontainer">
            <img src="images/avatar.png" class="avatar">
        </div>
        <div class="container">
            <label for="uname"><b>Username:</b></label>
            <input type="text" placeholder="enter Username" name="uname">
            <label for="psw"><b>Password:</b></label>
            <input type="password" placeholder="enter Password" name="psw">
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked">Remember me
            </label>
        </div>    
        <div class="container">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">forgot password?</span>

        </div>
        </form>
    </div>
</body>
</html>
