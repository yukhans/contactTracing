<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>END</title>

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
   //ADD DATA

   //connect to database
   include('config/db_connect.php');

   //clean in POST
   $id_Number = mysqli_real_escape_string($conn, $_POST['idNum']); //change to POST LATER
   $first_Name = mysqli_real_escape_string($conn, $_POST['fName']);
   $middle_Name = mysqli_real_escape_string($conn, $_POST['mName']);
   $last_Name = mysqli_real_escape_string($conn, $_POST['lName']);
   $province = mysqli_real_escape_string($conn, $_POST['province']);
   $city = mysqli_real_escape_string($conn, $_POST['city']);
   $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
   $contact_num = mysqli_real_escape_string($conn, $_POST['cnumber']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   

   //look if SIGNED_IN
   //write query
   if($id_Number != ''){
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

   }

   if($id_Number != ''){
      $sql = "INSERT INTO information(id_Number,first_Name,middle_Name,last_Name,province,city,barangay,contact_num,email) VALUES('$id_Number', '$first_Name', '$middle_Name', '$last_Name', '$province', '$city', '$barangay', '$contact_num', '$email')";
   }else{
      $sql = "INSERT INTO information(id_Number,first_Name,middle_Name,last_Name,province,city,barangay,contact_num,email) VALUES(NULL, '$first_Name', '$middle_Name', '$last_Name', '$province', '$city', '$barangay', '$contact_num', '$email')";
   }

   
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
   ?>
   <a href ="index.php">Continue <i class="fas fa-arrow-right"></i></a>
   </div>
</body>
</html>