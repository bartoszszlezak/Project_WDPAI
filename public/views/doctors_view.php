<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/CSS/doctors_style.css">
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
                <div id="photo1"><img src="public/images/zdjęcie3.jpg"></div>
                <div class="informations">
                    <p class="name"><?= $vuser->getName(); ?> <?= $vuser->getSurname(); ?></p>
                    <p class="specialisation"><?= $vuser->getSpecialization(); ?></p>
                    <p class="phone">T:    <?= $vuser->getPhone(); ?></p>
                    <p class="email">E:  <?= $vuser->getEmail(); ?></p>
                </div>
            </div>


            <div class="header_container">
                <p>New orders</p>
                <div id="new_orders">
                    <div id="first_order">
                        <div id="order_photo1"></div>
                        <div class="order_bar">
                            <p>Name Surname ordered a visit | </p>
                            <p>15min ago</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div id="second_order">
                        <div id="order_photo2"></div>
                        <div class="order_bar">
                            <p>Name Surname ordered a visit | </p>
                            <p>15min ago</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div id="third_order">
                        <div id="order_photo3"></div>
                        <div class="order_bar">
                            <p>Name Surname ordered a visit | </p>
                            <p>15min ago</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div id="four_order">
                        <div id="order_photo4"></div>
                        <div class="order_bar">
                            <p>Name Surname ordered a visit | </p>
                            <p>15min ago</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>

                    <div id="five_order">
                        <div id="order_photo5"></div>
                        <div class="order_bar">
                            <p>Name Surname ordered a visit | </p>
                            <p>15min ago</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>

                    <div id="six_order">
                        <div id="order_photo6"></div>
                        <div class="order_bar">
                            <p>Name Surname ordered a visit | </p>
                            <p>15min ago</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>

                </div>
            </div>

            <div class="header_container">
                <p>Schedule</p>
                <div id="schedule">
                    <div id="first_schedule">
                        <div id="schedule_photo1"></div>
                        <div class="order_bar">
                            <p>Name Surname | 6 December | 13:45 | </p>
                            <p>Gabinet</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div id="second_schedule">
                        <div id="schedule_photo2"></div>
                        <div class="order_bar">
                            <p>Name Surname | 9 December | 12:45 | </p>
                            <p>Phone</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div id="third_schedule">
                        <div id="schedule_photo3"></div>
                        <div class="order_bar">
                            <p>Name Surname | 12 December | 18:00 | </p>
                            <p>phone</p>
                        </div>
                        <div class="message">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_container">
                <p>Last feedbacks</p>
                <div id="last_feedbacks">
                    <div id="first_comment">
                        <div id="first_photo"></div>
                        <div id="who_when1">
                            <p id="id1">
                                <?php if($vfeed[0] != null){
                                        echo $vfeed[0]->getName()." ".$vfeed[0]->getSurname();
                                }?>
                            </p>
                            <p id="when1">
                                <?php if($vfeed[0] != null){
                                    echo $vfeed[0]->getTime();
                                }?>
                            </p>
                        </div>
                        <div id="comment1">
                            <p>
                                <?php if($vfeed[0] != null){
                                    echo $vfeed[0]->getComment();
                                }?>
                            </p>
                        </div>
                    </div>
                    <div id="second_comment">
                        <div id="second_photo"></div>
                        <div id="who_when2">
                            <p id="id2"><?php if($vfeed[1] != null){
                                    echo $vfeed[1]->getName()." ".$vfeed[1]->getSurname();
                                }?>
                            </p>
                            <p id="when2"><?php if($vfeed[1] != null){
                                    echo $vfeed[1]->getTime();
                                }?>
                            </p>
                        </div>
                        <div id="comment2">
                            <p><?php if($vfeed[1] != null){
                                    echo $vfeed[1]->getComment();
                                }?>
                            </p>
                        </div>
                    </div>
                    <div id="third_comment">
                        <div id="third_photo"></div>
                        <div id="who_when3">
                            <p id="id3"><?php if($vfeed[2] != null){
                                    echo $vfeed[2]->getName()." ".$vfeed[2]->getSurname();
                                }?>
                            </p>
                            <p id="when3"><?php if($vfeed[2] != null){
                                    echo $vfeed[2]->getTime();
                                }?>
                            </p>
                        </div>
                        <div id="comment3">
                            <p><?php if($vfeed[2] != null){
                                    echo $vfeed[2]->getComment();
                                }?>
                            </p>
                        </div>
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