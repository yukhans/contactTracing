<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contract Tracing Application</title>
   <!--CSS-->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

   <!-- Icons -->
   <script src="https://kit.fontawesome.com/f981cd8cfa.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class = "container1">
      <div class="c1-text"><h1>A D M I N I S T R A T O R</h1></div>   
   </div>
   <div class ="container2">
   <i class="fa fa-shield"></i><div class="login_id"> LOGIN</div><hr>
   <form action="" method="POST">
      <div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><label for="USERNAME"><input type="text" id="USERNAME" placeholder="USERNAME" name="USERNAME" required></label><br></div><br>
      <div class="input-group"><div class="input-group-addon"><i class="fa fa-key"></i></div><label for="PASSWORD"><input type="password" id="PASSWORD" placeholder="PASSWORD" name="PASSWORD" required></label><br></div>
      <button type="submit" class="enter" name = "enter">Login <i class="fas fa-arrow-right"></i></button>
      
      <div class = "copyright"><p>2021 &copy; GROUP 3222</p></div>
   </form>
   </div>
  

   <?php
      if(isset($_POST['enter'])){
         $USERNAME = $_POST['USERNAME'];
         $PASSWORD = $_POST['PASSWORD'];
         if($USERNAME == 'user@1234' && $PASSWORD == 'user@1234'){
         header('Location: dashboard.php');
         }
         else{
            echo("<script>alert('Incorrect Password')</script>");
            echo("<script>window.location = 'index.php';</script>");
         }
      }
   ?>

</body>
</html>