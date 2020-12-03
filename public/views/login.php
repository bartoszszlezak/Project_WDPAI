<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="public/CSS/style.css">
        <title>Login</title>
    </head>

    <body>

            <p id="sign">
                <a id="button_sign" href="/signup">Sign up</a>
            </p>
        <div class="container">

            <div class="logo">
                <img src="public/images/logo.svg">
            </div>
            <div class="login-container">
                <form class="login" action="login" method="post">
                    <div class="message">
                        <?php if(isset($messages)){
                            foreach ($messages as $message){
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input name="email" type="text" placeholder="email@email.com">
                    <input name="password" type="password" placeholder="password">
                    <button id="button_login" type="submit">Login</button>
                </form>
            </div>
            <div>

            </div>

        </div>

    </body>

</html>
