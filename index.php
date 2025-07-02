<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Bienvenue – CCFG</title>
        <link rel="stylesheet" href="<?= CSS_PATH ?>" />
    </head>

    <body class="theme-light home-page">
        <header class="home-header">
            <h1 class="home-title">Bienvenue sur le Guide Ultime Pour Fuir Le Paradis</h1>
            <p class="home-subtitle">Suivez les étapes pour partir étudier en France.</p>
            <button class="home-toggle-theme-btn" onclick="toggleTheme()">🌙</button>
        </header>

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
            <a href="./pages/rendez-vous-capago.html" class="btn-primary">Commencer</a>
            </section>

            <section class="home-step-card">
            <img src="./img_bg/ccfg.png" alt="Campus France" class="home-step-icon">
            <h2 class="home-step-title">Campus France</h2>
            <p class="home-step-desc">Créer votre compte Campus France</p>
            <a href="/CCFG-667/pages/compte-campus-france.html" class="btn-primary">Commencer</a>
            </section>

            <section class="home-step-card">
            <img src="./img_bg/frvisa.png" alt="France Visa" class="home-step-icon">
            <h2 class="home-step-title">France Visa</h2>
            <p class="home-step-desc">Créer votre compte France Visas</p>
            <a href="/CCFG-667/pages/dossier-france-visa.html" class="btn-primary">Commencer</a>
            </section>
        </main>
    <script src="<?= JS_PATH ?>" defer></script>
    </body>
</html>

