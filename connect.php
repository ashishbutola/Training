<?php
try{
$db= new PDO("mysql:host=localhost;dbname=testdb", 'root', '');
//var_dump($db);
}
catch(Exception $e){
echo "An error occured";
//echo $e->getMessage();
}
?>