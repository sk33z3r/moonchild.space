<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ted Moonchild and the Roadies in Space!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- My CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    <!-- reCaptcha v2 -->
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand page-scroll" id="header-link" href="#page-top"><img src="images/python_logo.png" width="35%" alt="TMatRiS" /></a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav" id="nav-links">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll nav-link" href="#page-top"></a>
                    </li>
                    <li>
                        <img id="header-logo" src="images/python_logo.png" alt="TMatRiS" />
                    </li>
                    <li>
                        <a class="page-scroll nav-link" href="#rpg">The Adventure RPG</a>
                    </li>
                    <li>
                        <a class="page-scroll nav-link" href="#book">The Book</a>
                    </li>
                    <li>
                        <a class="page-scroll nav-link" href="#album">The Album</a>
                    </li>
                    <li>
                        <a class="page-scroll nav-link" href="#contact">Contact the Morons</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="rpg" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-div">
                    <h1>Ted Moonchild and the Roadies in Space the Game</h1>
                    <div class="left-text">
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
                                    <b>password:</b> m00nch1ld
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
        </div>
    </section>

    <!-- Gameplay Section -->
    <section id="book" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-div">
                    <h1>The Lost Volumes of the Roadies in Space</h1>
                    <div class="left-text">
                        <ul>
                            <li>Audio and eBook versions of each episode for those that are too weak to fight monsters!</li>
                            <li>Descriptions so detailed, you can almost smell Ted's ass!</li>
                            <li>Voices so sexy, you'll wet your panties!</li>
                            <li>Immerse yourself into the Roadies' Universe through backstories, lore and even more gore!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="album" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-div">
                    <h1>The Ultimate Original Soundtrack performed by The Roadies in Space</h1>
                    <div class="left-text">
                        <ul>
                            <li>Rock so heavy, you'll shit your pants!</li>
                            <li>Experience the most epic eargasm of your life!</li>
                            <li>WARNING: Not for the faint of heart!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 section-div">
                    <h1>Contact the morons behind Ted Moonchild and the Roadies in Space Universe</h1>
                    <p>Found a bug? Have an idea? Want to send us hate mail?</p>
                    <p>Do it here: <a href="#">morons@moonchild.space</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-left">
                        <h5>&copy; Black Rook, LLC 2022</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
