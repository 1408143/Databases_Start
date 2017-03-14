<?php
/**
 * Created by PhpStorm.
 * User: 1408143
 * Date: 07/03/2017
 * Time: 14:52
 */



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <meta charset="UTF-8">
        <title>Links Links Links</title>
    </head>
    <body>
    <header>
        <button
            class="g-recaptcha"
            data-sitekey="6Lc69xgUAAAAAHmVQGaZEuIty4lCiwX-FxeAFTXB"
            data-callback="YourOnSubmitFn">
            Submit
        </button>
        <div id="quicklinks">
            <ul>
                <li><a href="response.php?query=all">Display All Movies</a></li>
                <li><a href="response.php?query=marvel">Display Movies created by Marvel Studios</a></li>
                <li><a href="response.php?query=2010">Display all movies created after 2010</a></li>
                <li><a href="response.php?query=xmen">Display all X-Men films</a></li>
            </ul>
        </div>
    </header>
    </body>
</html>