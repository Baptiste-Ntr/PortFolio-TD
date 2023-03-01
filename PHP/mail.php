<?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // $success = mail($contact, $postnom, $postmessagewrap, $headers);

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $contact = "contact@baptiste-nautre.fr";

            $postmail = $_POST['form-mail'];

            $postnom = $_POST['form-name'];

            $confirmmail = "Confirmation mail";

            $postmessage = $_POST['form-message'];

            $confirmmessage = "Votre mail a bien été envoyé, il serat vu et traité dans les plus brefs delais";

            $postmessagewrap = wordwrap($postmessage, 70, "\r\n");

            $headers = [
                "From" => $postmail,
            ];

            $headersconfirm = [
                "From" => $contact
            ];

            if (empty($postnom) || empty($postmail) || empty($postmessage)) {
                echo '<script type="text/javascript">
                        alert("Une des infos est vide");
                     </script>';
            } else if (!empty($postnom) || !empty($postmail) || !empty($postmessage) ) {
                //basemail
                mail($contact, $postnom, $postmessagewrap, $headers);
                echo '<script type="text/javascript">
                        alert("Votre message a bien été envoyé");
                     </script>';
                //confirmmail
                mail($postmail, $confirmmail, $confirmmessage, $headersconfirm);
                
            }
        }
    ?>