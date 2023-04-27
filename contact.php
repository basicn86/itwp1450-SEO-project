<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="/itwp1450/favicon.png">
	<link rel="stylesheet" href="/itwp1450/styles.css">

    <meta name="description" content="Get in touch with us today! Our contact page provides multiple ways for you to reach us, including phone, email, and a convenient contact form."> 
    <title>Contact BoneStocks</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/itwp1450/templates/googleAnalytics.php"); ?>
</head>
<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/itwp1450/templates/topnav.php"); ?>
    </header>
    <hr>
    <h1>Contact us</h1>

    <p class="contact-paragraph">Our office &amp; mailing address is&colon;<br>
        1000 Real Fake st<br>
        Detroit, MI, USA 12345
    </p>
    <p class="contact-paragraph">Our phone is&colon; <b>+1 &lpar;123&rpar;-456-7890</b></p>
    <p class="contact-paragraph">Our email is&colon; <b>example&commat;example.com</b></p>

    <h2 style="text-align:center;">Or fill out this contact form</h2>
    
    <form class="contact-form" action="contact.php" method="GET">
        <label for="name">Name&colon;</label>
        <br>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Reply Email&colon;</label>
        <br>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message&colon;</label>
        <br>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Send Message</button>
    </form>

    <hr>

    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/itwp1450/templates/footernav.php") ?>
    </footer>
</body>
</html>