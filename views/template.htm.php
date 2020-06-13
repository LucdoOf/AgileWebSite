<?php
/**
 * @var $content String Page content
 * @var $description String Description page
 */
?>
<html lang="fr">
    <head>
        <title>Agile-Web.net | Agence de développement web à Tours</title>
        <meta charset="UTF-8">
        <meta name="language" content="fr-FR">
        <meta name="description" content="<?= $description ?? "Agile-Web.net, votre agence de développement sur mesure à Tours" ?>">
        <meta name="robots" content="all">
        <meta name="theme-color" content="#6f37cc">
        <meta name="author" content="Lucas Garofalo">
        <meta name="MobileOptimized" content="320">
        <meta name="HandheldFriendly" content="true">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Agile-Web.net">
        <meta name="apple-mobile-web-app-status-bar-style" content="#6f37cc">
        <meta name="msapplication-navbutton-color" content="#6f37cc">
        <meta name="application-name" content="Agile-Web.net">
        <meta name="application-url" content="<?= public_url() ?>">
        <meta name="geo.region" content="FR-37" />
        <meta name="geo.placename" content="Tours" />
        <meta name="geo.position" content="46.603354;1.888334" />
        <meta name="ICBM" content="46.603354, 1.888334" />
        <meta property="og:site_name" content="Agile-Web.net">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:title" content="Agile-Web.net | Agence de développement web à Tours">
        <meta property="og:description" content="<?= $description ?? "Agile-Web.net, votre agence de développement sur mesure à Tours" ?>">
        <meta property="og:url" content="<?= actual_url() ?>">
        <!--<meta property="og:image" content="">
        <meta property="og:image:width" content="1440">
        <meta property="og:image:height" content="720">
        <meta property="og:image:type" content="image/jpeg">-->
        <meta name=”twitter:card” content="summary">
        <!--<meta name=”twitter:site” content=”@”>-->
        <meta name=”twitter:title” content="Agile-Web.net | Agence de développement web à Tours">
        <meta name=”twitter:description” content="<?= $description ?? "Agile-Web.net, votre agence de développement sur mesure à Tours" ?>">
        <!--<meta name=”twitter:image” content=”” />-->
        <link rel="alternate" hreflang="x-default" href="<?= actual_url() ?>">
        <link rel="alternate" hreflang="fr" href="<?= actual_url() ?>">
        <link rel="canonical" href="<?= $canonical ?? actual_url() ?>">
        <!--<link rel="manifest" href="">-->
        <link rel="author" href="<?= public_url() ?>/humans.txt">
        <link rel="stylesheet" href="res/stylesheets/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <nav>
                <a id="main-logo" href="<?= route("/") ?>">Agile-Web</a>
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
                        <li><a href="<?= route("/home") ?>">Accueil</a></li>
                        <li><a href="<?= route("/contact" ) ?>">Contact</a></li>
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
