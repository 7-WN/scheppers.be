<?php include('../adm/runtime.php'); ?>
<!DOCTYPE html>
<html lang="nl-BE">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Scheppersinstituut Deurne en Antwerpen</title>
</head>

<body>
    <header class="site-header" id="id-site-header">
        <div class="site-header__logo" id="id-site-header__logo">
            <a href="http://www.scheppers.be"><img class="site-header__logo__image" src="../images/schepperslogo-small.png" alt="Logo van het Scheppersinstituut Deurne en Antwerpen">
                <span class="site-header__logo__text">Scheppersinstituut</span></a>
        </div>
        <nav class="nav-bar nav-bar--primary">
            <ul>
                <li class="nav-bar__item"><a href="../index.html?internal=true" class="nav-bar__item-link" id="id-nav-bar__item--school">Onze school</a></li>
                <li class="nav-bar__item"><a href="../studierichtingen.html" class="nav-bar__item-link">Studierichtingen</a></li>
                <li class="nav-bar__item"><a href="../praktisch.html" class="nav-bar__item-link">Praktisch</a></li>
                <li class="nav-bar__item"><a href="index.php" class="nav-bar__item-link nav-bar__item-link--active">Nieuws/Blog</a></li>
                <li class="nav-bar__item"><a href="../contact.php" class="nav-bar__item-link">Contact</a></li>
                <li class="nav-bar__item"><a href="https://www.facebook.com/scheppersinstituut/" class="nav-bar__item-link" target="_blank">Facebook</a></li>
                <li class="nav-bar__item nav-bar__item--icon"><a href="http://scheppersinstituutbe.sharepoint.com/sites/Leerlingen" class="nav-bar__item-link"><i class="mdi mdi-lock"></i></a></li>
            </ul>
        </nav>
        <nav class="nav-bar nav-bar--secondary" id="id-nav-bar--blog">
            <ul>
                <li class="nav-bar__item"><a href="#id-eerste-graad" class="nav-bar__item-link nav-bar__item-link--secondary">Alles</a></li>
                <li class="nav-bar__item"><a href="#id-eerste-graad" class="nav-bar__item-link nav-bar__item-link--secondary">Aankondigingen</a></li>
                <li class="nav-bar__item"><a href="#id-eerste-graad" class="nav-bar__item-link nav-bar__item-link--secondary">1ste graad</a></li>
                <li class="nav-bar__item"><a href="#id-tweede-graad" class="nav-bar__item-link nav-bar__item-link--secondary">2de graad</a></li>
                <li class="nav-bar__item"><a href="#id-derde-graad" class="nav-bar__item-link nav-bar__item-link--secondary">3de graad</a></li>
                <li class="nav-bar__item"><a href="#id-se-n-se" class="nav-bar__item-link nav-bar__item-link--secondary">Se-n-Se</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="container" id="id-blog">
            <section class="page-section">
                <div class="page-section__content__header">
                    <h2 class="page-section__title">De Scheppersblog</h2>
                </div>
                <div class="flex-container">
                    <h3>Belangrijke berichten</h3>
                    <?php
                        perch_layout('blog-listing', array(
                            'filter' => 'pinned',
                            'match' => 'eq',
                            'value' => 'yes',
                            'sort' => 'pinned-order',
                            'sort-order' => 'ASC',
                        ));
                    ?>
                </div>

                <div class="flex-container">
                    <h3>Alle berichten</h3>
                    <?php
                        perch_layout('blog-listing', array(
                            'filter' => 'pinned',
                            'match' => 'neq',
                            'value' => 'yes',
                            'sort' => 'postDateTime',
                            'sort-order' => 'DESC',
                        ));
                    ?>

                    <!-- Link to archive -->
                </div>
            </section>
        </div>

    </main>

    <footer class="page-footer ">
        <address class="page-footer__content ">
            <a href="mailto:info@scheppers.be ">info@scheppers.be</a>
        </address>
        <address class="page-footer__content ">
            Campus Sancta Maria<br>
            Pieter de Ridderstraat 5<br>
            2100 Deurne<br>
            03 360 31 45
        </address>
        <address class="page-footer__content ">
            Campus Sint-Eligius Antwerpen<br>
            Van Helmonstraat 29<br>
            2060 Antwerpen<br>
            03 217 42 42
        </address>
        <address class="page-footer__content ">
            Campus Sint-Eligius Deurne<br>
            Lakborslei 263<br>
            2100 Deurne<br>
            03 326 33 59
        </address>
    </footer>

    <script src="../lib/jquery/dist/jquery.min.js "></script>
    <script src="../scripts/larsmodals.js "></script>
</body>

</html>
