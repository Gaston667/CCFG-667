<?php
require_once '../includes/header.php';
?>

<main class="france-visa-container">
    <h1 class="france-visa-title">Dossier France-Visas</h1>
    <p class="france-visa-desc">Créez votre compte France-Visas pour commencer votre demande de visa.</p>
    <a href="<?= BASE_URL ?>/pages/documents-necessaires.php#visa-documents" class="etape2-warning-link">
      ⚠️ <strong>Il est important de consulter la liste des documents à préparer</strong><br>
      Avant de commencer, assurez-vous d’avoir tous les documents nécessaires pour campus france. Cliquez ici pour voir la liste 📄
    </a>
    <div class="etape2-campus-france-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ml_WBwwG_VQ?si=psYsqZCsR1QDwSV8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <p class="france-visa-progress-title">Progression:</p>
    <div class="france-visa-progress-text" id="visaProgressText"></div>
    <div class="france-visa-progress-container">
    <div class="france-visa-progress-bar" id="visaProgressBar"></div>
    </div>
   

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 1 : Créer un compte</h2>
        <p class="france-visa-step-desc">
            Rendez-vous sur le site officiel de France-Visas et créez votre compte personnel. Suivez les instructions pour fournir votre adresse e-mail et définir un mot de passe. Un e-mail de confirmation vous sera envoyé : cliquez sur le lien reçu pour activer votre compte. Une fois votre compte activé, vous pourrez vous connecter et débuter la procédure en ligne.
        </p>
        <a href="https://france-visas.gouv.fr/" target="_blank" class="btn-primary">Accéder à France-Visas</a>
        <div class="france-visa-step-img">
            <!-- Insérez une capture d'écran pertinente pour cette étape ci-dessous -->
            <img src="../img/France-visa1.png" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
            <img src="../img/France-visa2.png" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
            <img src="../img/France-visa_creer_compte.png" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">

            <br>
            <br>
            <p>Normalement, vous devriez recevoir un e-mail de confirmation pour activer votre compte et vous connecter directement.</p>
            <img src="../img/FRvisa_confirmation.png" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
            <img src="../img/FRvisa_confirmation2.png" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
        </div>
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 2 : Votre projet</h2>
        <p class="france-visa-step-desc">
        Après avoir créé votre compte, accédez à votre tableau de bord. Cliquez sur le bouton <strong>“Créer une nouvelle demande dans un nouveau groupe”</strong> pour démarrer une nouvelle demande individuelle.
        </p>

        <img src="../img/France-visaE2.1.png" alt="Créer une nouvelle demande dans un nouveau groupe" class="france-visa-img" />

        <p class="france-visa-step-desc">
        Vous serez ensuite redirigé vers un formulaire en plusieurs sections. Dans la première, <strong>“Votre situation”</strong>, sélectionnez votre nationalité et précisez si vous voyagez avec un membre de famille ressortissant de l’UE ou non.
        </p>

        <img src="../img/France-visaE2.2.png" alt="Section Votre situation et séjour" class="france-visa-img" />

        <p class="france-visa-step-desc">
        Ensuite, dans <strong>“Votre séjour”</strong>, indiquez :
        <ul>
            <li>Le pays de résidence et de dépôt de la demande</li>
            <li>Le type de visa demandé (court ou long séjour)</li>
            <li>La destination principale et la ville de dépôt</li>
        </ul>
        </p>

        <p class="france-visa-step-desc">
        Dans la partie suivante <strong>“Votre document de voyage”</strong>, renseignez les informations de votre passeport : autorité émettrice, numéro, date de délivrance et d’expiration.
        </p>

        <p class="france-visa-step-desc">
        Enfin, dans <strong>“Votre projet”</strong>, indiquez les raisons de votre séjour (études, stage, visite...) ainsi que le motif principal du séjour.
        </p>

        <img src="../img/France-visaE2.3.png" alt="Document de voyage et projet" class="france-visa-img" />
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 3 : Vos informations</h2>
        <p class="france-visa-step-desc">
            Après avoir rempli les sections précédentes, vous serez redirigé vers la section <strong>“Vos informations”</strong>. Ici, vous devrez fournir des informations personnelles telles que votre nom, prénom, date de naissance, adresse, numéro de téléphone
        </p>
        <img src="../img/France-visaE3.1.png" alt="Section Vos informations" class="france-visa-img" />

        <p class="france-visa-step-desc">
            Ensuite, dans la section <strong>“Vos coordonnées”</strong>, indiquez votre adresse e-mail et votre numéro de téléphone. Assurez-vous que ces informations sont correctes, car elles seront utilisées pour vous contacter concernant votre demande de visa.
        </p>
        <img src="../img/France-visaE3.2.png" alt="Section Vos coordonnées" class="france-visa-img" />

        <p class="france-visa-step-desc">
           votre famille, indiquer vous rejoignez-vous un membre de votre famille qui vit en France ? Si oui, fournissez les informations demandées (nom, prénom, adresse, lien de parenté).
        </p>

        <p class="france-visa-step-desc">
            Votre activité professionnelle : indiquez votre situation actuelle (étudiant) le secteur c'est enseignement et fournissez les détails nécessaires (nom de l’établissement, adresse, numéro de téléphone).
        </p>
        <img src="../img/France-visaE3.3.png" alt="Section Votre activité professionnelle" class="france-visa-img" />
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 4 : Suivre l'état de la demande</h2>
        <p class="france-visa-step-desc">
            Après avoir déposé votre dossier, utilisez votre compte France-Visas pour suivre l’avancement de votre demande de visa. Connectez-vous régulièrement afin de consulter le statut de votre demande (en cours de traitement, visa accordé, visa refusé, etc.). Vous serez averti dès que votre passeport sera prêt à être récupéré au centre des visas ou envoyé selon les modalités de votre pays. 
        </p>
        <div class="france-visa-step-img">
            <!-- Insérez une capture d'écran pertinente pour cette étape ci-dessous -->
            <img src="path/to/capture-step4.png" alt="Capture d’écran du suivi de demande sur France-Visas">
        </div>
        <p class="france-visa-step-desc">
        À la fin du formulaire, un <strong>PDF Cerfa</strong> ainsi qu’un <strong>récépissé</strong> listant les pièces justificatives seront générés automatiquement. Vous devrez les télécharger et les imprimer pour la suite du processus.
        </p>
    </section>

    <!-- Navigation entre les étapes du guide -->
    <nav class="france-visa-navigation">
        <a href="#" class="btn-secondary">Étape précédente</a>
        <a href="#" class="btn-secondary">Étape suivante</a>
    </nav>

    <section class="france-visa-footer">
        <p>Pour plus d'informations, consultez le site officiel de France-Visas.</p>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>
