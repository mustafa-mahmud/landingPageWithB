<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta http-equiv="Cache-Control" content="no-cache"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <!--[if lte IE 9]>
        <link href='/PATH/TO/FOLDER/css/animations-ie-fix.css' rel='stylesheet'>
        <![endif]-->
        <title>Bootstrap 4</title>
        <!----CSS----->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/practise.css" />
        <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css" />
        <!----Google Fonts------>
        <link 
            href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
            rel="stylesheet"  type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Galada|Shrikhand" rel="stylesheet">
        <!--css: 
        font-family: 'Shrikhand', cursive;
        font-family: 'Galada', cursive;
        --->
    </head>
    <body>
        <!--Navigation--->
        <header>
            <a href="#" class="navbar-brand position-absolute" style="left: 10px;top: 5px; z-index: 8;"><img src="images/mother2.ico" alt="logo" title="log" /></a>
            <a data-click="0" class="position-absolute menu-toggle px-3 py-2 bg-dark rounded" href="#" style="top:20px; right: 20px;">
                <i class="fa fa-bars text-white lead"></i>
            </a>
        </header>
        <!------Header------->
        <header class="banner d-flex position-relative py-5" style="overflow: hidden;">
            <div class="container-fluid py-5">
                <div class="row">
                    <nav class="navbar no-gutters p-0 d-inline-flex position-absolute float-right sidebar-wrapper">
                        <ul class="navbar-nav">
                            <li class="nav-item mySidebar"><a class="nav-link active" href="#">Home</a></li>
                            <li class="nav-item mySidebar"><a class="nav-link" href="#">About</a></li>
                            <li class="nav-item mySidebar"><a class="nav-link" href="#">Contact</a></li>
                            <li class="nav-item mySidebar"><a class="nav-link" href="#">Gallery</a></li>
                        </ul>
                    </nav>
                    <div class="myText text-center align-self-center mx-auto py-5">
                        <div class="p-3">
                            <h1 class="mb-3 p-2 text-capitalize">welcome to stylish world!</h1>
                            <p class="mb-3 font-weight-light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <button type="button" class="btn p-3 bg-warning btn-lg text-uppercase rounded-0">welcome</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-----Info------->
        <section class="infoText p-5">
            <div class="container-fluid">
                <div class="row bg-dark">
                    <article class="my-auto mx-auto border border-dark text-center bg-warning p-2" style="border-width: 10px !important;">
                        <h1 class="lead font-weight-bold p-3">Nunc nobis videntur parum clari, fiant sollemnes in futurum.</h1>
                        <p class="font-weight-light p-3">Humanitatis per seacula quarta decima et quinta decima</p>
                        <button type="button" class="btn p-3 bg-warning btn-lg text-uppercase rounded-0">welcome</button>
                    </article>
                </div>
            </div>
        </section>
        <!-----Services------>
        <section class="service bg-dark">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-12"><h1 class="myText mb-5 text-capitalize text-warning font-weight-bold p-3">see our services</h1></div>
                    <div class="mb-5 col-12 col-sm-6 col-lg-3 text-center border rounded-2 border-warning">
                        <div class="p-3">
                            <p class="p-5 p-xl-4 bg-warning rounded-top mb-2">
                                <i class="fa fa-3x fa-fw fa-beer display-4 font-color"></i>
                            </p>
                            <h2 class="myText2 p-2 text-light my-">CHEERS</h2>
                            <p class="p-2 text-danger mb-0">dolore magna aliquam erat</p>
                            <button type="button" class="mt-0 btn btn-md btn-info p-3">More</button>
                        </div>
                    </div> 
                    <div class="mb-5 col-12 col-sm-6 col-lg-3 text-center border rounded-2 border-warning">
                        <div class="p-3">
                            <p class="p-5 p-xl-4 bg-warning rounded-top mb-2">
                                <i class="fa fa-3x fa-fw fa-mobile display-4 font-color"></i>
                            </p>
                            <h2 class="myText2 p-2 text-light my-">RESPONSIVE</h2>
                            <p class="p-2 text-danger mb-0">dolore magna aliquam erat</p>
                            <button type="button" class="mt-0 btn btn-md btn-info p-3">More</button>
                        </div>
                    </div> 
                    <div class="mb-5 col-12 col-sm-6 col-lg-3 text-center border rounded-2 border-warning">
                        <div class="p-3">
                            <p class="p-5 p-xl-4 bg-warning rounded-top mb-2">
                                <i class="fa fa-pen-square fa-3x fa-fw display-4 font-color"></i>
                            </p>
                            <h2 class="myText2 p-2 text-light my-">EDITABLE</h2>
                            <p class="p-2 text-danger mb-0">dolore magna aliquam erat</p>
                            <button type="button" class="mt-0 btn btn-md btn-info p-3">More</button>
                        </div>
                    </div> 
                    <div class="mb-5 col-12 col-sm-6 col-lg-3 text-center border rounded-2 border-warning">
                        <div class="p-3">
                            <p class="p-5 p-xl-4 bg-warning rounded-top mb-2">
                                <i class="fa fa-3x fa-fw fa-dollar-sign display-4 font-color"></i>
                            </p>
                            <h2 class="myText2 p-2 text-light my-">MONEY</h2>
                            <p class="p-2 text-danger mb-0">dolore magna aliquam erat</p>
                            <button type="button" class="mt-0 btn btn-md btn-info p-3">More</button>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-------Next Page----->
        <section class="next py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="myText font-weight-bold py-3 mb-3 text-capitalize text-dark text-italic">share your smile <i class="fa fa-smile text-dark"></i> with us!</h1>
                        <p class="font-weight-light py-3 mb-3">Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        <div class="feature bg-dark my-auto mx-auto">
                            <video autoplay loop muted  class="embed-responsive-item">
                                <source src="videos/feature.mp4" type="video/mp4" />
                            </video>
                        </div>
                        <button type="button" class="my-5 btn btn-lg btn-dark rounded-0 text-uppercase">features</button>
                    </div>
                </div>
            </div>
        </section>
        <!------Portfolio------>
        <section class="portfolio py-7">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="p-2">Portfolio</h4>
                        <h1 class="myText p-2 mb-3 text-capitalize">for demo pages</h1>
                        <p class="p-2 font-weight-light">tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                    </div>
                </div>
                <div class="row text-center myPort">
                    <div class="col-12 col-md-6 col-xl-6 py-5 mb-3">
                        <div class="p-4 text-white bg-dark" style="background: olive;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 py-5 mb-3">
                        <div class="p-4 text-white bg-danger" style="background: olive;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 py-5 mb-3">
                        <div class="p-4 text-white bg-info" style="background: olive;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 py-5 mb-3">
                        <div class="p-4 text-white bg-success" style="background: olive;">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----Feedback------->
        <section class="feedback py-8">
            <div class="container-fluid">
                <div class="row p-2 text-center">
                    <div class="col-12  mb-3 mx-auto col-md-7 p-3 bg-warning">
                        <h1 class="myText py-3 text-capitalize border-bottom">please give us a feedback !</h1>
                        <p class="my-2">It takes just less one minute.</p>
                    </div>
                    <div class="col-12 my-auto mx-auto col-md-7 p-3 bg-dark">
                        <form>
                            <div class="form-row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <i class="input-group-text fa fa-user text-danger rounded-0"></i>
                                            </div>
                                            <input type="text" name="user" class="form-control rounded-0" placeholder="name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="text-danger font-weight-bold btn btn-outline-secondary rounded-0 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gender</button>
                                            <div class="dropdown-menu">
                                                <i class="dropdown-item" data-gender="Male">Male</i>
                                                <i class="dropdown-divider"></i>
                                                <i class="dropdown-item" data-gender="Female">Female</i>
                                                <i class="dropdown-divider"></i>
                                                <i class="dropdown-item" data-gender="Others">Others</i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control rounded-0" placeholder="gender" aria-label="Text input with dropdown button">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <i class="input-group-text font-weight-bold text-danger">@</i>
                                            </div>
                                            <input type="email" placeholder="email" class="form-control rounded-0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea placeholder="comment" class="form-control rounded-0 mb-3" rows="5"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="float-left btn btn-success btn-md mt-2 mb-2 rounded-0 text-uppercase">send <i class="fa fa-plane text-dark"></i></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-----Google Map------>
        <section class="googleMap">
            <div class="container-fluid">
                <div class="row">
                    <div id="googleMap" style="width: 100%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1082.1946751435755!2d91.80676031729818!3d22.496029903102112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd66bfc612d63%3A0x863683c51825eef9!2sShere+Bangla+Mazar!5e1!3m2!1sen!2sbd!4v1515040325948" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!------Footer------>
        <footer class="myFooter py-8 bg-info">
            <div class="container-fluid">
                <div class="row">
                    <div class="my-auto text-center mx-auto align-self-center">
                        <div class="social col-12 mb-5">
                            <ul class="list-inline">
                                <li class="list-inline-item rounded-circle p-2 p-sm-3 p-md-4 bg-dark">
                                    <a href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item rounded-circle p-2 p-sm-3 p-md-4 bg-dark">
                                    <a href="#">
                                        <i class="fa fa-twitter fa-fw"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item rounded-circle p-2 p-sm-3 p-md-4 bg-dark">
                                    <a href="#">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="copyRight col-12 text-center">
                            <p class="font-weight-light">all right reserved &copy; 2018 mithu</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>







        <!-----JS------->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>	
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript">
            var menu_toggle = document.querySelector(".menu-toggle");
            var i = menu_toggle.children[0];
            var sidebar_wrapper = document.querySelector(".sidebar-wrapper");
            menu_toggle.addEventListener("click", function () {
                var clickVal = parseInt(menu_toggle.getAttribute("data-click"));
                if (clickVal === 0) {
                    i.classList.remove("fa-bars");
                    i.classList.add("fa-times");
                    menu_toggle.setAttribute("data-click", "1");
                    sidebar_wrapper.style = "right:0px";
                } else {
                    i.classList.remove("fa-times");
                    i.classList.add("fa-bars");
                    menu_toggle.setAttribute("data-click", "0");
                    sidebar_wrapper.style = "right:-280px";
                }
            });
        </script>
    </body>
</html>
