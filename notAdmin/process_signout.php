<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <!--CSS-->
   <link rel="stylesheet" type="text/css" href="css/styleend.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

   <!-- Icons -->
   <script src="https://kit.fontawesome.com/f981cd8cfa.js" crossorigin="anonymous"></script>

</head>
<body>
      
      <!-- CHANGE TO SIGN IN = 0; where 0 equals FALSE-->
      <?php
         //connect to database
         include('config/db_connect.php');  

         $ID = $_GET['ID'];
         //write query
         $sql = "UPDATE information SET SIGN_IN = 0 WHERE ID = $ID";
            
         //make query and get result
         $result = mysqli_query($conn,$sql);  

         //close connection to the database
         mysqli_close($conn);
      ?>
      <div class = "container">
      <h1 class ="signedOut">SIGNED OUT</h1>
      <a href ="index.php">Continue <i class="fas fa-arrow-right"></i></a>
      </div>
</body>
</html>