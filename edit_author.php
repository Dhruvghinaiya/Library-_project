<!doctype html>
<html lang="en">
<?php
require("function.php");
session_start();
$con = mysqli_connect('localhost','root','','library') or die('Unable To connect');
$author_name="";
$book_id="";
$query="select * from author where author_id= $_GET[aid]";
  $query_run=mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($query_run)){
    $author_name=$row['author_name'];
    $author_id=$row['author_id'];
  }
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../design.css">
  <title></title>
</head>

<body>
    

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <div class="navbar-header ">
        <a class="navbar-brand  " href="manage_author.php">SilverSmart Library</a>
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

  <marquee>This is <b>Library Managment</b> System. Library Open at 10:00am and close at 6:00pm.</marquee>

  <br>
  <nav class="navbar navbar-expand-lg navbar-light admin_navbar">
    <div class="container-fluid">
      <ul class="nav navbar-nav navbar-center">
        <li class="nav-item">
          <a href="admin_dashboad.php" class="nav-link">Dashboad</a>
        </li>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
          <div class="dropdown-menu">
            <a href="add_book.php" class="dropdown-item">Add New Book</a>
            <a href="manage_book.php" class="dropdown-item">Manage Book</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Add New Category</a>
            <a href="" class="dropdown-item">Manage Category</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Add New Author</a>
            <a href="" class="dropdown-item">Manage Authors</a>
          </div>
        </li>

        <li class="nav-item">
          <a href="admin_dashboad.php" class="nav-link">Issue Book</a>
        </li>

      </ul>
    </div>

  </nav>
  <br><br>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="" method="POST" class="add_book">
        <div class="form-group">
                <label for="name">Author Name:</label>
                <input type="text" name="author_name" value="<?php echo
                 $author_name;?>" id="name"  class="form-control" required="">
            </div>
            
            <button class="btn btn-primary" name="update">Update Author</button>
        </form>
    </div>
    <div class="col-md-4"></div>    

</body>

</html>

  <!-- update data in code  -->
<?php
    if(isset($_POST['update'])){
        $con = mysqli_connect('localhost','root','','library') or die('Unable To connect');
        $query="update author set author_name='$_POST[author_name]' where author_id=$_GET[aid]";
        $query_run=mysqli_query($con,$query);
     
        echo "<script> alert('author update sucessfully.. ') </script>";
        echo "<script> window.location.href = 'manage_author.php';
        </script>"; 
    }
?>