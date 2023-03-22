/**
 * Resume/CV template created with Bootstrap 5 by @vmoratog and @jdnichollsc
 */
const resume = {
    firstName: 'Mohammed',
    lastName: 'MOUSSOUNI',
    jobTitle: 'Développeur Web Junior Full Stack',
    city: 'Tours',
    postalCode: '37100',
    phone: '06-28-81-37-25',
    email: 'mohamed.moussouni@gmail.com',
    education: [
      {
        school: 'UFR Sciences et Techniques de Tours',
        degree: 'Bac+5 Master 2 CCI',
        graduationDate: '20015 - 2016',
        description: "Diplôme d'Ingénieur Informatique"
      },
      {
        school:"Faculté de Droit de Tours",
        degree:"Bac+4 Master 1 AGE",
        graduationDate:"20014 - 2015",
        description:"Administration et Gestion des Entreprises"
      }
    ],
    links: [
      {
        label: 'GitHub',
        link: 'https://github.com/MohammedMoussouni'
      }, 
    ],
    skills: [
      'C++',
      'JavaScript',
      'TypeScript',
      'NodeJS',
      'NextJS',
      'ReactJS',
      'Python',
      'Django',
      'Firebase',
      'SQL',
      'PostgreSQL',
      'MongoDB'
    ],
    professionalSummary: `Autonome et passionné, mes premières expériences m'ont permis de renforcer mes
    acquis et d'appréhender les différents outils et techniques liés à la gestion de projet
    informatique. En quête de nouveaux challenges, je souhaite rejoindre une organisation à
    laquelle je pourrais apporter mon dynamisme et mon goût du challenge.`,
    employmentHistory: [
      {
        jobTitle: 'Chef de projet informatique',
        startDate: 'Janvier 2017',
        endDate: 'Juin 2022',
        employer: "Ministère des Armées",
        city: 'Tours',
        achievements: [
          'Conduire les projets en mode agile ou en mode classique ;',
          'Assister le responsable fonctionnel dans la formalisation de leurs besoins ;',
          'Assurer le rôle de garant du MCO/TMA (maintient en condition opérationnel/Tiers maintenance applicative) du SI avec le prestataire extérieur ;',
          'Création et contribution au développement de solutions et participation à leur mise en oeuvre.',
          "Réunion avec les clients et analyse de leurs besoins en matière d'automatisation et d'évolution pour mieux proposer des solutions adéquates.",
          "Tests effectués pour vérifier le bon fonctionnement des outils et rectifications avant la commercialisation de la solution.",
        ]
      },
      {
        jobTitle: 'Consultant fonctionnel SAP FI/ CO',
        startDate: 'Mars 2017',
        endDate: 'Aout 2017',
        employer: 'Augusta Reeves',
        city: 'Paris',
        achievements: [
          "Mise en place d'atelier de formation auprès des clients",
          "Rédaction de spécifications technico-fonctionnelles",
          "Tests de non-régression sur les différents environnements",
          "Développement des connaissances liés au paramétrage (via le SPRO)",
        ]
      }
      
      
    ],
    photo: 'https://user-images.githubusercontent.com/15992276/226209051-50dfda50-decc-4d5d-8673-6acd6a04d857.jpeg',
  }
  
  const formatResume = (r) => ({
    ...r,
    address: [
      r.country,
      r.city,
      r.postalCode
    ].filter(Boolean).join(', ')
  })
  
  new Vue({
    el: "#app",
    data: formatResume(resume)
  });
  
  /**
   * Wait for animatable-component to be loaded (Only for VanillaJS)
   **/
  function animatableLoaded() {
    document.querySelector('body').classList.remove('d-none');
  }
  if (customElements) {
    customElements.whenDefined('animatable-component').then(animatableLoaded);
  } else animatableLoaded()