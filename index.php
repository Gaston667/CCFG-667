<?php require_once './includes/config.php'; 
require_once './includes/counter.php'; 
$title = "Accueil"; 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php if (isset($title)) echo $title; else echo "CCFG"; ?></title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>

    <body class="theme-light home-page">
        <header class="home-header">
            <h1 class="home-title">Bienvenue sur le Guide Ultime Pour Fuir Le Paradis</h1>
            <p class="home-subtitle">Suivez les étapes pour partir étudier en France.</p>
            <button class="home-toggle-theme-btn" onclick="toggleTheme()">🌙</button>
        </header>

        <!-- <div class="home-visitor-stats">
            <div class="visitor-card">
                <span class="visitor-icon">👁️</span>
                <div class="visitor-text">
                <span class="visitor-label">Visites totales</span>
                <span class="visitor-count"> //$total ?></span>
                </div>
            </div>
            <div class="visitor-card">
                <span class="visitor-icon">🟢</span>
                <div class="visitor-text">
                <span class="visitor-label">En ligne</span>
                <span class="visitor-count"> //$enLigne ?></span>
                </div>
            </div>
        </div> -->


        <section class="home-timeline-section">
        <h2 class="timeline-title">Frise Chronologique</h2>
        <div class="timeline-container" id="timeline">
            <!-- Étapes injectées dynamiquement -->
        </div>
        </section>



        <main class="home-card-container">
            <section class="home-step-card">
            <img src="./img_bg/rdv.png" alt="Calendrier" class="home-step-icon">
            <h2 class="home-step-title">RDV Capago</h2>
            <p class="home-step-desc">Prendre rendez-vous Capago</p>
            <a href="<?= BASE_URL?>/pages/rendez-vous-capago.php" class="btn-primary">Commencer</a>
            </section>

            <section class="home-step-card">
            <img src="./img_bg/ccfg.png" alt="Campus France" class="home-step-icon">
            <h2 class="home-step-title">Campus France</h2>
            <p class="home-step-desc">Créer votre compte Campus France</p>
            <a href="<?= BASE_URL?>/pages/compte-campus-france.php" class="btn-primary">Commencer</a>
            </section>

            <section class="home-step-card">
            <img src="./img_bg/frvisa.png" alt="France Visa" class="home-step-icon">
            <h2 class="home-step-title">France Visa</h2>
            <p class="home-step-desc">Créer votre compte France Visas</p>
            <a href="<?= BASE_URL?>/pages/dossier-france-visa.php" class="btn-primary">Commencer</a>
            </section>
        </main>
    <script src="./js/script.js" defer></script>
    </body>
</html>

