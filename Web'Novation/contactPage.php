<!doctype html>
<html lang="fr">
<?php
    require 'php/head.inc.php';
?>
<body>
    <?php
        require 'php/header.inc.php';
    ?>
    <div id="contenue">
        <div class="formulaire">
            <h2>Contatez nous !</h2>
            <form method="post">
                <label for="name">Nom*</label><br>
                <input type="text" id="name" name="user_name"><br><br>
                <label for="email">Email*</label><br>
                <input type="text" id="email" name="user_email"><br><br>
                <label for="msg">Votre message*</label><br>
                <textarea id="msg" name="user_message" rows="8"></textarea><br>
                <button type="submit"><img src="img/envoie.png" width="40px"></button>
            </form>
        </div>
        <div class="coord">
            <h2>Nos coordonées</h2><br>
            <p>Adresse : 9 rue Québec 10000 Troyes</p>
            <p>Téléphone : 06.06.06.06.06</p>
            <p>Mail : webnovationagency@gmail.com</p>
        </div>
        <div class="localisation">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2655
            .744731909586!2d4.077349815653618!3d48.26928677923421!2m3!1f0!2f0!3f0!
            3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee990d1c7f84a3%3A0x737735ec593e713f!
            2s9%20Rue%20Quebec%2C%2010430%20Rosi%C3%A8res-pr%C3%A9s-Troyes!5e0!3m2!1sfr!
            2sfr!4v1619439561824!5m2!1sfr!2sfr"
            width="250" height="500" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe>
        </div>
    </div>
    <?php
        require 'php/footer.inc.php';
    ?>
</body>
</html>