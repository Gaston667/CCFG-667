<?php
$entete = "Dossier France-Visas";
$title = "Dossier France-Visas";
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
    <div class="france-visa-progress-text" id="visaProgressText" id="franceVisaSteps"></div>
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
            <img src="../img/France-visa1.PNG" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
<img src="../img/France-visa2.PNG" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
<img src="../img/France-visa_creer_compte.PNG" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">

            <br>
            <br>
            <p>Normalement, vous devriez recevoir un e-mail de confirmation pour activer votre compte et vous connecter directement.</p>
            <img src="../img/FRvisa_confirmation.PNG" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
<img src="../img/FRvisa_confirmation2.PNG" alt="Capture d’écran du formulaire de demande de visa en ligne (France-Visas)">
        </div>
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 2 : Votre projet</h2>
        <p class="france-visa-step-desc">
            <strong>Important :</strong> tout changement d'étape (suivant, précédent) entraîne une sauvegarde automatique des informations saisies. Les champs annotés d'un * sont obligatoires.
        </p>
        <p class="france-visa-step-desc">
        Après avoir créé votre compte, accédez à votre tableau de bord. Cliquez sur le bouton <strong>“Créer une nouvelle demande dans un nouveau groupe”</strong> pour démarrer une nouvelle demande individuelle.
        </p>

        <img src="../img/France-visaE2.1.PNG" alt="Créer une nouvelle demande dans un nouveau groupe" class="france-visa-img" />

        <p class="france-visa-step-desc">
        Vous serez ensuite redirigé vers un formulaire en plusieurs sections. Dans la première, <strong>“Votre situation”</strong>, sélectionnez votre nationalité et précisez si vous voyagez avec un membre de famille ressortissant de l’UE ou non.
        </p>

        <img src="../img/France-visaE2.2.PNG" alt="Section Votre situation et séjour" class="france-visa-img" />

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

        <img src="../img/France-visaE2.3.PNG" alt="Document de voyage et projet" class="france-visa-img" />
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 3 : Vos informations</h2>
        <p class="france-visa-step-desc">
            <strong>Important :</strong> tout changement d'étape (suivant, précédent) entraîne une sauvegarde automatique des informations saisies. Les champs annotés d'un * sont obligatoires.
        </p>
        <p class="france-visa-step-desc">
            Après avoir rempli les sections précédentes, vous serez redirigé vers la section <strong>“Vos informations”</strong>. Ici, vous devrez fournir des informations personnelles telles que votre nom, prénom, date de naissance, adresse, numéro de téléphone
        </p>
        <img src="../img/France-visaE3.1.PNG" alt="Section Vos informations" class="france-visa-img" />

        <p class="france-visa-step-desc">
            Ensuite, dans la section <strong>“Vos coordonnées”</strong>, indiquez votre adresse e-mail et votre numéro de téléphone. Assurez-vous que ces informations sont correctes, car elles seront utilisées pour vous contacter concernant votre demande de visa.
        </p>
        <img src="../img/France-visaE3.2.PNG" alt="Section Vos coordonnées" class="france-visa-img" />

        <p class="france-visa-step-desc">
           votre famille&nbsp;: indiquez si vous rejoignez un membre de votre famille qui vit en France. Si c’est le cas, fournissez les informations demandées (nom, prénom, adresse, lien de parenté).
        </p>

        <p class="france-visa-step-desc">
            Votre activité professionnelle : indiquez votre situation actuelle (étudiant) le secteur c'est enseignement et fournissez les détails nécessaires (nom de l’établissement, adresse, numéro de téléphone).
        </p>
        <img src="../img/France-visaE3.3.PNG" alt="Section Votre activité professionnelle" class="france-visa-img" />
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 4 : Votre dernier visa</h2>
        <p class="france-visa-step-desc">
            <strong>Important :</strong> tout changement d'étape (suivant, précédent) entraîne une sauvegarde automatique des informations saisies. Les champs annotés d'un * sont obligatoires.
        </p>
        <p class="france-visa-step-desc">
          Précédent séjour&nbsp;: indiquez si vous avez déjà résidé en France pendant plus de trois mois consécutifs. Si oui, précisez la période et le motif de ce séjour.
        </p>
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 5 : Votre séjour</h2>
        <p class="france-visa-step-desc">
            <strong>Important :</strong> tout changement d'étape (suivant, précédent) entraîne une sauvegarde automatique des informations saisies. Les champs annotés d'un * sont obligatoires.
        </p>
        <p class="france-visa-step-desc">
            Renseignez toutes les informations relatives à votre séjour en France.
        </p>
        <p class="france-visa-step-desc">
            <strong>Date d'arrivée prévue sur le territoire français&nbsp;:</strong> sélectionnez la date à laquelle vous comptez arriver en France. Si vous demandez un visa de retour, indiquez la date de retour prévue.
        </p>
        <p class="france-visa-step-desc">
            <strong>Nombre de mois de séjour&nbsp;:</strong> indiquez la durée totale de votre séjour en France (en mois).
        </p>
        <p class="france-visa-step-desc">
            <strong>Vos motifs de séjour&nbsp;:</strong> pour la plupart des étudiants, le motif principal est « Études ». Si ce n’est pas le cas, modifiez-le à l’étape « Votre projet ».
        </p>
        <p class="france-visa-step-desc">
            <strong>Numéro EEF&nbsp;:</strong> saisissez le numéro d'identifiant : présent sur votre attestation délivrée par Campus France. (ex: GN24-00999) si il n'a pas changé de format
        </p>
        <p class="france-visa-step-desc">
            <strong>Boursier&nbsp;:</strong> indiquez si vous êtes boursier. Si oui, précisez le type de bourse et l’organisme qui la délivre.
        </p>
        <img src="../img/France-visaE5.1.PNG" alt="Section Boursier" class="france-visa-img">
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 6 : Vos contacts et financement</h2>
        <p class="france-visa-step-desc">
            Afin de finaliser votre demande de visa, détaillez toutes les informations relatives à vos contacts sur votre lieu de séjour en France.
        </p>
        <p class="france-visa-step-desc">
            <strong>Personne ou organisme d'accueil :</strong> indiquez qui vous accueille en France. Vous pouvez choisir parmi les options suivantes :
            <ul>
                <li><strong>Une personne m'accueille :</strong> cochez cette case et remplissez ce bloc si une personne vous accueille (famille, ami, etc.).</li>
                <li><strong>Une entreprise, une organisation ou un établissement m'accueille :</strong> cochez cette case si une entreprise, une organisation ou un établissement vous accueille (école, université, entreprise, etc.).</li>
                <li><strong>Mon hôtel ou lieu d'hébergement (si différent) :</strong> cochez cette case si vous n’êtes pas accueilli par une personne ou une organisation, ou si vous résidez à une adresse différente durant votre séjour.</li>
            </ul>
        </p>

        <img src="../img/France-visaE6.1.PNG" alt="Section Personne ou organisme d'accueil" class="france-visa-img"><br>

        <p class="france-visa-step-desc">
            <strong>Financement des frais de voyage :</strong> indiquez comment seront financés vos frais de séjour en France. Deux possibilités :
            <ul>
                <li><strong>Par moi-même :</strong> cochez cette case si vous financez une partie ou la totalité de vos frais de séjour.</li>
                <li><strong>Par un autre garant :</strong> cochez cette case si un autre garant (parent, proche, organisme) finance une partie ou la totalité de vos frais de séjour.</li>
            </ul>
        </p>
        <p class="france-visa-step-desc">
            <strong>Conseil :</strong> Soyez précis dans les coordonnées et justificatifs nécessaires pour chaque option choisie.
        </p>

        <img src="../img/France-visaE6.2.PNG" alt="Section Contacts et financement" class="france-visa-img">
    </section>


    
    <section class="france-visa-step">
        <h2 class="france-visa-step-title">Étape 7 : Préparer vos documents pour le rendez-vous</h2>
        <p class="france-visa-step-desc">
            Le jour de votre rendez-vous, merci de vous présenter muni de :
        </p>
        <ul class="france-visa-doc-list">
            <li>Votre passeport (contenant au moins deux pages vierges consécutives).</li>
            <li>Les originaux de l'ensemble des documents listés ci-dessous, traduits en français ou en anglais.</li>
            <li>La numérisation de vos pièces justificatives est fortement recommandée. Un dossier totalement numérisé vous permettra un passage accéléré chez capago.</li>
            <li>En cas d'impossibilité technique uniquement, cliquez sur « poursuivre » en bas de page. Lors de votre rendez-vous, vous devez obligatoirement vous munir des documents originaux et de leurs photocopies.</li>
        </ul>
        <p class="france-visa-step-desc" style="color:#b30000;font-weight:bold;">
            Attention : l'absence d'un ou plusieurs de ces documents peut aboutir au refus du visa demandé. Le service des visas compétent se réserve le droit de vous demander des documents et des informations complémentaires.
        </p>

        <p> Suivez ce lien <a href="../pages/Document_visa_jj.php">pour plus d'informations</a>.</p>

        <h3>Documents à téléverser</h3>
        <ul>
            <li>Format autorisé : PDF</li>
            <li>Taille maximale : 3 Mo par document</li>
        </ul>
        <h4>Pré-requis</h4>
        <ul>
            <li><strong>Photographie d'identité :</strong> inutile d'apporter une photo, elle sera prise directement chez Capago le jour du rendez-vous.</li>
            
            <li>Votre passeport complet, avec toutes les pages comportant des visas, cachets d’entrée/sortie ou toute autre inscription.</li>
        </ul><br>

        <img src="../img/France-VisaE3.1.png" alt="" class="france-visa-img"><br>
        
        <h4>Objet du voyage/séjour</h4>
        <ul>
            <li>Attestation de pré-inscription générée par l’application EEF-Pastel, mentionnant le n° d’identifiant EEF.</li>
            <li>Pour les pays hors procédure EEF : dernier diplôme obtenu.</li>
        </ul>
        <img src="../img/France-VisaE7.2.PNG" alt="" class="france-visa-img"><br>

        <h4>Ressources</h4>
        <ul>
            <li>
                <strong>Vos sources de financement :</strong> attestation bancaire de dépôt sur un compte bancaire français, attestation bancaire de virement permanent et irrévocable (ou compte bloqué), ou attestation de bourse.
            </li>
            <li>
                <strong>Si vous êtes pris en charge par un garant :</strong> fournissez tous les documents demandés : attestation de prise en charge, justificatifs de ressources suffisantes, fiables et régulières du garant, ainsi que la copie de sa pièce d'identité.
            </li>
        </ul>

        <h4>Hébergement</h4>
        <ul>
            <li>Justificatif d'hébergement : réservation d'hôtel, contrat de bail, attestation/engagement sur l'honneur de l'hébergeant (établissement/institution ou particulier) ou lettre explicative sur la manière dont vous envisagez de vous loger.</li>

        </ul>
        <img src="../img/France-visaE7.3.PNG" alt="" class="france-visa-img">
        <p class="france-visa-step-desc" style="font-style:italic;">
            Conseil : Préparez et numérisez tous vos documents à l’avance pour éviter tout retard ou refus lors du rendez-vous.
        </p>
    </section>

    <section class="france-visa-step">
        <h2 class="france-visa-step-title">🎉 Fin du guide : Derniers conseils</h2>
        <p class="france-visa-step-desc">
            Vous avez maintenant toutes les informations pour compléter votre demande de visa étudiant France. Relisez bien chaque étape et assurez-vous d’avoir  mis les informations et tous les documents nécessaires.
        </p>

        <img src="<?= BASE_URL ?>/img/France-visaFini.png" alt="" class="france-visa-img">

        <ul class="france-visa-doc-list">
            <li>Vérifiez que vos documents sont bien numérisés, lisibles et conformes aux exigences.</li>
            <li>Gardez une copie numérique et papier de chaque document.</li>
            <li>Préparez-vous à répondre à d’éventuelles questions lors de votre rendez-vous.</li>
        </ul>
        <p class="france-visa-step-desc" style="font-weight:bold;">
            Bonne chance dans vos démarches et bienvenue en France ! haha
        </p>
    </section>

    <a href="<?= BASE_URL ?>/pages/Document_visa_jj.php" class="etape2-warning-link">
      ⚠️ <strong>Il est important de consulter la liste des documents à préparer</strong>
    </a>


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
