<!doctype html>

<html lang="en"><head>

  <meta charset="UTF-8">
  
  <link rel="apple-touch-icon" type="image/png" href="/Mohammed.ico">

  <meta name="TicTacToe-App" content="TicTacToe">
  
  <title>Pure CSS Tic-tac-toe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- ------------------------------LIEN CSS POUR SYMBÔLE TICTACTOE----------------------------------------- -->
  <script src="https://kit.fontawesome.com/572dbf5f30.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
<!-- ------------------------------------------------------------------------------------------------------ -->  
  
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
  <link rel="stylesheet" href="style.css">
<style>
@charset "UTF-8";
/* Variables
-------------------------------------------------------------- */
/* Body and Notice styling
-------------------------------------------------------------- */
body {
  color: #b6b5ca;
  font-family: 'Arial', sans-serif;
  margin: 0;
  text-align: center;
  background:linear-gradient(#333259,#4A1B8C);
  background-attachment: fixed;
}

h5 {
  font-weight: 400;
  padding: 0 20px;
}


    



/* Tic-tac-toe game
-------------------------------------------------------------- */
.tic-tac-toe {
  font-family: 'Open Sans', sans-serif;
  height: 300px;
  overflow: hidden;
  margin: 50px auto 30px auto;
  position: relative;
  width: 300px;
}

@media (min-width: 450px) {
  .tic-tac-toe {
    height: 450px;
    width: 450px;
  }
}
.tic-tac-toe input[type="radio"] {
  display: none;
}
.tic-tac-toe input[type="radio"]:checked + label {
  cursor: default;
  z-index: 10 !important;
}
.tic-tac-toe input[type="radio"].player-1 + label:after {
  content: "";
}
.tic-tac-toe input[type="radio"].player-2 + label:after {
  content: "";

}
.tic-tac-toe input[type="radio"].player-1:checked + label:after, .tic-tac-toe input[type="radio"].player-2:checked + label:after {
  opacity: 1;
}
.tic-tac-toe input[type="radio"].player-1:checked + label {
  background-color:  #880044;
}
.tic-tac-toe input[type="radio"].player-2:checked + label {
  background-color: #3B4F8C;
}
.tic-tac-toe input[type="radio"].turn-1 + label {
  z-index: 1;
}
.tic-tac-toe input[type="radio"].turn-2 + label {
  z-index: 2;
}
.tic-tac-toe input[type="radio"].turn-3 + label {
  z-index: 3;
}
.tic-tac-toe input[type="radio"].turn-4 + label {
  z-index: 4;
}
.tic-tac-toe input[type="radio"].turn-5 + label {
  z-index: 5;
}
.tic-tac-toe input[type="radio"].turn-6 + label {
  z-index: 6;
}
.tic-tac-toe input[type="radio"].turn-7 + label {
  z-index: 7;
}
.tic-tac-toe input[type="radio"].turn-8 + label {
  z-index: 8;
}
.tic-tac-toe input[type="radio"].turn-9 + label {
  z-index: 9;
}
.tic-tac-toe input[type="radio"].turn-1 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-1:checked ~ .turn-2 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-2:checked ~ .turn-3 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-3:checked ~ .turn-4 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-4:checked ~ .turn-5 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-5:checked ~ .turn-6 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-6:checked ~ .turn-7 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-7:checked ~ .turn-8 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-8:checked ~ .turn-9 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].left + label {
  left: 0;
}
.tic-tac-toe input[type="radio"].top + label {
  top: 0;
}
.tic-tac-toe input[type="radio"].middle + label {
  left: 100px;
}
.tic-tac-toe input[type="radio"].right + label {
  left: 200px;
}
.tic-tac-toe input[type="radio"].center + label {
  top: 100px;
}
.tic-tac-toe input[type="radio"].bottom + label {
  top: 200px;
}
@media (min-width: 450px) {
  .tic-tac-toe input[type="radio"].middle + label {
    left: 150px;
  }
  .tic-tac-toe input[type="radio"].right + label {
    left: 300px;
  }
  .tic-tac-toe input[type="radio"].center + label {
    top: 150px;
  }
  .tic-tac-toe input[type="radio"].bottom + label {
    top: 300px;
  }
}
.tic-tac-toe input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~
input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~
input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~ .end {
  display: block;
}
.tic-tac-toe input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~
input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~
input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~ .end > h3:before {
  content: "C'est une égalité!";
}
.tic-tac-toe .player-1.first-column:checked ~ .player-1.first-column:checked ~ .player-1.first-column:checked ~ .end,
.tic-tac-toe .player-1.second-column:checked ~ .player-1.second-column:checked ~ .player-1.second-column:checked ~ .end,
.tic-tac-toe .player-1.third-column:checked ~ .player-1.third-column:checked ~ .player-1.third-column:checked ~ .end,
.tic-tac-toe .player-1.first-row:checked ~ .player-1.first-row:checked ~ .player-1.first-row:checked ~ .end,
.tic-tac-toe .player-1.second-row:checked ~ .player-1.second-row:checked ~ .player-1.second-row:checked ~ .end,
.tic-tac-toe .player-1.third-row:checked ~ .player-1.third-row:checked ~ .player-1.third-row:checked ~ .end,
.tic-tac-toe .player-1.first-diagonal:checked ~ .player-1.first-diagonal:checked ~ .player-1.first-diagonal:checked ~ .end,
.tic-tac-toe .player-1.second-diagonal:checked ~ .player-1.second-diagonal:checked ~ .player-1.second-diagonal:checked ~ .end {
  display: block;
}
.tic-tac-toe .player-1.first-column:checked ~ .player-1.first-column:checked ~ .player-1.first-column:checked ~ .end h3:before,
.tic-tac-toe .player-1.second-column:checked ~ .player-1.second-column:checked ~ .player-1.second-column:checked ~ .end h3:before,
.tic-tac-toe .player-1.third-column:checked ~ .player-1.third-column:checked ~ .player-1.third-column:checked ~ .end h3:before,
.tic-tac-toe .player-1.first-row:checked ~ .player-1.first-row:checked ~ .player-1.first-row:checked ~ .end h3:before,
.tic-tac-toe .player-1.second-row:checked ~ .player-1.second-row:checked ~ .player-1.second-row:checked ~ .end h3:before,
.tic-tac-toe .player-1.third-row:checked ~ .player-1.third-row:checked ~ .player-1.third-row:checked ~ .end h3:before,
.tic-tac-toe .player-1.first-diagonal:checked ~ .player-1.first-diagonal:checked ~ .player-1.first-diagonal:checked ~ .end h3:before,
.tic-tac-toe .player-1.second-diagonal:checked ~ .player-1.second-diagonal:checked ~ .player-1.second-diagonal:checked ~ .end h3:before {
    content:"Victoire du Joueur 1";
}


