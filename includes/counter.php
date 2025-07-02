<?php
// Ce fichier gère le comptage du nombre total de visites du site
// et le nombre d'utilisateurs actuellement en ligne

// Nom du fichier qui stocke le nombre de visites
$compteur_file = 'compteur.txt';

// Vérifie si le fichier existe déjà
if (file_exists($compteur_file)) {
    // Si oui, lit le nombre actuel de visites
    $visites = (int)file_get_contents($compteur_file);
} else {
    // Sinon, initialise le compteur à 0
    $visites = 0;
}

// Incrémente le compteur de visites à chaque chargement de page
$visites++;

// Enregistre la nouvelle valeur dans le fichier
file_put_contents($compteur_file, $visites);





// ----------- Gestion des utilisateurs en ligne -----------

// Durée d'activité considérée pour un utilisateur "en ligne" (en secondes)
$timeout = 300; // 5 minutes

// Démarre la session si ce n'est pas déjà fait
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$session_id = session_id();

// Nom du fichier qui stocke les sessions actives
$online_file = 'online.txt';
$online_data = [];

// Récupère les sessions actives existantes
if (file_exists($online_file)) {
    $online_data = json_decode(file_get_contents($online_file), true) ?? [];
}

// Met à jour l'heure de dernière activité de la session courante
$online_data[$session_id] = time();

// Supprime les sessions expirées (inactives depuis plus de $timeout secondes)
foreach ($online_data as $id => $last_active) {
    if (time() - $last_active > $timeout) {
        unset($online_data[$id]);
    }
}

// Sauvegarde la liste des sessions actives
file_put_contents($online_file, json_encode($online_data));

// Compte le nombre d'utilisateurs actuellement en ligne
$utilisateurs_en_ligne = count($online_data);
?>
