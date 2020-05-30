<div id="contact-page">
    <h2>Contactez-nous</h2>
    <p>Remplissez le formulaire ci-dessous en indiquant votre mail, l'objet de votre demande ainsi que votre message. Que cela concerne une question sur notre démarche, une proposition ou une demande de devis, nous vous répondrons par mail dans les 12h.</p>
    <form id="contact-form" class="column justify align" method="post" action="<?= ROOT ?>contact">
        <!--<div class="shadow-wrapper shadow">
            <span class="contact-triangle-1"></span>
            <span class="contact-triangle-2"></span>
        </div>-->
        <h2 class="cb">Contact</h2>
        <?php
            if(isset($message) && isset($success) && !is_null($message) && !is_null($success)){
                ?>
                    <div id="submit-answer" class="<?= $success == true ? "success" : "error" ?>">
                        <?= $message ?>
                    </div>
                <?php
            }
        ?>
        <input type="email" placeholder="Mail" name="mail"/>
        <input type="text" placeholder="Objet" name="subject"/>
        <textarea placeholder="Votre demande" name="content"></textarea>
        <input type="submit" name="submit">
    </form>
</div>