<?php
include "connect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel = "stylesheet" href = "background.css">
</head>
<body>
    <div class="container my-5">
        <div class="btn btn-primary my-5"> <a href="user.php" class = 'text-white'>Add user</a> </div>

        <table class="table my-5 text-light fs-4">
  <thead>
    <tr>
      <th scope="col">ID.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>


    </tr>
  </thead>
  <tbody>

  <?php
    $sql = "SELECT * FROM crud";
    $result = $con->query($sql);
    if($result){
        ///to fetch data from database
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email =  $row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];

            echo'<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td><button class = "bg-primary" > <a class = "text-white" href="update.php?id='.$id.'" >Update</a></button>      
             <button class = "bg-danger" > <a class = "text-white" href="delete.php?id='.$id.'" >Delete</a></button></td>
          </tr>';
        }
        
    }
  
  ?>


  </tbody>
</table>
    </div>
</body>
</html>