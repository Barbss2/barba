<!DOCTYPE html>
<html>
<head>
	<title>Barbss.com</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<style>

body{
	background-image:url("https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Colorful-Circle-Simple-Background-Image-1.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	font-style: italic;
	font-family: sans-serif;
	font-size: 15px;
	text-align:center;
	

}
p{
	font-family: 'Arial', sans-serif;
	
}
h1{
	font-family: 'Arial', sans-serif;
	
}
 main{
 	background-repeat: no-repeat;
 	background-size: cover;
 	padding: 40px;
 	width: 274px;
 	margin: 0 auto 10px;
 	border-radius: 2px;
 	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	overflow: hidden;
	font-family: Century Gothic;
	font-size: 18px;
	font-style: italic;
	color:#F7F9F9;
  
</style>
<body>
	<br>
	<br>
	<br>
	<br>
	<main>
		<h1 align="center">L O G I N</h1> 	
		
		<br>
		<div></div>
		<form name="login">
			<table align="center">
				<tr>
					<td><p>Username: </p></td>
					<td><input type="text" name="userid"/></td>
				</tr>

				<tr>
					<td><p>Password: </p></td>
					<td><input type="password" name="pswrd"/></td>		
				</tr>
				<tr>
					<td height="10px"> </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" onclick="check(this.form)" value="Login"/></td>
				
			</table>	
		</form>
		<br>
	</main>

<script language="javascript">
	alert("Username:barbss Password:barbss")
		
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "barbss" && form.pswrd.value == "barbss")
  {
    window.open('Paint.html')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>

</body>
</html>
