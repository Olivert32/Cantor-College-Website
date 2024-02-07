<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="styles/mobile.css" />
    <link
      rel="stylesheet"
      media="only screen and (min-width:720px)"
      href="styles/desktop.css"
    />
</head>
<body>
	<header>
    <?php
include("includes/header.php");
?>
</header>
<div id="content">
    <section>
    <h1>Contact Us</h1> 
    <p>Please feel free to get in touch with us, with any complaints, queries or questions that you have. A representative from the college will be in touch within 1-2 working days.</p>
    <form action="thank-you.php">
            <div>
            <label for="yourName">Name:</label>
            <input type="text" name="yourName" id="yourName" placeholder="Please Add Your Name">
            </div>
            <div>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Email Address">
            </div>
            <div>
            <label>Telephone:</label>
            <input type="tel" name="tel" placeholder="Telephone Number">
            </div>
            <div>
            <label for="message" >Message:</label>
            <textarea name="message" id="message" placeholder="Your Message"></textarea>
            </div>
            <div class="submitContainer">
            <input type="submit" value="Send">
            </div>
            </form>
            

    </section>
</div>
<footer>
<?php
include("includes/footer.php");
?>
</footer>
</div>
<script src="js/main.js"></script>
</body>
</html>