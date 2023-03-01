<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Ouai Ouai</h1>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="email" placeholder="mail" >
        <input type="text" name="message" placeholder="message">
        <input type="submit" value="Cliquez">
    </form>

    <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // $success = mail($contact, $postnom, $postmessagewrap, $headers);

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $contact = "contact@baptiste-nautre.fr";

            $postmail = $_POST['email'];

            $postnom = $_POST['nom'];

            $confirmmail = "Confirmation mail";

            $postmessage = $_POST['message'];

            $confirmmessage = "Votre mail a bien été envoyé, il serat vu et traité dans les plus brefs delais";

            $postmessagewrap = wordwrap($postmessage, 70, "\r\n");

            $headers = [
                "From" => $postmail,
            ];

            $headersconfirm = [
                "From" => $contact
            ];

            if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['message'])) {
                echo "<div class='popup'> <span> OOOOH </span> </div>";
            } else if (!empty($_POST['nom']) || !empty($_POST['email']) || !empty($_POST['message']) ) {
                //basemail
                mail($contact, $postnom, $postmessagewrap, $headers);
                //confirmmail
                mail($postmail, $confirmmail, $confirmmessage, $headersconfirm);
                echo "<div class='popup'> <span> Bien Joué </span> </div>";
            }
        }
    ?>

</body>
</html>