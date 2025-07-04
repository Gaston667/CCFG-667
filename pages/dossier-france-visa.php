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
        <h2 class="france-visa-step-title">Étape 3 : Soumettre les documents</h2>
        <p class="france-visa-step-desc">
            Préparez tous les documents requis pour votre demande de visa. La liste des justificatifs à fournir (indiquée sur votre récépissé France-Visas) inclut généralement :
        </p>
        <ul class="france-visa-doc-list">
            <li>Votre passeport (original et photocopie).</li>
            <li>Le formulaire de demande imprimé et signé (formulaire Cerfa) ainsi que le récépissé France-Visas.</li>
            <li>Des photos d’identité conformes aux normes (par ex. format OACI).</li>
            <li>Les justificatifs correspondant à votre motif de séjour (lettre d’acceptation universitaire, réservation de vol, assurance, justificatifs de ressources, etc.).</li>
        </ul>
        <p class="france-visa-step-desc">
            Une fois votre dossier complet, prenez rendez-vous auprès du centre de visas (VFS Global ou consulat de France) de votre pays afin de déposer votre demande. Le jour du rendez-vous, présentez-vous avec votre dossier complet. Vos données biométriques (empreintes digitales et photo) seront collectées lors du dépôt, et vous devrez vous acquitter des frais de visa à ce moment-là. 
        </p>
        <div class="france-visa-step-img">
            <!-- Insérez une capture d'écran pertinente pour cette étape ci-dessous -->
            <img src="path/to/capture-step3.png" alt="Capture d’écran de la soumission des documents au centre de visas">
        </div>
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