.tic-tac-toe .player-2.first-column:checked ~ .player-2.first-column:checked ~ .player-2.first-column:checked ~ .end,
.tic-tac-toe .player-2.second-column:checked ~ .player-2.second-column:checked ~ .player-2.second-column:checked ~ .end,
.tic-tac-toe .player-2.third-column:checked ~ .player-2.third-column:checked ~ .player-2.third-column:checked ~ .end,
.tic-tac-toe .player-2.first-row:checked ~ .player-2.first-row:checked ~ .player-2.first-row:checked ~ .end,
.tic-tac-toe .player-2.second-row:checked ~ .player-2.second-row:checked ~ .player-2.second-row:checked ~ .end,
.tic-tac-toe .player-2.third-row:checked ~ .player-2.third-row:checked ~ .player-2.third-row:checked ~ .end,
.tic-tac-toe .player-2.first-diagonal:checked ~ .player-2.first-diagonal:checked ~ .player-2.first-diagonal:checked ~ .end,
.tic-tac-toe .player-2.second-diagonal:checked ~ .player-2.second-diagonal:checked ~ .player-2.second-diagonal:checked ~ .end {
  display: block;
}
.tic-tac-toe .player-2.first-column:checked ~ .player-2.first-column:checked ~ .player-2.first-column:checked ~ .end h3:before,
.tic-tac-toe .player-2.second-column:checked ~ .player-2.second-column:checked ~ .player-2.second-column:checked ~ .end h3:before,
.tic-tac-toe .player-2.third-column:checked ~ .player-2.third-column:checked ~ .player-2.third-column:checked ~ .end h3:before,
.tic-tac-toe .player-2.first-row:checked ~ .player-2.first-row:checked ~ .player-2.first-row:checked ~ .end h3:before,
.tic-tac-toe .player-2.second-row:checked ~ .player-2.second-row:checked ~ .player-2.second-row:checked ~ .end h3:before,
.tic-tac-toe .player-2.third-row:checked ~ .player-2.third-row:checked ~ .player-2.third-row:checked ~ .end h3:before,
.tic-tac-toe .player-2.first-diagonal:checked ~ .player-2.first-diagonal:checked ~ .player-2.first-diagonal:checked ~ .end h3:before,
.tic-tac-toe .player-2.second-diagonal:checked ~ .player-2.second-diagonal:checked ~ .player-2.second-diagonal:checked ~ .end h3:before {
  content: " Victoire du Joueur 2!" !important;
}
.tic-tac-toe label {
  background-color: #132640;
  border-radius: 14px;
  cursor: pointer;
  color: #fff;
  display: none;
  height: 90px;
  margin: 5px;
  position: absolute;
  width: 90px;
  -moz-transition: background-color 0.3s;
  -o-transition: background-color 0.3s;
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
}
@media (min-width: 450px) {
  .tic-tac-toe label {
    height: 140px;
    width: 140px;
  }
}
.tic-tac-toe label:hover {
  background-color: #3d4250;
}
.tic-tac-toe label:hover:after {
  opacity: .4;
}
.tic-tac-toe label:after {
  left: 0;
  font-family: "FontAwesome";
  font-size: 45px;
  margin-top: -22.5px;
  opacity: 0;
  position: absolute;
  text-align: center;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  top: 50%;
  width: 100%;
}
@media (min-width: 450px) {
  .tic-tac-toe label:after {
    font-size: 70px;
    margin-top: -35px;
  }
}
.tic-tac-toe .end {
  background: rgba(255, 255, 255, 0.8);
  bottom: 5px;
  color: #3d4250;
  display: none;
  left: 5px;
  padding-top: 40%;
  position: absolute;
  right: 5px;
  top: 5px;
  text-align: center;
  z-index: 11;
  vertical-align: middle;
  line-height: normal;
  border-radius:14px;
  
}

