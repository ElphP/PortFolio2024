<?php

$name_error = $mail_error = $mess_error = "";
$name= $surname = $mail = $objet = $message = $mess_ok = $contenu =  "";
if (isset($_POST['submit'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

       
            if (empty($_POST["nom"])) {
                $name_error = "Le champ Nom est requis, vous devez nous indiquer vore nom.";
            } else {
                $name = sanit($_POST["nom"]);
                if (!preg_match("/^[a-zA-ZÀ-ÿ ]*$/", $name)) {
                    $name_error = "Votre nom ne doit être composé que de lettres et d'espaces.";
                }
            }

            if (empty($_POST["email"])) {
                $mail_error = "Ce champ est requis, vous devez entrer un email valide.";
            } else {
                $mail = sanit($_POST["email"]);
                if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $mail_error = "Votre email n'a pas le format requis. Veuillez le vérifier.";
                }
            }

            if (!empty($_POST["sujet"])) {
                $objet = sanit($_POST["sujet"]);
            } else {
                $objet = "Sans Objet";
            }

            if (empty($_POST["mess"])) {
                $mess_error = "Quel est votre message? Ce champ est requis.";
            } else {
                $message = sanit($_POST["mess"]);
            }

            if ($name_error == "" and $mail_error == "" and $mess_error == "") {
                unset($_POST["submit"]);
                $surname = sanit($_POST["prenom"]);
                $mailTo = "contact@elphegeproisy.com";
                $subject = "Message de mon Portefolio2024";
                $contenu =  "Ce message a été automatiquement envoyé depuis le formulaire de mon portefolio.\n\n Contact : " . $name .' '.$surname.
                    "\n Adresse e-mail: " . $mail . "\n Objet du message: " . $objet . "\n\n" . $message . "\n";

                if (mail($mailTo, $subject, $contenu)) {
                    $color_mess = "email_success";
                    $mess_ok = "Votre message a bien été envoyé!";
                    $name = $surname= $mail = $objet = $message = "";
                } else {
                    $color_mess = "error";
                    $mess_ok = "L'envoi du message a échoué. Veuillez réessayer ultérieurement.";
                }
            }
        }
    }


function sanit($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}