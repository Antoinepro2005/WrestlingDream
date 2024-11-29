<?php
// Connexion à la base de données
$servername = "localhost"; // ou 127.0.0.1
$username = "root"; // Remplace par ton nom d'utilisateur MySQL
$password = "WreslingDream"; // Remplace par ton mot de passe MySQL
$dbname = "wrestling_dream"; // Assure-toi que le nom de ta base de données est correct

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupérer les données des superstars
$sql = "SELECT prénoms, noms, date_naissance, taille, poids, nationalité FROM superstar";
$result = $conn->query($sql);

$superstars = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $superstars[] = $row; // Ajouter chaque superstar au tableau
    }
}

// Fermer la connexion
$conn->close();

// Retourner les données au format JSON
header('Content-Type: application/json');
echo json_encode($superstars);
