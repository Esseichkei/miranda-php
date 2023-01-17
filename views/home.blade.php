        @extends('layouts.app')
        @section('title', 'Home')
        @section('content')
        <div class="splash">
            <div class="splash__small-title">THE ULTIMATE LUXURY EXPERIENCE</div>
            <div class="splash__big-title">The Perfect<br/>Base For You</div>
            <button class="button button--active button--separated">TAKE A TOUR

            </button><button class="button">LEARN MORE</button>
        </div>
        <div class="avail-checker">
            <div class="avail-checker__form">
                <label class="ac-label">Arrival Date</label>
                <input class="ac-input" type="date"/>
            </div>
            <div class="avail-checker__form">
                <label class="ac-label">Departure Date</label>
                <input class="ac-input" type="date"/>
            </div>
            <button class="button button--active button--avail-checker">CHECK AVAILABILITY</button>
        </div>
        <div class="underground">
            <div class="underground__bg"></div>
            <div class="underground__blurb">
                <div class="ub-small-title">
                    ABOUT US
                </div>
                <div class="ub-large-title">
                    Discover Our Underground.
                </div>
                <div class="ub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                <button class="button button--active button--underground">BOOK NOW</button>
            </div>
            <div class="underground__items">
                <div class="ui-item ui-item-1">
                    <div class="ui-img ui-img-1">
                    </div><div class="ui-body ui-body-1">
                        <img class="ui-body__img" src="./img/team.svg"/>
                        <div class="ui-body__title">Strong Team</div>
                        <div class="ui-body__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
                    </div>
                </div>
                <div class="ui-item ui-item-2">
                    <div class="ui-img ui-img-2">
                    </div><div class="ui-body ui-body-2">
                        <img class="ui-body__img" src="./img/calendar-arrow.svg"/>
                        <div class="ui-body__title">Luxury Room</div>
                        <div class="ui-body__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms">
            <div class="rooms__small-title">ROOMS
            </div><div class="rooms__big-title">Hand Picked Rooms
            </div><div class="rooms__slider ">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <div class="slide-content__iconrow">
                                    <img class="iconrow-icon" src="./img/bed.svg"/>
                                    <img class="iconrow-icon" src="./img/wifi.svg"/>
                                    <img class="iconrow-icon" src="./img/car.svg"/>
                                    <img class="iconrow-icon" src="./img/ice.svg"/>
                                    <img class="iconrow-icon" src="./img/gym.svg"/>
                                    <img class="iconrow-icon" src="./img/no-smoking.svg"/>
                                    <img class="iconrow-icon" src="./img/cocktail.svg"/>
                                </div>
                                <div class="slide-content__img" style="background-image: url('./img/room-1.jpg')"></div>
                                <div class="slide-content__body">
                                    <div class="sb-desc">
                                        <div class="sb-title">Minimal Duplex Room</div>
                                        <div class="sb-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    </div>
                                    <div class="sb-price">
                                        <span class="sb-price__big">$345</span>
                                        <span class="sb-price__small">/ Night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <div class="slide-content__iconrow">
                                    <img class="iconrow-icon" src="./img/bed.svg"/>
                                    <img class="iconrow-icon" src="./img/wifi.svg"/>
                                    <img class="iconrow-icon" src="./img/car.svg"/>
                                    <img class="iconrow-icon" src="./img/ice.svg"/>
                                    <img class="iconrow-icon" src="./img/gym.svg"/>
                                    <img class="iconrow-icon" src="./img/no-smoking.svg"/>
                                    <img class="iconrow-icon" src="./img/cocktail.svg"/>
                                </div>
                                <div class="slide-content__img" style="background-image: url('./img/room-2.jpg')"></div>
                                <div class="slide-content__body">
                                    <div class="sb-desc">
                                        <div class="sb-title">Minimal Duplex Room</div>
                                        <div class="sb-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    </div>
                                    <div class="sb-price">
                                        <span class="sb-price__big">$345</span>
                                        <span class="sb-price__small">/ Night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <div class="slide-content__iconrow">
                                    <img class="iconrow-icon" src="./img/bed.svg"/>
                                    <img class="iconrow-icon" src="./img/wifi.svg"/>
                                    <img class="iconrow-icon" src="./img/car.svg"/>
                                    <img class="iconrow-icon" src="./img/ice.svg"/>
                                    <img class="iconrow-icon" src="./img/gym.svg"/>
                                    <img class="iconrow-icon" src="./img/no-smoking.svg"/>
                                    <img class="iconrow-icon" src="./img/cocktail.svg"/>
                                </div>
                                <div class="slide-content__img" style="background-image: url('./img/room-3.jpg')"></div>
                                <div class="slide-content__body">
                                    <div class="sb-desc">
                                        <div class="sb-title">Minimal Duplex Room</div>
                                        <div class="sb-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    </div>
                                    <div class="sb-price">
                                        <span class="sb-price__big">$345</span>
                                        <span class="sb-price__small">/ Night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        <div class="video">
            <div class="video__left">
                <div class="vl-small-title">INTRO VIDEO</div>
                <div class="vl-big-title">Meet With Our Luxury Place.</div>
                <div class="vl-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</div>
                <video class="vl-video"controls>
                    <source src="./img/intro-video.mp4" type="video/mp4">
                </video>
                <button class="button button--active">BOOK NOW</button>
            </div>
            <div class="video__right">
                <video class="vr-video"controls>
                    <source src="./img/intro-video.mp4" type="video/mp4">
                </video>
            </div>
        </div>
@endsection