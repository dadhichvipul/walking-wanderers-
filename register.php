<!DOCTYPE html>
<html>
<head>
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="reg.css">
        <script> 
function validateForm()
 { 
    var x = document.forms["myForm"]["name"].value;
    if (x == "") {
        alert(" name must be filled out");
        return false;
    }
    var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("details must be filled out");
        return false;
   $email = test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
    }
    var x = document.forms["myForm"]["state"].value;
    if (x == "") {
        alert("details must be filled out");
        return false;
    }
    var x = document.forms["myForm"]["level"].value;
    if (x == "") {
        alert("details must be filled out");
        return false;
    }
    var x = document.forms["myForm"]["gender"].value;
    if (x == "") {
        alert("details must be filled out");
        return false;
    }
}
</script>
    </head>
    <body>
    
    <img class="logo" src="ww.jpg" alt="img" height="150px" width="150px">

      <form name="myForm" action="insert.php" onsubmit="return validateForm()" method="post">
        <h1>SIGN UP</h1>
        
        <fieldset>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </fieldset>
        <fieldset>
        <label for="state">State:</label>
        <select id="state" name="state">
            <option value="north east">North East</option>
            <option value="madhya pradesh">Madhya Pradesh</option>
            <option value="himachal pradesh">Himachal Pradesh</option>
            <option value="south india">South India</option>
        </select>
        <label for="level">Level:</label>
        <select id="level" name="level">
            <option value="medium">MEDIUM</option>
            <option value="high">HIGH</option>
            <option value="low">LOW</option>
        </select>
        
          <label>Gender:</label>
          <input type="radio" name="gender" value="male" checked> Male<br>
  		  <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other 
          
        </fieldset>
        <button type="submit" name="submit" value="submit">Sign Up</button>
      </form>
      
    </body>

</html>
