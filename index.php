<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Metadata -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />

    <title>Ted Moonchild and the Roadies in Space!</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">

    <!-- CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- reCaptcha v2 -->
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <!-- Navigation -->
    <script src="js/nav.js" async defer></script>

    <!-- Preload backgrounds -->
    <link rel="preload" as="image" href="images/game_bg.jpg">
    <link rel="preload" as="image" href="images/book_bg.jpg">
    <link rel="preload" as="image" href="images/album_bg.jpg">
    <link rel="preload" as="image" href="images/contact_bg.jpg">

</head>

<body onload="rpgNav()">

    <!-- Navigation -->
    <div id="navbar">
        <div class="nav-container">
            <span class="metal-horns">\m/</span>
            <button onclick="rpgNav()" id="rpgBtn">The Adventure RPG</button>
            <button onclick="bookNav()" id="bookBtn">The Book</button>
            <button onclick="albumNav()" id="albumBtn">The Album</button>
            <button onclick="contactNav()" id="contactBtn">Contact the Morons</button>
            <span class="metal-horns">\m/</span>
        </div>
    </div>

    <!-- Game Section -->
    <section id="rpg">
        <div class="section-bg">
            <div class="container section-div">
                <div class="section-text">
                    <h1>Ted Moonchild and the Roadies in Space the Game</h1>
                    <p>Follow the galactic golden boy of rock 'n roll as he careens out of control through space and time trying to defeat the evil conglomerates of Earth's past, hellbent on enslaving the galaxy!</p>
                    <p>Amazing graphics? We don't need those. Lose yourself in the high tech immersive world of an ASCII text adventure.</p>
                    <p>Start off in a slum rock and roll bar, working your way from planet to planet, engaging in thrilling turn based battles and loose women of all species!</p>
                    <p>Features:</p>
                    <ul>
                        <li>Several text and background colors!</li>
                        <li>Web and Telnet play!</li>
                        <li>Save and load your game progress!</li>
                        <li>All the Dark Matter Ale<sup>TM</sup> you can handle!</li>
                    </ul>
                </div>
                <?php
                $captcha;
                if(isset($_POST['g-recaptcha-response'])){
                    $captcha=$_POST['g-recaptcha-response'];
                    $secretKey = file_get_contents('./.secret');
                    $ip = $_SERVER['REMOTE_ADDR'];
                    // post request to server
                    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                    $response = file_get_contents($url);
                    $responseKeys = json_decode($response,true);
                    // should return JSON with success as true
                    if($responseKeys["success"]) {
                        echo '
                        <div id="form-space">
                            <div class="code left">
                                <b>SSH command from a terminal:</b><br /><br />
                                ssh -p 7175 -t ted@moonchild.space "play"<br />
                                <small><b>password:</b> m00nch1ld</small>
                            </div>
                            <div class="code right">
                                <b>Download and play it locally:</b><br /><br />
                                <b>Linux:</b> <a href="ted-moonchild-linux.tar.gz">ted-moonchild-linux.tar.gz</a><br />
                                <small><b>md5checksum:</b> 6b9ae8771c4eb082ff0bdbaf4d7efacb</small><br /><br />
                                <b>Windows:</b> <a href="#">Coming Soon</a><br />
                                <small><b>md5checksum:</b> XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</small><br /><br />
                                <b>macOS:</b> <a href="#">Coming Soon</a><br />
                                <small><b>md5checksum:</b> XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</small><br />
                            </div>
                        </div>
                        ';
                    } else {
                        echo '
                        <div id="form-space">
                            <h4>Something went wrong, please re-try the captcha.</h4>
                        </div>
                        ';
                    }
                }
                else if(!$captcha){
                    echo '
                    <form id="form-space" action="index.php" method="post">
                        <div class="g-recaptcha left" id="captcha" data-theme="dark" data-sitekey="6LdD6-8dAAAAANdPOdi2QreUq8NEPBBRQbKQxusc"></div>
                        <input class="right" type="submit" name="play" value="Play the Proof of Concept!" />
                    </form>
                    ';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Book Section -->
    <section id="book">
        <div class="section-bg">
            <div class="container section-div">
                <div class="section-text">
                    <h1>The Lost Volumes of the Roadies in Space</h1>
                    <ul>
                        <li>Audio and eBook versions of each episode for those that are too weak to fight monsters!</li>
                        <li>Descriptions so detailed, you can almost smell Ted's ass!</li>
                        <li>Voices so sexy, you'll wet your panties!</li>
                        <li>Immerse yourself into the Roadies' Universe through backstories, lore and even more gore!</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Album Section -->
    <section id="album">
        <div class="section-bg">
            <div class="container section-div">
                <div class="section-text">
                    <h1>The Ultimate Original Soundtrack performed by The Roadies in Space</h1>
                    <ul>
                        <li>Rock so heavy, you'll shit your pants!</li>
                        <li>Experience the most epic eargasm of your life!</li>
                        <li>WARNING: Not for the faint of heart!</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="section-bg">
            <div class="container section-div">
                <div class="section-text">
                    <h1>Contact the morons behind Ted Moonchild and the Roadies in Space Universe</h1>
                    <p>Found a bug? Have an idea? Want to send us hate mail?</p>
                    <p>Do it here: <a href="#">morons@moonchild.space</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="nav-container">
            <div class="text-left">
                Copyright 2022 Black Rook, LLC
            </div>
        </div>
    </footer>

</body>

</html>
