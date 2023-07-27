<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FutureTechUnleashed</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/techwix/assets/images/blog_icon1.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper">


        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start  -->
        <div id="header" class="section header-section">

            <div class="container">

                <!-- Header Wrap Start  -->
                <div class="header-wrap">

                    <div class="header-logo">
                       <a href="index.php"><img src="/techwix/assets/images/logo3.png" alt="logo" style="width:170px;height: 70px;"></a>
                    </div>

                    <div class="header-menu d-none d-lg-block">
                        <ul class="main-menu">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li class="active-menu">
                                <a href="blog.php.php">Blog</a>

                                <ul class="sub-menu">
                                    
                                    <li class="active"><a href="blog.php">BLOG</a></li>
                                <li><a href="AI.php">Artificial Intelligence</a></li>
                                <li><a href="cybersecurity.php">Cyber Security</a></li>
                                <li><a href="cloudcomputing.php">Cloud Computing</a></li>
                                <li><a href="ML.php">Machine Learning</a></li>
                                <li><a href="IOT.php">Internet of Things</a></li>
                                <li><a href="fullstack.php">Full Stack Development</a></li>
                                <li><a href="UI_UX.php">UI/UX Design</a></li>
                                <li><a href="datascience.php">Data Science</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                            
            
                            
                        </ul>
                    </div>


                        <!-- LOG OUT -->

                        <div class="header-btn d-none d-xl-block">
                            <a class="btn" href="login.php">LOG OUT</a>
                        </div>
                        <!-- Header Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->
                    </div>
                    <!-- Header Meta End  -->

                </div>
                <!-- Header Wrap End  -->

            </div>
        </div>
        <!-- Header End -->

        <!-- Offcanvas Start-->
        <div class="offcanvas offcanvas-start" id="offcanvasExample">
            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.php"><img src="assets/images/logo-white.png" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
            </div>

            <!-- Offcanvas Body Start -->
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li class="active-menu">
                            <a href="blog.php">Blog</a>
                            <ul class="sub-menu">
                                <li class="active"><a href="blog.php">BLOG</a></li>
                                <li><a href="AI.php">Artificial Intelligence</a></li>
                                <li><a href="cybersecurity.php">Cyber Security</a></li>
                                <li><a href="cloudcomputing.php">Cloud Computing</a></li>
                                <li><a href="ML.php">Machine Learning</a></li>
                                <li><a href="IOT.php">Internet of Things</a></li>
                                <li><a href="fullstack.php">Full Stack Development</a></li>
                                <li><a href="UI_UX.php">UI/UX Design</a></li>
                                <li><a href="datascience.php">Data Science</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                        
                    </ul>
                </div>
            </div>
            <!-- Offcanvas Body End -->
        </div>
        <!-- Offcanvas End -->


        <!-- Hero Start -->
        <div class="section techwix-hero-section-03 d-flex align-items-center" style="background-image: url(assets/images/hero-bg3.jpg);">
            <div class="shape-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="944px" height="894px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="88.295%" x2="0%" y1="0%" y2="46.947%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)" d="M39.612,410.76 L467.344,29.823 C516.51,-13.476 590.638,-9.94 633.939,39.612 L914.192,317.344 C957.492,366.50 953.109,440.638 904.402,483.939 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z" />
                    <path fill="url(#PSgrad_0)" d="M39.612,410.76 L467.344,29.823 C516.51,-13.476 590.638,-9.94 633.939,39.612 L914.192,317.344 C957.492,366.50 953.109,440.638 904.402,483.939 L476.671,864.191 C427.964,907.492 353.376,903.109 310.76,854.402 L29.823,576.670 C-13.477,527.963 -9.94,453.376 39.612,410.76 Z" />
                </svg>
            </div>
            <div class="shape-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="726.5px" height="726.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.302" fill="none" d="M28.14,285.269 L325.37,21.216 C358.860,-8.852 410.655,-5.808 440.723,28.14 L704.777,325.37 C734.846,358.860 731.802,410.654 697.979,440.723 L400.956,704.777 C367.133,734.845 315.338,731.802 285.269,697.979 L21.216,400.955 C-8.852,367.132 -5.808,315.337 28.14,285.269 Z" />
                </svg>
            </div>
            <div class="shape-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="515px" height="515px">
                    <defs>
                        <linearGradient id="PSgrad_0" x1="0%" x2="89.879%" y1="0%" y2="43.837%">
                            <stop offset="0%" stop-color="rgb(67,186,255)" stop-opacity="1" />
                            <stop offset="100%" stop-color="rgb(113,65,177)" stop-opacity="1" />
                        </linearGradient>

                    </defs>
                    <path fill-rule="evenodd" fill="rgb(43, 142, 254)" d="M19.529,202.281 L230.531,14.699 C254.559,-6.660 291.353,-4.498 312.714,19.529 L500.295,230.531 C521.656,254.559 519.493,291.353 495.466,312.714 L284.463,500.295 C260.436,521.656 223.641,519.493 202.281,495.466 L14.699,284.463 C-6.660,260.435 -4.498,223.641 19.529,202.281 Z" />
                    <path fill="url(#PSgrad_0)" d="M19.529,202.281 L230.531,14.699 C254.559,-6.660 291.353,-4.498 312.714,19.529 L500.295,230.531 C521.656,254.559 519.493,291.353 495.466,312.714 L284.463,500.295 C260.436,521.656 223.641,519.493 202.281,495.466 L14.699,284.463 C-6.660,260.435 -4.498,223.641 19.529,202.281 Z" />
                </svg>
            </div>
            <div class="shape-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="972.5px" height="970.5px">
                    <path fill-rule="evenodd" stroke="rgb(255, 255, 255)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M38.245,381.103 L435.258,28.158 C480.467,-12.32 549.697,-7.964 589.888,37.244 L942.832,434.257 C983.23,479.466 978.955,548.697 933.746,588.888 L536.733,941.832 C491.524,982.23 422.293,977.955 382.103,932.746 L29.158,535.733 C-11.32,490.524 -6.963,421.293 38.245,381.103 Z" />
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            
                            <h2 class="title" data-aos="fade-up" data-aos-delay="800">"Unleashing the Future: Exploring the Latest Technologies Shaping Our World"</h2>
                            <p data-aos="fade-up" data-aos-delay="900">Unsure of the newest technologies! Be at ease; we are here to assist you.</p>
                            <div class="hero-btn" data-aos="fade-up" data-aos-delay="1000">
                                <a class="btn" href="blog.php">Read More</a>
                            </div>
                        </div>
                        <!-- Hero Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Service Start -->
        <div class="section techwix-service-section-03" style="background-color:#20639B;">
            <div class="container">
                <!-- Service Wrap Start -->
                <div class="service-wrap-03">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="/techwix/assets/images/ai.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="AI.php">Artificial Intelligence</a></h3>
                                    <p>The replication of human intelligence functions by machines, particularly computer systems, is known as artificial intelligence.</p>
                                    <div class="read-more">
                                        <a href="AI.php"><i class="fas fa-plus"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="/techwix/assets/images/cybersecurity.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="cybersecurity.php">Cyber Security</a></h3>
                                    <p>The practise of protecting networks, computers, servers, mobile devices, electronic systems, and data from hostile attacks is known as cyber security.</p>
                                    <div class="read-more">
                                        <a href="cybersecurity.php"><i class="fas fa-plus"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="/techwix/assets/images/cloudcomputing2.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="cloudcomputing.php">Cloud Computing</a></h3>
                                    <p>Cloud computing is the on-demand availability of computing resources (such as storage and infrastructure), as services over the internet.</p>
                                    <div class="read-more">
                                        <a href="cloudcomputing.php"><i class="fas fa-plus"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="/techwix/assets/images/ML.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="ML.php">Machine Lerning</a></h3>
                                    <p>Machine learning algorithms use computational methods to “learn” information directly from data without relying on a predetermined equation as a model. </p>
                                    <div class="read-more">
                                        <a href="ML.php"><i class="fas fa-plus"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="/techwix/assets/images/iot.png" alt="" width="50px;height:50px;">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="IOT.php">Internet of Things</a></h3>
                                    <p style="padding-bottom: 14%;">The IoT describes the network of physical objects “things” that are embedded with sensors,  and other technologies for the purpose of connecting and exchanging data with other devices and systems . </p>
                                    <div class="read-more">
                                        <a href="IOT.php"><i class="fas fa-plus"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="/techwix/assets/images/web dev.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="fullstack.php">Full Stack Development</a></h3>
                                    <p>A full-stack developer is a developer or engineer who can build both the front end and the back end of a website. The front end  and the back end  require different skill sets.
