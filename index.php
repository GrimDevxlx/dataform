  <?php

      if($_SERVER['REQUEST_METHOD'] == "post"){

   

      if(empty($_POST['username'])){
        $username_error = "Enter your Username";
      }
      if(empty($_POST['password'])){
        $password_error = "Enter your Password";
      }

    }
  ?>


<!DOCTYPE html>
<head>
 
  <title>Validation Data</title>
</head>
<body>
    <form method="post" action="" auto_complete="off">
     <input type="text" name="username">
      <span><?php if(isset($username_error)) echo $username_error; ?></span>
      <input type="password" name="password">
      <span><?php if(isset($password_error)) echo $password_error; ?></span>
      <input type="submit" value="Register">
    </form>
</body>
</html>