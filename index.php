<!-- Copyright Baptiste Nautré
    Github : https://github.com/Baptiste-Ntr -->

<!DOCTYPE html>
<html lang="FR">
<head>
    <!-- Google Analytics -->
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1Q00H81VTF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1Q00H81VTF');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portfolio, baptiste, nautre, baptiste-nautre, baptiste nautre, front-end, dev front, front, front-end, dev front-end, nautre baptiste, freelance, portfolio baptiste nautre">
    <meta name="description" content="Bienvenue sur mon portfolio, n'hesitez pas a me contacter pour plus d'information">
    <meta name="author" content="Baptiste Nautré">
    <title>PortFolio de Baptiste Nautré</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Link Index CSS -->
    <link rel="stylesheet" href="./CSS/index.css">
    <!-- Link JS Script (load at the start of the page) -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!-- Link JS Script (load at the end of the page) -->
    <script defer src="./JS/checkViewPort.js"></script>
    <script defer src="./JS/setScroll.js"></script>
    <script defer src="./JS/animText.js"></script>
    <script defer src="./JS/displayCV.js"></script>
    <script defer src="./JS/print.js"></script>
    <script defer src="./JS/setProject.js"></script>
    <script defer src="./JS/checkEmail.js"></script>

    <!-- PWA Builder -->

    <script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        if (typeof navigator.serviceWorker !== 'undefined') {
            navigator.serviceWorker.register('./JS/pwabuilder-sw.js')
            console.log('oui')
        }
    </script>
</head>
<body>

    <!-- Site -->

    <header>
        <nav>
            <ul>
                <li id="nav_projets">Projets</li>
                <li id="nav_cv">CV</li>
                <li id="nav_contact">Contact</li>
            </ul>
        </nav>
        <div id="boule1"></div>
        <section>
            <h1>Baptiste Nautré</h1>
            <div id="barre-title"></div>
            <h4 id="animtxt"></h4>
        </section>
        <div id="boule2"></div>
        <div id="scroll-container">
            <div id="mouse"></div>
            <h5>SCROLL !</h5>
        </div>
    </header>

    <footer>
        <ion-icon name="arrow-up-outline" id="arrow"></ion-icon>
    </footer>

    <section id="projects-container">
        <h1>Liste Projets</h1>
        <section>
            <div id="p1">
                <aside></aside>
                <h3>Premier PortFolio</h3>
            </div>
            <div id="p2">
                <aside></aside>
                <h3>PassWord</h3>
            </div>
            <div id="p3">
                <aside></aside>
                <h3>Quizz</h3>
            </div>
        </section>
    </section>

    <div id="cv-container">
        <img src="./SRC/IMG/CV(petit).png" alt="CV" id="cvimg">
        <aside>
            <button id="dl"><span><a href="./SRC/PDF/CV.pdf" download="">Telecharger</a></span></button>
            <button id="print"><span>Imprimer</span></button>
        </aside>
        <div id="bigimg">
            <img src="./SRC/IMG/CV.png" alt="cv en gros">
        </div>
        <div id="bigimgprint">
            <img src="./SRC/IMG/CV.png" alt="cv pour imprimer">
        </div>
    </div>

    <section id="contact-form">
        <form action="" method="post">
            <h1>Contact</h1>
            <div class="input-name">
                <input type="text" name="form-name" id="form-name" required>
                    <span id="name" aria-label="form-name">
                        <label for="form-name">Votre Nom</label>
                    </span>
            </div>
            <div class="input-mail">
                <input type="text" name="form-mail" id="form-mail" required>
                    <span id="mail" aria-label="form-mail">
                        <label for="form-mail">Votre Email</label>
                    </span>
            </div>
            <div class="input-message" >
                <textarea name="form-message" id="form-message" cols="80" rows="10" required></textarea>
                    <span id="message" aria-label="form-message">
                        <label for="form-message">Votre message</label>
                    </span>
            </div>
            <div id="btnsend">Envoyer</div>
            <input type="submit" id="submit" value="">
        </form>
        <?php

            include './PHP/mail.php';

        ?>
    </section>

</body>
</html>