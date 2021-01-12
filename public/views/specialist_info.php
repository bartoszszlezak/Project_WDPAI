<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/CSS/style_spec_info.css">
    <script src="https://kit.fontawesome.com/f39f9c152c.js" crossorigin="anonymous"></script>
    <title>MEDOSE</title>
</head>
<body>
    <div class="base_container">
        <header>
            <div id="menu_bar">
                <i class="fas fa-bars"></i>
            </div>
            <div class="option">
                MY FEEDBACKS
            </div>
            <div class="option">
                EXPLORE
            </div>
            <div class="option">
                HISTORY OF VISITS
            </div>
            <div class="option">
                MY VISITS
            </div>
            <div id="search">
                <form id="search_form">
                    <input id="search_specialist" placeholder="Search for a specialist">
                </form>
            </div>
            <div class="option" id="search_icon">
                <i class="fas fa-search"></i>
            </div>
            <div class="option" id="bell_icon">
                <i class="far fa-bell"></i>
            </div>
            <div class="option" id="use_icon">
                <a href="/logout" id="logout">Log out</a>
            </div>
        </header>

        <section>


            <div id="first">
                <div id="photo1"><img src="public/images/zdjęcie1.jpg"></div>
                <div class="informations">
                    <p class="name"><?= $vUser->getName(); ?> <?= $vUser->getSurname(); ?></p>
                    <p class="specialisation"><?= $vUser->getSpecialization(); ?></p>
                    <p class="phone">T:    <?= $vUser->getPhone(); ?></p>
                    <p class="email">E:  <?= $vUser->getEmail(); ?></p>
                </div>
            </div>

            <div id="about_me">
                <div id="ab_me">
                    <h1>About Me</h1>
                    <p id="inf"><?= $vUser->getMoreInfo(); ?></p>

                </div>
                <div id="add_feedback">
                    <form id="feedback" method="post">
                        <input type="text" name="feedback" placeholder="Add your feedback">
                        <input id="button_order_visit" type="submit" value="Send">
                    </form>
                </div>

            </div>

            <div id="recommend">
                <button id="button_recommend">Recommend</button>
                <button id="button_dont_recommend">Don't recommend</button>
                <button id="button_add_feedback">Order Visit</button>
            </div>

            <div id="comments">
                <div id="first_comment">
                    <div id="first_photo"></div>
                    <div id="who_when1">
                        <p id="id1">
                            <?php if($vFeed[0] != null){
                                echo $vFeed[0]->getName()." ".$vFeed[0]->getSurname();
                            }?>
                        </p>
                        <p id="when1">
                            <?php if($vFeed[0] != null){
                                echo $vFeed[0]->getTime();
                            }?>
                        </p>
                    </div>
                    <div id="comment1">
                        <p>
                            <?php if($vFeed[0] != null){
                                echo $vFeed[0]->getComment();
                            }?>
                        </p>
                    </div>
                </div>
                <div id="second_comment">
                    <div id="second_photo"></div>
                    <div id="who_when2">
                        <p id="id2">
                            <?php if($vFeed[1] != null){
                                echo $vFeed[1]->getName()." ".$vFeed[1]->getSurname();
                            }?></p>
                        <p id="when2">
                            <?php if($vFeed[1] != null){
                                echo $vFeed[1]->getTime();
                            }?>
                        </p>
                    </div>
                    <div id="comment2">
                        <p>
                            <?php if($vFeed[1] != null){
                                echo $vFeed[1]->getComment();
                            }?>
                        </p>
                    </div>
                </div>
                <div id="third_comment">
                    <div id="third_photo"></div>
                    <div id="who_when3">
                        <p id="id3">
                            <?php if($vFeed[2] != null){
                                echo $vFeed[2]->getName()." ".$vFeed[2]->getSurname();
                            }?>
                        </p>
                        <p id="when3">
                            <?php if($vFeed[2] != null){
                                echo $vFeed[2]->getTime();
                            }?>
                            /p>
                    </div>
                    <div id="comment3">
                        <p><?php if($vFeed[2] != null){
                                echo $vFeed[2]->getComment();
                            }?></p>
                    </div>
                </div>
            </div>


        </section>

        <footer id="footer_list">
            <div id="logo">
                <img id="logo_footer" src="public/images/logo.svg">
            </div>

            <div class="specialist_footer">
                <p>Ortophaedist</p>
                <p>Cardiologist</p>
                <p>Oncologist</p>
                <p>Dentist</p>
            </div>
            <div class="specialist_footer">
                <p>Neurologist</p>
                <p>Urologist</p>
                <p>Plastic surgeon</p>
                <p>Psychiatrist</p>
            </div>
            <div class="specialist_footer">
                <p>Ophtalmologist</p>
                <p>Pulmonologist</p>
                <p>Gynecologist</p>
                <p>Rheumatologist</p>
            </div>
            <div class="specialist_footer">
                <p>Sexologist</p>
                <p>Endocrinologist</p>
                <p>Dermatologist</p>
                <p>Radiologist</p>
            </div>
        </footer>

    </div>
</body>
</html>