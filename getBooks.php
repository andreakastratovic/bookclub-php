<?php
require "dbBroker.php";

$sql = "SELECT bookid,name, author FROM books WHERE bookid = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($bookid, $name, $author);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>BookID</th>";
echo "<td>" . $bookid . "</td>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";
echo "<th>Author</th>";
echo "<td>" . $name . "</td>";
echo "</tr>";
echo "</table>";
?>
