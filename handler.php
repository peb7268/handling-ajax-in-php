<?php 
$incoming = array();
$incoming[] = $_POST['name'];
$incoming[] = $_POST['age'];
$incoming[] = $_POST['email'];
if(isset($_POST['name'])){
	$user = (object) $incoming;
}

var_dump($user);

//$user_inspection = new ReflectionClass($user);
//echo $user_inspection;

//phpinfo();