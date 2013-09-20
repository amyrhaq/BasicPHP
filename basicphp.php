<html>
<head>
	<title>BasicPHP</title>
	<link rel="stylesheet" href="http://is.gd/jqueryui" />
	<script src="http://is.gd/jqueryui2"></script>
	<script src="http://is.gd/jqueryui3"></script>
	<link rel="stylesheet" href="/resources/demos/style.css" />
	<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
	</script>
</head>
<body>
<form method="post" action="process.php">
<table width="300" border="0">
	<tr>
		<td>email:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>first name:</td>
		<td><input type="text" name="first_name"></td>
	</tr>
	<tr>
		<td>last name:</td>
		<td><input type="text" name="last_name"></td>
	</tr>
	<tr>
		<td>password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>confirm password:</td>
		<td><input type="password" name="confirm_password"></td>
	</tr>
	<tr>
		<td>birthdate: </td>
		<td><input type='text' id='datepicker' /></td>
	</tr>
<?php if(isset($_GET["pass"])) { echo $_GET["pass"]; } ?></span>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Register" name="registration" /></td>
</tr>
</table>
</form>
</body>
</html>