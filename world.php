<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>
<form method= "GET">
  <input username ='lab5_user', password = 'password123' >
   <input type= "submit" value= "Search">
</form>
<?php

?>
<?php
mysqli_connect($host, $username, $password) or
 die ("<p> Error connecting to database: "); //. mysqli_error() ."</p>");

echo "<p> Connected to MySQL!</p>";
?>

<?php
  echo "Ready" ; //htmlspecialchars($_GET ['lab5_user', 'password123']);
  ?>

  