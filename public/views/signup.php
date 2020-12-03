<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="public/CSS/style.css">
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
                <form class="signup">
                    <p class="account">Create an Account</p>
                    <input name="name" type="text" placeholder="Full Name">
                    <input name="email" type="text" placeholder="email@email.com">
                    <input name="birthday" type="text" placeholder="Birthday">
                    <input name="password" type="password" placeholder="Password">
                    <p class="account">Click if you are a doctor
                        <label class="toggle">
                            <input class="toggle_checkbox" type="checkbox"/>
                            <span class="toggle_body">
                                <span class="toggle_switch"></span>
                                <span class="toggle_track"></span>
                            </span>
                        </label>
                    </p>
                    <button id="button_create"><img id="arrow" src="public/images/arrow.svg"></button>
                </form>
            </div>
            <div>
            </div>
        </div>
    </body>
</html>