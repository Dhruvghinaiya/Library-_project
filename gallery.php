<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

      <style>
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: sans-serif;
        }
        .container{
          width: 100%;
          text-align: center;
        }
        h1{
          font-weight: normal;
          font-size: 50px;
          position: relative;      
          margin: 40px 0;
        }
        
        .line {
  width:100px;
  height:2px;
  background:linear-gradient(red 0 0) center/0% 100% no-repeat;
  animation:l 2s linear infinite alternate;
  position: relative;
  bottom: 10px;
  width: 100%;
  height: 3px;
}

@keyframes l {
  to {background-size:100% 100%}
}
        @keyframes animate{
          0%{
            width: 100%;
          }
          50%{
            width: 10px;
          }
          100%{
            width: 10px;
          }
          
        }
        img{
          width: 400px;
          height: 200px;
        }

        .photo-gallery{
          width: 110%;
          margin: auto;
          display: grid;
          grid-template-columns: repeat(4,1fr);
          grid-gap: 8px;
          position: relative;
          right: 60px;
        }
        .pic{
          position:relative;
          height: 230px;
          border-radius: 10px;
          box-shadow: 2px 2px 4px lightgray;
          cursor: pointer;
        }
        .pic img{
          width: 100%;
          height: 220px;
          border-radius: 10px;
        }
      
   
       
      </style>
  </head>
  <body>
    <?php
      include"header.php";
    ?>
    <div class="container">
    <h1> Gallery</h1>
    <div class="line"></div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

      <div class="photo-gallery">
      <div class="pic place">
          <img src="image/image1.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image2.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image3.jpg" alt="">
        </div>
        <div class="pic place">
          <img src="image/image4.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image5.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image6.jpg" alt="">
        </div>
        <div class="pic place">
          <img src="image/image7.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image8.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image9.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image10.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image11.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image12.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image13.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image14.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image15.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image16.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image17.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image18.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image19.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image20.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image21.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image22.jpg" alt="">
        </div>
        <div class="pic family">
          <img src="image/image23.jpg" alt="">
        </div>


      
      </div>
    </div>
    
  </body>
</html>