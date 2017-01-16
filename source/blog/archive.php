<!DOCTYPE html>
<html lang="nl-BE">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="../bower_components/Morphext/dist/morphext.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Scheppersinstituut Deurne en Antwerpen</title>
</head>

<body>
    <header class="site-header" id="id-site-header">
        <div class="site-header__logo" id="id-site-header__logo">
            <img src="images/schepperslogo-small.png" alt="Logo van het Scheppersinstituut Deurne en Antwerpen">
        </div>
        <nav class="nav-bar nav-bar--primary">
            <ul>
                <li class="nav-bar__item"><a href="index.html?internal=true" class="nav-bar__item-link nav-bar__item-link--primary">Onze school</a></li>
                <li class="nav-bar__item"><a href="studierichtingen.html" class="nav-bar__item-link nav-bar__item-link--primary" data-nav-bar--secondary="id-nav-bar--studierichtingen">Studierichtingen</a></li>
                <li class="nav-bar__item"><a href="praktisch.html" class="nav-bar__item-link nav-bar__item-link--primary">Praktisch</a></li>
                <li class="nav-bar__item"><a href="blog.html" class="nav-bar__item-link nav-bar__item-link--primary nav-bar__item-link--active">Nieuws/Blog</a></li>
                <li class="nav-bar__item"><a href="http://www.facebook.com/scheppersinstituut/" class="nav-bar__item-link nav-bar__item-link--external">Facebook</a></li>
                <li class="nav-bar__item"><a href="contact.html" class="nav-bar__item-link nav-bar__item-link--primary">Contact</a></li>
                <li class="nav-bar__item nav-bar__item--icon"><a href="http://scheppersinstituutbe.sharepoint.com/sites/Leerlingen" class="nav-bar__item-link nav-bar__item-link--primary"><i class="material-icons">lock</i></a></li>
            </ul>
        </nav>
        <nav class="nav-bar nav-bar--secondary" id="id-nav-bar--studierichtingen">
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

        <div class="container" id="id-eerste-graad">
            <section class="page-section">
                <div class="page-section__content__header">
                    <h2 class="page-section__title">Blog/Nieuws</h2>
                </div>
                <div class="flex-container">

                    <article class="card col col--1-1">
                        <h3 class="card__title">Eerste artikel</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus obcaecati ullam soluta, nulla quas magni dignissimos aut veniam modi possimus sunt officiis, ipsa quisquam laboriosam, facere corporis doloribus nesciunt incidunt.</p>
                    </article>

                    <article class="card col col--1-2">
                        <h3 class="card__title">Tweede artikel</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>

                    <article class="card col col--1-2">
                        <h3 class="card__title">Derde artikel</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>

                    <article class="card card--action-card col col--1-4">
                        <h3 class="card__title">Samenvatting 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ...</p>
                        <button type="button" class="card__action modal-opener" data-target="id-samenvatting-1">Verder lezen</button>
                        <div class="modal" id="id-samenvatting-1">
                            <h3 class="card__title">Samenvatting 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </article>

                    <article class="card card--action-card col col--1-4">
                        <h3 class="card__title">Samenvatting 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ...</p>
                        <button type="button" class="card__action modal-opener" data-target="id-samenvatting-2">Verder lezen</button>
                        <div class="modal" id="id-samenvatting-2">
                            <h3 class="card__title">Samenvatting 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </article>

                    <article class="card card--action-card col col--1-4">
                        <h3 class="card__title">Samenvatting 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ...</p>
                        <button type="button" class="card__action modal-opener" data-target="id-samenvatting-3">Verder lezen</button>
                        <div class="modal" id="id-samenvatting-3">
                            <h3 class="card__title">Samenvatting 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </article>

                    <article class="card card--action-card col col--1-4">
                        <h3 class="card__title">Samenvatting 4</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ...</p>
                        <button type="button" class="card__action modal-opener" data-target="id-samenvatting-4">Verder lezen</button>
                        <div class="modal" id="id-samenvatting-4">
                            <h3 class="card__title">Samenvatting 4</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </article>

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

    <script src="../bower_components/jquery/dist/jquery.min.js "></script>
    <script src="scripts/larsmodals.js "></script>
</body>

</html>
