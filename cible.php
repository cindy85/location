<?php
header('content-type: text/html; charset=utf-8');
if(isset($_POST["btn"])){
    $nom= $_POST['nom'];
$email= $_POST['email'];
$telephone= $_POST['telephone'];
$message= $_POST['message'];
$destinataire="cindyb85@hotmail.fr,seb.geo@hotmail.fr";
$sujet="contact site web";
$entete='From: '.$email.'';
$message ='nom: '.$nom.''."\n".
            'telephone: '.$telephone.''."\n".
    
    'contenumessage: '.$message.'';
mail($destinataire, $sujet, $message, $entete);
header('location:https://www.locationvacancesvendee.fr/message-envoi.html');
}
else{
echo 'erreur de message'; 
}
?>
