<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mega Travel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- 1vh or 1vw means 1% of the viewport height/width -->
        <meta charset="utf-8">
        <meta name="description" content="Mega Travel | Home">
        <meta name="robots" content="nofollow">
        <!-- <base href="http://www.example.com"> -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <?php include "header.php"; ?>
    <?php include "menu.php"; ?>

    <main id="main1">    <!-- The main element describes the main content of an HTML document -->
        <h1>Travel Packages</h1>
        <p>We are specialized with International Travels and Tours. Our expertized and experience can save 
            you 100’s of dollar in your pocket. Beside the  money you can also save your valuable time at the 
            time of transit or tour. You decide your budget and the time from your comfort zone. We will make 
            it happen for you for an exceptional memory. Mega Travels is committed for an excellent service 
            and support for all of its past, present and future customers. We are here today only for you. We 
            remind ourself everyday and every moment with a sincere gratitude.</p>
        <br>

        <div class="flex-container">
            <div class="flex-item-1">
                <img src="images\maldives.PNG">
                <div id="pricing">
                    <h1>Maldives Resort</h1>
                    <p class="price">$1800.99</p>
                    <p class="pay">Price you pay $999.99</p>
                    <p class="saving">Your saving $801</p>
                </div>
            </div>
            <div class="flex-item-2">
                <img src="images\mexico.PNG">
                <div id="pricing">
                    <h1>Mexico Resort (All Inclusive!)</h1>
                    <p class="price">$2999.99</p>
                    <p class="pay">Price you pay $2199.99</p>
                    <p class="saving">Your saving $800</p>
                </div>
            </div>
            <div class="flex-item-3">
                <img src="images\newzealand.PNG">
                <div id="pricing">
                    <h1>New Zealand Trek</h1>
                    <p class="price">$2499.00</p>
                    <p class="pay">Price you pay $2100.00</p>
                    <p class="saving">Your saving $399</p>
                </div>
            </div>
            <div class="flex-item-4">
                <img src="images\venice.PNG">
                <div id="pricing">
                    <h1>Venice Italy</h1>
                    <p class="price">$4100.00</p>
                    <p class="pay">Price you pay $3699.00</p>
                    <p class="saving">Your saving $400</p>
                </div>
            </div>
        </div>




    </main>

    <?php include "footer.php"; ?>

    </body>
</html>
