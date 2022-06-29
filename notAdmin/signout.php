<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!--CSS-->
   <link rel="stylesheet" type="text/css" href="css/stylesignout.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
   
   <!-- Icons -->
   <script src="https://kit.fontawesome.com/f981cd8cfa.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class = "container1">
   <i class="fa fa-shield"></i><div class="login_id"> Input ID to signout</div><hr>
   <form action="process_signout.php">
       <div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><label for="ID"><input type="number" id="ID" placeholder="ID" name="ID" required></label><br></div>
       <button type="submit" class="enter">Sign Out <i class="fas fa-arrow-right"></i></button>
   </form>
   </div>
</body>
</html>