<?php
 include 'connect.php';
 $id = $_GET['id'];

 $sql = "SELECT * FROM crud WHERE id=$id";
 $result = $con->query($sql);

 $row = mysqli_fetch_assoc($result);
 $id=   $row['id'];
 $name= $row['name'];
 $email=$row['email'];
 $mobile=$row['mobile'];
 $password=$row['password'];

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE crud SET
            id = '$id',
            name = '$name',
            email = '$email',
            mobile = '$mobile',
            password = '$password'
        WHERE id = $id";



    $result= $con->query($sql);
    if($result){
        header("location:display.php");
    }else{
    //    die(mysqli_error($con)); 
    echo "not updated";

    }
 }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel = "stylesheet" href = "background.css">
  </head>
  <body>
    <div class="container my-5">
    <form method='post'>
  <div class="mb-3">
    <label class="form-label">Enter your Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name = "name" autocomplete= 'off' value = <?php echo $name ?>>
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>

  <div class="mb-3">
    <label class="form-label">Enter your Email</label>
    <input type="text" class="form-control" placeholder="Enter your Email" name = "email"  autocomplete= 'off'  value = <?php echo $email ?>>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label class="form-label">Enter your Mobile</label>
    <input type="text" class="form-control" placeholder="Enter Your Mobile" name = "mobile" autocomplete= 'off'  value = <?php echo $mobile ?>>
    <div id="emailHelp" class="form-text">We'll never share your mobile with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Enter your Password</label>
    <input type="text" class="form-control" placeholder="Enter Your Password" name = "password" autocomplete= 'off'  value = <?php echo $password ?>>
    <div id="emailHelp" class="form-text">We'll never share your Password with anyone else.</div>
  </div>
  
  <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </body>
</html>