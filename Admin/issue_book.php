<!doctype html>
<html lang="en">
<?php
require("function.php");
session_start();
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
        <a class="navbar-brand  " href="admin_dashboad.php">SilverSmart Library</a>
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
      <h3 class="text-info">Issued Book</h3>
      <div class="form-group">
        <label for="name">Book Name:</label>
        <input type="text" name="book_name" id="name" class="form-control" required="">
      </div>

      <div class="form-group">
        <label for="name">Book Author:</label>
        <select name="book_author" id="" class="form-control">
          <option value=""> Select author</option>
          <?php
          session_start();
          $con = mysqli_connect('localhost', 'root', '', 'library') or die('Unable To connect');
          $result = mysqli_query($con, "SELECT author_name from author");
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?php echo $row['author_name'];?>"><?php echo $row['author_name']; ?></option>
          <?php
          }
          ?>
        </select>
        <div class="form-group">
          <label for="name">Book Number:</label>
          <input type="text" name="book_no" id="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="name">Student ID:</label>
          <input type="text" name="student_id" id="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="name">Issue Date:</label>
          <input type="date" name="issdate" id="name" class="form-control" value="<?php echo date("d-m-Y"); ?>">
        </div>
        <br>
        <button class="btn btn-primary" type="submit" name="issue_book">issue book</button>
      </div>
    </form>
  </div>
  <div class="col-md-4"></div>

</body>

</html>

<?php

if (isset($_POST['issue_book'])) {
  
  $con = mysqli_connect('localhost', 'root', '','library') ;
  $query = "insert into issued_book (book_no,book_name,book_author,student_id,status,issue_date) values('$_POST[book_no]','$_POST[book_name]','$_POST[book_author]','$_POST[student_id]',1,'$_POST[issdate]')";
  $query_run = mysqli_query($con, $query);

  echo "<script> alert('issuebook add sucessfully.. ') </script>";
  echo "<script> window.location.href = 'issue_book.php';
  </script>"; 
}

?>  