<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="nl-BE">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lars De Richter <lars.derichter@gmail.com>">
    <meta name="sourcecode" content="https://github.com/7-WN/scheppers.be">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600" rel="stylesheet">
    <link href="/lib/mdi/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles/main.css">
    <title>Scheppersinstituut Deurne en Antwerpen</title>
</head>

<body>
    <header class="site-header" id="id-site-header">
        <div class="site-header__logo hidden" id="id-site-header__logo">
            <a href="http://www.scheppers.be"><img class="site-header__logo__image" src="/images/schepperslogo-small.png" alt="Logo van het Scheppersinstituut Deurne en Antwerpen">
                <span class="site-header__logo__text">Scheppersinstituut</span></a>
        </div>
        <nav class="nav-bar nav-bar--primary">
            <ul>
                <li class="nav-bar__item"><a href="index.html?internal=true" class="nav-bar__item-link" id="id-nav-bar__item--school">Onze school</a></li>
                <li class="nav-bar__item"><a href="studierichtingen.html" class="nav-bar__item-link">Studierichtingen</a></li>
                <li class="nav-bar__item"><a href="praktisch.html" class="nav-bar__item-link">Praktisch</a></li>
                <li class="nav-bar__item"><a href="blog" class="nav-bar__item-link nav-bar__item-link--active">Nieuws/Blog</a></li>
                <li class="nav-bar__item"><a href="contact.html" class="nav-bar__item-link">Contact</a></li>
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

        <!-- Artikel-->
        <div class="container in-view">
            <section class="page-section">
                <div class="page-section__content">
                    <div class="flex-container flex-container--text">


		    	<?php perch_blog_post(perch_get('s')); ?>

            </div>
            </div>
        </section>
    </div>

    </main>

    <footer class="page-footer">
    <address class="page-footer__content">
        <i class="mdi mdi-email"></i> <a href="mailto:info@scheppers.be">info@scheppers.be</a><br>
        <i class="mdi mdi-facebook-box"></i> <a href="https://fb.com/scheppersinstituut" target="_blank">fb.com/scheppersinstituut</a>
    </address>
    <address class="page-footer__content">
        <strong>Campus Sancta Maria Deurne</strong><br>
        Pieter de Ridderstraat 5<br>
        2100 Deurne<br>
        <i class="mdi mdi-phone"></i> 03 360 31 45
    </address>
    <address class="page-footer__content">
        <strong>Campus Sint-Eligius Antwerpen</strong><br>
        Van Helmonstraat 29<br>
        2060 Antwerpen<br>
        <i class="mdi mdi-phone"></i> 03 217 42 42
    </address>
    <address class="page-footer__content">
        <strong>Campus Sint-Eligius Deurne</strong><br>
        Lakborslei 263<br>
        2100 Deurne<br>
        <i class="mdi mdi-phone"></i> 03 326 33 59
    </address>
    </footer>

    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/scripts/index.js"></script>
</body>

</html>
