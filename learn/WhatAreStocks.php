<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/x-icon" href="/itwp1450/favicon.png">
	<link rel="stylesheet" href="/itwp1450/styles.css">

	<!--Begin SEO-->
	<meta name="description" content="Stocks consist of all the shares by which ownership of a corporation or company is divided. Stock can be bought and sold privately or on stock exchanges.">
	<!--End SEO-->

    <title>What are stocks and how to buy them&quest; - BoneStocks</title>
</head>
<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/itwp1450/templates/topnav.php"); ?>
    </header>

    <hr>

    <div class="grid-container">
        <div class="left-column">
        <h1>What are stocks?</h1>
        <figure>
            <img class="article-image" src="/itwp1450/images/qqq-stock-price.png" width="958" height="465" title="Stock price of QQQ over the years" alt="Stock price of QQQ over the years">
            <figcaption style="font-style: italic;">Stock price of QQQ over the years</figcaption>
        </figure>
        <h2>Stocks for beginners</h2>
        <p>In finance, stock (also capital stock) consist of all the shares by which ownership of a corporation or company is divided. (Especially in American English, the word "stocks" is also used to refer to shares.) A single share of the stock means fractional ownership of the corporation in proportion to the total number of shares. This typically entitles the shareholder (stockholder) to that fraction of the company's earnings, proceeds from liquidation of assets (after discharge of all senior claims such as secured and unsecured debt), or voting power, often dividing these up in proportion to the amount of money each stockholder has invested. Not all stock is necessarily equal, as certain classes of stock may be issued for example without voting rights, with enhanced voting rights, or with a certain priority to receive profits or liquidation proceeds before or after other classes of shareholders.</p>
        <h2>How do I buy stocks?</h2>
        <p>Stock can be bought and sold privately or on stock exchanges, and such transactions are typically heavily regulated by governments to prevent fraud, protect investors, and benefit the larger economy. The stocks are deposited with the depositories in the electronic format also known as Demat account. As new shares are issued by a company, the ownership and rights of existing shareholders are diluted in return for cash to sustain or grow the business. Companies can also buy back stock, which often lets investors recoup the initial investment plus capital gains from subsequent rises in stock price. Stock options issued by many companies as part of employee compensation do not represent ownership, but represent the right to buy ownership at a future time at a specified price. This would represent a windfall to the employees if the option is exercised when the market price is higher than the promised price, since if they immediately sold the stock they would keep the difference (minus taxes).</p>

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
        </div>
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