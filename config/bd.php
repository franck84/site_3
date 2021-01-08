<?php

//connect to MYSQL
$con = mysqli_connect('localhost','root','','sit_2');
//Test connexion 
if (mysqli_connect_errno()) {
	echo 'Failled to connect to MYSQL: '.$mysqli_connect_errno();
}

?>