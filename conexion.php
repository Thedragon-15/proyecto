<?php

$con=mysqli_connect('localhost','root','','empresa1');
if(!$con)
{
    die('revise su conexion'.mysqli_error($con));
}

$con1=mysqli_connect('localhost','root','','login');

//$con2=mysqli_connect('localhost','root','','empres');

?>