</p>
                                    <div class="read-more">
                                        <a href="fullstack.php"><i class="fas fa-plus"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="/techwix/assets/images/UI-UX.png" alt="" style="height:60px;">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="UI_UX.php">UI/UX <br> Design</a></h3>
                                    <p style="padding-bottom: 9%;">A UI/UX developer is a specialized software developer who focuses on creating user interface(UI) and UX for a variety of products, such as website  and mobile apps .</p>
                                    <div class="read-more">
                                        <a href="UI_UX.php"><i class="fas fa-plus"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <!-- Service Item Start -->
                            <div class="service-item-03">
                                <div class="service-img">
                                    <img src="/techwix/assets/images/datascience2.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="datascience.php">Data Science</a></h3>
                                    <p style="padding-bottom:8%">Data science combines math and statistics,  artificial intelligence (AI), and machine learning with specific subject matter expertise to uncover actionable insights hidden in an organization’s data.</p>
                                    <div class="read-more">
                                        <a href="datascience.php"><i class="fas fa-plus"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Service Item End -->
                        </div>
                    </div>
                </div>
                <!-- Service Wrap End -->
            </div>
        </div><br><br>
        <!-- Service End -->

        <!-- Footer Section Start -->
        <div class="section footer-section footer-section-03" style="background-image: url(assets/images/bg/footer-bg.jpg);">

            

            <!-- Footer Copyright Start -->
            <div class="footer-copyright-area">
                <div class="container">
                    <div class="footer-copyright-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <!-- Footer Copyright Text Start -->
                                <div class="copyright-text text-center">
                                    <p>© Copyrights 2023 FutureTechUnleashed All rights reserved. </p>
                                </div>
                                <!-- Footer Copyright Text End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </div>
        <!-- Footer Section End -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

    </div>

    <!-- JS
    ============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/back-to-top.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/appear.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>
</html>

<?php
}else{
    header("Location:login.php");
    exit();

}
?>