<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "stu_registration_form";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else
{
echo "Connection Successful". "<br>";
}

$u=$_POST["fname"];
$n=$_POST["fisbnno"];
$o=$_POST["fgenre"];
$p=$_POST["flibrary"];
$q=$_POST["fmybooks"];
$r=$_POST["flending"];
$s=$_POST["fcheckouts"];
$t=$_POST["fholds"];

$sql = "INSERT INTO enter1(NAME,ISBN NO,GENRE,LIBRARY,MY BOOKS,LENDING,CHECKOUTS,HOLDS) VALUES ('$u','$n','$o','$p','$q','$r','$s','$t')";
ECHO $sql;
if (mysqli_query($conn, $sql))
{
echo "New record created successfully !";
}
else
{
echo "Error: " . $sql . " " . mysqli_error($conn);
}
$conn->close();
?>
</body>
</html>