		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Basic Banking System</title>
 <?php include "head.php";?>
</head>
<body>
<?php include "header.php";?>
  <?php
if(isset($_POST["btnlogin"]))
	{
		extract($_POST);

		mysqli_query($conn,"insert into tbluser(uname,email,balance,phone)values('$txtname','$txtemail','$txtbalance','$txtphone')");

	}
	?>
	<form method="post">
		Name: <input type="text" name="txtname"><br>
		Email: <input type="text" name="txtemail"><br>
		Balance: <input type="text" name="txtbalance"><br>
		Phone: <input type="text" name="txtphone"><br>
		<input type="submit" name="btnlogin" value="submit">
	</form>
</body>
</html>

