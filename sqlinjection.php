<?php
$db= new PDO("mysql:host=localhost;dbname=logintutorial", 'root', '');
if(isset($_POST['btnsubmit']))
{
$email=$_POST['email'];
//die($email);
//$user=$db->query("SELECT * FROM users where username='{$email}'");
$user=$db->prepare("SELECT * FROM users where username=?");
$user->bindParam(1, $email);
$user->execute();
if($user->rowCount())
{
 // echo "Send mail";
 die('send mail');
}
}
?>
<html>
<head>
</head>
<body>
<form method="post" action="sqlinjection.php">
Email Address:
<input type="text" name="email" id="email" >
<input type="submit" name="btnsubmit" id="btnsubmit" value="Recover">


</form>
</body>
</html>