
// NEW
function toggleTheme() {
  document.body.classList.toggle('theme-dark');
  document.body.classList.toggle('theme-light');
}

function toggleMenu() {
  const navLinks = document.querySelector('.campus-nav-links');
  navLinks.classList.toggle('show');
}














// Gestion des étapes pour l'étape 2
let currentStepEtape2 = 0;
const totalStepsEtape2 = 9;

function updateEtape2Display() {
  for (let i = 0; i < totalStepsEtape2; i++) {
    const step = document.getElementById(`etape2-step-${i}`);
    if (step) {
      step.classList.toggle("active", i === currentStepEtape2);
    }
  }

  // Met à jour la barre de progression
  const progressBar = document.getElementById("etape2ProgressBar");
  const progressText = document.getElementById("etape2ProgressText");
  const percentage = ((currentStepEtape2 + 1) / totalStepsEtape2) * 100;

  if (progressBar) progressBar.style.width = `${percentage}%`;
  if (progressText) progressText.textContent = `Étape ${currentStepEtape2 + 1} sur ${totalStepsEtape2}`;
}

function nextEtape2() {
  if (currentStepEtape2 < totalStepsEtape2 - 1) {
    currentStepEtape2++;
    updateEtape2Display();

    // Scroll automatique vers la section
    const container = document.getElementById("etape2StepsContainer");
    if (container) {
      container.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  }
}

function prevEtape2() {
  if (currentStepEtape2 > 0) {
    currentStepEtape2--;
    updateEtape2Display();

    // Scroll automatique vers la section
    const container = document.getElementById("etape2StepsContainer");
    if (container) {
      container.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  }
}

// Initialisation au chargement
document.addEventListener("DOMContentLoaded", updateEtape2Display);















// Etape 3 - Guide d'inscription
function nextEtape3(currentStep) {
  const allSteps = document.querySelectorAll(".etape3-card");
  allSteps.forEach(step => step.classList.remove("active"));

  const next = document.getElementById(`etape3-step-${currentStep + 1}`);
  if (next) {
    next.classList.add("active");
    updateProgressBar(currentStep + 1);
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
}

function prevEtape3(currentStep) {
  const allSteps = document.querySelectorAll(".etape3-card");
  allSteps.forEach(step => step.classList.remove("active"));

  const prev = document.getElementById(`etape3-step-${currentStep - 1}`);
  if (prev) {
    prev.classList.add("active");
    updateProgressBar(currentStep - 1);
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
}

function updateProgressBar(step) {
  const totalSteps = 3;
  const progress = (step / totalSteps) * 100;
  const bar = document.getElementById("etape3ProgressBar");
  const label = document.getElementById("etape3ProgressText");

  if (bar && label) {
    bar.style.width = `${progress}%`;
    label.textContent = `Étape ${step} sur ${totalSteps}`;
  }
}

// Initialisation au chargement
document.addEventListener("DOMContentLoaded", () => updateProgressBar(1));
