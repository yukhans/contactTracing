<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Verify</title>
   <!--CSS-->
   <link rel="stylesheet" type="text/css" href="css/styleverify.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

   <!-- Icons -->
   <script src="https://kit.fontawesome.com/f981cd8cfa.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class = "container">
   <!-- RETRIEVE DATA FROM DATABASE -->
   <?php
   //connect
   include('config/db_connect.php');
   
   if(isset($_POST['ID_NUM'])){
   

   $id_Number = mysqli_real_escape_string($conn,$_POST['ID_NUM']);
      
   //write query
   $sql = "SELECT first_Name, middle_Name, last_Name, province, city, barangay, contact_num, email FROM information WHERE id_Number = $id_Number ";
      
   //make query and get result
   $result = mysqli_query($conn,$sql);
   
   //fetch the sulting rows as an array
   $information = mysqli_fetch_all($result, MYSQLI_ASSOC); //ASSOC == associative array == library in python


   if($information == Array()){
      echo("<script>alert('NO such ID')</script>");
      echo("<script>window.location = 'index.php';</script>");
      //header('Location: index.php');
      exit();
   }
   

   //free the $result from memory
   mysqli_free_result($result);  

   //close connection to the database
   mysqli_close($conn);
   }
   
   ?>

   <!--PRINT DATA-->
   

   <?php
   echo "<span class='name'>" ."Is this you?<br>";
   echo "<span class='name'>" . "First Name : " . $information[0]['first_Name'] . "</span>";echo "<br>";
   echo "<span class='name'>" . "Middle Name: " . $information[0]['middle_Name'] . "</span>";echo "<br>";
   echo "<span class='name'>" . "Last Name  : " . $information[0]['last_Name'] . "</span>";echo "<br>";
   echo "<span class='name'>" . "Province   : " . $information[0]['province'] . "</span>";echo "<br>";
   echo "<span class='name'>" . "City       : " . $information[0]['city'] . "</span>";echo "<br>";
   echo "<span class='name'>" . "Barangay   : " . $information[0]['barangay'] . "</span>";echo "<br>";
   echo "<span class='name'>" . "Contact #  : " . $information[0]['contact_num'] . "</span>";echo "<br>";
   echo "<span class='name'>" . "Email      : " . $information[0]['email'] . "</span>";echo "<br>";
   ?>

   <?php
   session_start();
   $_SESSION['ID_NUM']= $id_Number;
   ?>

   <a href ="index.php" class = "NO"><i class="fas fa-arrow-left"></i>  NO</a>
   <a href ="after_verify.php" class = "YES">YES <i class="fas fa-arrow-right"></i></a>
   </div>   
</body>
</html>




