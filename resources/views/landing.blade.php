
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <title>Turkberry</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/>
    </head>
    <body class="antialiased">
        <header>
            <a href="/"><h1 class="logo"><img src="{{asset('.images/logo.png')}}"/></h1></a>
            <nav>
                <a href="/" class="active"><i class="fas fa-home"></i></a>
                <a href="#"><i class="fas fa-bars"></i></a>
                <a href="#"><i class="fas fa-chevron-down"></i></a>
                <a class="tooltip" href="tel:+112312341234">
                    <i class="fas fa-phone"></i>
                    <span class="tooltip-content">
                        <div class="tooltip-content-inner">
                            +1 (123)-123-1234
                            <span class="arrow-up"></span>
                        </div>
                    </span>
                </a>
            </nav>
        </header>

        <main>
            <section id="intro" class="container">
                <div class="inner">
                    <h3 class="title">Welcome to</h3>
                    <img src="{{asset('images/logo-alt.png')}}"/>
                </div>
            </section>
        </main>

        <footer>
            <div class="footer-inner">
                <div class="column">
                    <img class="logo" src="{{asset('images/logo-themed.png')}}"/>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia delectus deleniti quibusdam, dicta veritatis soluta porro ab dolorum vero sequi reiciendis vitae voluptatum dolore mollitia sed pariatur natus optio facilis?
                    </p>
                </div>
                <div class="column">
                    <h3 class="title">Quick Links</h3>
                    <nav>
                        <a href="#">Menu</a>
                        <a href="#">About</a>
                        <a href="#">Contact</a>
                    </nav>
                </div>
                <div class="column">
                    <h3 class="title">Social</h3>
                    <nav class="social-tray">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </nav>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="page-margin base-padding">
                    <span>Turkberry &copy; 2023</span>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
