<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/CSS/more_info.css">
    <title>Sign up</title>
</head>
<body>
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
            <input name="phone" type="text" placeholder="Telephone" required>
            <input name="specialization" type="text" placeholder="Specialization" required>
            <input name="about_me" type="text" placeholder="About me" required>
            <button id="button_create" type="submit"><img id="arrow" src="public/images/arrow.svg"></button>
        </form>
    </div>
    <div>
    </div>
</div>
</body>
</html>