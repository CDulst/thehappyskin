<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Montserrat:200,400,700">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
        <title>thehappyskin</title>
    </head>
    <body>
        <div class = "login fadeOut">
            <div class = "login--container">
            </div>
        </div>
        <h1 class = "hidden">TheHappySkin</h1>
        <header class = "header">
            <div class="container-fluid header--top">
                <div class = "container h-100">
                    <div class = "row justify-content-between h-100">
                        <div class = "col-3 h-100">
                            <a class = "button button--header">
                                <p class = "button--text">Maak een afspraak voor je huidanalyse</p>
                                <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                            </a>
                        </div>
                        <div class = "col-6 h-100">
                            <nav class = "navigator topnav">
                                <h2 class = "hidden">navigatorTop</h2>
                                <ul class = "menu__items">
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Magazine</a></li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Events</a></li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Contact</a></li>
                                    <li class = "menu__item loginbutton"><a href="javascript:void(0)" class = "menu__item--link">Login</a></li>
                                    <li class = "menu__item">
                                        <form><input class = "search--input" type="text" placeholder = "Search" href="javascript:void(0)" class = "menu__item--link"></form>
                                    </li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">NL</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "container-fluid headerOut" id = "header">
                <div class = "container h-100">
                    <div class="row justify-content-between header--bottom">
                        <div class = "col-3 logo--container">
                            <img class = "logo--small invert"src="/images/logo-small.svg" alt="logo">
                        </div>
                        <div class = "col-9 justify-content-end">
                            <nav class = "navigator bottomnav">
                                <h2 class = "hidden">navigatorBottom</h2>
                                <ul class = "menu__items">
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Merken</a></li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Skin health attitude</a></li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Producten</a></li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Verkooppunten</a></li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Over ons</a></li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Professional</a></li>
                                    <li class = "menu__item"><a href="javascript:void(0)" class = "menu__item--link">Contact me</a></li>
                                </ul>
                                <div class = "hamburger">
                                <span class="iconify invert" data-inline="false" data-icon="icon-park:hamburger-button" style="font-size: 48px;"></span>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class = " section titlesection centerH centerV flex" id = "title">
                <h2 class = "titlesection--title white h1-like">
                skin health attitude</h1>
                <video class = "backgroundvideo" autoplay muted loop>
                    <source src="videos/background.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
            <section class = " section section--history centerH centerV column flex">
                <h2 class = " hidden">history</h2>
                <img src="images/logo-detail.svg" alt="">
                <p class = "aligncenter section--history-title h4-like">sinds 1992 exclusieve distributeur in de Benelux en Frankrijk van Environ, Jane Iredale en Advanced nutrition programme</p>
            </section>
            <section class = " section section--products centerH centerV column flex">
                <h2 class = " hidden">products</h2>
                <div class = "container">
                <div class = "row gx-5 products">
                    <div class = "col prodflex">
                        <div class = "product">
                            <div class = "product--container">
                                <div class = "product--container-image">
                                </div>
                                <p>Maak je huid van binnenuit gezond, door ze – letterlijk – te voeden met de juiste bouwstoffen uit het Advanced Nutrition Programme (ANP). </p>
                                <a class = "button button--normal">
                                    <p class = "button--text">More Info</p>
                                    <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class = "col">
                        <div class = "product product--flexend">
                            <div class = "product--container">
                                <div class = "product--container-image">
                                </div>
                                <p>De producten van Environ bevatten vitamine A, die je huidcellen verzorgt en herstelt. De helende werking van vitamine A is wetenschappelijk bewezen.</p>
                                <a class = "button button--normal">
                                    <p class = "button--text">More Info</p>
                                    <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class = "col">
                        <div class = "product">
                            <div class = "product--container">
                                <div class = "product--container-image">
                                </div>
                                <p>Jane Iredale is dé referentie op vlak van minerale make-up. Werk je stralend gezonde huid af met de juiste accenten.</p>
                                <a class = "button button--normal">
                                    <p class = "button--text">More Info</p>
                                    <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class = " section section--profession centerH centerV column flex">
                <h2 class = " hidden">profession</h2>
                <div class = "container">
                    <div class = "row w-100 justify-content-between">
                        <div class = "col-6 academy">
                            <div class = "profession--container aligncenter">
                                <h3 class = "h2-like profession--title">the happy skin academy</h3>
                                <p class = "profession--para">In onze Skin Care Academy trainen we professionals om hun klanten nóg beter te helpen met op maat gemaakte behandelingen.  </p>
                                <a class = "button button--alt">
                                    <p class = "button--text">opleidingen</p>
                                    <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                                </a>
                            </div>
                        </div>
                        <div class = "col-6 institute">
                            <div class = "profession--container aligncenter">
                                <h3 class = "h2-like profession--title">in jouw instituut</h3>
                                <p class = "profession--para">Wij geloven dat iedereen een gezonde huid verdient. Professioneel advies en de juiste huidroutine – nourish, care, finish – zorgen ervoor dat elke huid gaat stralen.</p>
                                <a class = "button button--alt">
                                    <p class = "button--text">onze aanpak</p>
                                    <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class = " section section--care centerH centerV column flex">
                <h2 class = " hidden">care</h2>
                <div class = "container">
                    <p class = "care--para"> Drie stappen die je brengen tot de beste huid. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    <div class = "care--buttons">
                        <a class = "button button--noborder care--button">
                            <p class = "button--text h3-like">nourish</p>
                            <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                        </a>
                        <a class = "button button--noborder care--button">
                            <p class = "button--text h3-like">care</p>
                            <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                        </a>
                        <a class = "button button--noborder care--button">
                            <p class = "button--text h3-like">finish</p>
                            <span class="iconify unhover" data-inline="false" data-icon="bi:arrow-right" style="font-size: 16px;"></span>
                        </a>
                    </div>
                    <div class = "care--image-container">
                    </div>
                </div>
            </section>
            <section class = "section section--testimonials centerH centerV column flex">
            </section>
        </main>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src = "js/app.js"></script>
    </body>
</html>
