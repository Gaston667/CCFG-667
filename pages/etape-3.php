<?php require_once '../includes/header.php'; ?>
    <main class="etape3-container">
    <h1 class="etape3-title">Campus France - Étape 3 : Je suis accepté</h1>
    <div class="etape3-progress-container">
    <div class="etape3-progress-bar" id="etape3ProgressBar"></div>
    <div class="etape3-progress-text" id="etape3ProgressText">Étape 1 sur 3</div>
    </div>

    <div class="etape3-card active" id="etape3-step-1">
        <h2>1.1 - Je choisis mes projets d'études</h2>
        <p>Vous pouvez ajouter plusieurs projets d'études...</p>
        <img src="../img/C-1.png" alt="Choix de projet">
        <ul>
        <li>1) Sélectionnez le cas qui vous correspond.</li>
        <img src="../img/C-1-1.png" alt="">
        <li>2) Recherchez votre formation dans le catalogue.</li>
        <img src="../img/C-1-2.png" alt="">
        <li>3) Sélectionnez l'établissement qui vous accueille.</li>
        <img src="../img/C-1-3.png" alt="">
        <li>4) Indiquez les dates de séjour + vos motivations</li>
        <img src="../img/C-1-8.png" alt="">
        <li>5) Enregistrez, puis joignez la pièce justificative.</li>
        <img src="../img/C-1-9.png" alt="">
        </ul>
        <div class="etape3-nav-btns">
            <button class="etape3-prev-btn" onclick="prevEtape3(2)">Retour</button>
            <button class="etape3-next-btn" onclick="nextEtape3(2)">Suivant</button>
        </div>
    </div>

    <div class="etape3-card" id="etape3-step-2">
        <h2>1.2 - Je saisis mes informations personnelles</h2>
        <p>Si "Complet" s'affiche, vous pouvez sauter cette étape.</p>
        <img src="../img/1.2-E3.png" alt="">
        <div class="etape3-nav-btns">
            <button class="etape3-prev-btn" onclick="prevEtape3(2)">Retour</button>
            <button class="etape3-next-btn" onclick="nextEtape3(2)">Suivant</button>
        </div>

    </div>

    <div class="etape3-card" id="etape3-step-3">
        <h2>1.3 - Je vérifie et je confirme</h2>
        <p>Vérifiez que tout est complet et confirmez.</p>
        <img src="../img/E3-1.3.png" alt="">
        <p style="color: red; font-weight: bold;">⚠️ Si ce n’est pas complet, retournez à l’étape précédente.</p>
        <h3>Et enfin...</h3>
        <img src="../img/Finouf.png" alt="">
        <p><strong>Fin de l'étape 3.</strong></p>
        <a class="etape3-next-btn" href="<?= BASE_URL ?>/pages/compte-campus-france.php">Terminer</a>
    </div>
    </main>


<?php require_once '../includes/footer.php'; ?>
