<?php
$entete = "Campus France !";
$title = "Compte Campus France";
require_once '../includes/header.php'; ?>

  <main class="campus-container">

    <section class="campus-step-card">
      <div class="campus-step-text">
        <h2>Étape 1 : Créer son compte Campus France</h2>
        <p>Pour commencer, vous devez créer votre compte sur le site de Campus France.</p>
        <div class="video-container">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/XU9OUjFwSZM?si=mV5CYxNERbhR3a-B" title="Créer un compte Campus France" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <img src="../img_bg/ccfg.png" alt="Campus France logo" class="campus-step-image">
    </section>

    <a href="<?= BASE_URL ?>/pages/etepe2.php" class="campus-link-card">
      <section class="campus-step-card">
        <div class="campus-step-text">
          <h2>Étape 2 : Remplir la partie « Je saisis mon dossier »</h2>
          <p>1.1 : Je saisis mes informations personnelles</p>
        </div>
        <img src="../img/1.1Image.png" alt="Étape 2" class="campus-step-image">
      </section>
    </a>

    <a href="<?= BASE_URL ?>/pages/etape-3.php" class="campus-link-card">
      <section class="campus-step-card">
        <div class="campus-step-text">
          <h2>Étape 3 : Remplir la partie « Je suis accepté »</h2>
          <p>Suivez les instructions sur le site Campus France une fois que vous êtes accepté.</p>
        </div>
        <img src="../img/Finalise.png" alt="Étape 3" class="campus-step-image">
      </section>
    </a>

  </main>

<?php require_once '../includes/footer.php'; ?>
