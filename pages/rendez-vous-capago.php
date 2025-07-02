<?php require_once '../includes/header.php'; ?>

  <main class="capago-container">
    <h2 class="capago-subtitle">Étapes pour Prendre un Rendez-vous Capago</h2>

    <div class="capago-warning">
      ⚠️ <strong>Il est important de bien comprendre les étapes et de consulter les documents nécessaires</strong><br>
      <a href="<?= BASE_URL ?>/pages/documents-necessaires.php" class="capago-doc-link">Voir la liste des documents requis →</a>
    </div>

    <section class="capago-steps">
      <ol>
        <li>Visitez le site officiel : <a href="https://visa-fr-gn.capago.eu/splash" target="_blank">Capago Guinée</a></li>
        <li>Suivez les instructions de la vidéo pour créer un compte.</li>
        <li>Choisissez une date et une heure pour votre rendez-vous.</li>
        <li>Préparez soigneusement les documents demandés.</li>
      </ol>
    </section>

    <p class="capago-video-link">
      📺 <a href="https://www.youtube.com/watch?v=HTHH7az_3X4" target="_blank">Regarder la vidéo d'aide sur YouTube</a>
    </p>

    <div class="capago-video">
      <iframe src="https://www.youtube.com/embed/HTHH7az_3X4?si=-pkaXMDhrNJK2y8B" 
              title="Tutoriel Capago"
              frameborder="0" allowfullscreen loading="lazy"></iframe>
    </div>

    <section class="capago-cost">
      <h3>💸 Coût du Rendez-vous Capago</h3>
      <p>
        Le coût du rendez-vous est d’environ <strong>300 000 GNF</strong>, à régler par carte VISA ou Mastercard.<br>
        Des frais supplémentaires peuvent s'ajouter le jour du dépôt (photos, traitement...) pour un total allant jusqu’à <strong>2 000 000 GNF</strong>.
      </p>
      <p class="capago-cost-warning">
        📌 N'oubliez pas : <strong>les documents sont indispensables</strong> pour éviter un refus ou une perte de temps.
      </p>
    </section>
  </main>

  <footer class="capago-footer">
    <p>&copy; Algassimou Pellel Diallo 2024 — Gaston667. Tous droits réservés.</p>
  </footer>
  <script src="<?= JS_PATH ?>" defer></script>

</body>
</html>
