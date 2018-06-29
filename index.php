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
        <title></title>
        <!----CSS----->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/practise.css" />
        <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css" />
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
        <header class="banner d-flex position-relative">
            <div class="container-fluid p-0">
                <div class="row p-0 no-gutters">
                    <div class="embed-responsive embed-responsive-4by3">
                        <nav class="navbar no-gutters p-0 d-inline-flex position-absolute float-right sidebar-wrapper">
                            <ul class="navbar-nav">
                                <li class="nav-item mySidebar"><a class="nav-link active" href="#">Home</a></li>
                                <li class="nav-item mySidebar"><a class="nav-link" href="#">About</a></li>
                                <li class="nav-item mySidebar"><a class="nav-link" href="#">Contact</a></li>
                                <li class="nav-item mySidebar"><a class="nav-link" href="#">Gallery</a></li>
                            </ul>
                        </nav>
                        <video autoplay loop muted id="" class="embed-responsive-item">
                            <source type="video/mp4" src="videos/Spring.mp4" />
                        </video>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </header>








        <!-----JS------->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.bundle.js"></script>	
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
