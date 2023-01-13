
<?php

include("dbConnect.php");

if(isset($_POST['submit'])){

     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $mobile = $_POST['mobile'];
     $address = $_POST['address'];
     
     
     $query = "INSERT INTO `admin`(`name`, `email`, `password`, `mobile`, `address`) VALUES ('$name','$email','$password','$mobile','$address')";
     $result = mysqli_query($connect,$query);

     if($result){
        $success ="Data insert success!";

     } 
     else{

        $error = "Data insert failed!";
     }



}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registreation Management</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
    body{
      background: cornflowerblue;
    }  
   input[type=text]{
     width: 25%;
     padding: 10px 20px;
     margin: 5px 0;
     border: 1px solid black;

   }
   input[type=submit]{
     width: 10%;
     padding: 12px 20px;
     border: 1px solid #555;
     background-color: green;
     color: white;

   }
   select{
    width: 25%;
     padding: 10px 20px;
     margin: 5px 0;
     border: 1px solid black;
   }
   
   input[type=number]{
     width: 25%;
     padding: 10px 20px;
     margin: 5px 0;
     border: 1px solid black;
   }
   input[type=phone]{
     width: 25%;
     padding: 10px 20px;
     margin: 5px 0;
     border: 1px solid black;
   }
   input[type= password]{
     width: 25%;
     padding: 10px 20px;
     margin: 5px 0;
     border: 1px solid black;

   }
   button{
    width: 10%;
     padding: 12px 20px;
     border: 1px solid #555;
     background-color: green;
     color: white;
   }

   </style>
  </head>
  <body >
 
    <div class="addstd" align="center">
      <br>
      <br>
    <h1>Add Admin</h1>
    <hr>
    <form action="" method="POST">
     <div class="left"><label><b>Name</b></label></div>
     <div class="right"><input type="text" name="name" required="" placeholder="Enter username" ></div>

     <div class="left"><label><b>Email</b></label></div>
     <div class="rght"><input type="text" name="email" required="" placeholder="Enter user email" ></div>

     <div class="left"><label><b>Password</b></label></div>
     <div class="rght"><input type="password" name="password" required="" placeholder="Enter  password" ></div>
       
     <div class="left"><label><b>Mobile number</b></label></div>
    <div class="rght"><input type="phone" name="mobile" required="" placeholder="Enter student mobile number" ></div>

    <div class="left"><label><b>Adress</b></label></div>
    <div class="rght"><input type="text" name="address" required="" placeholder="Enter student address" ></div>
    
     
    
     <div class="row">
    <?php if(isset($success)){ echo '<p class="alert alert-success">'.$success.'</p>';} ?>
    <?php if(isset($error)){ echo '<p class="alert alert-danger">'.$error.'</p>';} ?>
     </div>
     <br>
     <input  type="submit" name="submit" value="Submit">
     </div>
     </form>
     <br>
</div>
     <center><a  href="Home.php"> <button> Back</button></a></center>
    
  </body>
</html>