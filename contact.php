<?php require 'header.php'; ?>
    <body>
        <div class="section">
            <h1 id="contact">Nous contacter</h1>
            <form> <!-- aucun traitement pour le moment -->
                <div class="field">
                    <label>Votre nom complet :
                        <input type="text">
                    </label>
                </div>
                <div class="field">
                    <label>Votre adresse email :
                        <input type="email">
                    </label>
                </div>
                <div class="field">
                    <label>Votre message :
                        <textarea></textarea>
                    </label>
                </div>

                <div class="field">
                    <button type="submit">Envoyer votre message</button>
                </div>
            </form>
        </div>
    </body>
<?php require 'footer.php'; ?>