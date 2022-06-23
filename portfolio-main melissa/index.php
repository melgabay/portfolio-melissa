<?php
//create a mySQL DB connection:
include "config.php";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//testing connection success

if (mysqli_connect_errno()) {

    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}

?>

<?php
//get data from DB
$query     = "SELECT * FROM portfolio_MelissaGabay ";
$result = mysqli_query($connection, $query);
if (!$result) {

    die("DB query failed.");
}
?>

<?php
$queryPopUp = "SELECT * FROM portfolio_MelissaGabay ";

$resultPopUp = mysqli_query($connection, $query);
if (!$resultPopUp) {
    die("DB query failed.");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/ca-gallery.css" rel="stylesheet">

</head>

<body id="page-top">
   
    <aside class="offcanvas-aside">
        <a href="./projects/touchTheNums/index.html"></a>
        <!-- Contact -->
        <section>

            <h4>Contact Me</h4>

            <form>
                <div class="form-group">
                    <label> Your E-mail:</label>
                    <input type="email" class="form-control mail-user" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput2">Subject:</label>
                    <input type="text" class="form-control subject-user" placeholder="Type Subject here">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control body-msg-user" rows="3" placeholder="Type message here"></textarea>
                </div>
                <button type="button" class="btn btn-send-mail">
                      submit
                    </button>
            </form>


        </section>

    </aside>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Melissa Gabay</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Specialities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#me">Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Hello, my name is</div>
                <div class="intro-heading">Melissa, I'm a <br><span class="typing"></span></div>
                <a class="btn btn-xl js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </div>
    </header>
    <!-- header loading page -->
    <!-- <div class="background-loading-page">

    </div> -->

    <!-- Services -->
    <a name="services"></a>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Specialities</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">Front-end</h4>


                    <p class="text-muted">As a web developer, I have experience in HTML5 and CSS3 techniques working 
                        with jQuery or more advanced libraries. I work with designer for making some responsive website.
                    </p>
                    <!-- React. Back-end Utilising php frameworks, working with databases and coding with languages such as MySQL and
                        JSON. Also fimiliar with ERD architecture design -->
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Responsive design is a graphic user interface (GUI) design approach used to create content that adjusts smoothly to various screen sizes. Designers size elements in relative units (%) and apply media queries, so their
                        designs can automatically adapt to the browser space to ensure content consistency across devices.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">Web Security</h4>
                    <p class="text-muted">Web security refers to protecting networks and computer systems from damage to or the theft of software, hardware, or data. It includes protecting computer systems from misdirecting or disrupting the services they are designed to provide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                </div>
            </div>

            <div class="stl">
            <?php
            while($row = mysqli_fetch_assoc($result)) { //results are in associative array. keys are cols names
                $project_id = $row["project_id"];
                $project_name = $row["project_name"];
                $project_description = $row["project_description"];
                $programming_language = $row["programming_langage"];
                $github_deposit = $row["github_deposit"];
                $project_pic = $row["project_pic"];
                $github_pages = $row["github_pages"];

                echo    '<div class="card stle">';
                            echo    '<a href="#portfolioModal'.$project_id.'"> ';
                            echo    ' <img class="card-img-top" src="'.$project_pic.'" alt="'.$project_name.'">';
                            echo    '</a>';
                            echo    '<div class="card-body text-center">';
                                        echo  '<h4 class="card-title">'.$project_name.'</h4>';
                                        echo  '<h6 class="card-text">'.$project_description.'.</h6>';
                                        echo  '<h6 class="card-text">'.$programming_language.'.</h6>';
                                        echo '<div class="d-flx">';
                                                if(is_null($github_pages)){
                                                    echo '<a href="Resume Melissa.pdf" download="Resume Melissa">
                                                <i class="fa fa-download" ></i> </a>';
                
                                                }
                                                else{
                                                        echo        '<a href="'.$github_pages.'"> <i class="fa fa-gamepad"></i> </a>';
                                                }
                                                echo        '<a href="'.$github_deposit.'">  <i class="fa fa-github g"></i>  </a>';      
                                        echo    '</div>'; 
                                    echo    '</div>';
                                
                                                     
                echo    '</div>';
            } ?>
        </div>    
</section>

    <!-- Me -->
    <section class="bg-light" id="me" style="padding: 0px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/melissa.jpg" alt="melissa">
                    <h4>Melissa Gabay</h4>
                    <p class="text-muted">student</p>
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="https://twitter.com/MelissaGabay">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://facebook.com/aaa.Gabay.zzz">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/MelissaGabay">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8 flex-align-center">
                <p class="large text-muted  about-description">My name is Melissa Gabay and I'm a software engineering student at Shenkar. I'm a based in Ramat Gan, Israel.
A serious person, seeking to improve the teams' effectiveness at work. Spend extra time and effort to make the work to be more effectively and fast. A team player who want to improve the team motivation for our succeed.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 flex-align-center">
                <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" target="_blank">
                        <img src="img/Shenkar_logo.png" alt="logo shenkar">
                    </a>
                </div>
                <div class="col-md-4 flex-align-center">
                    <ul class="list-inline social-buttons flex-align-center">
                        <li class="list-inline-item">
                        <a href="https://twitter.com/melgabay">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item flex-align-center">
                        <a href="https://www.facebook.com/melissa.gabay.9">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/melissa-gabay-72770019a/">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 flex-align-center">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">More Me</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Even More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <div class="container-details-show-modal">
                                </div>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/ca-gallery.js"></script>
    <script src="js/offCanvas.js"></script>
    <script src="js/proj-service.js"></script>

    <script src="js/main-controler.js"></script>
</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?> 