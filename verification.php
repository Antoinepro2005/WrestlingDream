<?php
// Tableau des utilisateurs
$utilisateurs = array(
    array('id' => '1', 'username' => 'john_doe', 'email' => 'john.doe@example.com', 'password' => 'password123'),
    array('id' => '2', 'username' => 'jane_smith', 'email' => 'jane.smith@example.com', 'password' => 'jsPass456'),
    array('id' => '3', 'username' => 'tom_clark', 'email' => 'tom.clark@example.com', 'password' => 'tomC789!'),
    array('id' => '4', 'username' => 'emma_jones', 'email' => 'emma.jones@example.com', 'password' => 'emma@2024')
);

// Récupérer l'email envoyé via la méthode POST
$email = $_POST['email'] ?? '';

// Vérifier si l'email est dans le tableau des utilisateurs
$utilisateurTrouve = false;
foreach ($utilisateurs as $utilisateur) {
    if ($utilisateur['email'] === $email) {
        $utilisateurTrouve = true;
        break;
    }
}

// Réponse en fonction de la présence de l'email
if ($utilisateurTrouve) {
    echo 'success';
} else {
    echo 'error';
}
