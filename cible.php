<?php
header('content-type: text/html; charset=utf-8');
if(isset($_POST["btn"])){
    $name= $_POST['nom'];
$email= $_POST['email'];
$telephone= $_POST['telephone'];
$message= $_POST['message'];
$destinataire="contact@location-maison-vacances-a-la-mer.fr";
$sujet="contact site web";
$entete='From:'.$email.'';
$message ='nom:'.$nom.''."\n".
            'telephone: '.$telephone.''."\n".
    'objet:'.$objet.''."\n".
    'contenumessage : '.$contenumessage.'';
mail($destinataire, $sujet, $message, $entete);
header('location:https://www.location-maison-vacances-a-la-mer/message-envoi.html');
}
else{
echo 'erreur de message'; 
}
?>
