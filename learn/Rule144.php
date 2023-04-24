<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/x-icon" href="/itwp1450/favicon.png">
	<link rel="stylesheet" href="/itwp1450/styles.css">

	<!--Begin SEO-->
	<meta name="description" content="Rule 144 is a Securities and Exchange Commission (SEC) rule that sets out the conditions under which certain restricted or unregistered securities can be sold.">
	<!--End SEO-->

    <title>Rule 144 - BoneStocks</title>
</head>
<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/itwp1450/templates/topnav.php"); ?>
    </header>

    <hr>

    <div class="grid-container">
        <article class="left-column">
        <h1>Rule 144</h1>
        <figure>
            <img class="article-image" src="/itwp1450/images/rule-144-summary.png" width="500" height="351" title="Rule 144 summary" alt="Rule 144 summary">
            <figcaption class="article-caption">Rule 144 summary</figcaption>
        </figure>
        <p>Rule 144 is a Securities and Exchange Commission (SEC) rule that sets out the conditions under which certain restricted or unregistered securities can be sold. Specifically, it outlines the conditions under which restricted securities, such as those held by insiders, affiliates, or private companies, can be sold in the public market. Under Rule 144, restricted securities can be sold publicly only after a holding period has elapsed, during which time the securities cannot be sold or transferred. The length of the holding period depends on the type of issuer and how the securities were acquired. Additionally, there are certain volume limitations on the amount of securities that can be sold, and the sales must be made in accordance with certain notice and disclosure requirements. Overall, Rule 144 is designed to regulate the sale of restricted securities and promote transparency in the public market. It allows insiders and other restricted stockholders to sell their shares in the open market, but only under certain conditions and with appropriate disclosures to ensure that investors are fully informed about the transaction.</p>

        <h3>Share</h3>
        <?php $currentPageUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $currentPageUrl ?>"><img src="/itwp1450/images/icons/fb.png" width="64" height="64" alt="Share on Facebook"></a>
        <a href="https://reddit.com/submit?url=<?php echo $currentPageUrl ?>&title=What%20are%20stocks%20and%20how%20to%20buy%20them"><img src="/itwp1450/images/icons/reddit.png" width="64" height="64" alt="Share on Reddit"></a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $currentPageUrl ?>&text=What%20are%20stocks%20and%20how%20to%20buy%20them"><img src="/itwp1450/images/icons/twitter.png" width="64" height="64" alt="Share on Twitter"></a>
        <a href="https://pinterest.com/pin/create/button/?url=<?php echo $currentPageUrl . "&media=" . "http://" . $_SERVER['HTTP_HOST'] . "/itwp1450/images/qqq-stock-price.png" ?>&text=What%20are%20stocks%20and%20how%20to%20buy%20them"><img src="/itwp1450/images/icons/pinterest.png" width="64" height="64" alt="Share on Pinterest"></a>

        <h3>Give us Feedback&excl;</h3>
        <form method="post">
            <label for="helpfulness">Rate</label>
            <select id="helpfulness" name="helpfulness">
                <option>Very helpful</option>
                <option>Helpful</option>
                <option>Neutral</option>
                <option>Dissatisfied</option>
                <option>Terrible</option>
            </select>
            <br>
            <label for="opinion">Your opinion</label>
            <br>
            <textarea id="opinion" name="opinion"></textarea>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        </article>
        <div class="right-column">
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/itwp1450/templates/learnSideNav.php") ?>
        </div>
    </div>

    <hr>
    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/itwp1450/templates/footernav.php") ?>
    </footer>
</body>
</html>