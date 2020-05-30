<?php
/**
 * @var $content String Page content
 */
?>
<html lang="fr">
    <head>
        <title>Agile-web.net</title>
        <link rel="stylesheet" href="res/stylesheets/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <nav>
                <a id="main-logo" href="#">Agile-Web</a>
                <ul id="menu">
                    <li><a href="<?= route("/home") ?>" class="cw">Accueil</a></li>
                    <li><a href="<?= route("/contact") ?>" class="cw">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div id="main">
            <?= $content ?>
        </div>
        <footer class="row">
            <div id="footer-grid">
                <div class="footer-col">
                    <h4 class="cb">Plan du site</h4>
                    <ul>
                        <li><a href="/home">Accueil</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="cb">Informations légales</h4>
                    <ul>
                        <li>Agile-web.net est une micro-entreprise gérée par Lucas Garofalo</li>
                        <li>SIRET: 88208489000012</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="cb">Partenaires</h4>
                    <ul>
                        <li><a target="_blank" href="http://www.mediacoms.fr">MédiaComs</a></li>
                    </ul>
                </div>
                <div id="logoset" class="footer-col row">
                    <img src="res/images/logos/html5.png" alt="HTML5"/>
                    <img src="res/images/logos/css3.png" alt="CSS3"/>
                    <img src="res/images/logos/java.png" alt="Java"/>
                    <img src="res/images/logos/javascript.png" alt="Javascript"/>
                    <img src="res/images/logos/php.png" alt="PHP"/>
                    <img src="res/images/logos/python.png" alt="Python"/>
                    <img src="res/images/logos/sass.png" alt="SASS"/>
                    <img src="res/images/logos/vuejs.png" alt="Vue.js"/>
                </div>
            </div>
        </footer>
    </body>
    <script type="text/javascript" src="scripts/scrollManager.js"></script>
</html>
