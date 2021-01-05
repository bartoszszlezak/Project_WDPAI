<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="public/CSS/style.css">
        <script type="text/javascript" src="./public/js/script.js" defer></script>
        <title>Sign up</title>
    </head>
    <body>
        <p id="sign">
            <a id="button_sign" href="/login">Sign in</a>
        </p>
        <div class="container">
            <div class="logo">
                <img src="public/images/logo.svg">
            </div>
            <div class="signup-container">
                <form class="signup" method="post">
                    <div class="message">
                        <?php if(isset($messages)){
                            foreach ($messages as $message){
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <p class="account">Create an Account</p>
                    <input name="name" type="text" placeholder="Name" required>
                    <input name="surname" type="text" placeholder="Surname" required>
                    <input name="email" type="email" placeholder="Email" required>
                    <input name="password" type="password" placeholder="Password" required>
                    <p class="account">Click if you are a doctor
                        <label class="toggle">
                            <input class="toggle_checkbox" type="checkbox" name="doctor"/>
                            <span class="toggle_body">
                                <span class="toggle_switch"></span>
                                <span class="toggle_track"></span>
                            </span>
                        </label>
                    </p>
                    <button id="button_create" type="submit"><img id="arrow" src="public/images/arrow.svg"></button>
                </form>
            </div>
            <div>
            </div>
        </div>
    </body>
</html>