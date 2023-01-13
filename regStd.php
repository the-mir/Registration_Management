
<?php

include("dbConnect.php");

if(isset($_POST['submit'])){

     $name = $_POST['name'];
     $email = $_POST['email'];
     $department = $_POST['department'];
     $roll = $_POST['roll'];
     $blood = $_POST['blood'];
     $address = $_POST['address'];
     $mobile = $_POST['mobile'];
     
     $query = "INSERT INTO `student`(`name`, `email`, `department`, `roll`, `blood`, `address`, `mobile`) VALUES ('$name','$email','$department','$roll','$blood','$address',' $mobile')";
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
    <h1>Add Student</h1>
    <hr>
    <form action="" method="POST">
     <div>
     <div class="left"><label><b>Name</b></label></div>
     <div class="right"><input type="text" name="name" required="" placeholder="Enter student name" ></div>

     <div class="left"><label><b>Email</b></label></div>
     <input type="text" name="email" required="" placeholder="Enter student email">

    <div class="left"><label><b>Department</b></label></div>
    <div class="right"><select id="department" class="form-control" name="department" required="">
                    <option value="">Select</option>
                    <option value="CSE">CSE</option>
                    <option value="IT">IT</option>
                    <option value="EEE">EEE</option>
                    <option value="English">English</option></option>
                </select>
    </div>           
    <div class="left"><label><b>Roll</b></label></div>
    <div class="rght"><input type="number" name="roll" required="" placeholder="Enter student roll" ></div>
    <div class="left"><label><b>Blood Group</b></label></div>
    <div class="right"><select id="blood" class="form-control" name="blood" required="">
                    <option value="">Select</option>
                    <option value="O+">O+</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O-">O-</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                </select>
    </div> 
    <div class="left"><label><b>Address</b></label></div>
    <div class="rght"><input type="text" name="address" required="" placeholder="Enter student address"></div>
    <div class="left"><label><b>Mobile number</b></label></div>
    <div class="rght"><input type="phone" name="mobile" required="" placeholder="Enter student mobile number" ></div>
     
     </div>
     <div class="row">
    <?php if(isset($success)){ echo '<p class="alert alert-success">'.$success.'</p>';} ?>
    <?php if(isset($error)){ echo '<p class="alert alert-danger">'.$error.'</p>';} ?>
     </div>
     <br>
     <input  type="submit" name="submit" value="Submit">
     </div>
     </form>
     <br>
     <center><a  href="Home.php"> <button> Back</button></a></center>

    </div>
  </body>
</html>