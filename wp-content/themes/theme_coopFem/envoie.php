<?php

$firstname=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['message'];

$contenu="nom: $firstname<br/>
email : $email<br/>
message : <br/>
$message";

$header="From:<$firstname>\n";
$header.="Content-Type: text/html; charset=UTF-8\n";
$to="huertas.seb@gmail.com";
$objet="Message provenant du site Coopération féminine";

mail($to,$objet,$contenu,$header);

?>
