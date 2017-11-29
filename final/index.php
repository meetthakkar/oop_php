<?php

/*require_once("config.php");
require_once("database.php");
*/
include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Goody</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fav.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
       @font-face {
            font-family: Impact;
            src: url(Impact_TTF/Impact.ttf);
            font-family: Avenir;
            src: url(Avenir/Avenir.ttf);
        }

        .navbar {
            margin-bottom: 0;
            
        }

        .price{
            font-family: Avenir;
        }

        .navbar-custom{
            background-color: grey;
        }

        .carousel-control.left, .carousel-control.right {
            background-image:none !important;
            filter:none !important;
        }

        .affix {
            top: 0;
            width: 100%;
            z-index: 200;
        }

        .affix + .container-fluid {
            padding-top: 70px;
        }        

        @media (min-width: 768px) {
            .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
          }
        }

        #about 
        {
            padding-top:50px; 

            background-color: #cccccc; 
        }       
        

        #pay {
            background-color: #ffff00;
            padding-bottom: 200px;
        }

        #story{
            background-color: white;
        }

        #last{
            background-color: white;
        }

        .start{
            font-family: Impact;
            font-size: 28px;
        }

        .end{
            font-family: Avenir;
            font-size: 21px;
        }

        .inside {
            padding-left: 300px;
            padding-top: 50px;
        }

        .tall{
            padding-top: 100px;
        }      

        .button6 {
            background-color: yellow;
            color: black;
            padding: 40px;
            border: 2px solid #555555;
            
            font-family: Impact;
            font-size: 22px;
        }

        .button6:hover {
            background-color: black;
            color: yellow;
        }

        .button7 {
            background-color: yellow;
            color: black;
            padding: 40px 50px;
            border: 2px solid #555555;
            font-family: Impact;
            font-size: 22px;
        }

        .button7:hover {
            background-color: black;
            color: yellow;
        }

        @media screen and (min-width: 270px) and (max-width: 819px)
        {
            .button6 {
                background-color: yellow;
                color: black;
                padding: 40px;
                border: 2px solid #555555;
                
                font-family: Impact;
                font-size: 22px;
            }

            .button6:hover {
                background-color: black;
                color: yellow;
            }

            .button7 {
                background-color: yellow;
                color: black;
                padding: 40px 47px;
                border: 2px solid #555555;
                font-family: Impact;
                font-size: 22px;
            }

            .button7:hover {
                background-color: black;
                color: yellow;
            }

        }


    </style>
    <link rel="stylesheet" type="text/css" href="lgdesktop.css">
    <link rel="stylesheet" type="text/css" href="mdesktop.css">
    <link rel="stylesheet" type="text/css" href="mobile.css">
    <link rel="stylesheet" type="text/css" href="ltablet.css">
</head> 

