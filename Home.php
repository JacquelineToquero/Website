<?php

if(isset($_POST["login"])){
   
    if(!empty($_POST["username"]) && 
       !empty($_POST["password"])){

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

    }


      if(isset($_POST["logout"])){
        session_destroy();
        header("Location: home.php");
      }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <title></title>
</head>
   
<body class="container d-flex justify-content-center">
    <form action="index.php" method="post">
    username:<br>
    <input type="text" name="username"><br>  
    password:<br>
    <input type="password" name="password"><br> <br> 
    <input type="submit" name="login" value="login">
    </form>
</body>
</html>