<?php
//Declare Variables
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$human=intval($_POST['human']);

$from="Phi Mu Delta Mu Xi";
$to="phimudeltamuxi@gmail.com";
$subject="Connect Form";
$body="From: $name\n
       Email: $email\n
       Message: $message";

if(!$_POST['name']){
    $errorName="No Name Entered";}
if(!$_POST['email']){
    $errorEmail="No Email Entered";}
if(!$_POST['message']){
    $errorMessage="No Message Entered";}
if(!$_POST['human'] || $human != 5){
    $errorHuman="Are you sure you are human?";}
if(!$errorName && !$errorEmail && !$errorMessage && !$errorHuman){
mail($to, $subject, $body, $from);
    $result='<div class="alert alert-success">Thank You! Someone will be in touch shortly.</div>';
}
else{$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';}
}
?>