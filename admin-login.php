<?php 

 session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> Admin Login</title>




  body{
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  background-image: url(image/3.jpg);
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


  <div class="login-box">
    <img src="image/avatar.png" class="avatar">

    <h1>Admin Login</h1>
    <form method="POST">
      <p>Username</p>
      <input type="text" name="Admin_username" placeholder="Enter Username">
      <p>Password</p>
      <input type="password" name="Admin_password" placeholder="Enter Password">
      <input type="submit" name="login" value="Login">
       <a href="signUp.php" class="sign_up">sign up</a>
                    <a href="#">Forget Password</a>   
    </form>


  </div>

  <?php 

    if(isset($_POST['login'])){

        $query="SELECT * FROM `admin` WHERE username='$_POST[Admin_username]'  AND  password='$_POST[Admin_password]'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){

        // session_start();//
         $_SESSION['username']=$_POST['Admin_username'];
         header("location:adminDash.php");

        }
        else{
          echo '<script type="text/javascript">alert("incorrect_pass!!!")</script>';
        }
        
        

    }

?>





</body>

</html>