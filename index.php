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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BM6M5JYGB9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BM6M5JYGB9');
    </script>

</head>

<body onload="<?php if(isset($_POST['g-recaptcha-response'])){ echo "captchaSuccess()"; } else { echo "init()"; } ?>">

    <!-- Navigation -->
    <div id="navbar">
        <div class="nav-container">
            <span class="metal-horns">\m/</span>
            <button onclick="rpgNav()" id="rpgBtn">The RPG</button>
            <button onclick="bookNav()" id="bookBtn">The Stories</button>
            <button onclick="albumNav()" id="albumBtn">The Music</button>
            <button onclick="contactNav()" id="contactBtn">The Morons</button>
            <span class="metal-horns">\m/</span>
        </div>
    </div>

    <!-- Home Section -->
    <section id="home">
        <div class="section-bg">
            <div class="container section-div">
                <div class="section-text">
                    <h1>Ted Moonchild and the Roadies in Space</h1>
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
            </div>
        </div>
    </section>

    <!-- Game Section -->
    <section id="rpg">
        <div class="section-bg">
            <div class="container section-div">
                <div class="section-text">
                    <h1>Ted Moonchild and the Roadies in Space: the Game</h1>
                    <p>The game as an NFT is meant as a throwback to the days of SNES cartridges and Blockbuster. I was always fond of finding save games with funny custom names or late game progress. Each token transfers with 3 save slots like the old days.</p>
                    <p>The game is under development and adding features all the time. This is currently a solo project trying to do things from scratch. The proof of concept available below will be updated periodically.</p>
                    <p><b>Build Last Updated:</b> 2022-02-03 (<a href="https://git.blackrookllc.com/ted-moonchild/moonchild-game/commit/7581b4f9594555eb47268a28c8ce5dc5aa7e1309">7581b4f</a>)<br />
                    <i><small>Note: Save slots are reset with new builds in the ssh version.</small></i></p>
                    <div id="features">
                        <p>Release Notes:</p>
                        <ul>
                            <li>Fix several UI issues in all areas.</li>
                            <li>Implemented full battle UI and debug mode.</li>
                            <li>Random battles are turned on, but battle logic is not implemented. Escaping is the only way out for now.</li>
                            <li>Loads of documentation and clean-up.</li>
                        </ul>
                    </div>
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
                    // generate checksums
                    $linuxSum = md5_file('ted-moonchild-linux.tar.gz');
                    //$windowsSum = md5_file('ted-moonchild-windows.zip');
                    //$macosSum = md5_file('ted-moonchild-macos.zip');
                    // should return JSON with success as true
                    if($responseKeys["success"]) {
                        echo "
                        <div id=\"form-space\">
                            <div class=\"code ssh\">
                                <b>SSH command from a terminal:</b><br /><br />
                                ssh -p 7175 -t ted@moonchild.space \"play\"<br />
                                <small><b>password:</b> m00nch1ld</small>
                            </div>
                            <div class=\"code download\">
                                <b>Download and play it locally:</b><br /><br />
                                <b>Linux:</b> <a href=\"ted-moonchild-linux.tar.gz\">ted-moonchild-linux.tar.gz</a><br />
                                <small><b>md5checksum:</b> $linuxSum</small><br /><br />
                                <b>Windows:</b> <a href=\"#\">Coming Soon</a><br />
                                <small><b>md5checksum:</b> XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</small><br /><br />
                                <b>macOS:</b> <a href=\"#\">Coming Soon</a><br />
                                <small><b>md5checksum:</b> XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</small><br />
                            </div>
                        </div>
                        ";
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
                        <input type="submit" name="play" value="Play the Proof of Concept!" />
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
                    <h1>The Roadies in Space: The Lost Volumes</h1>
                    <p>Immerse yourself into the Roadies universe with radical backstories and unnecessary details about how stuff works. Flex your knowledge to assert your dominance amongst friends!</p>
                    <p>Initially these eBooks will be deeper backstories of all the characters that appear in the TMatRiS episodic games. Giving more context to the world around you filled with laughing and crying.</p>
                    <p>These releases will happen in-between game episodes as new characters are developed and polished off. At first they will be released as eBooks only, but as I find my groove there will be audio versions with ambient sounds ala "The Shadow" from back in the radio days.</p>
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
                    <h1>The Roadies in Space: OST</h1>
                    <p>Original tunes written, performed and recorded by the Roadies and other miscreants from throughout the galaxy.</p>
                    <p>The initial album being released is the main soundtrack to the games. Subsequent releases will include features from characters that appear throughout the story, spanning several genres. Eventually, the ultimate metal album will be unleashed.</p>
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
                    <h1>The Moron behind the Roadies in Space Universe</h1>
                    <p>Found a bug? Have an idea? Want to send hate mail?</p>
                    <p>You can send an email to <a href="mailto:sk33z3r@pm.me">sk33z3r@pm.me</a></p>
                    <p>Check out my other projects:</p>
                    <ul>
                        <li><a href="https://sk33z3r.site/sacred-bodies">Sacred Bodies NFT</a></li>
                        <li><a href="https://sk33z3r.site/floral-magi">Order of the Floral Magi NFT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="nav-container">
            <div class="text-left">
                Copyright &copy; 2022 <a href="https://sk33z3r.site">sk33z3r.eth</a>
            </div>
        </div>
    </footer>

</body>

</html>
