
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Login</title>
    



       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-image: url(image/8.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                

            }

     

      
    </style>

  </head>
  <body>


             <?php 

session_start();

    include("connection.php");
    include("function.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where username = '$user_name' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location:viewBus.php");
                        die;
                    }
                }
            }
            
            echo "wrong username or password!";
        }else
        {
            echo "wrong username or password!";
        }
    }

?>


 <div class="login-box">
    <img src="image/avatar.png" class="avatar">
        <h1>Login For user</h1>
            <form method="post">
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="signUp.php" class="sign_up">sign up</a>&nbsp&nbsp&nbsp
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>
    

        

  </body>
</html>
