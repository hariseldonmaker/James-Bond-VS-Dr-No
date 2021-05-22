<!DOCTYPE html>
<html lang="fr">
    <meta charset="UTF-8">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,600" rel="stylesheet" type="text/css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="style2.css">
    <title>James Bond VS Dr No</title>
</head>

<body>

    <span id="modal" title="Règles du jeu">
        Le jeu comprend <b>2 joueurs</b> : L'agent Bond du MI6 et le Dr Julius No, célèbre malfrat. 
                  Chaque joueur possède un (Score ponctuel) et un (Score global). A chaque tour, le joueur voit son score ponctuel <b>réinitialisé à 0</b> et peut lancer le dé pour accumuler des points tant qu'il fait un score différent de 1. 
                  S'il obtient 1, il perd les points accumulés durant la manche, et c'est à l'autre de jouer. 
                  Pour garantir ses points, le joueur peut à tout moment cliquer sur <b>Conserver le score</b>. Ainsi, il conserve ses points, qui s'ajoutent au <b>Score global</b>, et le tour passe à l'adversaire. 
                  Le premier joueur qui obtient 100 points gagne la partie. 
                  Gagnerez-vous pour l'Angleterre ou pour le Spectre ? 
                  <p></p>
                  <p></p>
                  <p></p>
                  <p>Légère subtilité : Si le joueur obtient deux 6 consécutifs, son (Score ponctuel) retombe à 0 et la main passe à l'adversaire.</p>
    </span>

    <div class="wrapper clearfix">
        <div class="player-0-panel active">
            <div class="player-score" id="score-0">43</div>
            <div class="player-name" id="name-0">James Bond</div>
            <h3>James Bond</h3>
            <img class="centered" src="https://static.posters.cz/image/750/affiches-et-posters/james-bond-007-the-name-is-bond-sean-connery-i34943.jpg" width="160px" height="210px">
            <audio controls>
          <source src="Bond-James-Bond.wav" type="audio/x-wav">
          Your browser does not support the
					<code>audio</code> element.
        </audio>
        <div class="player-current-box">
            <p><div class="player-current-label">Score ponctuel</div>
            <div class="player-current-score" id="current-0">11</div></p>
            </div>
        </div>
        <div class="player-1-panel">
            <div class="player-score" id="score-1">72</div>
            <div class="player-name" id="name-1">Dr Julius No</div>
            <h3>Dr Julius No</h3>
            <img class="centered" src="https://static.wikia.nocookie.net/jamesbond/images/1/1a/Dr._Julius_No.jpg/revision/latest/top-crop/width/360/height/450?cb=20160312221444&path-prefix=fr" width="160px" height="210px">
            <audio controls>
              <source src="Dr No.wav" type="audio/x-wav">
              Your browser does not support the
                        <code>audio</code> element.
            </audio>
            <div class="player-current-box">
                <p><div class="player-current-label">Score ponctuel</div>
                <div class="player-current-score" id="current-1">0</div></p>
            </div>
        </div>
        <button class="btn-new"><i class="ion-ios-plus-outline"></i>Nouvelle partie</button>
        <button class="btn-roll"><i class="ion-ios-loop"></i>Lancer</button>
        <button class="btn-hold"><i class="ion-ios-download-outline"></i>Conserver le score</button>

        <input type="text" placeholder="Final Score" class="final-score">
        <img src="https://loading.io/icon/a6b4nu" alt="Dice" class="dice" id="dice-1">
        <img src="https://loading.io/icon/a6b4nu" alt="Dice" class="dice" id="dice-2">
    </div>
    <script src="app2.js"></script>
</body>
</html>
