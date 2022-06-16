<!DOCTYPE html>
<html lang="en">

<?php 

include "../manager/cartManager.php";

session_start();



$cartManager = new favorisManager ();
$cartManager->initCode();




// $data = $cartManager->getAllHotels();
// if(isset($_COOKIE['cartCookie'])){
// $favoris = $cartManager->getIdFavoris($_COOKIE['cartCookie']);


// $favorisList = $cart->getFavorisLineList()[0];

//     foreach($favorisLineList as $favorisLine){
//         $quantityTotal += $cartLine->getProductCartQuantity();
//     }
// }
?>

<head>
    <meta charset="utf-8">
    <title>TeamHost - Join now and play mighty games!</title>
    <meta content="Templines" name="author">
    <meta content="TeamHost" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/libs.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">


</head>

<body class="page-home">

    <input id="toggle" type="checkbox">
    <script type="text/javascript">
        document.getElementById("toggle").addEventListener("click", function() {
            document.getElementsByTagName('body')[0].classList.toggle("dark-theme");
        });

    </script>


    <!-- Loader-->
    <div id="page-preloader">
        <div class="preloader-1">
            <div class="loader-text">Loading</div>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
            <span class="line line-4"></span>
            <span class="line line-5"></span>
            <span class="line line-6"></span>
            <span class="line line-7"></span>
            <span class="line line-8"></span>
            <span class="line line-9"></span>
        </div>

    </div>
    <!-- Loader end-->

    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__inner">
                <div class="page-header__sidebar">
                    <div class="page-header__menu-btn"><button class="menu-btn ico_menu is-active"></button></div>
                    <div class="page-header__logo"><img src="assets/img/logo.png" alt="logo"><span class="page-header__logo_text">TEAMHOST</span></div>
                </div>
                <div class="page-header__content">
                    <div class="page-header__search">
                        <div class="search">
                            <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                            <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
                        </div>
                    </div>
                    <div class="page-header__action">
                        <a class="action-btn" href="06_chats.html"><i class="ico_message"></i><span class="animation-ripple-delay1"></span></a>
                        <a class="action-btn" href="07_friends.html"><i class="ico_notification"></i><span class="animation-ripple-delay2"></span></a>
                        <a class="profile" href="08_wallet.html"><img src="assets/img/profile.png" alt="profile"></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-content">
            <aside class="sidebar is-show" id="sidebar">
                <div class="sidebar-box">
                    <ul class="uk-nav">
                        <li class="uk-active"><a href="03_home.html"><i class="ico_home"></i><span>Home</span></a></li>
                        <li class="uk-nav-header">Account</li>
                        <li><a href="04_profile.html"><i class="ico_profile"></i><span>Profile</span></a></li>
                        <li><a href="05_favourites.html"><i class="ico_favourites"></i><span>Favourites</span><span class="count">15</span></a></li>
                        <li><a href="06_chats.html"><i class="ico_chats"></i><span>Chats</span></a></li>
                        <li><a href="07_friends.html"><i class="ico_friends"></i><span>Friends</span></a></li>
                        <li><a href="08_wallet.html"><i class="ico_wallet"></i><span>Wallet</span></a></li>
                        <li class="uk-nav-header">Main</li>
                        <li><a href="09_games-store.html"><i class="ico_store"></i><span>Store</span></a></li>
                        <li><a href="11_market.html"><i class="ico_market"></i><span>Market</span></a></li>
                        <li><a href="12_streams.html"><i class="ico_streams"></i><span>Streams</span></a></li>
                        <li><a href="13_community.html"><i class="ico_community"></i><span>Community</span></a></li>
                        <li class="uk-nav-header">Support</li>
                        <li><a href="#modal-report" data-uk-toggle><i class="ico_report"></i><span>Report</span></a></li>
                        <li><a href="#modal-help" data-uk-toggle><i class="ico_help"></i><span>Help</span></a></li>
                    </ul>
                </div>
            </aside>
            <main class="page-main">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-2-3@l uk-width-3-3@m uk-width-3-3@s">
                        <h3 class="uk-text-lead">Recommended & Featured</h3>
                        <div class="js-recommend">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="recommend-slide">
                                            <div class="tour-slide__box">
                                                <a href=""><img src="assets/img/t1.jpg" alt="banner"></a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="recommend-slide">
                                            <div class="tour-slide__box">
                                                <a href=""><img src="assets/img/t2.jpg" alt="banner"></a>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="recommend-slide">
                                            <div class="tour-slide__box">
                                                <a href=""><img src="assets/img/t1.jpg" alt="banner"></a>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="recommend-slide">
                                            <div class="tour-slide__box">
                                                <a href=""><img src="assets/img/t2.jpg" alt="banner"></a>


                                            </div>
                                        </div>
                                    </div>







                                </div>
                                <div class="swipper-nav">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@l uk-width-3-3@m uk-width-3-3@s">
                        <h3 class="uk-text-lead">Trending Now</h3>
                        <div class="js-trending">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="game-card --horizontal">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/trending2.jpg" <?php echo $value->getPhoto()?> alt="Alien Games" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title"href="product-details.php?id=<?php echo $value->getId()?>> Alien Games</a>
                                                    <div class="game-card__genre">Warring factions have brought the Origin System to the brink of destruction.</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.5</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>Free</span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="game-card --horizontal">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/trending3.jpg" alt="Warframe" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Alien Games</a>
                                                    <div class="game-card__genre">Warring factions have brought the Origin System to the brink of destruction.</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>3.9</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>Free</span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="game-card --horizontal">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/trending.jpg" alt="Warframe" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Alien Games</a>
                                                    <div class="game-card__genre">Warring factions have brought the Origin System to the brink of destruction.</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.2</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>$50</span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swipper-nav">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <h3 class="uk-text-lead">Most Popular</h3>
                        <div class="js-popular">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/game-1.jpg" alt="Solitary Crusade" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Solitary Crusade</a>
                                                    <div class="game-card__genre">Shooter / Platformer</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.8</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>$4.99 </span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/game-2.jpg" alt="Immortal Tombs" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Immortal Tombs</a>
                                                    <div class="game-card__genre">Action / Adventure</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.6</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>$9.99 </span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/game-3.jpg" alt="Crush of Resitution" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Crush of Resitution</a>
                                                    <div class="game-card__genre">Survival / Strategy</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>$13.99 </span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/game-7.jpg" alt="Kill of Democracy" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Kill of Democracy</a>
                                                    <div class="game-card__genre">Action / Adventure</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>$49.99 </span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/game-4.jpg" alt="Kill of Democracy" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Kill of Democracy</a>
                                                    <div class="game-card__genre">Action / Adventure</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>$49.99 </span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/game-5.jpg" alt="Kill of Democracy" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Kill of Democracy</a>
                                                    <div class="game-card__genre">Action / Adventure</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>$49.99 </span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="game-card">
                                            <div class="game-card__box">
                                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/game-6.jpg" alt="Kill of Democracy" /></a></div>
                                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html">Kill of Democracy</a>
                                                    <div class="game-card__genre">Action / Adventure</div>
                                                    <div class="game-card__rating-and-price">
                                                        <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                                        <div class="game-card__price"><span>$49.99 </span></div>
                                                    </div>
                                                    <div class="game-card__bottom">
                                                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                                        <div class="game-card__users">
                                                            <ul class="users-list">
                                                                <li><img src="assets/img/user-1.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-2.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-3.png" alt="user" /></li>
                                                                <li><img src="assets/img/user-4.png" alt="user" /></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="page-modals">
        <div class="uk-flex-top" id="modal-report" data-uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close></button>
                <h2 class="uk-modal-title">Report</h2>
                <form class="uk-form-stacked" action="#">
                    <div class="uk-margin">
                        <div class="uk-form-label">Subject</div>
                        <div class="uk-form-controls"><select class="js-select">
                                <option value="">Choose Subject</option>
                                <option value="Subject 1">Subject 1</option>
                                <option value="Subject 2">Subject 2</option>
                                <option value="Subject 3">Subject 3</option>
                            </select></div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-form-label">Details</div>
                        <div class="uk-form-controls"><textarea class="uk-textarea" name="details" placeholder="Try to include all details..."></textarea></div>
                        <div class="uk-form-controls uk-margin-small-top">
                            <div data-uk-form-custom><input type="file"><button class="uk-button uk-button-default" type="button" tabindex="-1"><i class="ico_attach-circle"></i><span>Attach File</span></button></div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-grid uk-flex-right" data-uk-grid>
                            <div><button class="uk-button uk-button-small uk-button-link">Cancel</button></div>
                            <div><button class="uk-button uk-button-small uk-button-danger">Submit</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="uk-flex-top" id="modal-help" data-uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close></button>
                <h2 class="uk-modal-title">Help</h2>
                <div class="search">
                    <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                    <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
                </div>
                <div class="uk-margin-small-left uk-margin-small-bottom uk-margin-medium-top">
                    <h4>Popular Q&A</h4>
                    <ul>
                        <li><img src="assets/img/svgico/clipboard-text.svg" alt="icon"><span>How to Upload Your Developed Game</span></li>
                        <li><img src="assets/img/svgico/clipboard-text.svg" alt="icon"><span>How to Go Live Stream</span></li>
                        <li><img src="assets/img/svgico/clipboard-text.svg" alt="icon"><span>Get in touch with the Creator Support Team</span></li>
                    </ul>
                    <ul>
                        <li><a href="#!">browse all articles</a></li>
                        <li><a href="#!">Send Feedback</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/libs.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
