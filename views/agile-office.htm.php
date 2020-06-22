<div id="agile-office-page">
    <div class="header-section">
        <div class="header-background">
            <span class="botleft-topleft">
                <span class="botleft-topleft-middle"></span>
            </span>
            <span class="topright-botright"></span>
        </div>
        <div class="content">
            <div class="header-section-text">
                <h1 class="section-title">Passez au numérique</h1>
                <p class="section-text">
                    Vous avez toujours souhaité offrir un service en ligne tout en pouvant gérer vos commandes, vos produits, vos clients ou encore vos factures en un clic ? <br>
                    Choisissez notre solution Agile-Office sur mesure pour répondre à tous vos besoins
                </p>
                <div class="button-group">
                    <a class="button cta" href="#">Démarrer</a>
                    <a class="button" href="<?= route("/contact")?>">Nous contacter</a>
                </div>
            </div>
            <figure>
                <img id="web-figure" src="<?= resource("images", "office-web.png") ?>" alt="Cover office-web"/>
            </figure>
        </div>
    </div>
    <section class="gray padded">
        <div class="content column align justify">
            <h2 class="section-title center">Notre produit</h2>
            <p class="section-large-text center">
                Nous développons pour vous un site internet moderne et fonctionnel qui vous ressemble muni d'un service multiplateforme vous permettant
                de gérer votre site en toute autonomie. <br>
            </p>
            <a class="button cta xl center" href="#" target="_blank">Essayez-le</a>
        </div>
    </section>
    <section class="padded colored" id="shipping-section">
        <div class="content column align justify fit">
            <h2 class="section-title bold center">Ouvrez votre commerce au monde entier</h2>
            <p class="section-large-text center bold">
                Développez un système simple de livraison en France métropolitaine et dans le monde avec notre prise en charge des plus grands services de livraison mondiaux
            </p>
        </div>
    </section>
    <section class="padded">
        <div class="content">
            <h2 class="section-title center">Tout ce dont vous avez besoin, du bout des doigts</h2>
            <div class="card-grid tab-menu group-cards">
                <div class="card tab-menu-link tab-commands">
                    <i class="fas fa-shopping-basket r"></i>
                    <h3>Gestion commandes</h3>
                    <span>Toutes vos commandes visibles et éditables en un seul point</span>
                </div>
                <div class="card tab-menu-link tab-users">
                    <i class="fas fa-users r"></i>
                    <h3>Gestion utilisateurs</h3>
                    <span>Visualisez les utilisateurs inscrits sur votre site</span>
                </div>
                <div class="card tab-menu-link tab-products">
                    <i class="fas fa-tags r"></i>
                    <h3>Gestion produits</h3>
                    <span>Editez votre offre en ligne et remarquez vos meilleurs ventes</span>
                </div>
                <div class="card tab-menu-link tab-stats">
                    <i class="fas fa-chart-line r"></i>
                    <h3>Statistiques poussées</h3>
                    <span>Ayez accès a des données essentielles pour l'amélioration de votre boutique</span>
                </div>
                <div class="card tab-menu-link tab-wording">
                    <i class="fas fa-font"></i>
                    <h3>Edition de contenu</h3>
                    <span>Gérez vous même le contenu texte ou image de vos pages</span>
                </div>
                <div class="card tab-menu-link tab-shipping">
                    <i class="fas fa-dolly"></i>
                    <h3>Processus de livraison</h3>
                    <span>Expédiez et suivez vos commandes en toute simplicité</span>
                </div>
            </div>
            <div class="tab-content-wrapper group-cards column align justify">
                <div class="tab-content tab-commands">
                    <ul class="check-list list">
                        <li>Liste de toutes vos commandes centralisée</li>
                        <li>Filtres, tris et exports CSV</li>
                        <li>Factures automatiques disponibles pour chaque commandes</li>
                        <li>Historiques de commande conformes aux normes en vigueur</li>
                        <li>Status de commandes modifiables</li>
                    </ul>
                </div>
                <div class="tab-content tab-users">
                    <ul class="check-list list">
                        <li>Tout les utilisateurs inscrits ou non aux même endroit</li>
                        <li>Suivi de visite par utilisateur</li>
                        <li>Liste des commandes passées par utilisateur</li>
                        <li>Mails automatiques configurables</li>
                        <li>Contact par mail avec l'utilisateur à l'intérieur du back-office</li>
                    </ul>
                </div>
                <div class="tab-content tab-products">
                    <ul class="check-list list">
                        <li>Ajout, édition et modifications de produits en autonomie</li>
                        <li>Mise en valeur de produits</li>
                        <li>Catégorie et sous-catégories de produits</li>
                        <li>Liste de commandes passées par produit</li>
                        <li>Réductions par produits et par périodes</li>
                    </ul>
                </div>
                <div class="tab-content tab-stats">
                    <ul class="check-list list">
                        <li>Chiffre d'affaire</li>
                        <li>Commandes passées</li>
                        <li>Produits vendus</li>
                        <li>Connections, inscriptions utilisateurs</li>
                        <li>Comptes rendus mensuels et journaliers</li>
                    </ul>
                </div>
                <div class="tab-content tab-wording">
                    <ul class="check-list list">
                        <li>Contenu texte et image éditable par page</li>
                        <li>Descriptions et balises du site éditables</li>
                        <li>Descriptions produits éditables</li>
                        <li>Multilingue disponible</li>
                        <li>Mise en avant de mots clé pour votre SEO</li>
                    </ul>
                </div>
                <div class="tab-content tab-shipping">
                    <ul class="check-list list">
                        <li>Livraison france métropolitaine incluse auprès de nombreux livreurs</li>
                        <li>Livraison internationale et en DOM-TOM + corse au cas par cas</li>
                        <li>Suivi de livraison utilisateur et administrateur disponible</li>
                        <li>Retour de colis pris en charge</li>
                        <li>Sécurité maximale grace a nos distributeurs certifiés</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    new TabManager('cards');
</script>
