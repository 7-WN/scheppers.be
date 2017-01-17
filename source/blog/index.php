<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="nl-BE">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/styles/main.css">
    <title>Scheppersinstituut Deurne en Antwerpen</title>
</head>

<body>
    <header class="site-header" id="id-site-header">
        <div class="site-header__logo" id="id-site-header__logo">
            <a href="http://www.scheppers.be"><img class="site-header__logo__image" src="/images/schepperslogo-small.png" alt="Logo van het Scheppersinstituut Deurne en Antwerpen">
                <span class="site-header__logo__text">Scheppersinstituut</span></a>
        </div>
        <nav class="nav-bar nav-bar--primary">
            <ul>
                <li class="nav-bar__item"><a href="/index.html?internal=true" class="nav-bar__item-link nav-bar__item-link--primary">Onze school</a></li>
                <li class="nav-bar__item"><a href="/studierichtingen.html" class="nav-bar__item-link nav-bar__item-link--primary" data-nav-bar--secondary="id-nav-bar--studierichtingen">Studierichtingen</a></li>
                <li class="nav-bar__item"><a href="/praktisch.html" class="nav-bar__item-link nav-bar__item-link--primary">Praktisch</a></li>
                <li class="nav-bar__item"><a href="/blog" class="nav-bar__item-link nav-bar__item-link--primary nav-bar__item-link--active">Nieuws/Blog</a></li>
                <li class="nav-bar__item"><a href="http://www.facebook.com/scheppersinstituut/" class="nav-bar__item-link nav-bar__item-link--external">Facebook</a></li>
                <li class="nav-bar__item"><a href="/contact.html" class="nav-bar__item-link nav-bar__item-link--primary">Contact</a></li>
                <li class="nav-bar__item nav-bar__item--icon"><a href="http://scheppersinstituutbe.sharepoint.com/sites/Leerlingen" class="nav-bar__item-link nav-bar__item-link--primary"><i class="material-icons">lock</i></a></li>
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

        <div class="container" id="blog">
            <section class="page-section">
                <div class="page-section__content__header">
                    <h2 class="page-section__title">De Scheppersblog</h2>
                </div>
                <div class="flex-container">
                    <!-- Pinned -->
                        <!-- 1 full width -->

                        <!-- 2 half width -->

                        <!-- 1/3 width summarized -->

                    <!-- Recent -->
                        <!-- 1 full width -->

                        <!-- 2 half width -->

                        <!-- 6 * 1/3 width summarized -->

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

    <div class="debug">

        <?php perch:showall ?>
    </div>

    <script src="../bower_components/jquery/dist/jquery.min.js "></script>
    <script src="scripts/larsmodals.js "></script>
</body>

</html>
