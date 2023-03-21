/**
 * Resume/CV template created with Bootstrap 5 by @vmoratog and @jdnichollsc
 */
const resume = {
    firstName: 'Gideon',
    lastName: 'Pinto',
    jobTitle: 'Research Software Developer II - Frontend, Open Source Contributor',
    city: 'Boston',
    postalCode: '02446',
    phone: '617-447-7461',
    email: 'gideon.pinto@childrens.harvard.edu',
    education: [
      {
        school: 'Northeastern University',
        degree: 'Masters',
        graduationDate: '2019',
        description: 'Combined Major in Informatics and Digital Media and Design'
      },
      {
        school:"St Francis Institute of Technology",
        degree:"Bachelors",
        graduationDate:"2015",
        description:"Computer Science"
      }
    ],
    links: [
      {
        label: 'GitHub',
        link: 'https://github.com/PintoGideon'
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
    professionalSummary: `I’m a software engineer specializing in building (and occasionally designing) digital experiences. Currently, I’m focused on building accessible, human-centered products at Boston Childrens Hospital.`,
    employmentHistory: [
      {
        jobTitle: 'Research Software Developer II - Frontend',
        startDate: 'July 2019',
        endDate: 'Present',
        employer: "Boston Children's Hospital",
        city: 'Boston',
        achievements: [
          'Write modern, performing, and robust code for the ChRIS Research Integration System (https://www.bu.edu/rhcollab/radiology/), a platform that brings research computing solutions to clinical front lines.',
          'Work with a variety of different languages, frameworks, and tools such as JavaScript, Typescript, React, Node.js, Python, Rust, Django, Express, Docker, Kubernetes and Openshift.',
          'Built a complete interface for retrieving, browsing and visualizing patient data from hospital servers. Built tools for anonymous data sharing and running complex analyses shipped in docker and podman.',
          'Architected and implemented web-based medical image viewers which supports high-performance image display, multiple browsers, and different medical image formats.',
          'Developed full-stack containerized applications for scientific tooling, MRI processing and compute platforms and collaborated with user experience designers and other developers to ensure thoughtful and coherent user experiences across the division of newborn medicine web-based apps.',
        ]
      },
      {
        jobTitle: 'Software Engineering Internship',
        startDate: 'Jan 2017',
        endDate: 'Aug 2017',
        employer: 'Seed Infotech',
        city: 'India',
        achievements: [
          'Collaborated with a small team of student developers to create a chatbot using Java AIML esigned to simulate a conversation with children affected by Autism Spectrum Disorder.',
          "Worked closely with designers and management team to develop, document, and manage Infotech's conference’s marketing website using Jekyll, Sass, and JavaScript.",
        ]
      },
      {
        jobTitle: 'Content Development',
        startDate: 'July 2015',
        endDate: 'Sep 2016',
        employer: 'Packt',
        city: 'India',
        achievements: [
          "Developed and shipped highly interactive web applications for Packt's Publishing Platform using Ember.js",
          "Architected and implemented a dashboard for authors to upload drafts for their books and echnical reviewers to review these drafts",
          "Designed the course curriculum for books and online videos on JavaScript and Java",
        ]
      },
      
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