<body>

    <!-- ========================REGULAR NAVBAR (FOR DESKTOP AND TABLET )========================== -->

    <nav class="navbar navbar-inverse reg" data-spy="affix" id="nav-anchor" role="navigation" data-offset-top="197">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>    
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav tleft">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#story">GOODS</a></li> 
                <li id="left_menu"><a href="#pay">PURCHASE</a></li>
                <li id="left_menu"><a href="#last">CONTACT</a></li>                    
            </ul>

            <ul class="nav navbar-nav navbar-center tcenter">                              
                <li id="logo_menu"><a href="#"><img src="logo.png"></a></li>                                
            </ul>

            <ul class="nav navbar-nav navbar-right tright">
                <li id="right_menu"><a href="#pay">PURCHASE</a></li>
                <li id="right_menu"><a href="#last">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <!-- =========================END OF NAVBAR============================ -->

    <!-- =========================== CAROUSEL ============================== -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>    
        </ol>

        <div class="carousel-inner" role="listbox">           
            <div class="item active">
                <img class="first-slide" src="gs.jpg" alt="Third slide">    
            </div>

            <div class="item">
                <img class="second-slide" src="gs1.jpg" alt="First slide">       
            </div>

            <div class="item">
                <img class="third-slide" src="gs3.jpg" alt="Second slide"> 
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- ================================ END OF CAROUSEL =============================== -->

    <!-- ============================== SECTION 1 - GOODY INTRO ========================= -->

    <div id="about" class="container-fluid">

          
        <div class="row">

            <div class="col-lg-1 col-md-1">
                
            </div>

            <div class="col-lg-6 col-md-12 about_pic">

                <img class="img-responsive center-block" src="gs12.png">
                
            </div>         

            <div class="col-lg-4 col-md-12 about_para">

                <h3 class="start"><u>WHAT IS GOODY?</u></h3>

                <p class="end">Goody is an all-in-one dog care package with a variety of fun toys and accessories for your canine companion. Whether you're on the run or just enjoying a relaxing dat at home, Goody keeps your dog endlessly happy.</p>

                <h3 class="start"><u>OUR STORY</u></h3>

                <p class="end">It started with one dog. One day our company dog, Yogi, was visiting our office and we noticed how many different items are used to keep him safe and entertained - toys, dog treats, food bowls - lots of stuff! So we came up with an idea; create an all-in-one kit that contains everything a dog needs to stay happy and healthy.</p>                
            </div>  

            <div class="col-lg-1 col-md-1">
                
            </div>                      
        </div>      
    </div>

    <!-- ============================== END OF SECTION 1 ================================ -->

    <!-- ============================= SECTION 2 - OUR STORY ============================ -->

    <div id="story" class="container-fluid">

        <div class="row center-block story_gap">

            <div class="col-lg-5 col-md-12 col-xs-12 story_para">
                <h3 class="start"><u>WHAT'S INSIDE?</u></h3>

                <p class="end">Each Goody Tube is packed with Ruv for the
                special furry friend in your life. A handpicked selection of pup essentials is securely snuggled into each Ruff Pack. Whether it's a present for a friend, a curated <br> welcome gift or just a treat for your  four-legged companion - Goody is a pawsome way to show some love!</p><br>

                <h4 class="start" style="font-size: 23px;"><u>Each tube includes:</u></h4>

                <p class="end">Frisbee / Wag Bag / Tennis Ball / Chew Toy / Water Bowl/ Water Bottle / Carry Bag</p>
            </div>

            <div class="col-lg-7 col-md-12 col-xs-12 story_pic">
                <img class="img-responsive center-block" src="gif.gif">
            </div>          
        </div>
        
    </div>

    <!-- ============================== END OF SECTION 2 ================================ -->

    <!-- ================================ SECTION 3 ===================================== -->

    <div id="pay" class="container-fluid">
        
        <div class="row tall">
            
            <div class="col-lg-6 col-md-12 pay_pic">
                <img class="img-responsive center-block" src="tall.png">
            </div>

            <div class="col-lg-1">
                
            </div>
            

            <div class="col-lg-3 col-md-12 pay_story">
                <h3 class="start"><u>HOW MANY?</u></h3>
                <p class="end">Get ready for goody! Your fresh new tube is on its way to your home and your dog's mouth.</p>
                
                <p class="end">Goody is an all-in-one dog care package with a variety of fun toys and accessories for your favorite canine companion. Whether you're on the run or just enjoying a relaxing day at home. Goody keeps your dog endlessly happy.</p>

                <p class="end">Proceeds from every purchase of a Goody package are donated to the save a paw foundation.</p>
                <br><br>

                 <a href="single.php"><button class="button6">SINGLE <br><span class="price">$18</span> </button></a><!--
                 --><!--<a href="case.php"><button class="button7">CASE <br> <span class="price">$108</span></button></a>-->
            </div>

            <div class="col-lg-2">

               
            </div>

                            
        </div>
    </div>

    <!-- ============================= END OF SECTION 3 ================================= -->

    <!-- ========================== SECTION 4 - NEWSLETTER ============================== -->

    <div id = "last" class="container-fluid">
        
        <div class="row">
  
            <img class="img-responsive center-block" src="last.jpg">    
        </div>
    </div>
            
    
    <!-- ========================== END OF SECTION - 4 =================================== -->

    <!-- =============================== FOOTER ========================================== -->

    <!--Footer-->
    <footer class="page-footer center-on-small-only stylish-color-dark">

        <!--Footer Links-->
        <div class="container">
            <div class="row footer_style">

                <!--First column-->
                <div class="col-md-4 footer_one">
                    <center>
                        <h5 class="title mb-4 mt-3 font-bold footer_text">(310)329-4141</h5>
                        <h6 class="end">WOOF@GOODY.US</h6>
                    </center>                    
                </div>

                <div class="col-md-4 footer_two">
                    <center>
                        <h5 class="title mb-4 mt-3 font-bold footer_text">13724 HARVARD PL B,</h5>
                        <h5 class="footer_text">GARDENA, CA 90249</h5>
                    </center>
                </div>
                <div class="col-md-4 footer_three footer_icons">
                    <center>
                        <ul class="social-network">
                            <li><!--Facebook-->
                                <a href="https://www.facebook.com/Goodyus-1670670476339204/" target="_blank" class="icons-sm fb-ic"><i class="fa fa-facebook fa-lg black-text"></i></a>
                            </li>

                            <!--<li>
                                Twitter-->
                                <!--<a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter fa-lg black-text"> </i></a> 
                            </li>-->

                            <li>
                                <!--Instagram-->
                                <a href="https://www.instagram.com/goody.us/" target="_blank" class="icons-sm ins-ic"><i class="fa fa-instagram fa-lg black-text"> </i></a>
                            </li>

                            <br><br>

                            <li id="nl_button">
                                <button id="mobile_footer" class="button button5" data-toggle="modal" data-target="#myModalNorm" style="padding-left: 10px; text-align: center;">Newsletter</button>
                            </li>        

                            <!--<li>
                                <a href="" id="mobile_footer"><button class="button button5">NEWSLETTER</button></a>
                            </li>-->                  
                        </ul>            
                    </center>                                                                                       
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>

                    <h4 class="modal-title" id="myModalLabel">
                        Newsletter
                    </h4>
                </div>
          
                <!-- Modal Body -->
                <div class="modal-body">         
                    <form role="form" method="post" action="script.php" id="subscribe-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" data-validation="required" class="form-control" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" data-validation="email" class="form-control" placeholder="Enter email"/>
                        </div>
                        <div id="form-result"></div>                            
                </div>

          
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default" name="submit">Subscribe Me</button>
                    <!--<input type="" name="submit" value="Subscribe Me">-->
                </div>
                </form> 
            </div>
        </div>
    </div>
