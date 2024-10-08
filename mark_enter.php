<!DOCTYPE HTML>
<html>
<head>
<style>
form{
width: 40%;
margin: auto;
margin-top: 30vh;
box-shadow:10px 10px 10px 10px rgb(169,160,160);
padding: 10px;

}
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
<form action="mark_enter1.php" method="post">
<h4>

<p>NAME: <input class="input" type="text" name="fname"></p>
<p>ISBN NO: <input class="input" type="number" name="fisbnno"></p>
<p>GENRE: <input class="input" type="text" name="fgenre"></p>
<p>LIBRARY: <input class="input" type="text" name="flibrary"></p>
<p>MY BOOKS: <input class="input" type="text" name="fmybooks"></p>
<p>LENDING: <input class="input" type="text" name="flending"></p>
<p>CHECKOUTS: <input class="input" type="text" name="fcheckouts"></p>
<p>HOLDS: <input class="input" type="text" name="fholds"></p>



<input class="submit" type="submit">

</h4>
</form>
</body>
</html>