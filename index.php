<html>
    <head>

        <title>COCONUT</title>
        <link rel="icon" href="assets/img/icons8-coconut-48.png" 
        type="image/x-icon">
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="coconut.css?<?=date('ymdhis')?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/particlesjs/particles.min.js"></script>
        <script src="https://kit.fontawesome.com/3f3368f345.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <header>
            <div id="header-blur"></div>
            <div id="header-content">

                <div class="nav-container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="assets/img/icons8-coconut-48.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                                <span>Coconut</span>IndoExporter
                            </a>
                          <!--  -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about-us">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#product">Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#visimisi">Visi Misi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                      </nav>
                </div>
    
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-12 col-md-12 col-lg-8 header-info">
                            <h1 class="bigtitle animate__animated animate__fadeInRight">
                                <span>COCONUT</span>
                                <span>Lorem Ipsum Dolor</span>
                            </h1>
                            <p class="animate__animated animate__fadeIn">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                            <img src="assets/img/googleplay.png">
                        </div>
                        
                        <div class="col-sm-12 col-md-12 col-lg-4 flex-center">
                            <img src="assets/img/coconut-fruit.png" style="width: 100%; height: auto;" class="animate__animated animate__zoomIn" />
                        </div>
                    </div>
                    
                </div>

            </div>
        </header>

        <!--  -->
        
        <div class="segment about-us" id="about-us">
            <div class="container about-container">
                
                <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="about-image">
                            <div id="satu">
                                <img src="assets/img/coconut-about.jpg" />
                            </div>
                            <div id="dua">
                                <img src="assets/img/coconut-about.jpg" />
                            </div>
                            <div id="utama">
                                <img src="assets/img/coconut-about.jpg" />
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 about-content">
                        <h2>ABOUT US</h2>

                        <div>
                            <p>Hammock next level trust fund, migas church-key godard enamel pin kitsch brooklyn. Ethical lomo succulents woke VHS offal crucifix man braid. Tousled small batch raw denim, tofu YOLO plaid portland selvage. Actually kombucha pug selvage food truck, glossier seitan.</p>
                            <p>Hammock next level trust fund, migas church-key godard enamel pin kitsch brooklyn. Ethical lomo succulents woke VHS offal crucifix man braid. Tousled small batch raw denim, tofu YOLO plaid portland selvage. Actually kombucha pug selvage food truck, glossier seitan.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!--  -->


        <!--  -->

        <div class="segment produk" id="product">
            <div class="dekorasi">
                
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-5 splash-left">
                        <img src="assets/img/coconut-splash.png">
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-7 splash-right" style="">
                        <h1>WHY CHOOSE US</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        
                    </div>
                </div>

            </div>
        </div>

        <div class="segment showcase">
            <div class="container">

                <div class="row">
                    <?php for($i=1; $i<=6; $i++): ?>
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="showcase-item">
                                    <h1>PRODUCT <?=$i?></h1>
                                    <div class="showcase-img">
                                        <img src="assets/img/coconut-prod-<?=$i?>.png" />
                                    </div>
                                </div>
                            </div>
                    <?php endfor; ?>       
                </div>  

            </div>
        </div>

    
        <!--  -->


        <div class="segment visimisi" id="visimisi">
            <div id="particles-js"></div>
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <h1>VISI</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <hr/>
                        <h1>MISI</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 video-wrapper">
                        <div class="">
                            <img src="assets/img/vid.jpg" style="width: 100%">
                        </div>
                        <div id="play-btn">
                            <i class="fas fa-play-circle" style="font-size: 5em"></i>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>

        <!--  -->

        <div class="segment inquiry">
            <div class="row">
            
                <div class="col-sm-12 col-md-12 col-lg-6 left" style="">
                 
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 right" style="padding: 20px 6rem;">
                    <h1>FORM INQUIRY</h1>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                            
                    <form>
                        <div class="row" style="margin: 30px 0;">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="FIRST NAME" />
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="LAST NAME" />
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="row" style="margin: 30px 0;">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="MOBILE" />
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="EMAIL" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" style="margin: 30px 0;">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!--  -->

        <div class="segment sponsor">
            <div id="sponsor-layer"></div>
            <div class="row">
            
                <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 80px 0;">
                        <h1>GET A 20% DISCOUNT<br/>
                        BY MAKING AN APPOINTMENT NOW</h1>

                        <div><button><i class="fab fa-whatsapp"></i> SEND ME A WHATSAPP MESSAGE</button></div>
                </div>

            </div>
        </div>

        <footer id="contact">
            <div class="text-center">
                <div style="background: #fff; display: inline-block; border-radius: 50%; margin: 50px 0; border: 8px solid gold">
                    <img src="assets/img/coconut-cool.png" style="height: 150px; width: auto" />
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <h2>OFFICE</h2>
                        <div>
                        1840 Anu Avenue Street<br/>
                        North West Jakarta, 12345.<br/><br/>
                        Monday – Friday: 9:00am – 9:00pm
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <h2>CONTACT INFO</h2>
                        <div>
                            <ul>
                                <li>
                                    Call Center : (021) 089980000
                                </li>
                                <li>
                                    Fax : (888) 089980000
                                </li>
                                <li>
                                    Email : office@coconut.com
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <h2>SOCIALS</h2>
                        <div>
                            <ul id="sosmed">
                                <li><button><i class="fab fa-whatsapp"></i></button></li>
                                <li><button><i class="fab fa-instagram"></i></button></li>
                                <li><button><i class="fab fa-youtube"></i></button></li>
                                <li><button><i class="fab fa-facebook"></i></button></li>
                                <li><button><i class="fab fa-twitter"></i></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            

            <hr style="width: 80%; margin-left: 10%; margin-top: 50px"/>

            <div class="copyright text-center">
                Copyright <li class="far fa-smile"></li> 2022 All rights reserved.
            </div>

        </footer>

        <div id="moveTop">
            <div class="inner">
                <i class="fas fa-chevron-up"></i>
            </div>
        </div>

        <script>
            particlesJS.load('particles-js', 'assets/particlesjs/particle.json', function() {
                console.log('callback - particles.js config loaded');
            });

            $('#moveTop').click(function(){
                window.scrollTo({top: 0, behavior: 'smooth'});
            })
        </script>

    </body>
</html>