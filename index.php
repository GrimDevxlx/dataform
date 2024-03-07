<php
  if(empty($_POST['username'])){
    $username_error = "Enter your Username";
  }
  if(empty($_POST['password'])){
    $password_error = "Enter your Password";
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>DF PHP</title>
</head>
<body>
      <form method="POST" action="" auto_complete="off">
          <input type="text" name="username" id="">
          <input type="password" name="password" id="">
          <input type="submit" value="Register">
      </form>
</body>
</html>