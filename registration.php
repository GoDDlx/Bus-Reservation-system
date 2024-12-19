


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>

   
    
     
body{
 
  background-image: url(image/8.jpg);
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;

}
.confirm{

    background-color: black;
    margin-top: 5px;


}
      
    </style>

  </head>
  <body>

  

<div class="confirm">

<?php

session_start();

  
  include("function.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con_pass=$_POST['cpassword'];


   // echo $user_name;


    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        

       if($password==$con_pass){

        
        //   $password=md5($password);//

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,First_Name,Last_Name,username,email,password) values ('$user_id','$fname','$lname','$user_name','$email','$password')";

            mysqli_query($conn,$query);

            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully your Sign Up!!!');
    window.location.href='Login.php';
    </script>");

        }
        else{

             echo "Please enter confirm password as previous one!!";

          }
    }
    else{
    
         echo "Please enter some valid information!";

      }
  }
?>

</div>

         


          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Sign Up for EZfare Bus Service
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        <div class="input_grp">
          <div class="input_wrap">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="First Name" required>
          </div>
          <div class="input_wrap">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="input_wrap">
          <label for="email">Email Address</label>
          <input type="text" id="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="input_wrap">
          <label for="uname">Username</label>
          <input type="text" id="uname" name="user_name" placeholder="Username" required>
        </div>
        <div class="input_wrap">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="password" required>
        </div>
        <div class="input_wrap">
          <label for="Confirm_password">Confirm Password</label>
          <input type="password" id="password" name="cpassword" placeholder="password" required>
        </div>
       
        <div class="input_wrap">
          <input type="submit" value="Register Now" class="submit_btn">
        </div>

      </div>
    </form>
  </div>
</div>







  </body>
</html>
