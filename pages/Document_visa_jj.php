<?php
$entete = "Dossier France Visa";
$title = "Voir un PDF";
require_once '../includes/header.php';
?>

<main class="france-visa-container">
  <h1 class="france-visa-title">Dossier France Visa</h1>
  <p class="france-visa-intro">
    Voici la liste de documents qu'il faut préparer <strong>(renseignez-vous aussi auprès de Monsieur Diallo)</strong>.
  </p>

  <section class="france-visa-section">
    <h2 class="france-visa-step-title">✅ Liste des documents déjà validés</h2>
    <ul class="france-visa-doc-list">
      <li>Attestation de ressources version originale (<strong>AVI</strong> ou <strong>prise en charge</strong>)</li>
      <li>Document de voyage (<strong>passeport complet</strong> – toutes les pages scannées)</li>
      <li>Attestation de préinscription <strong>Campus France / EEF</strong></li>
      <li class="doc-important">Pour les mineurs : joindre une <strong>autorisation parentale signée</strong> + une <strong>copie de la pièce d'identité du parent signataire</strong></li>
      <li>Assurance de <strong>voyage</strong></li>
    </ul>

  </section>
  <section class="france-visa-section">
    <h2 class="france-visa-step-title">📄 Scanner un document PDF</h2>
    <p class="france-visa-step-desc">Voici un exemple pour scanner vos documents correctement :</p>
    <embed src="../Fiche_pratique_numérisation.pdf" type="application/pdf" width="100%" height="500px" class="france-visa-pdf" />
  </section>
</main>


<?php require_once '../includes/footer.php'; ?>