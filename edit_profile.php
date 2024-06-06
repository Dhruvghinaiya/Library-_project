<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "library");
$name = "";
$email = "";
$gender = "";
$password = "";
$mobile = "";
$address = "";
$query = "SELECT * FROM users WHERE email='$_SESSION[email]'";
$query_run = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($query_run)) {
    $name = $row['name'];
    $email = $row['email'];
    $gender = $row['gender'];
    $password = $row['password'];
    $mobile = $row['mobile'];
    $address = $row['address'];
}
?>

<!doctype html>
<html lang="en">


<head>

    <link rel="stylesheet" href="design.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="design.css">
    <title></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <div class="navbar-header ">
                <a class="navbar-brand " href="user_dashboad.php">SilverSmart Library</a>
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
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <marquee>This is <b>Library Managment</b> System. Library Open at 10:00am and close at 6:00pm.</marquee><br>

        <form action="" method="POST">
  <div class="col-5">
    <div class=" form-group view_profile_form">
        <label for="name">Name:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $name; ?>" name="name" >
    </div>

    <div class=" form-group view_profile_form">
        <label for="name">Email:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $email; ?>" name="email">
    </div>

    <div class=" form-group view_profile_form">
        <label for="name">Gender:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $gender; ?>" name="gender" >
    </div>


    <div class=" form-group view_profile_form">
        <label for="name">Mobile:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $mobile; ?>" name="mobile">
    </div>

    <div class=" form-group view_profile_form">
        <label for="name">Address:</label>
      <input type="address" class="form-control" id="name"  value="<?php echo $address; ?>" name="address" >
    </div>

    <br>
    <button type="submit"  class="btn btn-primary view_profile_form" name="update" value="update">update</button>
    
</form>
</body>

</html>


<?php

if(isset($_POST['update'])){

session_start();
$con=mysqli_connect("localhost","root","","library");


$query="UPDATE users SET name='$_POST[name]',email='$_POST[email]',gender='$_POST[gender]',mobile='$_POST[mobile]',address='$_POST[address]'WHERE email='$_SESSION[email]' ";
$query_run=mysqli_query($con,$query);


echo "<script> alert('Update successfully...') </script>";
        echo "<script> window.location.href = 'user_dashboad.php';
        </script>";

}
?>
