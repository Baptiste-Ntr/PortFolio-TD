<?php

$to = "contact@baptiste-nautre.fr";

$to2 = $_POST['email'];

$subject = $_POST['nom'];

$subject2 = "Confirmation mail";

$message = $_POST['message'];

$message2 = "Votre mail a bien été envoyé, il serat vu et traité dans les plus brefs delais";

$message = wordwrap($message, 70, "\r\n");

$headers = [
    "From" => $_POST['email'],
];

$headers2 = [
    "From" => "contact@baptiste-nautre.fr"
];

$success = mail($to, $subject, $message, $headers);

if (!$success) {
    $errorMessage = error_get_last()['message'];
    print_r($errorMessage);
} else if ($success) {
    echo "Success";
    mail($to2, $subject2, $message2, $headers2);
}




?>