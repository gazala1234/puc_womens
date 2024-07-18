<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>SECAB PUC Women</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="../css/animate.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="../css/nice-select.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="../css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="../css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="../css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header id="header-part">

        <div class="header-logo-support">
            <div class="logo">
                <center><a href="#"><img src="../images/pucollege.jpg" alt="Logo"></a></center>
            </div>
        </div> <!-- header logo support -->

        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="../home/index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../college/clgprofile.php">College Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../courses/courses-offered.php">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Admissions</a>
                                        <ul class="sub-menu">
                                            <li><a href="../admission/admission-details.php">Admission Details</a></li>
                                            <li><a href="../admission/exam.php">Exam Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Result</a>
                                        <ul class="sub-menu">
                                            <li><a href="../result/results.php">College Results</a></li>
                                            <li><a href="../result/toppers.php">College Topper</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Facilities</a>
                                        <ul class="sub-menu">
                                            <li><a href="../facilities/facility.php">Facilities</a></li>
                                            <li><a href="../facilities/activities.php">Activities</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../gallery/photos.php">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://alumni.secab.org/">Alumni</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../home/contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>

    <script>
    // Get the current URL
    var currentUrl = window.location.href;

    // Check each navigation link and add active class if it matches the current URL
    document.querySelectorAll('.navbar-nav a').forEach(function(element) {
        if (element.href === currentUrl) {
            element.classList.add('active');
            
            // Find the closest parent with class 'nav-item' and add 'active' class to its first child <a>
            var navItem = element.closest('.nav-item');
            if (navItem) {
                var mainLink = navItem.querySelector('a');
                if (mainLink) {
                    mainLink.classList.add('active');
                }
            }
        }
    });
</script>

    <!--====== HEADER PART ENDS ======-->