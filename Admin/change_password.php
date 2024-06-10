<!doctype html>
<html lang="en">
<?php
session_start();
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->
  <link rel="stylesheet" href="../design.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="design.css">
  <title>Admin Dashboad</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <div class="navbar-header ">
        <a class="navbar-brand  " href="index.php">SilverSmart Library</a>
      </div>
      <span><strong class="text-warning">welcome:<?php echo $_SESSION["email"]; ?></strong></span>
      <ul class="nav navbar-nav navbar-right ">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " data-toggle="dropdown">My profile</a>
          <div class="dropdown-menu ">
            <a class="dropdown-item" href="view_profile.php">View Profile</a>
            <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
            <a class="dropdown-item" href="change_password.php">Change Password</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a>

        </li>
      </ul>
    </div>
  </nav>
  <marquee>This is <b>Library Managment</b> System. Library Open at 10:00am and close at 6:00pm.</marquee><br>

    <div class="pass">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      

        <form action="" method="POST">
          <div class="form-group">
            <label for="old_password">Enter Currect Password</label>
            <input type="password" name="currentPassword" id="currentPassword" 
class="form-control">
          </div>

          <div class="form-group">
            <label for="new_password">Enter New Password</label>
            <input type="password" name="newPassword" id="newPassword" class="form-control">
          </div>
          
          <button type="submit" name="update" class="btn btn-primary">Update Password</button>
        </form>
    </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['update'])){
session_start();
$con = mysqli_connect('localhost', 'root', '', 'library') or die('Unable To connect');
if (count($_POST) > 0) {
    $result = mysqli_query($con, " SELECT * from admin where email='$_SESSION[email]'");
    while($row = mysqli_fetch_array($result));
    if ($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"]) {
        mysqli_query($con, "UPDATE admin set password='" . $_POST["newPassword"] . "' WHERE email='$_SESSION[email]'");
        echo '<script>alert("update sucessfully...")
        </script>';
    
        echo "<script> window.location.href = 'admin_dashboad.php';
        </script>";
    
    } else {
        echo '<script>alert("password is not correct")</script>'; 
        echo "<script> window.location.href = 'change_password.php';
        </script>";
        
        echo "<script> window.location.href = 'change_password.php';
        </script>";     
    }
}
}
?>





