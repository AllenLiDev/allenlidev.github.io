<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Allen Li - Front-End Developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="assets/js/aos/aos.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/aos/aos.js"></script>
    <script src="assets/js/index.js"></script>
</head>

<body id="#top">
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-inverse secondary-background-color primary-color">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#top">
                    <h1>ALLEN LI</h1>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#top">Home</a></li>
                    <li><a href="#skills">About Me</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fixed Full Screen Landing -->
    <div id="home">
        <div class="landing-text text-center">
            <h1>Allen Li</h1>
            <h3 id="changingText">Front-End Developer</h3>
            <a class="btn btn-default btn-lg">about me</a>
        </div>
    </div>
    <!-- Skills -->
    <div id="skills" class="padding text-center section-padding">
        <div class="container">
            <div class="row">
                <h2 class="secondary-color">A Little About Me</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <i class="fas fa-toolbox fa-3x" data-aos="fade-down"></i>
                    <h4 class="secondary-color">Skill set</h4>
                    <p><b>Technologies:</b> HTML5, CSS3, JavaScript, C#, Java</p>
                    <p><b>Frameworks and Libraries:</b> Angular, AngularJS, Bootstrap,
                        Ionic, jQuery, Material Design</p>
                    <p><b>Databases:</b> MySQL, MongoDB</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <i class="fab fa-react fa-3x" data-aos="fade-right" data-aos-delay="300"></i>
                    <i class="fab fa-app-store-ios fa-3x" data-aos="fade-right" data-aos-delay="300"></i>
                    <h4 class="secondary-color">Continuous Learning</h4>
                    <p>Currently learning React by converting and updating my Shift Picker project. Also playing around
                        with
                        native iOS developement and learning Swift. Check my progress by clicking my Github link below!</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <i class="fas fa-robot fa-3x" data-aos="fade-right" data-aos-delay="500"></i>
                    <h4 class="secondary-color">Tech Interests</h4>
                    <p>Interested in AI and Create ML Framework's ability to create and train machine learning models.
                        It provides
                        possibilities to use CORE ML 2 on your mobile device and integrated it into mobile apps.</p>
                    <a href="https://developer.apple.com/machine-learning/">
                        <p class="text-centered">Core ML 2 - Apple
                        </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <i class="fas fa-life-ring fa-3x" data-aos="fade-right" data-aos-delay="700"></i>
                    <h4>History of</h4>
                    <p>I've been a lifeguard for over 12 years and I enjoy playing basketball in a semi-competative
                        league every Monday night. Always have been an avid gamer and ex-Global Elite.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Secondary Background Image -->
    <div class="fixed-background"></div>
    <!-- Projects Section -->
    <div id="projects" class="no-padding secondary-background-color section-padding">
        <div class="container-fluid">
            <div class="row text-center primary-color">
                <h2>My Projects</h2>
            </div>
            <hr>
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="project-box">
                        <div class="hover-unhide text-center primary-color secondary-background-color">
                            <div class="text-elements">
                                <h3>Shift Picker</h3>
                                <h5>A Shift Management Application</h5>
                                <p>Angular 2+, Google Material Design,
                                    MongoDB, Express, NodeJS
                                </p>
                            </div>
                            <a href="" target="_blank">
                                <i class="fab fa-github fa-2x sticky-link"></i>
                            </a>
                        </div>
                        <img src="assets/img/shiftpicker.jpg" class="img-fluid" alt="desc">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="project-box">
                        <div class="hover-unhide text-center primary-color secondary-background-color">
                            <div class="text-elements">
                                <h3>Operator</h3>
                                <h5>An Arithmetic Game</h5>
                                <p>HTML5, CSS3, JavaScript, CanvasJS,
                                    PHP, MySQL, Ajax
                                </p>
                            </div>
                            <a href="https://operator-game.herokuapp.com" target="_blank">
                                <i class="fas fa-link fa-2x sticky-link"></i>
                            </a>
                        </div>
                        <img src="assets/img/operator.jpg" class="img-fluid" alt="desc">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="project-box">
                        <div class="hover-unhide text-center primary-color secondary-background-color">
                            <div class="text-elements">
                                <h3>Swim Van</h3>
                                <h5>A Swimming Website</h5>
                                <p>HTML5, CSS3, JavaScript, jQuery,
                                    PHP, Ajax
                                </p>
                            </div>
                            <a href="https://swim-van.herokuapp.com" target="_blank">
                                <i class="fas fa-link fa-2x sticky-link"></i>
                            </a>
                        </div>
                        <img src="assets/img/swimvan.jpg" class="img-fluid" alt="desc">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Secondary Background Image -->
    <div class="fixed-background"></div>
    <!-- Footer Section -->
    <footer id="contact" class="container-fluid text-center secondary-background-color primary-color section-padding">
        <div class="row">
            <h2>Contact Info</h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <a class="btn btn-social-icon btn-lg" href="https://www.linkedin.com/in/allenlidev/" target="_blank">
                    <i class="fab fa-linkedin-in fa-3x"></i>
                </a>
                <p>Linkedin</p>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-social-icon btn-lg" href="https://github.com/headhuntar" target="_blank">
                    <i class="fab fa-github fa-3x"></i>
                </a>
                <p id="lastCommit"></p>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-social-icon btn-lg" href="assets/pdf/allenLiResume.pdf" target="_blank">
                    <i class="far fa-file-pdf fa-3x"></i>
                </a>
                <p>Resume</p>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-social-icon btn-lg" href="mailto:allenlidev@gmail.com" data-text="allenlidev@gmail.com">
                    <i class="far fa-envelope fa-3x"></i>
                </a>
                <p>allenLiDev@gmail.com</p>
            </div>
        </div>
    </footer>

</body>

</html>
<?php?>