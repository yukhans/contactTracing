<!DOCTYPE html>
<?php 
	include_once 'config/db_connect.php';
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contract Tracing Application</title>
   <!--CSS-->
   <link rel="stylesheet" type="text/css" href="css/dashboard.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

   <!-- Icons -->
   <script src="https://kit.fontawesome.com/f981cd8cfa.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class = "container">
   <form action="<?=$_SERVER['PHP_SELF']?>" method="POST"><br><br>
      <label for="f_name">First Name<input type="text" name="fName" id="f_name" placeholder="Jake"></label>
      <label for="l_name">Last Name<input type="text" name="lName" id="l_name" placeholder="Ruz"></label>
      <label for="province">Province<input type="text" name="province" id="province" placeholder="Cebu" ></label>
      <label for="townCity">Town/City<input type="text" name="city" id="townCity" placeholder="Cebu City" ></label>
      <label for="brgy">Barangay<input type="text" name="barangay" id="brgy" placeholder="Talamban" ></label>
      <label for="timeNday">Time and Day<input type="tel" name="timeNday" id="timeNday" placeholder="2021-06-05 13:33:09"></label>
      <label for="idNumber"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspID number<input type="tel" name="idNumber" id="idNumber" placeholder="18102931" ></label>
      <button type="submit" class="submit-button" name="submit">Submit <i class="fas fa-arrow-right"></i></button>
   </form>
   </div>
   <?php
      //write query
      $sql = "SELECT id_Number,first_Name, last_Name, province, city, barangay, timeNday FROM information";

      //make query and get result
      $result = mysqli_query($conn,$sql);

      //fetch the sulting rows as an array
      $information = mysqli_fetch_all($result, MYSQLI_ASSOC); //ASSOC == associative array == library in python

      //free the $result from memory
      mysqli_free_result($result);  

   ?>

   <div class = "container1">
      <table id="tb">
      <tr>
         <th>City</th>
         <th>Barangay</th>
         <th>Province</th>
         <th>ID number</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Time and Day</th>
      </tr>
      <?php $arrLength = count($information); 
      for($i = 0; $i < $arrLength; $i++) {
      echo "<tr>";
         echo "<td>".$information[$i]['city']."</td>";
         echo "<td>".$information[$i]['barangay']."</td>";
         echo "<td>".$information[$i]['province']."</td>";
         echo "<td>".$information[$i]['id_Number']."</td>";
         echo "<td>".$information[$i]['first_Name']."</td>";
         echo "<td>".$information[$i]['last_Name']."</td>";
         echo "<td>".$information[$i]['timeNday']."</td>";
      echo "</tr>";
     } ?>   

      
   </div>
     

   <?php
   if(isset($_POST['submit'])){?>
   <script> var rowCount = tb.rows.length;
        for (var i = rowCount - 1; i >= 1; i--) {  tb.deleteRow(i);}</script>
   <?php
   $idNumber = $_POST['idNumber'];
   $fName = $_POST['fName'];
   $lName = $_POST['lName'];
   $province = $_POST['province'];
   $city = $_POST['city'];
   $barangay = $_POST['barangay'];
   $timeNday = $_POST['timeNday'];

   if($idNumber == '')$idNumber = 999999999;
   if($fName == '' )$fName = "da!sdsa";
   if($lName == '' )$lName = "ew!qe23";
   if($province == '' )$province = "ewq!e23";
   if($city == '' )$city = "ewq!e23";
   if($barangay == '' )$barangay = "!wqe23";
   if($timeNday == '' )$timeNday = 2021;

   
   //write query
   $sql = "SELECT * FROM information WHERE id_Number = '$idNumber' OR first_name = '$fName' OR last_Name = '$lName' OR province = '$province' OR city = '$city' OR barangay = '$barangay' OR timeNday = '$timeNday'";

   //make query and get result
   $result = mysqli_query($conn,$sql);   
    

   //fetch the sulting rows as an array
   $information = mysqli_fetch_all($result, MYSQLI_ASSOC); //ASSOC == associative array == library in python

   //free the $result from memory
   mysqli_free_result($result); 

   // print_r($information);

   $arrLength = count($information); 
   for($i = 0; $i < $arrLength; $i++) {
      echo "<tr>";
      echo "<td>".$information[$i]['city']."</td>";
      echo "<td>".$information[$i]['barangay']."</td>";
      echo "<td>".$information[$i]['province']."</td>";
      echo "<td>".$information[$i]['id_Number']."</td>";
      echo "<td>".$information[$i]['first_Name']."</td>";
      echo "<td>".$information[$i]['last_Name']."</td>";
      echo "<td>".$information[$i]['timeNday']."</td>";
      echo "</tr>";
      }  
   }
   ?>
     

</body>
</html>

