<div id="home-page">
    <section id='main-section' class="colored column align justify t-column">
        <div class="content">
            <div id="carousel-container">
                <h1 class="carousel-title">Votre agence web</h1>
                <div id="carousel-items">
                    <h3 class="carousel-item">E-Commerce</h3>
                    <h3 class="carousel-item">Agile</h3>
                    <h3 class="carousel-item">Flexible</h3>
                </div>
                <h1 class="carousel-title">à Tours</h1>
            </div>
            <div id="icon-text-container">
                <p class="carousel-text">Notre spécialité est le site E-Commerce. Nous développons pour vous un site professionnel, sécurisé vous permettant de vendre vos produits en ligne 24h/24h</p>
                <p class="carousel-text">Tout au long de la phase de développement, nous communiquons avec vous, nous nous adaptons a vos demandes et nous avancons ensemble pour créer votre projet</p>
                <p class="carousel-text">Nous développons tout nos projets sur mesure, en répondant a vos attentes et modifiables a vos souhaits</p>
            </div>
            <div id="icon-container">
                <div class="carousel-icon"><img src="<?= resource("images/svg", "ecommerce.svg") ?>"/></div>
                <div class="carousel-icon"><img src="<?= resource("images/svg", "interaction.svg") ?>"/></div>
                <div class="carousel-icon"><img src="<?= resource("images/svg", "adaptation.svg") ?>"/></div>
            </div>
            <div id="button-container">
                <a class="button" href="<?= route('/contact') ?>">Contactez-nous</a>
                <a class="button cta" href="<?= route('/agile-office') ?>">Démarrer un e-commerce</a>
            </div>
        </div>
    </section>
</div>

<script src="<?= script("classes/CarouselManager.js") ?>"></script>
<script>
    (new CarouselManager(document.querySelector("#carousel-items")));
</script>
