<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">  
        <form id="contact" action="bio.php" method="POST">
            <h3>Quick Contact</h3>
            <h4>Contact us today, and get reply with in 24 hours!</h4>
            <fieldset>
            <input placeholder="Your name" type="text" tabindex="1" name="fullname" required autofocus>
            </fieldset>
            <fieldset>
            <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
            </fieldset>
            <fieldset>
            <input placeholder="Your Phone Number" type="tel" tabindex="3" name="phone" required>
            </fieldset>
            <fieldset>
            <input placeholder="Your Web Site with https:// " name="website" type="url" tabindex="4" required>
            </fieldset>
            <fieldset>
            <input placeholder="ID no." name="idcard" type="tel" tabindex="5" required>
            </fieldset>
            <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Genarate</button>
            </fieldset>
        </form>
    </div>
</body>
</html>

