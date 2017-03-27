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
                <li class="nav-bar__item nav-bar__item--icon nav-bar__item--sm-show"><a href="http://scheppersinstituutbe.sharepoint.com/sites/Leerlingen" class="nav-bar__item-link"><i class="mdi mdi-lock"></i></a></li>
                <li class="nav-bar__item nav-bar__item--icon nav-bar__item--lg-hide"><a href="#" class="nav-bar__item-link" id="nav-panel-toggle"><i class="mdi mdi-menu"></i></a></li>
            </ul>
        </nav>
        <nav class="nav-bar nav-bar--secondary" id="id-nav-bar--blog">
            <ul>
                <li class="nav-bar__item"><a href="archive.php?cat=aankondigingen" class="nav-bar__item-link nav-bar__item-link--secondary">Aankondigingen</a></li>
                <li class="nav-bar__item"><a href="archive.php?cat=eerste-graad" class="nav-bar__item-link nav-bar__item-link--secondary">1ste graad</a></li>
                <li class="nav-bar__item"><a href="archive.php?cat=tweede-graad" class="nav-bar__item-link nav-bar__item-link--secondary">2de graad</a></li>
                <li class="nav-bar__item"><a href="archive.php?cat=derde-graad" class="nav-bar__item-link nav-bar__item-link--secondary">3de graad</a></li>
                <li class="nav-bar__item"><a href="archive.php?cat=se-n-se" class="nav-bar__item-link nav-bar__item-link--secondary">Se-n-Se</a></li>
                <li class="nav-bar__item"><a href="archive.php?cat=fotoalbums" class="nav-bar__item-link nav-bar__item-link--secondary">Foto’s</a></li>
            </ul>
        </nav>
    </header>
    <aside class="nav-panel" id="id-nav-panel">
        <nav class="nav-panel__menu">
            <ul>
                <li class="nav-panel__item"><a href="index.html?internal=true" class="nav-panel__item-link">Onze school</a></li>
                <li class="nav-panel__item"><a href="studierichtingen.html" class="nav-panel__item-link">Studierichtingen</a></li>
                <li class="nav-panel__item"><a href="praktisch.html" class="nav-panel__item-link">Praktisch</a></li>
                <li class="nav-panel__item nav-panel__item--active"><a href="blog" class="nav-panel__item-link">Nieuws/blog</a></li>
                <ul>
                    <li class="nav-panel__item"><a href="#" class="nav-panel__item-link">Aankondigingen</a></li>
                    <li class="nav-panel__item"><a href="#" class="nav-panel__item-link">Eerste graad</a></li>
                    <li class="nav-panel__item"><a href="#" class="nav-panel__item-link">Tweede graad</a></li>
                    <li class="nav-panel__item"><a href="#" class="nav-panel__item-link">Derde graad</a></li>
                    <li class="nav-panel__item"><a href="#" class="nav-panel__item-link">Se-n-Se</a></li>
                    <li class="nav-panel__item"><a href="#" class="nav-panel__item-link">Foto's</a></li>
                </ul>
                <li class="nav-panel__item"><a href="contact.php" class="nav-panel__item-link">Contact</a></li>
                <li class="nav-panel__item"><a href="https://www.facebook.com/scheppersinstituut/" target="_blank" class="nav-panel__item-link">Facebook</a></li>
            </ul>
        </nav>
    </aside>
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
                            'category' => 'belangrijk',
                            'sort' => 'pinned-order',
                            'sort-order' => 'ASC',
                        ));
                    ?>
                </div>

                <div class="flex-container">
                    <h3>Alle berichten</h3>
                    <?php
                        perch_layout('blog-listing', array(
                            'category' => '!belangrijk',
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
