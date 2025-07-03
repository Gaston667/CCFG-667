<?php
$entete = "Campus France !";
$title = "Étape 2 - Je saisis mon dossier";
require_once '../includes/header.php'; ?>

  <main class="etape2-campus-france-container">
    <h2 class="etape2-campus-france-subtitle">Je saisis mon dossier</h2>

    <a href="<?= BASE_URL ?>/pages/documents-necessaires.php" class="etape2-warning-link">
      ⚠️ <strong>Il est important de consulter la liste des documents à préparer</strong><br>
      Avant de commencer, assurez-vous d’avoir tous les documents nécessaires pour campus france. Cliquez ici pour voir la liste 📄
    </a>


    <div class="etape2-campus-france-warning">
      ⚠️ Cette vidéo est une aide indicative réalisée par un étudiant sénégalais.
      <strong>Vérifiez les différences avec le système guinéen dans les captures ci-dessous</strong>.
    </div>

    <div class="etape2-campus-france-video">
      <iframe src="https://www.youtube.com/embed/a5xP4gcAIYc?si=1wYmMqNq2MIWsdip" title="Vidéo d'explication" frameborder="0" allowfullscreen></iframe>
    </div>

   

    <section id="etape2StepsContainer">
       <p>Progression : <span id="etape2ProgressText">Étape 1 sur 9</span></p>
      <div class="etape2-progress-container">
      <div class="etape2-progress-bar" id="etape2ProgressBar"></div>
      <div class="etape2-progress-text" id="etape2ProgressText"></div>
      </div>
    <div class="etape2-step active" id="etape2-step-0">
      <h2>Étape 2 : Je saisis mon dossier</h2>
      <p>Pour acceder à la partie concerner cliquer ici</p>
      <img src="../img/capture_en_fr.png" alt="Étape 2">

      
      <h3>Identifiants et photo</h3>
      <p>Scanner une photo d'identité 300DPI (26x32mm, JPG ou PNG, max 50ko).</p>
      <p>Compresser la photo :
        <a href="https://www.compress2go.com/fr" target="_blank">https://www.compress2go.com/fr</a>
      </p>
      <img src="../img/identity.png" alt="Photo d'identité">
    </div>

    <div class="etape2-step" id="etape2-step-1">
      <h3>Identité</h3>
      <p>Joindre une copie de votre pièce d'identité, vérifier l'exactitude des infos.</p>
      <img src="../img/passepor-3.png" alt="justificatifs">
      <img src="../img/passepor-2.png" alt="ajout passeport">
      <img src="../img/passepor.png" alt="modification">
    </div>

    <div class="etape2-step" id="etape2-step-2">
      <h3>Coordonnées</h3>
      <p>Si vous êtes à Kamsar : code 04 + quartier + district + numéro bâtiment.</p>
      <img src="../img/coor.png" alt="coordonnées">
    </div>

    <div class="etape2-step" id="etape2-step-3">
      <h3>Statut particulier</h3>
      <p>Mettez « Étudiant en classe de terminale inscrit dans un lycée français ».</p>
      <img src="../img/statut-particulier.png" alt="statut">
      <p>Ajoutez : certificat de scolarité ou attestation CNED.</p>
      <img src="../img/justif-scolariter.png" alt="justificatifs">
    </div>

    <div class="etape2-step" id="etape2-step-4">
      <h3>CV</h3>
      <p>Ajoutez votre CV.</p>
      <img src="../img/cv-1.png" alt="cv">
    </div>

    <div class="etape2-step" id="etape2-step-5">
      <h3>Mon cursus</h3>
      <p>Ajoutez vos bulletins de seconde, première, terminale.</p>
      <p>Vous devez repeter ce processus pour chaque niveau du lycée. Donc 3 fois</p>
      <img src="../img/cursus-1.png">
      <img src="../img/ajout.png">
      <img src="../img/1.png">
      <img src="../img/2.png">
      <img src="../img/3.png">
      <img src="../img/enregistrer.png">
      <p> Quand vous enregistrer les informations, vous devez ajoutez le bulletin de la classe concernée. de preference un bulletin annuel <strong>PDF</strong></p>
      <img src="../img/bul.png">
      <p>Pour le bac, ajoutez le relevé de notes du bac.</p>
      <img src="../img/bacbul.png">
      <img src="../img/bacbul-2.png">
      <img src="../img/bacbul-3.png">
      <img src="../img/cursus.png">
      <p>À la fin, vous devez avoir 3 niveaux de lycée renseignés. + 1 niveau de bac. Donc 4 niveaux au total.</p>
    </div>

    <div class="etape2-step" id="etape2-step-6">
      <h3>Niveau de français</h3>
      <p>Pas nécessaire si vous êtes dans un lycée français ou pays francophone.</p>
      <img src="../img/Niveaufr.png">
      <img src="../img/nF.png">
    </div>

    <div class="etape2-step" id="etape2-step-7">
      <h3>Séjours en France & Langues</h3>
      <p>Remplissez selon votre situation.</p>
      <img src="../img/fin.png">
    </div>

    <div class="etape2-step" id="etape2-step-8">
      <h3>Fin</h3>
      <p>Si "complet" s'affiche : vous avez terminé étape 2.</p>
      <img src="../img/complet.png">
      <a href="<?= BASE_URL ?>/pages/compte-campus-france.php#E3" class="etape2-next-step-btn">🎯 Passer à l'étape 3 →</a>
    </div>
  </section>

  <div class="etape2-campus-france-nav-btns">
    <button class="etape2-prev-btn" onclick="prevEtape2()">Précédent</button>
    <button class="etape2-next-btn" onclick="nextEtape2()">Suivant</button>
    </div>
  </main>

<?php require_once '../includes/footer.php'; ?>