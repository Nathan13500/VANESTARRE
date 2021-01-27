<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>VANESTARRE - Connexion ou Inscription</title>
    <link type="text/css" rel="stylesheet" href="Accueil.css?t=<?= time(); ?>" media="all">

</head>
<body>

    <div class="form">
        <!--Titre -->

        <h1>VANESTARRE</h1>

        <!--Formulaire Connexion-->
        <form id="form" action="" method="post">
            <input type="text" placeholder="Identifiant" name="username" required> <br>
            <input type="password" placeholder="Mot de passe" name="password" required>

            <input type="submit" value="Connexion">

            <a id="forgot" href="">Mot de passe oublié ?</a>

            <button id="btnPopup" class="btnPopup"  onclick="openModal()" >Créer un compte</button>

            <button id="btnmembre" class="btnmembre" >Connexion en tant qu'invité</button>
          </form>


        <!--Formulaire pop-up d'inscription -->

        <div id="overlay" class="overlay">
            <div class="popup">
                <header>
                    <span id="btnClose" class="btnClose"> &times; </span>
                    <p>INSCRIPTION</p>
                </header>
                <form id="form_popup" action="" method="post">
                    <input id="mail" type="text" placeholder="Adresse Mail" name="mail" required> <br>
                    <input id="id" type="text" placeholder="Identifiant" name="uname" required> <br>
                    <input type="password" placeholder="Mot de Passe" name="psw" required>
                    <input type="password" placeholder="Confirmer le mot de passe" name=confirm_psw" required> <br>
                    <input type="submit" value="S'inscrire">
                </form>
            </div>
        </div>

    </div>



        <script type="text/javascript" src="../lib/script.js"> var btnPopup = document.getElementById('btnPopup');
            var overlay = document.getElementById('overlay');
            btnPopup.addEventListener('click',openMoadl);
            function openMoadl() {
                overlay.style.display='block';
            }



            var btnClose = document.getElementById('btnClose');
            btnClose.addEventListener('click',closeModal);
            function closeModal() {
                overlay.style.display='none';
            }</script>

</body>
</html>
