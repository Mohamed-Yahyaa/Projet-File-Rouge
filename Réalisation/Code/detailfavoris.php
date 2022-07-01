<?php

    include "FavorisManager.php";
    include "HotelsManager.php";
    $hotelsManager = new HotelsManager();
    $FavorisManager = new FavorisManager();

    if(isset($_GET['id'])){
        
    $data = $hotelsManager->afficher_hotel_par_id($_GET["id"]);
    }

if(!empty($_POST)){
	$Favoris = new Favoris;
	
	$Favoris->setId_hotels($_GET['id']);
	$FavorisManager->Ajouter($Favoris);
	
	// Redirection vers la page index.php
	header("Location:index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TeamHost - Join now and play mighty games!</title>
    <meta content="Templines" name="author">
    <meta content="TeamHost" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/libs.min.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">


</head>

<body class="page-store">

    <input id="toggle" type="checkbox">
    <script type="text/javascript">
        document.getElementById("toggle").addEventListener("click", function() {
            document.getElementsByTagName('body')[0].classList.toggle("dark-theme");
        });

    </script>

    <!-- Loader-->
    <!-- <div id="page-preloader">
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

    </div> -->
    <!-- Loader end-->


    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__inner">
                <div class="page-header__sidebar">
                    <div class="page-header__menu-btn"><button class="menu-btn ico_menu is-active"></button></div>
                    <div class="page-header__logo"><img src="assets/img/logo.png" alt="logo"><span class="page-header__logo_text">HOTELS</span></div>
                </div>
                <div class="page-header__content">
                    <div class="page-header__search">
                        <!-- <div class="search">
                            <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                            <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
                        </div> -->
                    </div>
                    <div class="page-header__action">
                        <!-- <a class="action-btn" href="06_chats.html"><i class="ico_message"></i><span class="animation-ripple-delay1"></span></a>
                        <a class="action-btn" href="07_friends.html"><i class="ico_notification"></i><span class="animation-ripple-delay2"></span></a>
                        <a class="profile" href="08_wallet.html"><img src="assets/img/profile.png" alt="profile"></a> -->
                    </div>
                </div>
            </div>
        </header>
        <div class="page-content">
            <aside class="sidebar is-show" id="sidebar">
                <div class="sidebar-box">
                    <ul class="uk-nav">
                        <li><a href="index.php"><i class="ico_home"></i><span>Home</span></a></li>
                        <li><a href="listFavorise.php"><i class="ico_favourites"></i><span>Favourites</span></a></li>
          
                </div>
            </aside>

            <?php
            foreach($data as $value){
            ?>
            <main class="page-main">
                <ul class="uk-breadcrumb">
                <!-- <div  href ="index.php" class="game-profile-price__value"></div><button class="uk-button uk-button-danger " type="submit"><span>Back</span></button> -->
                    <li><a href="index.php" ><span data-uk-icon="chevron-left"></span><button class="uk-button  uk-button-danger ">Back</button></a></li>
                    <li><span></span></li>
                </ul>
                <h3 class="uk-text-lead"><?= $value->getNom_Hotel() ?></h3>
                <div class="uk-grid uk-grid-small" data-uk-grid>
                    <div class="uk-width-2-3@s">
                        <div class="gallery">
                            <div class="js-gallery-big gallery-big">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="assets/img/<?= $value->getPhoto() ?>" alt="image"></div>
                                       


                                    </div>
                                </div>
                            </div>
                            <div class="js-gallery-small gallery-small">
                                <div class="swiper">
                                    <!-- <div class="swiper-wrapper">
                                        <div class="swiper-slide"> <img src="assets/img/c0.jpg" alt="image"></div>
                                        <div class="swiper-slide"> <img src="assets/img/c1.jpeg" alt="image"></div>
                                        <div class="swiper-slide"> <img src="assets/img/c2.jpeg" alt="image"></div>
                                        <div class="swiper-slide"> <img src="assets/img/c3.jpeg" alt="image"></div>
                                        <div class="swiper-slide"> <img src="assets/img/c4.jpeg" alt="image"></div>

                                    </div> -->
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@s">
                        <div class="game-profile-card">
                            <div  class="game-profile-card__media" > Description : <p><?= $value->getDescription() ?></p></div>
                            <div class="game-profile-card__intro"><span></span></div>
                            <div class="game-card__rating"><span>4.5</span><i class="ico_star"></i></div>
                            <ul class="game-profile-card__list">
                                <li>
                                    <div>Adresse : <?= $value->getAdress() ?> </div>
                                    <div > <p></p></div>
                                </li>
                                <?php }?>   
                                <!-- <li>
                                    <div>Release date:</div>
                                    <div>24 Apr, 2018</div>
                                </li>
                                <li>
                                    <div>Developer:</div>
                                    <div>11 bit studios</div>
                                </li>
                                <li>
                                    <div>Platforms:</div>
                                    <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                </li> -->
                            </ul>
                           
                        </div>
                        <form action="" method="post">
                        <div class="game-profile-price">
                            <div class="game-profile-price__value"></div><button class="uk-button uk-button-danger uk-width-1-1" type="submit"><span class="ico_shopping-cart"></span><span>Add favoris</span></button>
                        
            
                        </main>
        </div>
    </div>
    <div class="page-modals">
        <div class="uk-flex-top" id="modal-report" data-uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="submit" data-uk-close></button>
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
