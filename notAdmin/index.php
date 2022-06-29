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
      <div class="c1-image"><img src="images/JEJEMON.png" alt="logo" ></div>
      <div class="c1-text"><h1>Contact Tracing App</h1></div>   
   </div>
   <div class ="container2">
   <i class="fa fa-shield"></i><div class="login_id"> Login to your ID number</div><hr>
   <form action="verify.php" method="POST">
      <div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><label for="ID_NUM"><input type="number" id="ID_NUM" placeholder="ID number" name="ID_NUM" required></label><br></div>
      <button type="submit" class="enter">Login <i class="fas fa-arrow-right"></i></button>
      <div class="NoID"><p>Don't have ID number?</p></div>
      <div class="NoWorries"><p>no worries, click <a href="form.php">here</a> to fill up the form.</p></div><br>
      
      
      <div class="NoWorries"><p>To sign out please click <a href="signout.php">here</a>.</p></div>
   </form>
   </div>

   <br><br><br><br><br><br><br><br>
  <footer><div class = "copyright"><p>2021 &copy; GROUP 3222</p></div></footer><br><br>

</body>
</html>