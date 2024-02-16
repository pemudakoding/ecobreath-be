<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcoBreathe</title>

    <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link rel="shortcut icon" href="/css/main/favicon.png">
    <link rel="stylesheet" href="/css/main/animate.css">
    <link rel="stylesheet" href="/css/main/aos.css">
    <link rel="stylesheet" href="/css/main/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main/fontawesome.css">
    <link rel="stylesheet" href="/css/main/lightcase.css">
    <link rel="stylesheet" href="/css/main/swiper.min.css">
    <link rel="stylesheet" href="/css/main/slick.css">
    <link rel="stylesheet" href="/css/main/slick-theme.css">
    <link rel="stylesheet" href="/css/main/style.css">
</head>
<body>
<!-- search area -->
<!-- <div class="search-area">
    <div class="search-input">
        <div class="search-close">
            <span></span>
            <span></span>
        </div>
        <form>
            <input type="text" name="text" placeholder="*Search Here.......">
        </form>
    </div>
</div> -->
<!-- search area -->

<div class="body-wrapper">
    <!-- mobile menu start -->
    <div class="mobile-menu">
        <nav class="mobile-header primary-menu d-xl-none">
            <div class="header-logo">
                <a href="index.html" class="logo"><img src="images/logo/01.png" alt="logo"></a>
            </div>
            <div class="header-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <nav class="menu">
            <div class="mobile-menu-area d-xl-none">
                <div class="mobile-menu-area-inner" id="scrollbar">
                    <div class="mobile-search">
                        <input type="text" placeholder="Search Here.........">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <ul class="m-menu">
                        <li>
                            <a href="#0">Home</a>
                            <ul class="m-submenu">
                                <li><a class="active" href="index.html">Home Page One</a></li>
                                <li><a href="index-2.html">Home Page Two</a></li>
                                <li><a href="onepage.html">One Page</a></li>
                                <li><a href="box.html">Box Layout</a></li>
                                <li><a href="rtl.html">Rtl Layout</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Pages</a>
                            <ul class="m-submenu">
                                <li><a href="about.html">About Page</a></li>
                                <li>
                                    <a href="#0">volunteer</a>
                                    <ul class="m-submenu">
                                        <li><a href="volunteer.html">volunteer Page</a></li>
                                        <li><a href="volunteer-single.html">volunteer single Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Projects</a>
                            <ul class="m-submenu">
                                <li><a href="project.html">Projects 1</a></li>
                                <li><a href="project-2.html">Projects 2</a></li>
                                <li><a href="project-3.html">Projects 3</a></li>
                                <li><a href="project-single.html">Projects Single</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Campaigns</a>
                            <ul class="m-submenu">
                                <li><a href="campaign.html">Campaign</a></li>
                                <li><a href="campaign-single.html">Campaign Single</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog</a>
                            <ul class="m-submenu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Shop</a>
                            <ul class="m-submenu">
                                <li><a href="shope-page.html">Shope Page</a></li>
                                <li><a href="shope-single.html">Shop Single</a></li>
                                <li><a href="shope-cart.html">Cart Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html">Contact</a>
                        </li>
                    </ul>

                    <ul class="social-link-list d-flex flex-wrap">
                        <li><a href="#" class="facebook"><i class=" fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="twitter-sm"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- moboli menu ending -->


    <!-- header section start -->
    <header class="header-section d-xl-block d-none">
        <div class="header-area">
            <div class="logo">
                <a href="{{ url('') }}"><img src="/images/logo/01.png" alt="logo"></a>
            </div>
            <div class="main-menu d-none d-xl-block">
                <ul class="menu">
                    <li>
                        <a href="{{ url('about-us') }}">About Us</a>
                    </li>
                    <li>
                        <a href="{{ url('blogs') }}">Knowledges</a>
                    </li>
                </ul>
            </div>
            <ul class="right-side d-none d-xl-flex">
            </ul>
        </div>
    </header>
    <!-- header section ending -->


    @yield('content')


    <!-- footer section start here -->
    <footer class="footer-section">
        <div class="footer-top" style="background-image: url('/images/footer/bg-image.jpg'); background-position: center bottom; overflow: hidden;">
            <div class="container">
                <div class="top">
                </div>
                <div class="bottom row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-12" data-aos="fade-right" data-aos-duration="700">
                        <div class="bottom-item">
                            <div class="footer-logo">
                                <a href="{{ url('') }}"><img src="/images/logo/01.png" alt="footer-logo"></a>
                            </div>
                            <p>We building Palu’s largerst network of Volunteer to share the quality of Palu’s air, So you can monitor the air quality for everyday. </p>
                            <a href="#" class="custom-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12" data-aos="fade-up" data-aos-duration="700">
                        <div class="bottom-item">
                            <h4>Recent Blog Posts</h4>
                            <ul>
                                <li class="post-item">
                                    <div class="post-thumb">
                                        <a href="#"><img src="/images/footer/blog/01.jpg" alt="footer"></a>
                                    </div>
                                    <div class="post-content">
                                        <h6>
                                            <a href="#">Enable Seaming Matera Foring Orhonal Ouring Vortals</a>
                                        </h6>
                                        <p>20 December 2019</p>
                                    </div>
                                </li>
                                <li class="post-item">
                                    <div class="post-thumb">
                                        <a href="#"><img src="/images/footer/blog/02.jpg" alt="footer"></a>
                                    </div>
                                    <div class="post-content">
                                        <h6>
                                            <a href="#">Unable Seaming Matera Foring Erhonal Ouring Vortals</a>
                                        </h6>
                                        <p>20 December 2019</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12" data-aos="fade-left" data-aos-duration="700">
                        <div class="bottom-item">
                            <h4>Our Photo Gallery</h4>
                            <ul class="footer-gallery">
                                <li>
                                    <div class="post-thumb">
                                        <a href="#"><img src="/images/footer/gallery/01.jpg" alt="footer-gallery"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#"><img src="/images/footer/gallery/02.jpg" alt="footer-gallery"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#"><img src="/images/footer/gallery/03.jpg" alt="footer-gallery"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#"><img src="/images/footer/gallery/04.jpg" alt="footer-gallery"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#"><img src="/images/footer/gallery/05.jpg" alt="footer-gallery"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#"><img src="/images/footer/gallery/06.jpg" alt="footer-gallery"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="section-wrapper">
                    <div class="left">
                        <span>&copy; 2023 EcoBreathe | Made with <i class="fas fa-heart"></i> in Palu</span>
                    </div>
                    <ul class="right">
                        <li>
                            <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                            <span>Facebook</span>
                        </li>
                        <li>
                            <a class="google" href="#"><i class="fab fa-google-plus-g"></i></a>
                            <span>Google Plus</span>
                        </li>
                        <li>
                            <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                            <span>Twitter</span>
                        </li>
                        <li>
                            <a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a>
                            <span>Pinterest</span>
                        </li>
                        <li>
                            <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <span>Linkedin</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end here -->
</div>

<!-- scroll to top -->
<a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
<!-- scroll to top -->


<script src="/js/main/jquery.js"></script>
<script src="/js/main/waypoints.min.js"></script>
<script src="/js/main/bootstrap.min.js"></script>
<script src="/js/main/fontawesome.min.js"></script>
<script src="/js/main/isotope.pkgd.min.js"></script>
<script src="/js/main/lightcase.js"></script>
<script src="/js/main/jquery.counterup.min.js"></script>
<script src="/js/main/swiper.min.js"></script>
<script src="/js/main/progress.js"></script>
<script src="/js/main/aos.js"></script>
<script src="/js/main/wow.min.js"></script>
<script src="/js/main/map-custom.js"></script>
<script src='/js/main/slick.min.js'></script>
<script src="/js/main/theia-sticky-sidebar.js"></script>
<script src="/js/main/functions.js"></script>
</body>
</html>
