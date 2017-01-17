<?php
include('connect.php');
$stmt= $db->query("select * from names");
while($row = $stmt->fetch(PDO::FETCH_BOTH))
{
  //echo "<b>Id: </b>".$row['id']. ", <b>FirstName: </b>".$row['firstname'].",<b>LastName: </b>".$row['lastname'].",<b> Post Code </b>: ".$row['postcode']."<br><br>";
  
 echo "<pre>" .var_dump($row)." </pre>";
}
?>