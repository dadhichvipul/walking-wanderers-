<!DOCTYPE html>
<html>
<head>
	<title>loginpage</title>
	<link rel="stylesheet" href="reg.css">
</head>
</head>
<body>
<img class="logo" src="ww.jpg" alt="drop" height="150px" width="150px">
<h1 class="t1">WALKING WANDERERS</h1>


  

  <div class="form">
  <form class="formarea" action="login_check.php" method="post">
   <input type="text" placeholder="name" name="a1"/>
   <input type="password" placeholder="password" name="a2"/>
   <button>GO!</button>
   <p class="message">Not registerd?
   <a href="register.php">Create an account</a>
   </p>
  </form>

  </div>
<a href="home.php">HOME</a>
</body>
<?php
    function Cookie_val($ch){
    if ($ch==1)
    { 
      if (isset($_COOKIE['email']))
      {
        return $_COOKIE['email'];
      }
      else 
        return;
    }
    else
    {
      if (isset($_COOKIE['password']))
      {
        return $_COOKIE['password'];
      }
      else 
        return;
    }
    }
  ?>
</html>