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
        <h3 class="register1">Login Form</h3>
      </center>
      <div class="register2">
        <form action="" method="POST" class="form">

          <div class="form-group">
            <label for="name">Email ID:</label>
            <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div>

          <div class="form-group">
            <label for="name">Password:</label>
            <input type="password" placeholder="Enter password" name="password" class="form-control"   >
          </div>
          <br>
          <button type="submit" name="login" class="btn btn-primary">login</button>

        </form>

              
      </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['login'])){
$con = mysqli_connect("localhost", "root", "", "library");

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        echo "<script> alert('Email is requerd') </script>";
        echo "<script> window.location.href = 'index.php';
        </script>";

        
    } else if (empty($pass)) {
        echo "<script> alert('password is requerd') </script>";
        echo "<script> window.location.href = 'index.php';
        </script>";

    } else {

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {
           $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                echo "<script> alert('login successfully') </script>";
                session_start();
                $_SESSION["email"] = $row["email"];
                $_SESSION["password"] = $row["password"];
                $_SESSION["id"] = $row["id"];

                echo "<script> window.location.href = 'user_dashboad.php';</script>";

                
            } else {
                echo "<script> alert('incorect email') </script>";
                echo "<script> window.location.href = 'index.php';
                    </script>";
            }
        } 
            else {
                echo "<script> alert('incorect password') </script>";
                echo "<script> window.location.href = 'index.php';
                                </script>";
        }
    }
}



}


?>