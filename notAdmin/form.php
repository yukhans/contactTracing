<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>COVID FORM</title>
   <!--CSS-->
   <link rel="stylesheet" type="text/css" href="css/styleform.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
   
   <!-- Icons -->
   <script src="https://kit.fontawesome.com/f981cd8cfa.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class = "container">
   <form action="end.php" method="POST"><br><br>
      <label for="ID_NUM">ID number<br><input type="tel" name="idNum" id="ID_NUM" placeholder="18102931" class ="ID_NUM"></label><br>
      <label for="f_name">First Name<br><input type="text" name="fName" id="f_name" placeholder="Jake"></label><br>
      <label for="m_name">Middle Name<br><input type="text" name="mName" id="m_name" placeholder="Xy"></label><br>
      <label for="l_name">Last Name<br><input type="text" name="lName" id="l_name" placeholder="Ruz"></label><br>
      <label for="province">Province<br><input type="text" name="province" id="province" placeholder="Cebu" required></label><br>
      <label for="townCity">Town/City<br><input type="text" name="city" id="townCity" placeholder="Cebu City" required></label><br>
      <label for="brgy">Barangay<br><input type="text" name="barangay" id="brgy" placeholder="Talamban" required></label><br>
      <label for="c_number">Contact Number<br><input type="tel" name="cnumber" id="c_number" placeholder="09876543210"></label><br>
      <label for="email">Email Address<br><input type="email" name="email" id="email" placeholder="test@usc.edu.ph"></label><br>
      <a href="index.php"><i class="fas fa-arrow-left"></i> Login</i></a>
      <button type="submit" class="submit-button">Submit <i class="fas fa-arrow-right"></i></button>
   </form>
   </div>
</body>