<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
        />
        <link rel="stylesheet" href="./css/styles.css">
        <script src="./script/main.js" defer type="module"></script>
    </head>
    <body>
        <header class="header">
            <div class="header__backdrop">
                <p class="header-backdrop-text">We Make You Comfortable</p>
            </div>
            <div class="header__main">
                <div class="header-left inl-block">
                    <button class="header-hamburger"></button>
                    <div class="header-title inl-block">
                        <div class="header-title__h inl-block">H</div><div class="header-title__name inl-block"><b>HOTEL</b><br/>MIRANDA</div>
                    </div>
                </div><div class="header-right inl-block">
                    <button class="header-login inl-block"></button>
                    <button class="header-search inl-block"></button>
                </div>
            </div>
            <nav class="header__nav header__nav--closed">
                <ul class="navlist">
                    <li class="navlist__item">About Us</li>
                    <li class="navlist__item">Rooms</li>
                    <li class="navlist__item">Offers</li>
                    <li class="navlist__item">Contact</li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer class="footer">
            <div class="footer__body fsections">
                <div class="fsections__description">
                    <div class="ftitle">
                        <div class="ftitle__big-h">H</div><div class="ftitle__name"><b>HOTEL</b><br/>MIRANDA</div>
                    </div>
                    <p class="desc-description">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                    <div class="desc-icons">
                        <div class="desc-icons__child icon-fb"></div>
                        <div class="desc-icons__child desc-icons__child--active icon-tw"></div>
                        <div class="desc-icons__child icon-be"></div>
                        <div class="desc-icons__child icon-li"></div>
                        <div class="desc-icons__child icon-yt"></div>
                    </div>
                </div>
                <div class="fsections__services">
                    <div class="footer-heading">Services.</div>
                    <ul class="footer-servlist">
                        <li class="footer-servlist__item">+ Restaurant & Bar
                        </li><li class="footer-servlist__item">+ Swimming Pool
                        </li><li class="footer-servlist__item">+ Wellness & Spa
                        </li><li class="footer-servlist__item">+ Restaurant
                        </li><li class="footer-servlist__item">+ Conference Room
                        </li><li class="footer-servlist__item">+ Cocktail Party House
                        </li><li class="footer-servlist__item">+ Gaming Zone
                        </li><li class="footer-servlist__item">+ Marriage Party
                        </li><li class="footer-servlist__item">+ Party Planning
                        </li><li class="footer-servlist__item">+ Tour Consultancy</li>
                    </ul>
                </div>
                <div class="fsections__contact">
                    <div class="footer-heading">Contact Us.</div>
                    <div class="fcontact fcontact-1">
                        <img class="fcontact__img" src="./img/old_phone.svg"/>
                        <div class="fcontact__details">
                            <div class="fcontact-name">Phone Number</div>
                            <div class="fcontact-number">+987 876 765 76 577</div>
                        </div>
                    </div>
                    <div class="fcontact fcontact-2">
                        <img class="fcontact__img" src="./img/envelope_plus_one.svg"/>
                        <div class="fcontact__details">
                            <div class="fcontact-name">Phone Number</div>
                            <div class="fcontact-number">+987 876 765 76 577</div>
                        </div>
                    </div>
                    <div class="fcontact fcontact-3">
                        <img class="fcontact__img" src="./img/location.svg"/>
                        <div class="fcontact__details">
                            <div class="fcontact-name">Phone Number</div>
                            <div class="fcontact-number">+987 876 765 76 577</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__end fby">
                <div class="fby__copyright">Copyright By@Example - 2020</div>
                <div class="fby__tos">Terms of use | Privacy Environmental Policy</div>
            </div>
        </footer>
    </body>
    </html>