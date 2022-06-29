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
   <div class = "container">
   <?php
      session_start();
      $id_Number = $_SESSION['ID_NUM'];
   ?> 

   <?php
    //connect to database
   include('config/db_connect.php');

   //look if SIGNED_IN
   $sql = "SELECT SIGN_IN FROM information WHERE id_Number = $id_Number";

   //make query and get result
   $result = mysqli_query($conn,$sql);
      
   //fetch the sulting rows as an array
   $information = mysqli_fetch_all($result, MYSQLI_ASSOC); //ASSOC == associative array == library in python

   //free the $result from memory
   mysqli_free_result($result);  

   $arrLength = count($information);  

   // loop through the array

   for($i = 0; $i < $arrLength; $i++) {

    if($information[$i]['SIGN_IN'] == 1){
         echo("<script>alert('Aldready Signed IN!')</script>");
         echo("<script>window.location = 'index.php';</script>");
         //header('Location: index.php');
         exit();
         }
      }

   // NOT SIGNED IN THEREFORE MAKE      
   //write query
   $sql = "SELECT * FROM information WHERE id_Number = $id_Number ";
      
   //make query and get result
   $result = mysqli_query($conn,$sql);
   
   //fetch the sulting rows as an array
   $information = mysqli_fetch_all($result, MYSQLI_ASSOC); //ASSOC == associative array == library in python

   //free the $result from memory
   mysqli_free_result($result);  

   //store data
   $first_Name = $information[0]['first_Name'];
   $middle_Name = $information[0]['middle_Name'];
   $last_Name = $information[0]['last_Name']; 
   $province = $information[0]['province'];
   $city = $information[0]['city'];
   $barangay = $information[0]['barangay'] ;
   $contact_num = $information[0]['contact_num'] ;
   $email = $information[0]['email'];   

   //INSERT NEW INFORMATION *CREATE*
   $sql = "INSERT INTO information(id_Number,first_Name,middle_Name,last_Name,province,city,barangay,contact_num,email) VALUES($id_Number, '$first_Name', '$middle_Name', '$last_Name', '$province', '$city', '$barangay', '$contact_num', '$email')";
     
   //save to database
   mysqli_query($conn,$sql);
   //success     


  //PRINT TIMESTAMP

   //connect
   include('config/db_connect.php');

   //write query
   $sql = "SELECT ID, timeNday FROM information ORDER BY ID DESC LIMIT 1; ";
      
   //make query and get result
   $result = mysqli_query($conn,$sql);

   //fetch the sulting rows as an array
   $information = mysqli_fetch_all($result, MYSQLI_ASSOC); //ASSOC == associative array == library in python

   //free the $result from memory
   mysqli_free_result($result);  

   //close connection to the database
   mysqli_close($conn);

   echo "<span class='name'>" . "DAY and TIME: " . $information[0]['timeNday'] . "</span>";
   echo "<span class='name'>" . "<br>USE this ID:" . "<strong>". $information[0]['ID'] . "</strong>" . " to signout" . "</span>";
   

   // //write query
   // $sql = "UPDATE information SET timeNday=now() WHERE id_Number = $id_Number";  //update
      
   // //make query and get result
   // $result = mysqli_query($conn,$sql); 


   // //write query
   // $sql = "SELECT timeNday FROM information WHERE id_Number = $id_Number ";
      
   // //make query and get result
   // $result = mysqli_query($conn,$sql);

   // //fetch the sulting rows as an array
   // $information = mysqli_fetch_all($result, MYSQLI_ASSOC); //ASSOC == associative array == library in python

   // //free the $result from memory
   // mysqli_free_result($result);  

   // //close connection to the database
   // mysqli_close($conn);
   // echo "day and time he or she entered the office.<br>";
   // echo $information[0]['timeNday'];
   ?>

   <br>
   <a href ="index.php">Continue <i class="fas fa-arrow-right"></i></a>
   </div>
</body>
</html>