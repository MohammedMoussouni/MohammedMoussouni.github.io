 <!doctype html>
<html lang="en">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" http-equiv="refresh" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="style.css">
    
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        
    
      <script language="JavaScript" type="text/javascript" src="script.js"></script>
    </head>
    <body>
            <div class="grid">
              <header class="header">
                <i class="fas fa-bars header__menu"></i>
                <div class="header__search">
                  <input class="header__input" placeholder="Rechercher..." />
                </div>
                <div class="header__avatar">
                  <div class="dropdown">
                    <ul class="dropdown__list">
                      <li class="dropdown__list-item">
                        <span class="dropdown__icon"><i class="far fa-user"></i></span>
                        <span class="dropdown__title">Mon profil</span>
                      </li>
                      <li class="dropdown__list-item">
                        <span class="dropdown__icon"><i class="fas fa-clipboard-list"></i></span>
                        <span class="dropdown__title">Mon compte</span>
                      </li>
                      <li class="dropdown__list-item">
                        <span class="dropdown__icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="dropdown__title">Déconnexion</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </header>
            
              <aside class="sidenav">
                <div class="sidenav__brand">
                  <i class="fas fa-feather-alt sidenav__brand-icon"></i>
                  <a class="sidenav__brand-link" href="#">App<span class="text-light">Pro</span></a>
                  <i class="fas fa-times sidenav__brand-close"></i>
                </div>
                <div class="sidenav__profile">
                  <div class="sidenav__profile-avatar"></div>
                  <div class="sidenav__profile-title text-light">Mohammed M.</div>
                </div>
                <div class="row row--align-v-center row--align-h-center">
                  <ul class="navList">
                    <li class="navList__heading">Documents<i class="far fa-file-alt"></i></li>
                      <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-briefcase-medical"></i></span>
                        <span class="navList__subheading-title">Assurances</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Medical</li>
                        <li class="subList__item">Optique</li>
                        <li class="subList__item">Dentaire</li>
                      </ul>
                    </li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-plane-departure"></i></span>
                        <span class="navList__subheading-title">Voyages</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Internes</li>
                        <li class="subList__item">Etrangers</li>
                        <li class="subList__item">Autres</li>
                      </ul>
                    </li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="far fa-angry"></i></span>
                        <span class="navList__subheading-title">Taxes</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Actuels</li>
                        <li class="subList__item">Archives</li>
                      </ul>
                    </li>
            
                    <li class="navList__heading">Messages<i class="far fa-envelope"></i></li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-envelope"></i></span>
                        <span class="navList__subheading-title">Boite de réception</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Primaire</li>
                        <li class="subList__item">Secondaire</li>
                      </ul>
                    </li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-eye"></i></span>
                        <span class="navList__subheading-title">Non lu(s)</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Primaire</li>
                        <li class="subList__item">Secondaire</li>
                      </ul>
                    </li>
                     <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-book-open"></i></span>
                        <span class="navList__subheading-title">archives</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Primaire</li>
                        <li class="subList__item">Secondaire</li>

                      </ul>
                    </li>
            
                    <li class="navList__heading">Album Photo<i class="far fa-image"></i></li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-mountain"></i></span>
                        <span class="navList__subheading-title">Vacances</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Cambodge</li>
                        <li class="subList__item">New york</li>
                      </ul>
                    </li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-wine-glass-alt"></i></span>
                        <span class="navList__subheading-title">Anniversaire</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Léo</li>
                        <li class="subList__item">Jordan</li>
                        <li class="subList__item">Youcef</li>
                      </ul>
                    </li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-graduation-cap"></i></span>
                        <span class="navList__subheading-title">Université</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">wild horse saloon</li>
                        <li class="subList__item">service corps</li>
                        <li class="subList__item">graduation</li>
                        <li class="subList__item">internships</li>
                      </ul>
                    </li>
            
                    <li class="navList__heading">Statistiques<i class="fas fa-chart-bar"></i></li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-credit-card"></i></span>
                        <span class="navList__subheading-title">Finances</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">mortgage</li>
                        <li class="subList__item">investments</li>
                        <li class="subList__item">spend log</li>
                        <li class="subList__item">owed</li>
                      </ul>
                    </li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-phone"></i></span>
                        <span class="navList__subheading-title">Calculer stats</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">last month</li>
                        <li class="subList__item">bi-weekly</li>
                        <li class="subList__item">yesterday</li>
                        <li class="subList__item">today</li>
                      </ul>
                    </li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-plane"></i></span>
                        <span class="navList__subheading-title">Voyages récents</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">Bali</li>
                        <li class="subList__item">Kuala Lumpur</li>
                        <li class="subList__item">Phillipines</li>
                        <li class="subList__item">Thailand</li>
                      </ul>
                    </li>
                    
                    <li class="navList__heading">Evenements<i class="fas fa-calendar-alt"></i></li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-wine-glass-alt"></i></span>
                        <span class="navList__subheading-title">Mariages</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">A venir</li>
                        <li class="subList__item">Passé</li>
                      </ul>
                    </li>
                    <li>
                      <div class="navList__subheading row row--align-v-center">
                        <span class="navList__subheading-icon"><i class="fas fa-school"></i></span>
                        <span class="navList__subheading-title">Gourmandises préférées</span>
                      </div>
                      <ul class="subList subList--hidden">
                        <li class="subList__item">BN</li>
                        <li class="subList__item">Smarties</li>
                        <li class="subList__item">Banane</li>
                      </ul>
                    </li>
                    <li>
                          <div class="navList__subheading row row--align-v-center">
                            <span class="navList__subheading-icon"><i class="fas fa-users"></i></span>
                            <span class="navList__subheading-title">Mes Skills</span>
                          </div>
                          <ul class="subList subList--hidden">
                            <li class="subList__item">Tech</li>
                            <li class="subList__item">UI</li>
                            <li class="subList__item">UX</li>
                            <li class="subList__item">Développement</li>
                          </ul>
                        </li>
                  </ul>
                </div>
              </aside>
            
              <main class="main">
                <div class="main-header">
                  <div class="main-header__intro-wrapper">
                    <div class="main-header__welcome">
                      <div class="main-header__welcome-title text-light">Salut, <strong>Mohammed</strong></div>
                      <div class="main-header__welcome-subtitle text-light">Comment ça va aujourd'hui ?</div>
                    </div>
                    <div class="quickview">
                      <div class="quickview__item">
                        <div class="quickview__item-total">41</div>
                        <div class="quickview__item-description">
                          <i class="far fa-calendar-alt"></i>
                          <span class="text-light">Evenements</span>
                        </div>
                      </div>
                      <div class="quickview__item">
                        <div class="quickview__item-total">64</div>
                        <div class="quickview__item-description">
                          <i class="far fa-comment"></i>
                          <span class="text-light">Messages</span>
                        </div>
                      </div>
                      <div class="quickview__item">
                        <div class="quickview__item-total">27&deg;</div>
                        <div class="quickview__item-description">
                          <i class="fas fa-map-marker-alt"></i>
                          <span class="text-light">Jean</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="main-overview">
                  <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--document">
                       <i class="far fa-file-alt"></i>
                    </div>
                    <div class="overviewCard-description">
                      <h3 class="overviewCard-title text-light">Nouveau <strong>Document</strong></h3>
                      <p class="overviewCard-subtitle">Europe Trip</p>
                    </div>
                  </div>
                  <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--calendar">
                       <i class="far fa-calendar-check"></i>
                    </div>
                    <div class="overviewCard-description">
                      <h3 class="overviewCard-title text-light">A venir <strong>Evenements</strong></h3>
                      <p class="overviewCard-subtitle">Restaurant Japonais</p>
                    </div>
                  </div>
                  <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--mail">
                       <i class="far fa-envelope"></i>
                    </div>
                    <div class="overviewCard-description">
                      <h3 class="overviewCard-title text-light">Récents <strong>Emails</strong></h3>
                      <p class="overviewCard-subtitle">+10</p>
                    </div>
                  </div>
                  <div class="overviewCard">
                    <div class="overviewCard-icon overviewCard-icon--photo">
                       <i class="far fa-file-image"></i>
                    </div>
                    <div class="overviewCard-description">
                      <h3 class="overviewCard-title text-light">Nouveau <strong>Album</strong></h3>
                      <p class="overviewCard-subtitle">Concert Maison</p>
                    </div>
                  </div>
                </div> <!-- /.main__overview -->
                <div class="main__cards">
                  <div class="card">
                    <div class="card__header">
                      <div class="card__header-title text-light">Nos <strong>Evenements</strong>
                        <a href="#" class="card__header-link text-bold">Voir tout</a>
                      </div>
                      <div class="settings">
                        <div class="settings__block"><i class="fas fa-edit"></i></div>
                        <div class="settings__block"><i class="fas fa-cog"></i></div>
                      </div>
                    </div>
                    <div class="card__main">
                      <div class="card__row">
                        <div class="card__icon"><i class="fas fa-gift"></i></div>
                        <div class="card__time">
                          <div>Aujourd'hui</div>
                        </div>
                        <div class="card__detail">
                          <div class="card__source text-bold">Daniel G</div>
                          <div class="card__description">Partir à 3h, Salut Daniel M.</div>
                          <div class="card__note">14 Daniel Mayer</div>
                        </div>
                      </div>
                      <div class="card__row">
                        <div class="card__icon"><i class="fas fa-plane"></i></div>
                        <div class="card__time">
                          <div>Mardi</div>
                        </div>
                        <div class="card__detail">
                          <div class="card__source text-bold">Matthew H</div>
                          <div class="card__description">Vol pour Bora Bora à 16:30</div>
                          <div class="card__note">CDG, Porte 27B</div>
                        </div>
                      </div>
                      <div class="card__row">
                        <div class="card__icon"><i class="fas fa-book"></i></div>
                        <div class="card__time">
                          <div>Mercredi</div>
                        </div>
                        <div class="card__detail">
                          <div class="card__source text-bold">Institut National des Sciences</div>
                          <div class="card__description">Rejoignez l'institut sur l'étude de l'univers par Stephen Hawking</div>
                          <div class="card__note">19:30, Caroline du Nord, Centre des Sciences Appliquées</div>
                        </div>
                      </div>
                      <div class="card__row">
                        <div class="card__icon"><i class="fas fa-heart"></i></div>
                        <div class="card__time">
                          <div>Vendredi</div>
                        </div>
                        <div class="card__detail">
                          <div class="card__source text-bold">24ème bal annuel du cœur</div>
                          <div class="card__description">Rejoignez-nous et contribuez à votre organisation caritative locale préférée.</div>
                          <div class="card__note">18:45, Convention Annuelle</div>
                        </div>
                      </div>
                      <div class="card__row">
                        <div class="card__icon"><i class="fas fa-heart"></i></div>
                        <div class="card__time">
                          <div>Samedi</div>
                        </div>
                        <div class="card__detail">
                          <div class="card__source text-bold">Little Rock Air Show</div>
                          <div class="card__description">Regarde les oiseaux volés dans le ciel</div>
                          <div class="card__note">11:00, 10 rue de la ré&publique</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card__header">
                      <div class="card__header-title text-light">Récents <strong>Documents</strong>
                        <a href="#" class="card__header-link text-bold">Voir tout</a>
                      </div>
                      <div class="settings">
                        <div class="settings__block"><i class="fas fa-edit"></i></div>
                        <div class="settings__block"><i class="fas fa-cog"></i></div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="documents">
                        <div class="document">
                          <div class="document__img"></div>
                          <div class="document__title">Tesla</div>
                          <div class="document__date">07/16/2018</div>
                        </div>
                        <div class="document">
                          <div class="document__img"></div>
                          <div class="document__title">Budget Annuel</div>
                          <div class="document__date">09/04/2018</div>
                        </div>
                        <div class="document">
                          <div class="document__img"></div>
                          <div class="document__title">top films</div>
                          <div class="document__date">10/10/2018</div>
                        </div>
                        <div class="document">
                          <div class="document__img"></div>
                          <div class="document__title">Itinéraires de voyages</div>
                          <div class="document__date">11/01/2018</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card--finance">
                    <div class="card__header">
                      <div class="card__header-title text-light">Mensuellement <strong>Dépenses</strong>
                        <a href="#" class="card__header-link text-bold">Voir tout</a>
                      </div>
                      <div class="settings">
                        <div class="settings__block"><i class="fas fa-edit"></i></div>
                        <div class="settings__block"><i class="fas fa-cog"></i></div>
                      </div>
                    </div>
                    <div id="chartdiv"></div>
                  </div>
                </div> <!-- /.main-cards -->
              </main>
            
              
            </div>
                
                
            </body>
            </html>
            