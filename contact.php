<?php
    if(isset($_POST['submit'])) {
        if((empty($_POST['nom'])) || (empty($_POST['prenom'])) || (empty($_POST['email'])) || (empty($_POST['message']))) {
            echo '<p class="infos">😡</p>';
        }else{
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $message = $_POST['message'];

    $destinataire = 'souleymanewade03@gmail.com';
    $sujet = 'Sujet de l\'e-mail';

    $contenu = "<html><body><p>$nom</p><p>$prenom</p><p>$email</p><p>$commentaire</p><p></p></body></html>";

    $headers = "From: '.$destinataire \n";
    $headers .= "Content-type:text/html; charset='UTF-8'";

    mail($destinataire, $sujet, $contenu, $headers);

        }

        echo  '<p class="success">😁</p>';
    }
;?>