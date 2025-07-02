<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/counter.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'CCFG' ?></title>
    <link rel="stylesheet" href=<?= CSS_PATH ?>>
</head>
<body>
    <header class="campus-header">
    <div class="campus-header-container">
      <h1 class="campus-title">Campus France</h1>
      <nav class="campus-nav">
        <ul class="campus-nav-links">
          <li><a href="<?= BASE_URL ?>/index.php">Accueil</a></li>
          <li><a href="<?= BASE_URL ?>/pages/rendez-vous-capago.php">RDV-CAPAGO</a></li>
          <li><a href="<?= BASE_URL ?>/pages/compte-campus-france.php">Campus-France</a></li>
          <li><a href="<?= BASE_URL ?>/pages/dossier-france-visa.php">France visa</a></li>
          <li><button onclick="toggleTheme()">Mode nuit 🌙</button></li>
        </ul>
        <div class="campus-burger" onclick="toggleMenu()">
          <span></span><span></span><span></span>
        </div>
      </nav>
    </div>
    </header>