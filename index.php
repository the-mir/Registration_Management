

<?php

include("dbConnect.php");

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
        height: 100%;
        background-image: url(img/img1.gif);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        
      }
      h1{
        background:white;
        color:green;
      }
   input[type=text]{
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
   input[type=submit]{
     width: 10%;
     padding: 12px 20px;
     border: 1px solid #555;
     background-color: green;
     color: white;
 
   }
   label{
background:black;
font-size: 25px;
color: white;


   }



   </style>
  </head>
  <body >
    <div class="adminLogin" align="center">
      <br>
      <br>
      <br>
      <br>
      <h1>Admin Login</h1>
    <form action="" method="POST">
     <div>
     <!-- <label><b>Username</b></label> -->
     <input type="text" name="username" required="" placeholder="Enter admin name" value="<?php if(isset($username)){ echo '$username';} ?>">
     </div
     <br>
     <br>
     <div>
     <!-- <label> <b>Password</b></label> -->
     <input type="password" name="password" required="" placeholder="Enter password" value="<?php if(isset($password)){ echo '$password';} ?>">
     <br>
     <br>
     <input  type="submit" name="submit" value="Login">
     </div>
     </form>
<?php

if (isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];
$check = mysqli_query($connect,"SELECT * FROM `admin` WHERE `name` = '$username'");
if(mysqli_num_rows($check)>0){
  $row =mysqli_fetch_assoc($check);
  if($row['password']==($password)){
    if($row){

      header('location: Home.php');
    }

  }else {
    echo "Username Or Password wrong!";
   
   }
}



}


?>
    </div>
  </body>
</html>