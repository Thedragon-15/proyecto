<?php
require_once('conexion.php');
session_start();
if(isset($_POST['login']))
{
   if(empty($_POST['Uname']) || empty($_POST['password']))
   {
    header("location:admin.php?Empty=Por favor rellene los espacios en blanco");
   }
   else
   {
      $pass = sha1($_POST['password']);
    $query="select*from usuarios where uname='".$_POST['Uname']."'and pass='".$pass."'";
    //echo $query.'<br>';
       $result=mysqli_query($con1,$query);


       if (mysqli_fetch_assoc($result))
       {
        $_SESSION['User']=$_POST['Uname'];
        header("location:index_sistema.php");

       }
       else
       {
         echo $query.'<br>';
        header("location:admin.php?Invalid= por favor inserte correctamente el usuario y contraseña");  
       }
   }
  
}
else
{
    echo'en proceso';
}


?>