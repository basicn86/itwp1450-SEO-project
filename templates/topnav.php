<img class="companylogo" src="/itwp1450/images/logoplaceholder.png" width="1515" height="300" alt="BoneStocks company logo">
<nav>
    <ul class="navbar">
        <li><a href="/itwp1450/index.php">Home</a></li>
        <li>News</li>
        <li><a href="/itwp1450/learn/">Learn</a></li>
        <li>Stocks</li>
        <li>Crypto</li>
        <li>Support</li>
        <li>Contact</li>
    </ul>
</nav>
<form class="search" method="post">
    <p><input type="text" name="search_term" size="64" value="<?php if(isset($_POST['search_term'])) {echo $_POST['search_term'];} ?>"></p>
    <p><input class="submit-button" type="submit" name="submit" value="Search&excl;"></p>
</form>
