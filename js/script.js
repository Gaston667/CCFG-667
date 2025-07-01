
// NEW
function toggleTheme() {
  document.body.classList.toggle('theme-dark');
  document.body.classList.toggle('theme-light');
}

function toggleMenu() {
  const navLinks = document.querySelector('.campus-nav-links');
  navLinks.classList.toggle('show');
}

// Optional fun effect (scroll to top on route change or anchor click)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

const steps = [
  {
    title: "Identifiants et photo",
    content: `
      <p>Scanner une photo d'identité 300DPI (26x32mm, JPG ou PNG, max 50ko).</p>
      <p>Compresser la photo :
      <a href="https://www.compress2go.com/fr" target="_blank">https://www.compress2go.com/fr</a></p>
      <img src="../img/identity.png" alt="Photo d'identité">
    `
  },
  {
    title: "Identité",
    content: `
      <p>Joindre une copie de votre pièce d'identité, vérifier l'exactitude des infos.</p>
      <img src="../img/passepor-3.png" alt="justificatifs">
      <img src="../img/passepor-2.png" alt="ajout passeport">
      <img src="../img/passepor.png" alt="modification">
    `
  },
  {
    title: "Coordonnées",
    content: `
      <p>Si vous êtes à Kamsar : code 04 + quartier + district + numéro bâtiment.</p>
      <img src="../img/coor.png" alt="coordonnées">
    `
  },
  {
    title: "Statut particulier",
    content: `
      <p>Mettez « Étudiant en classe de terminale inscrit dans un lycée français ».</p>
      <img src="../img/statut-particulier.png" alt="statut">
      <p>Ajoutez : certificat de scolarité, attestation CNED...</p>
      <img src="../img/justif-scolariter.png" alt="justificatifs">
    `
  },
  {
    title: "CV",
    content: `
      <p>Ajoutez votre CV.</p>
      <img src="../img/cv-1.png" alt="cv">
    `
  },
  {
    title: "Mon cursus",
    content: `
      <p>Ajoutez vos bulletins de seconde, première, terminale et bac.</p>
      <img src="../img/cursus-1.png" alt="cursus">
      <img src="../img/ajout.png" alt="ajouter">
      <img src="../img/1.png" alt="1">
      <img src="../img/2.png" alt="2">
      <img src="../img/3.png" alt="3">
      <img src="../img/enregistrer.png" alt="enregistrer">
      <img src="../img/bul.png" alt="bulletins">
      <img src="../img/bacbul.png" alt="bac">
      <img src="../img/bacbul-2.png" alt="bac2">
      <img src="../img/bacbul-3.png" alt="bac3">
      <img src="../img/cursus.png" alt="cursus final">
    `
  },
  {
    title: "Niveau de français",
    content: `
      <p>Pas nécessaire si vous êtes dans un lycée français ou pays francophone.</p>
      <img src="../img/Niveaufr.png" alt="niveau fr">
      <img src="../img/nF.png" alt="niveau fr 2">
    `
  },
  {
    title: "Séjours en France & Langues",
    content: `
      <p>Remplissez selon votre situation.</p>
      <img src="../img/fin.png" alt="niveau anglais">
    `
  },
  {
    title: "Fin",
    content: `
      <p>Si "complet" s'affiche : vous avez terminé étape 2.</p>
      <img src="../img/complet.png" alt="complet">
      <p><a href="compte-campus-france.html#E3">Passer à l'étape 3 →</a></p>
    `
  }
];

let currentStep = 0;
const container = document.getElementById("guide-container");
const nextBtn = document.getElementById("nextStep");
const prevBtn = document.getElementById("prevStep");

function renderStep() {
  const step = steps[currentStep];
  container.innerHTML = `
    <article class="etape2-campus-france-block">
      <h3>${step.title}</h3>
      ${step.content}
    </article>
  `;
  prevBtn.disabled = currentStep === 0;
  nextBtn.disabled = currentStep === steps.length - 1;
}

nextBtn.addEventListener("click", () => {
  if (currentStep < steps.length - 1) {
    currentStep++;
    renderStep();
  }
});

prevBtn.addEventListener("click", () => {
  if (currentStep > 0) {
    currentStep--;
    renderStep();
  }
});

// Initial render
renderStep();


