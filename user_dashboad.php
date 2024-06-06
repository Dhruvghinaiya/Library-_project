<!doctype html>
<html lang="en">
<?php
  session_start();
  function get_user_issue_book_count(){
    
  $con = mysqli_connect("localhost","root","","library");
  $user_issue_book_count=0;
  $query = ("select count(*) as user_issue_book_count from issued_book where student_id=$_SESSION[id]");
  $query_run=mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($query_run)){
    $user_issue_book_count=$row['user_issue_book_count'];
}
  return($user_issue_book_count);
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
  <link rel="stylesheet" href="design.css">
  <title></title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <div class="navbar-header ">
        <a class="navbar-brand " href="index.php">SilverSmart Library</a>
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
      
    <div class="col-md-3 user">
          <div class="card bg-light">
            <div class="card-header">Issue Books:</div>
              <div class="card-body">
                <p class="card-text">No. Of Issue Books:<?php echo get_user_issue_book_count();?></p>
                <a href="view_issued_book.php" class="btn btn-success" target="_blank">View Issued Book</a>
                
              </div>
          </div>

</body>

</html>