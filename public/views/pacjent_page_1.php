<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/CSS/style_pacjent_1.css">
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
                    <i class="far fa-user"></i>
                </div>
            </header>

            <section class="specialist">

                <div class="next_prev">
                    <div id="next"><i class="fas fa-chevron-left"></i></div>
                    <div id="previous"><i class="fas fa-chevron-right"></i></div>
                </div>

                <div id="first">
                    <div id="photo1"><img src="public/images/zdjęcie3.jpg"></div>
                    <div class="informations">
                        <p class="name"><?= $info[1]->getName(); ?> <?= $info[1]->getSurname(); ?></p>
                        <p class="specialisation"><?= $info[0]->getSpecialization(); ?></p>
                        <p class="phone">T:    <?= $info[0]->getPhone(); ?></p>
                        <p class="email">E:    <?= $info[1]->getEmail(); ?></p>
                        <a class="read_more" href="/specialist">Read about me</a>
                    </div>
                </div>

                <div id="second">
                    <div id="photo2"><img src="public/images/zdjęcie1.jpg"></div>
                    <div class="informations">
                        <p class="name"><?= $info[3]->getName(); ?> <?= $info[3]->getSurname(); ?></p>
                        <p class="specialisation"><?= $info[2]->getSpecialization(); ?></p>
                        <p class="phone">T:    <?= $info[2]->getPhone(); ?></p>
                        <p class="email">E:  <?= $info[3]->getEmail(); ?></p>
                        <a class="read_more" href="/specialist">Read about me</a>
                    </div>
                </div>


                <div id="third">
                    <div id="photo3"><img src="public/images/zdjęcie2.jpg"></div>
                    <div class="informations">
                        <p class="name"><?= $info[5]->getName(); ?> <?= $info[5]->getSurname(); ?></p>
                        <p class="specialisation"><?= $info[4]->getSpecialization(); ?></p>
                        <p class="phone">T:    <?= $info[4]->getPhone(); ?></p>
                        <p class="email">E:  <?= $info[5]->getEmail(); ?></p>
                        <a class="read_more" href="/specialist">Read about me</a>
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