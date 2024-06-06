<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            text-align: center;
            justify-items: center;
            background-color: gray;
            background-size: 100px 300px;
            position: relative;
            top: 20px;
            height: 500px;
            text-transform: capitalize;
            cursor:default;
        }

        .mobile{
            position: relative;
            right: 300px;
        }
        .email{
            position: relative;
            right: 308px;
        }
        .label1{
            position: relative;
            right: 195px;
            bottom: 30px;
        }
        .label2{
            position: relative;
            right: 130px;
            bottom: 30px;
        }
        .label3{
            position: relative;
            right: 135px;
            bottom: 30px;
        }

        form{
            background-color:cornflowerblue;
            position: relative;
            bottom: 200px;
            left: 600px;
            width: 300px;
            height: 400px;
            
        }
      .i1{
        position: relative;

      }
      .i2{
        position: relative;
        
      }
      .i3{
        
     }
      .i4{
        position: relative;
        right: 13px;
      }

      .heading2{
        color:chartreuse ;
        position: relative;
        right: 20px;
        
      }
      .btn{
        position: relative;
        color:white;
        
      }
    </style>
</head>
<body>
    
    <?php
        include "header.php";
    ?>

        <div class="container">
            <h1 class="heading">Contact us</h1>
                <p>Hello my name is dhruv ghinaiya i am web devloper and profestional work in please your review in send in message. thank you</p>
                <br>

                <h5 class="mobile">Mobile:</h3>
                <label for="" class="label1">8155931920</label>
                
                <h5 class="email">Email:</h3>
                <label for="" class="label2">dhruvghinaiya793@gmail.com</label>

                <h5 class="mobile">Address:</h3>
                <label for="" class="label3">To.chhapari,savarkudla,amreli</label>
                    
                
                <form action="" method="POST" onsubmit=""><br>
                <h4 class="heading2">send a message</h4>
                <label for="name">
                            <input type="text" name="name" class="i1" id="name" placeholder="Enter Name" >
                    </label><br><br>
                    <label for="mobile">
                        <input type="text" name="mobile" class="i2" placeholder="Enter Mobile">
                    </label><br><br>
                    <label for="email">
                        <input type="Email" name="email" class="i3" placeholder="Enter email">
                    </label><br><br>
                    <label for="message">
                        <textarea name="message" id="" class="i4"  placeholder="message..."></textarea>
                    </label>
                        <br><br>
                    <input type="submit" name="btn" value="submit"  class="btn" style="color: red; background-color:pink">
                </form>
        </div>

            </body>
</html>
            <?php
if (isset($_POST['btn'])) {

    $nm = $_POST['name'];
    $mb = $_POST['mobile'];
    $em = $_POST['email'];
    $ms = $_POST['message'];
    

        //database connectivity
    $con = mysqli_connect("localhost", "root","","library");

    $sql = ("INSERT INTO message(name,mobile,email,message) VALUES('$nm','$mb','$em','$ms')");
    mysqli_query($con,$sql);
    
    echo '<script>alert("your message is send successfully..")</script>'; 
}

?>