.tic-tac-toe .end::before{ 
  font-family: "Font Awesome 5 Free"; 
  font-size:50px;
  font-weight: 900; 
  content: "\f2b5";
  position:relative; 
  top:-20px;
 }
 
@media (min-width: 450px) {
  .tic-tac-toe .end {
    padding-top: 40%;
  }

.tic-tac-toe .end h3 {
  font-size: 20px;
  font-weight: 600;
  padding-bottom :30px;
}}
@media (min-width: 450px) {
  .tic-tac-toe .end h3 {
    font-size: 30px;
  }
}
.tic-tac-toe .end a {
  background-color: #3d4250;
  border-radius: 4px;
  color: #fff;
  padding: 14px 45px;
  text-decoration: none;
  -moz-transition: background-color 0.2s;
  -o-transition: background-color 0.2s;
  -webkit-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.tic-tac-toe .end a:hover {
  background-color: #262934;
  cursor: pointer;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
    <h4 style="position: absolute; top: 4px; left: 4px; font-size: 14px; font-weight:400; color:white;"> Version PHP : PHP 8 <br><br> Bootstrap 5 / Javascript <br><br> Version de MySQL : 8.0.31</h4>
    <a href="../" style="position: absolute; top: 10px; right: 10px; font-size: 25px; font-weight:400; color:white;"><i class="fa-solid fa-house"></i></a>
  <div class="tic-tac-toe">
  <input class="player-1 left first-column top first-row first-diagonal turn-1" id="block1-1-1" type="radio">
  <label class="turn-1" for="block1-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-1" id="block1-1-2" type="radio">
  <label class="turn-1" for="block1-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-1" id="block1-1-3" type="radio">
  <label class="turn-1" for="block1-1-3"></label>
  <input class="player-1 left first-column center second-row turn-1" id="block1-2-1" type="radio">
  <label class="turn-1" for="block1-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-1" id="block1-2-2" type="radio">
  <label class="turn-1" for="block1-2-2"></label>
  <input class="player-1 right third-column center second-row turn-1" id="block1-2-3" type="radio">
  <label class="turn-1" for="block1-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-1" id="block1-3-1" type="radio">
  <label class="turn-1" for="block1-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-1" id="block1-3-2" type="radio">
  <label class="turn-1" for="block1-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-1" id="block1-3-3" type="radio">
  <label class="turn-1" for="block1-3-3"></label>
  <input class="player-2 left first-column top first-row first-diagonal turn-2" id="block2-1-1" type="radio">
  <label class="turn-2" for="block2-1-1"></label>
  <input class="player-2 middle second-column top first-row turn-2" id="block2-1-2" type="radio">
  <label class="turn-2" for="block2-1-2"></label>
  <input class="player-2 right third-column top first-row second-diagonal turn-2" id="block2-1-3" type="radio">
  <label class="turn-2" for="block2-1-3"></label>
  <input class="player-2 left first-column center second-row turn-2" id="block2-2-1" type="radio">
  <label class="turn-2" for="block2-2-1"></label>
  <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-2" id="block2-2-2" type="radio">
  <label class="turn-2" for="block2-2-2"></label>
  <input class="player-2 right third-column center second-row turn-2" id="block2-2-3" type="radio">
  <label class="turn-2" for="block2-2-3"></label>
  <input class="player-2 left first-column bottom third-row second-diagonal turn-2" id="block2-3-1" type="radio">
  <label class="turn-2" for="block2-3-1"></label>
  <input class="player-2 middle second-column bottom third-row turn-2" id="block2-3-2" type="radio">
  <label class="turn-2" for="block2-3-2"></label>
  <input class="player-2 right third-column bottom third-row first-diagonal turn-2" id="block2-3-3" type="radio">
  <label class="turn-2" for="block2-3-3"></label>
  <input class="player-1 left first-column top first-row first-diagonal turn-3" id="block3-1-1" type="radio">
  <label class="turn-3" for="block3-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-3" id="block3-1-2" type="radio">
  <label class="turn-3" for="block3-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-3" id="block3-1-3" type="radio">
  <label class="turn-3" for="block3-1-3"></label>
  <input class="player-1 left first-column center second-row turn-3" id="block3-2-1" type="radio">
  <label class="turn-3" for="block3-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-3" id="block3-2-2" type="radio">
  <label class="turn-3" for="block3-2-2"></label>
  <input class="player-1 right third-column center second-row turn-3" id="block3-2-3" type="radio">
  <label class="turn-3" for="block3-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-3" id="block3-3-1" type="radio">
  <label class="turn-3" for="block3-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-3" id="block3-3-2" type="radio">
  <label class="turn-3" for="block3-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-3" id="block3-3-3" type="radio">
  <label class="turn-3" for="block3-3-3"></label>
  <input class="player-2 left first-column top first-row first-diagonal turn-4" id="block4-1-1" type="radio">
  <label class="turn-4" for="block4-1-1"></label>
  <input class="player-2 middle second-column top first-row turn-4" id="block4-1-2" type="radio">
  <label class="turn-4" for="block4-1-2"></label>
  <input class="player-2 right third-column top first-row second-diagonal turn-4" id="block4-1-3" type="radio">
  <label class="turn-4" for="block4-1-3"></label>
  <input class="player-2 left first-column center second-row turn-4" id="block4-2-1" type="radio">
  <label class="turn-4" for="block4-2-1"></label>
  <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-4" id="block4-2-2" type="radio">
  <label class="turn-4" for="block4-2-2"></label>
  <input class="player-2 right third-column center second-row turn-4" id="block4-2-3" type="radio">
  <label class="turn-4" for="block4-2-3"></label>
  <input class="player-2 left first-column bottom third-row second-diagonal turn-4" id="block4-3-1" type="radio">
  <label class="turn-4" for="block4-3-1"></label>
  <input class="player-2 middle second-column bottom third-row turn-4" id="block4-3-2" type="radio">
  <label class="turn-4" for="block4-3-2"></label>
  <input class="player-2 right third-column bottom third-row first-diagonal turn-4" id="block4-3-3" type="radio">
  <label class="turn-4" for="block4-3-3"></label>
  <input class="player-1 left first-column top first-row first-diagonal turn-5" id="block5-1-1" type="radio">
  <label class="turn-5" for="block5-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-5" id="block5-1-2" type="radio">
  <label class="turn-5" for="block5-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-5" id="block5-1-3" type="radio">
  <label class="turn-5" for="block5-1-3"></label>
  <input class="player-1 left first-column center second-row turn-5" id="block5-2-1" type="radio">
  <label class="turn-5" for="block5-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-5" id="block5-2-2" type="radio">
  <label class="turn-5" for="block5-2-2"></label>
  <input class="player-1 right third-column center second-row turn-5" id="block5-2-3" type="radio">
  <label class="turn-5" for="block5-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-5" id="block5-3-1" type="radio">
  <label class="turn-5" for="block5-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-5" id="block5-3-2" type="radio">
  <label class="turn-5" for="block5-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-5" id="block5-3-3" type="radio">
  <label class="turn-5" for="block5-3-3"></label>
  <input class="player-2 left first-column top first-row first-diagonal turn-6" id="block6-1-1" type="radio">
  <label class="turn-6" for="block6-1-1"></label>
  <input class="player-2 middle second-column top first-row turn-6" id="block6-1-2" type="radio">
  <label class="turn-6" for="block6-1-2"></label>
  <input class="player-2 right third-column top first-row second-diagonal turn-6" id="block6-1-3" type="radio">
  <label class="turn-6" for="block6-1-3"></label>
  <input class="player-2 left first-column center second-row turn-6" id="block6-2-1" type="radio">
  <label class="turn-6" for="block6-2-1"></label>
  <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-6" id="block6-2-2" type="radio">
  <label class="turn-6" for="block6-2-2"></label>
  <input class="player-2 right third-column center second-row turn-6" id="block6-2-3" type="radio">
  <label class="turn-6" for="block6-2-3"></label>
  <input class="player-2 left first-column bottom third-row second-diagonal turn-6" id="block6-3-1" type="radio">
  <label class="turn-6" for="block6-3-1"></label>
  <input class="player-2 middle second-column bottom third-row turn-6" id="block6-3-2" type="radio">
  <label class="turn-6" for="block6-3-2"></label>
  <input class="player-2 right third-column bottom third-row first-diagonal turn-6" id="block6-3-3" type="radio">
  <label class="turn-6" for="block6-3-3"></label>
  <input class="player-1 left first-column top first-row first-diagonal turn-7" id="block7-1-1" type="radio">
  <label class="turn-7" for="block7-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-7" id="block7-1-2" type="radio">
  <label class="turn-7" for="block7-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-7" id="block7-1-3" type="radio">
  <label class="turn-7" for="block7-1-3"></label>
  <input class="player-1 left first-column center second-row turn-7" id="block7-2-1" type="radio">
  <label class="turn-7" for="block7-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-7" id="block7-2-2" type="radio">
  <label class="turn-7" for="block7-2-2"></label>
  <input class="player-1 right third-column center second-row turn-7" id="block7-2-3" type="radio">
  <label class="turn-7" for="block7-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-7" id="block7-3-1" type="radio">
  <label class="turn-7" for="block7-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-7" id="block7-3-2" type="radio">
  <label class="turn-7" for="block7-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-7" id="block7-3-3" type="radio">
  <label class="turn-7" for="block7-3-3"></label>
  <input class="player-2 left first-column top first-row first-diagonal turn-8" id="block8-1-1" type="radio">
  <label class="turn-8" for="block8-1-1"></label>
  <input class="player-2 middle second-column top first-row turn-8" id="block8-1-2" type="radio">
  <label class="turn-8" for="block8-1-2"></label>
  <input class="player-2 right third-column top first-row second-diagonal turn-8" id="block8-1-3" type="radio">
  <label class="turn-8" for="block8-1-3"></label>
  <input class="player-2 left first-column center second-row turn-8" id="block8-2-1" type="radio">
  <label class="turn-8" for="block8-2-1"></label>
  <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-8" id="block8-2-2" type="radio">
  <label class="turn-8" for="block8-2-2"></label>
  <input class="player-2 right third-column center second-row turn-8" id="block8-2-3" type="radio">
  <label class="turn-8" for="block8-2-3"></label>
  <input class="player-2 left first-column bottom third-row second-diagonal turn-8" id="block8-3-1" type="radio">
  <label class="turn-8" for="block8-3-1"></label>
  <input class="player-2 middle second-column bottom third-row turn-8" id="block8-3-2" type="radio">
  <label class="turn-8" for="block8-3-2"></label>
  <input class="player-2 right third-column bottom third-row first-diagonal turn-8" id="block8-3-3" type="radio">
  <label class="turn-8" for="block8-3-3"></label>
  <input class="player-1 left first-column top first-row first-diagonal turn-9" id="block9-1-1" type="radio">
  <label class="turn-9" for="block9-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-9" id="block9-1-2" type="radio">
  <label class="turn-9" for="block9-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-9" id="block9-1-3" type="radio">
  <label class="turn-9" for="block9-1-3"></label>
  <input class="player-1 left first-column center second-row turn-9" id="block9-2-1" type="radio">
  <label class="turn-9" for="block9-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-9" id="block9-2-2" type="radio">
  <label class="turn-9" for="block9-2-2"></label>
  <input class="player-1 right third-column center second-row turn-9" id="block9-2-3" type="radio">
  <label class="turn-9" for="block9-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-9" id="block9-3-1" type="radio">
  <label class="turn-9" for="block9-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-9" id="block9-3-2" type="radio">
  <label class="turn-9" for="block9-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-9" id="block9-3-3" type="radio">
  <label class="turn-9" for="block9-3-3"></label>
  <div class="end">
    <h3></h3><a href="">Restart</a>
  </div>
</div>
<h5>Note: utiliser la vue "grand écran" pour une meilleure expérience.</h5>
    

  




 
</body></html>