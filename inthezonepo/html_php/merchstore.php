<!doctype html>
<html>

<head>
    <title>Home | InTheZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="text/javascript" src="../JS/basiccalendar.js"></script>
</head>

<body>
    <!-- -------------------------------------header starts here---------------------------------------- -->
    <header class="documentStart">
        <!-- website navigation -->
        <nav id="web_nav">
            <ul>
                <!-- change active class to neccessary li -->
                <li><a href="/index.html">Home</a></li>
                <li><a href="/zones.html">Our Zones</a></li>
                <li id="oStore"><a class="active" href="/store.html">Online Store</a>
                    <div id="storeDrop">
                        <a href="/gamesstore.html">Games</a>
                        <a href="/hardwarestore.html">Hardware</a>
                        <a href="/softwarestore.html">Software</a>
                        <a class="active" href="/merchstore.html">Merchandise</a>
                    </div>
                </li>
                <li><a href="/events.html">Events</a></li>
                <li><a href="/findus.html">Find Us</a></li>
                <li><a href="/contact.html">Contact Us</a></li>
                <li id="times_btn"><a href="#"><img src="../IMGS/clock.png"></a>
                    <div id="times_drop">
                        <!-- placeholder id's for opening times script-->
                        <section class="opening_times">
                            <h5 id="ot_title">Opening Times</h5>
                            <p id="day">Day</p>
                            <p id="times">Times</p>
                            <!-- script allows for opening times -->
                            <script>
                                openTimes();
                            </script>
                        </section>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <!-- ------------------------------------------header ends here------------------------------------- -->




    <!-- ------------------------------------- footer starts here---------------------------------------- -->
    <footer class="documentEnd">
        <div class="footerContents">
            <ul class="footerList">
                <li><a href="/index.html">Home</a></li>
                <li><a href="/zones.html">Our Zones</a></li>
                <li><a href="/store.html">Online Store</a></li>
                <li><a href="/events.html">Events</a></li>
                <li><a href="/findus.html">Find Us</a></li>
                <li><a href="/contact.html">Contact Us</a></li>
                <li>Website created by Nathan&copy;2018</li>
            </ul>
            <ul class="footerList icons">
                <li><a href="https://www.twitter.com" target="_blank"><img src="../IMGS/twitter.png" alt="Twitter"></a></li>
                <li><a href="https://www.facebook.com" target="_blank"><img src="../IMGS/facebook.png" alt="Facebook"></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><img src="../IMGS/instagram.png" alt="Instagram"></a></li>
            </ul>
        </div>
    </footer>
    <!-- ------------------------------------- footer ends here ---------------------------------------- -->
</body>

</html>