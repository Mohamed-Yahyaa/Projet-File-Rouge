<?php
    include "FavorisManager.php";
    // Trouver tous les employés depuis la base de données 
    $favorisManager = new FavorisManager();
    $data = $favorisManager->afficher_Favoris();

foreach ($data as  $value) {
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

<body class="page-favourites">

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
           
                        <li class="uk-active"><a href="listFavorise.php"><i class="ico_favourites"></i><span>Favourites</span></a></li>
                      
                    </ul>
                </div>
            </aside>
            <main class="page-main">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-2-3@l">
                        <div class="widjet --filters">
                            <div class="widjet__head">
                                <h3 class="uk-text-lead">My Favourites</h3>
                            </div>
                            <div class="widjet__body">
                                <div class="uk-grid uk-child-width-1-4@xl uk-child-width-1-2@s uk-flex-middle uk-grid-small" data-uk-grid>
                                    <div class="uk-width-1-1">
                                        <!-- <div class="search">
                                            <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                                            <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
                                        </div> -->
                                    </div>
                                    <!-- <div><select class="js-select">
                                            <option value="">Sort By: Price</option>
                                            <option value="Price 1">Price 1</option>
                                            <option value="Price 2">Price 2</option>
                                            <option value="Price 3">Price 3</option>
                                        </select></div>
                                    <div><select class="js-select">
                                            <option value="">Category: All</option>
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 3</option>
                                        </select></div>
                                    <div><select class="js-select">
                                            <option value="">Platform: All</option>
                                            <option value="Platform 1">Platform 1</option>
                                            <option value="Platform 2">Platform 2</option>
                                            <option value="Platform 3">Platform 3</option>
                                        </select></div> -->
                                    <!-- <div class="uk-text-right"><a href="#!">15 items</a></div> -->
                                </div>
                            </div>
                        </div>
                        <?php
                    foreach($data as $value){

            ?>

                        <div class="game-card --horizontal favourites-game">
                            <div class="game-card__box">
                                <div class="game-card__media"><a href="10_game-profile.html"><img src="assets/img/<?= $value->getPhoto() ?>" alt="Werewolf Complex" /></a></div>
                                <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> <?= $value->getNom_Hotel() ?></a>
                                    <div class="game-card__genre"><?= $value->getDescription() ?></div>
                                    <div class="game-card__rating-and-price">
                                        <div class="game-card__rating"><span>4.5</span><i class="ico_star"></i></div>
                                        <br>

                                        <div class=""><p></p></div>
                                    </div>
                                    <div class="game-card__bottom">
                                       
                                    </div>
                                    <div class="game-card__genre"> <?= $value->getAdress() ?></div>
                                    
                                </div>
                               
                                <a href="suprimmer.php?id=<?php echo $value->getId_favoris() ?>"> <button>suprimmer</button></a>
                            </div>
                        </div>
                      
                        <?php }?>
                
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
