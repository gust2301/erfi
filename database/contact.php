<?php

include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $objet = $_POST["objet"];
    $civilite = $_POST["civilite"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $message = $_POST["message"];
    $newsletter = isset($_POST["newsletter"]) ? 1 : 0;

    // Préparer la requête d'insertion avec une requête préparée
    $query = $conn->prepare("INSERT INTO contact (object, civilite, name, mail, phone, message, newsletter) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Vérifier la préparation de la requête
    if ($query === false) {
        die('Erreur de préparation de la requête : ' . $conn->error);
    }

    // Associer les paramètres et les valeurs
    $query->bind_param("ssssssi", $objet, $civilite, $nom, $email, $tel, $message, $newsletter);

    // Exécuter la requête
    if ($query->execute()) {
        $message = 'Votre message a été envoyé avec succès !';

    } else {
        $message = 'Une erreur s\'est produite lors de l\'envoi du message.';
    }
    echo $message;
    // Fermer la requête
    $query->close();
}

// Fermer la connexion à la base de données
$conn->close();

?>

