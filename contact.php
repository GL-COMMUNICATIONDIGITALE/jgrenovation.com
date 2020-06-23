<?php


$errors = [];


if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
  $errors['name'] = 'Veuillez renseigner votre nom !';
}

if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
  $errors['message'] = 'Veuillez renseigner votre message !';
}

if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  $errors['email'] = 'Veuillez renseigner un email valide !';
}

if(!array_key_exists('tel', $_POST) || $_POST['tel'] == ''){
  $errors['tel'] = 'Veuillez renseigner votre numéro de télephone !';
}

session_start();

if(!empty($errors)){
  
  $_SESSION['errors'] = $errors;
  $_SESSION['inputs'] = $_POST;
  header('Location: index.php#contactform');
}else{
    $_SESSION['success'] = 1;
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $headers = 'FROM : .$email';
    mail('ent.grasjulien@gmail.com', 'Formulaire de contact', $message, $headers);
    header('Location: index.php#contactform');
};









