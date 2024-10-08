<!DOCTYPE HTML>
<html>
<head>

<link rel="stylesheet" type="text/css" href="Signin.css">
<title>SIGIN</title>

<style>
form{
width: 40%;
margin: auto;
margin-top: 30vh;
box-shadow:10px 10px 10px 10px rgb(169,160,160);
padding: 10px;}
body{
background-color: antiquewhite;
}
.input
{
width: 50%;
float: right;
margin-right: 6%;
}
p{
margin-left: 6%;
}
.submit
{
margin-left: 7%;
}
</style>
</head>
<body>
 <h1><center>SIGNIN</h1><br></center>
<form action="pro.php" method="post">
	<h4>
	<div class="login">
        <p>Name:<input class="input" type="text" name="fname"></p><br>
        <p>Email:<input class="input" type="text" name="femail"></p><br>
        <p>Password:<input class="input" type="text" name="pwd1"></p><br>
        <p>Confirm Password:<input class="input" type="text"
name="pwd2"></p><br>
<input class="submit" type="submit"></h4>
</div>
</form>
</body>
</html>