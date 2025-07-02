<?php
// This file is included in the header of each page.
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaston 667</title>
    <link rel="stylesheet" href="../css/lol.css">
</head>
<body>
    <header class="campus-header">
    <div class="campus-header-container">
      <h1 class="campus-title">Campus France</h1>
      <nav class="campus-nav">
        <ul class="campus-nav-links">
          <li><a href="/CCFG-667/index.html">Accueil</a></li>
          <li><a href="/CCFG-667/pages/rendez-vous-capago.html">RDV-CAPAGO</a></li>
          <li><a href="/CCFG-667/pages/compte-campus-france.html">Campus-France</a></li>
          <li><a href="/CCFG-667/pages/dossier-france-visa.html">France visa</a></li>
          <li><button onclick="toggleTheme()">Mode nuit 🌙</button></li>
        </ul>
        <div class="campus-burger" onclick="toggleMenu()">
          <span></span><span></span><span></span>
        </div>
      </nav>
    </div>
    </header>