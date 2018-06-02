<html>
<head>
    <title>User Login</title>
<link rel="stylesheet" href="reg.css">
</style>
</head>

<body>
	<h1>
	<?php
		session_start();
		if (isset($_SESSION['SName'])){
			echo "success";
		}
		else {
			echo "failed";
		}
	?>
	</h1>
	<h2>Login Success!!!</h2>
</form>
<a href="home.php" >Home</a>
</body>
</form>
</body>
</html>
