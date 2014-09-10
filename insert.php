<?php
// Get values from the form
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 
$to = "info@inamu.gob.ar";
$subject = "Contacto Web";
$message = " Nombre: " . $name . /* "\r\n City: " . $city . */ "\r\n Mensaje: " . $phone . "\r\n Email: " . $email;
 
 
$from = "info@inamu.gob.ar";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://www.inamu.gob.ar';</script>";
  // Created by Future Tutorials
}else{
  echo "Hubo un error! Intentalo de nuevo por favor....";
}
?>