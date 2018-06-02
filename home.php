<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<link rel="stylesheet" href="home.css">
</head>
</head>
<body>

    <div class="left">
    <ul class="menu">
    <li><a href="register.php">REGISTER</a>
    </li>
    <li><a href="login.php">LOGIN</a>
    </li>
     <li><a href="view.php">TREKKERS</a>
    </li>
    <li><a href="gallery.html">GALLERY</a>
    </li>
    <li><a href="about.php">ABOUT</a>
    </li>
    <li><a href="contact.html">CONTACT</a>
    </li>
    </ul>
    </div>

<div class="second">
   <form class="donor" action="search.php" method="post">
  <h3>FIND TREK</h3>
  <label for="state">STATE:</label>
   <select id="state" name="state">
            <option value="madhya pradesh">MADHYA PRADESH</option>
            <option value="himachal pradesh">HIMACHAL PRADESH</option>
            <option value="north east">NORTH EAST</option>
            <option value="south india">SOUTH INDIA</option>
        </select>
        <br><br/>
        <label for="level">LEVEL:</label>
        <select id="level" name="level">
            <option value="low">LOW</option>
            <option value="medium">MEDIUM</option>
            <option value="high">HIGH</option>
        </select>
        
        <br/><br>
        <button type="search">SEARCH</button>
  </form>
</div>

<div class="third">
<h2>Are you ready to trek?</h2>
<p><strong>You can be one of registered trekkers on Walking Wanderers!!!
</strong>
</p>
<p>
 We at Walking Wanderers are keen to provide the people, <br> the chance to chip out some time from their mundane <br> schedule and explore the wilderness within.
</p>
<p><strong>Want to trek?</strong></p>
<a href="register.php">REGISTER</a>
<img src="ww.jpg" alt="image" >
</div>



<div class="facts">

<p><strong>Climb Mountains,<br>
Hike Forward<br> & Push Yourself.</strong></p>

</div>



<div class="tips">
<h3>Tips on Trek</h3>
<img src="tips.jpe" alt="drop">
<p>Tips to keep in mind during trek<br>are as follows:<a href="tips.php">>></a></p>

</div>


<div class="speak">

<h3>Trekkers' Speak</h3>
<p><strong>Weightloss is like Hiking.</strong><br>It is hard to get started and it is bumpy along the way, but once you reach the top..<br><strong> You'll never regret the journey. </strong></p>
</div>
</body>
</html>