<!--/.Footer-->


    <!-- ============================= END OF FOOTER ===================================== -->

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='js/jquery.scrollto.js'></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        $.validate({
          form : '#subscribe-form',
         
          onSuccess : function($form) 
          {

            $.post("script.php",
            {
              name: $('#name').val(),
              email: $('#email').val()
            },
            function(data, status){
              $('#form-result').html(data);
            });

            return false; // Will stop the submission of the form
          }    
        });
    </script> 
    <script>        
        $(document).ready(function(){
            
            /** 
             * This part does the "fixed navigation after scroll" functionality
             * We use the jQuery function scroll() to recalculate our variables as the 
             * page is scrolled/
             */
            $(window).scroll(function(){
                var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
                var div_top = $('#nav-anchor').offset().top;
                    if (window_top > div_top) {
                        $('nav').addClass('stick');
                    } else {
                        $('nav').removeClass('stick');
                    }
            });
            
            
            /**
             * This part causes smooth scrolling using scrollto.js
             * We target all a tags inside the nav, and apply the scrollto.js to it.
             */
            $("nav a").click(function(evn){
                evn.preventDefault();
                $('html,body').scrollTo(this.hash, this.hash); 
            });
            
            
            
            /**
             * This part handles the highlighting functionality.
             * We use the scroll functionality again, some array creation and 
             * manipulation, class adding and class removing, and conditional testing
             */
            var aChildren = $("nav li").children(); // find the a children of the list items
            var aArray = []; // create the empty aArray
            for (var i=0; i < aChildren.length; i++) {    
                var aChild = aChildren[i];
                var ahref = $(aChild).attr('href');
                aArray.push(ahref);
            } // this for loop fills the aArray with attribute href values
            
            $(window).scroll(function(){
                var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
                var windowHeight = $(window).height(); // get the height of the window
                var docHeight = $(document).height();
                
                for (var i=0; i < aArray.length; i++) {
                    var theID = aArray[i];
                    var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                    var divHeight = $(theID).height(); // get the height of the div in question
                    if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                        $("a[href='" + theID + "']").addClass("nav-active");
                    } else {
                        $("a[href='" + theID + "']").removeClass("nav-active");
                    }
                }
                
                if(windowPos + windowHeight == docHeight) {
                    if (!$("nav li:last-child a").hasClass("nav-active")) {
                        var navActiveCurrent = $(".nav-active").attr("href");
                        $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                        $("nav li:last-child a").addClass("nav-active");
                    }
                }
            });
        });
    </script>
    <script type="text/javascript" src="scrollTop.js"></script>
</body>
</html>