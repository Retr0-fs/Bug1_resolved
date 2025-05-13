<?php
// Les entrées
$nom = htmlspecialchars(trim($_POST['nom']));
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
$message = htmlspecialchars(trim($_POST['message']));

// Champs avec messages d'erreur
if(empty($nom) || empty($email) || empty($age) || empty($message)) {
    $erreur = "Erreur : ";
    if(empty($nom)) $erreur .= "Le nom est requis. ";
    if(empty($email)) $erreur .= "L'email est requis. ";
    if(empty($age)) $erreur .= "L'âge est requis. ";
    if(empty($message)) $erreur .= "Le message est requis. ";
    echo $erreur;
    exit;
}

// Vérification de l'âge
if (!is_numeric($age) || $age <= 0) {
    echo "L'âge doit être un nombre positif";
    exit;
}

echo "Données reçues avec succès!";
?> 