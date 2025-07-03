<!-- php require_once './includes/header.php'; 
$title = "Dossier France-Visas"; 
?>

<main class="france-visa-container">
    <h1 class="france-visa-title">Dossier France-Visas</h1>
    <p class="france-visa-desc">Créez votre compte France-Visas pour commencer votre demande de visa.</p>
    
   

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 1 : Créer un compte</h2>
        <p class="france-visa-step-desc">Rendez-vous sur le site officiel de France-Visas et créez votre compte.</p>
        <a href="https://france-visas.gouv.fr/" target="_blank" class="btn-primary">Accéder à France-Visas</a>
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 2 : Remplir le formulaire</h2>
        <p class="france-visa-step-desc">Remplissez le formulaire de demande de visa en ligne.</p>
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 3 : Soumettre les documents</h2>
        <p class="france-visa-step-desc">Préparez et soumettez les documents requis pour votre demande de visa.</p>
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 4 : Suivre l'état de la demande</h2>
        <p class="france-visa-step-desc">Utilisez votre compte pour suivre l'état de votre demande de visa.</p>
    </section>

    <footer class="france-visa-footer">
        <p>Pour plus d'informations, consultez le site officiel de France-Visas.</p>
    </footer>

<p require_once './includes/footer.php'; -->

<?php 
$title = "Dossier France-Visas";
require_once './includes/header.php'; 
?>

<main class="france-visa-container">
    <h1 class="france-visa-title">Dossier France-Visas</h1>
    <p class="france-visa-desc">Créez votre compte France-Visas pour commencer votre demande de visa.</p>
    
    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 1 : Créer un compte</h2>
        <p class="france-visa-step-desc">
            Rendez-vous sur le site officiel de France-Visas et créez votre compte personnel. Suivez les instructions pour fournir votre adresse e-mail et définir un mot de passe. Un e-mail de confirmation vous sera envoyé : cliquez sur le lien reçu pour activer votre compte. Une fois votre compte activé, vous pourrez vous connecter et débuter la procédure en ligne.
        </p>
        <a href="https://france-visas.gouv.fr/" target="_blank" class="btn-primary">Accéder à France-Visas</a>
        <div class="france-visa-step-img">
            <!-- Insérez une capture d'écran pertinente pour cette étape ci-dessous -->
            <img src="path/to/capture-step1.png" alt="Capture d’écran de la page de création de compte France-Visas">
        </div>
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 2 : Remplir le formulaire</h2>
        <p class="france-visa-step-desc">
            Une fois votre compte créé, accédez au formulaire de demande de visa en ligne. Remplissez soigneusement toutes les sections requises du formulaire (informations personnelles, détails du voyage, motif du séjour, etc.). Vous pouvez sauvegarder votre demande et y revenir plus tard si nécessaire. Après avoir complété et validé le formulaire, le site génère un fichier PDF de votre demande (formulaire Cerfa) ainsi qu’un récépissé listant les pièces justificatives requises – n’oubliez pas d’imprimer ces documents.
        </p>
        <div class="france-visa-step-img">
            <!-- Insérez une capture d'écran pertinente pour cette étape ci-dessous -->
            <img src="path/to/capture-step2.png" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
        </div>
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
    </section>

    <!-- Navigation entre les étapes du guide -->
    <nav class="france-visa-navigation">
        <a href="#" class="btn-secondary">Étape précédente</a>
        <a href="#" class="btn-secondary">Étape suivante</a>
    </nav>

    <footer class="france-visa-footer">
        <p>Pour plus d'informations, consultez le site officiel de France-Visas.</p>
    </footer>
</main>

<?php require_once './includes/footer.php'; ?>
