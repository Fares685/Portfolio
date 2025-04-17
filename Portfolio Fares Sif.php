<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio de Fares Saif</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background-color: #f5f5f5;
      color: #2c3e50;
      line-height: 1.6;
    }

    a {
      color: #007bff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    header {
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: white;
      padding: 70px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 3em;
    }

    header p {
      font-size: 1.2em;
      margin-top: 10px;
    }

    nav {
      background: #2c3e50;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
      padding: 15px;
    }

    nav a {
      color: white;
      font-weight: bold;
      font-size: 1.1em;
    }

    section {
      padding: 60px 20px;
      max-width: 1000px;
      margin: auto;
    }

    section h2 {
      font-size: 2em;
      border-left: 6px solid #007bff;
      padding-left: 10px;
      margin-bottom: 20px;
    }

    .card {
      background: white;
      padding: 25px;
      margin-bottom: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .project-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .contact-info, .embed-cv {
      text-align: center;
    }

    embed {
      width: 100%;
      height: 500px;
      border-radius: 8px;
    }

    footer {
      background: #2c3e50;
      color: white;
      text-align: center;
      padding: 20px;
    }

    ul {
      padding-left: 20px;
    }

    @media (max-width: 768px) {
      header h1 { font-size: 2em; }
      nav { gap: 15px; }
    }
  </style>
</head>
<body>

<header>
  <h1>Fares Saif</h1>
  <p>Développeur Web | Étudiant BTS SIO SLAM</p>
</header>

<nav>
  <a href="#about">Parcours</a>
  <a href="#stage-fin-bts">Stage de Fin de BTS</a>
  <a href="#projects">Projets</a>
  <a href="#veille">Veille</a>
  <a href="#documents">Documents</a>
  <a href="#contact">Contact</a>
</nav>

<section id="about">
  <h2>Parcours & Objectifs</h2>
  <div class="card">
    <p>Après l’obtention de mon Bac scientifique, j’ai décidé de m’orienter vers une <strong>licence informatique</strong> à l’université. Cette année m’a permis d’acquérir une solide compréhension des concepts fondamentaux de l’informatique, tout en approfondissant mes compétences en programmation et en mathématiques.</p>
    
    <h3>Ce que j'ai appris pendant cette année :</h3>
    <ul>
      <li><strong>Langages de programmation :</strong> J’ai appris à coder en <strong>OCaml</strong> et <strong>Python</strong>, deux langages essentiels dans le domaine de l’informatique. OCaml m’a permis de comprendre la programmation fonctionnelle, tandis que Python m’a aidé à développer des compétences en codage plus généralistes, en particulier pour les scripts et l’automatisation.</li>
      <li><strong>Mathématiques appliquées :</strong> Une grande partie du programme de cette licence était consacrée aux mathématiques, notamment aux <strong>mathématiques discrètes</strong>, <strong>algèbre</strong> et <strong>probabilités</strong>. Ces disciplines m’ont permis d’acquérir une logique de raisonnement rigoureuse, cruciale pour aborder des problèmes complexes en développement et en algorithmique.</li>
      <li><strong>Théorie de l'informatique :</strong> J’ai également été introduit aux bases de la théorie des automates, des langages formels et de la complexité algorithmique, des domaines essentiels pour comprendre les limites du calcul et optimiser le développement logiciel.</li>
    </ul>

    <p>Bien que cette formation universitaire m’ait permis de consolider mes bases théoriques, j’ai rapidement réalisé que je souhaitais un parcours plus orienté vers le développement web et la pratique professionnelle. C’est pourquoi j’ai décidé de me réorienter vers un <strong>BTS SIO option SLAM</strong>, afin de renforcer mes compétences en développement web et d’acquérir une expérience plus pragmatique dans ce domaine.</p>
    
    <p>Mon objectif à long terme est de devenir un développeur web , capable de maîtriser à la fois le développement front-end et back-end, et de travailler sur des projets innovants qui intègrent des technologies modernes, y compris l’IA.</p>
  </div>
</section>


<section id="stage-fin-bts">
  <h2>Stage de Fin de BTS SIO - Création de Sites Web dans l'Industrie du Jeu Vidéo</h2>
  <div class="card">
    <p>En mai 2025, je vais débuter mon stage de fin de BTS SIO qui se déroulera pendant 7 semaines au sein d’une entreprise spécialisée dans le secteur du jeu vidéo. Ce stage constitue une étape importante dans ma formation, car il va me permettre de renforcer mes compétences dans la création de sites web et d'applications, tout en travaillant dans un domaine qui me passionne.</p>

    <h3>Objectifs du stage :</h3>
    <ul>
      <li><strong>Spécialisation en développement web :</strong> Je vais travailler sur la création de sites web interactifs, dynamiques et responsive en utilisant des technologies comme PHP, HTML, CSS, ainsi que des outils de gestion de base de données comme MySQL.</li>
      <li><strong>Création de sites pour l’industrie du jeu vidéo :</strong> Mon rôle consistera à participer à la conception et à l’optimisation de sites internet dédiés à des jeux vidéo, incluant des fonctionnalités comme l’intégration de communautés, des forums, des plateformes de téléchargement et des systèmes de gestion de contenu (CMS).</li>
      <li><strong>Travail sur des projets concrets :</strong> Je serai impliqué dans des projets réels en collaborant avec des développeurs expérimentés et en suivant des méthodologies de développement web professionnelles.</li>
      <li><strong>Approfondir les bonnes pratiques :</strong> Ce stage me permettra d’approfondir mes connaissances en PHP et d’adopter les bonnes pratiques du développement web, notamment en matière de sécurité, d'optimisation des performances et de gestion de projet.</li>
    </ul>

    <p>Ce stage est l'occasion pour moi d’appliquer les compétences acquises durant ma formation, mais aussi d'acquérir de nouvelles techniques adaptées à l’univers du jeu vidéo et de me rapprocher du monde professionnel en tant que développeur web full-stack.</p>
  </div>
</section>



<section id="projects">
  <h2>Mes Projets</h2>
  <div class="project-grid">
    <div class="card">
      <h3>Netflux – Plateforme de streaming vidéo</h3>
      <p>Projet personnel de site de streaming inspiré de Netflix. Développé en HTML, CSS, JavaScript, PHP et MySQL. Gestion dynamique des contenus, inscription/connexion utilisateur, design responsive. Ce projet m’a permis de mettre en pratique l’architecture MVC et la gestion de base de données relationnelle.</p>
    </div>
    <div class="card">
      <h3>Veille technologique – IA & ChatGPT</h3>
      <p>Travail de veille sur les usages de l’intelligence artificielle dans le développement web. J’ai exploré l’utilisation concrète de ChatGPT pour l’aide au codage, la génération de scripts PHP, et l’automatisation de tâches. <a href="#veille">Voir les entrées de veille</a></p>
    </div>
  </div>
</section>

<section id="veille">
  <h2>Veille Technologique</h2>
  <div class="card">
    <h3>Exploration de l'IA dans le développement</h3>
    <ul>
      <li><strong>Janvier 2024 :</strong> Étude des modèles de langage (transformers), compréhension du fonctionnement de ChatGPT.</li>
      <li><strong>Février 2024 :</strong> Analyse comparative entre GPT-2, GPT-3 et GPT-4. Points forts et limites pour les développeurs.</li>
      <li><strong>Mars 2024 :</strong> Intégration de ChatGPT dans des workflows de développement (génération de code, correction de scripts PHP).</li>
      <li><strong>Avril 2024 :</strong> Réflexion personnelle sur l’impact de l’IA sur le métier de développeur et les opportunités futures à exploiter.</li>
    </ul>
  </div>
</section>

<section id="documents">
  <h2>Documents</h2>
  <div class="card embed-cv">
    <h3>CV en aperçu</h3>
    <embed src="CV_Fares_Saif.pdf" type="application/pdf" />
    <p style="margin-top: 10px;">
      <a href="CV_Fares_Saif.pdf" download>Télécharger le CV en PDF</a>
    </p>
  </div>

  <div class="card">
    <h3>Compétences techniques</h3>
    <ul>
      <li>HTML / CSS / JavaScript</li>
      <li>PHP / MySQL</li>
      <li>Git / GitHub</li>
      <li>Développement responsive</li>
      <li>Utilisation d’IA pour l’assistance au développement</li>
    </ul>
  </div>
</section>

<section id="contact">
  <h2>Contact</h2>
  <div class="card contact-info">
    <p><strong>Email :</strong> <a href="mailto:faressaif689@gmail.com">faressaif689@gmail.com</a></p>
    <p><strong>Téléphone :</strong> <a href="tel:+33768741730">07 68 74 17 30</a></p>
    <p>Disponible pour échanger sur tout projet ou opportunité.</p>
  </div>
</section>

<footer>
  <p>&copy; 2025 Fares Saif. Tous droits réservés.</p>
</footer>

</body>
</html>
