<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library Managment</title>

  <!-- css file connect-->
  <link rel="stylesheet" href="design.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>

<body>
  <!-- header file connect-->
  <?php

  include "header.php";
  ?>
  <marquee>This is <b>Library Managment</b> System. Library Open at 10:00am and close at 6:00pm.</marquee><br>

  <div>
    <div class="col-md-3">
      <div class="sidebar">
        <h5>Library Timing</h5>
        <ul>
          <li>Opening Timing: 10:00 AM</li>
          <li>Closing Timing: 6:00 PM</li>
          <li>(Sunday off)</li>
        </ul>
        <h5>What we provide ?</h5>
        <ul>
          <li>Circulation of Books </li>
          <li>Free wi-fi</li>
          <li>Classification of Books</li>
          <li>Renewal Process </li>
          <li>Recall of Books</li>
          <li>News Paper</li>
        </ul>
      </div>
    </div>


    <!-- main content-->

    <div class="col-md-8" id="main_content">
      <center>
        <h3 class="register1">User Registation Form</h3>
      </center>
      <div class="register2">
        <form action="" method="POST" class="form">
          
          <div class="form-group">
            <label for="name">Full name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div>

          <div class="top">
            <div class="gender">
              Gender:&nbsp;&nbsp;
              <label for="Male">
              <input type="radio" id="Male" name="gender" value="Male" required>&nbsp; Male&nbsp;&nbsp; </label>
              <label for="Female">
              <input type="radio" id="Female" name="gender" value="Female" required>&nbsp; Female&nbsp;&nbsp;</label>
              <label for="Other">
              <input type="radio" id="Other" name="gender" value="Other" required>&nbsp; Other&nbsp;&nbsp;</label>
             
            </div>
            
            <div class="form-group">
              <label for="pass">Password:</label>
              <input type="password" id="pass" placeholder="Enter password" name="password" class="form-control" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}">
            </div>

            <div class="form-group">
              <label for="phone">Mobile No:</label>
              <input type="text" id="phone"  placeholder="0123-456789" name="mobile" class="form-control " pattern="[0-9]{10}" required>
            </div>

            <div class="form-group">
              <label for="address">Address:</label>
              <textarea id="address" class="form-control" required minlength="10" name="address" cols="40" rows="2"></textarea>
            </div>

            <br>
            <button type="submit" name="signup" class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>

    
</body>
</html>

<?php
if (isset($_POST['signup'])) {
    $id = $_POST['id'];
    $nm = $_POST['name'];
    $em = $_POST['email'];
    $gd = $_POST['gender'];
    $pass = $_POST['password'];
    $mb = $_POST['mobile'];
    $ad = $_POST['address'];

        //database connectivity
    $con = mysqli_connect("localhost", "root", "", "library");
    $sql = ("INSERT INTO users(name,email,gender,password,mobile,address) VALUES('$nm','$em','$gd','$pass','$mb','$ad')");
    mysqli_query($con, $sql);
    
    echo '<script>alert("registration successful...")</script>'; 
    echo "<script> window.location.href = 'index.php';
    </script>";
    
}
?>
