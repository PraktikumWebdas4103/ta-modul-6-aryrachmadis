
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>

</head>
<body>
	<br/>
	<br/>
	<center><h2>login</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="proseslogin.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Id/Nim:</label>
				<input type="text" name="id" id="id" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="pass" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>