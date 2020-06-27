<div id="contact-page">
    <section class="padded">
        <div class="content">
            <h2 class="section-title">Contactez-nous</h2>
            <p class="section-large-text">Remplissez le formulaire ci-dessous en indiquant votre mail, l'objet de votre demande ainsi que votre message. Que votre demande concerne une question sur notre démarche, une proposition ou une demande de devis, nous vous répondrons par mail dans les 12h.</p>
            <form id="contact-form" class="form" method="post" action="<?= route("/contact" )?>">
                <input type="email" placeholder="Mail" name="mail"/>
                <input type="text" placeholder="Objet" name="subject"/>
                <textarea placeholder="Votre demande" name="content"></textarea>
                <?php if(isset($message) && isset($success) && !is_null($message) && !is_null($success)): ?>
                    <div id="submit-answer" class="<?= $success == true ? "success" : "error" ?>">
                        <?= $message ?>
                    </div>
                <?php endif; ?>
                <div class="button-group">
                    <input type="submit" name="submit" class="button cta">
                </div>
            </form>
        </div>
    </section>
</div>
