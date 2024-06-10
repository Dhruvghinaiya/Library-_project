
<?php



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

        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {
           $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                echo "<script> alert('login successfully') </script>";
                session_start();
                $_SESSION["email"] = $row["email"];
                $_SESSION["password"] = $row["password"];
                

                echo "<script> window.location.href = 'admin_dashboad.php';</script>";

                
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

?>
