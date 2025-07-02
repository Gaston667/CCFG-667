<?php
// Connexion à la base
$pdo = new PDO('mysql:host=localhost;dbname=ccfg;charset=utf8', 'utilisateur', 'motdepasse');

// --- 1. Met à jour le compteur total ---
$pdo->exec("UPDATE visites_total SET total = total + 1 WHERE id = 1");

// --- 2. Met à jour la présence en ligne ---
$ip = $_SERVER['REMOTE_ADDR'];
$now = date('Y-m-d H:i:s');

// Ajout ou mise à jour
$sql = "INSERT INTO visiteurs_online (ip, last_activity) VALUES (:ip, :now)
        ON DUPLICATE KEY UPDATE last_activity = :now";
$stmt = $pdo->prepare($sql);
$stmt->execute(['ip' => $ip, 'now' => $now]);

// Supprimer les visiteurs inactifs depuis plus de 5 minutes
$pdo->exec("DELETE FROM visiteurs_online WHERE last_activity < (NOW() - INTERVAL 5 MINUTE)");

// --- 3. Récupérer les chiffres ---
$total = $pdo->query("SELECT total FROM visites_total WHERE id = 1")->fetchColumn();
$enLigne = $pdo->query("SELECT COUNT(*) FROM visiteurs_online")->fetchColumn();
?>
