<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "events_form";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else{
echo "Connection Successful". "<br>";
}

$sql = "SELECT * FROM event1";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
if((!strcmp($row["NAME"],$_POST["name"])))
{
echo "NAME" . $row["NAME"] . "<br>";
echo "BOOK" . $row["BOOK"] . "<br>";

echo "ISBN NO" . $row["ISBN NO"] . "<br>";
echo "GENRE" . $row["GENRE"] . "<br>";
echo "LIBRARY" . $row["LIBRARY"] . "<br>";
echo "MY BOOKS" . $row["MY BOOKS"] . "<br>";
echo "LENDING" . $row["LENDING"] . "<br>";
echo "CHECKOUTS" . $row["CHECKOUTS"] . "<br>";
echo "HOLDS" . $row["HOLDS"] . "<br>";
}
}
}
else { echo "0 results";
}
$conn->close();
?>
</body>
</html>