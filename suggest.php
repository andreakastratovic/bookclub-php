<?php
if (!isset ($_GET["searchKeyword"])){
echo "Parametar Unos nije prosleđen!";
} else {
$pomocna=$_GET["searchKeyword"];
include "dbBroker.php";
$sql="SELECT name FROM books WHERE name LIKE '$pomocna%'";
$rezultat = $conn->query($sql);
if ($rezultat->num_rows==0){
echo "no books found " . $pomocna;
} else {
while($red = $rezultat->fetch_object()){
?>
<a href="#" onclick="place(this)"><?php  echo $red->name;?></a>
<br/>
<?php
}
}
$conn->close();
}
?>
