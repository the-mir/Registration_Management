<!DOCTYPE html>
<html lang="en">

<head>
  <title>All Admin</title>
  <style>
body{
  background-color: cornflowerblue;

}
table, th, td {
  border: 1px solid black;
}
  label{
      background: black;
      color: white;
  }
  th {
      text-align: center ;
  }
td  {
      text-align: center;
  }
button{
  width: 200px;
  background-color: #4CAF50; 
  border-radius: 8px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
header{
  background-color: grey;
  color: aliceblue;
  padding: 2px;

  margin: 0%;
}

</style>

</head>

<body>
<div class="head">
  <header align="center">
    
   <h1>All Admin Information</h1>

  </header>
  </div>
  <br>
    <?php include 'dbConnect.php'; 
        $sql = "SELECT * FROM admin";
        $result = mysqli_query($connect, $sql);
    ?>
    <table align="center">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Pssword</th>
      <th>Address</th>
      <th>Mobile</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['mobile'];?></td>
      
    </tr>
    <?php endwhile; ?>
    
  </table>
  <br>
  <center><a  href="Home.php"> <button> Back</button></a></center>


</div>

</body>

</html>