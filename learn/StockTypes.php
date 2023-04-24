<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/x-icon" href="/itwp1450/favicon.png">
	<link rel="stylesheet" href="/itwp1450/styles.css">

	<!--Begin SEO-->
	<meta name="description" content="Understand the difference between common and preferred stocks. While common stock carries voting rights, preferred stock typically receives priority in dividend payments.">
	<!--End SEO-->

    <title>Types of stocks - BoneStocks</title>
</head>
<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/itwp1450/templates/topnav.php"); ?>
    </header>

    <hr>

    <div class="grid-container">
        <article class="left-column">
        <h1>Types of stocks</h1>
        <figure>
            <img class="article-image" src="/itwp1450/images/common-vs-preferred.png" width="1024" height="412" title="Common stock and preferred stock chart" alt="Common stock and preferred stock chart">
            <figcaption class="article-caption">Common stock and preferred stock chart</figcaption>
        </figure>
        <h2>Common stock and preferred stock</h2>
        <p>Stock typically takes the form of shares of either common stock or preferred stock. As a unit of ownership, common stock typically carries voting rights that can be exercised in corporate decisions. Preferred stock differs from common stock in that it typically does not carry voting rights but is legally entitled to receive a certain level of dividend payments before any dividends can be issued to other shareholders. Convertible preferred stock is preferred stock that includes an option for the holder to convert the preferred shares into a fixed number of common shares, usually any time after a predetermined date. Shares of such stock are called "convertible preferred shares" (or "convertible preference shares" in the UK).</p>
        <h2>Hybrid stocks</h2>
        <p>Preferred stock may be hybrid by having the qualities of bonds of fixed returns and common stock voting rights. They also have preference in the payment of dividends over common stock and also have been given preference at the time of liquidation over common stock. They have other features of accumulation in dividend. In addition, preferred stock usually comes with a letter designation at the end of the security; for example, Berkshire-Hathaway Class "B" shares sell under stock ticker BRK.B, whereas Class "A" shares of ORION DHC, Inc will sell under ticker OODHA until the company drops the "A" creating ticker OODH for its "Common" shares only designation. This extra letter does not mean that any exclusive rights exist for the shareholders but it does let investors know that the shares are considered for such, however, these rights or privileges may change based on the decisions made by the underlying company.</p>

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