<?php

/*require_once("config.php");
require_once("database.php");
*/
require_once("config.php");
require_once("database.php");
include_once ("common.inc.php");
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

        .story_form {
            padding-top: 100px;
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

        .button5 {
            background-color: white;
            color: black;
            border: 2px solid #555555;

        }

        .button5:hover {
            background-color: black;
            color: white;
        }

        .button6 {
            background-color: black;
            color: yellow;
            padding: 40px;
            border: 2px solid #555555; 
            font-family: Impact;
            font-size: 22px;
        }

        .button6:hover {
            background-color: yellow;
            color: black;
        }

        /*--------------Add To Cart Button-----------*/
        .button7 {                          
            background-color: Transparent;
            background-repeat:no-repeat;
            padding-left: 101px; 
            padding-right: 100px; 
            padding-top: 20px; 
            padding-bottom: 20px;
            font-family: Impact; 
            font-size: 22px;
            border: none;
            cursor:pointer;
            overflow: hidden;
            outline:none;
        }


        @media screen and (min-width: 340px) and (max-width: 1200px)
        { 
            .dog_img {
                display: none;
            }

            .one_img {
                display: none;
            }

            #register-form {
                width: 350px;
            }

            .two_img {
                display: none;
            }

            .gif_img {
                display: none;
            }

            #story {
                padding-top: 30px;
            }

            #about {
                padding-bottom: 20px;
            }
        }      
    </style>
    <link rel="stylesheet" type="text/css" href="lgdesktop.css">
    <link rel="stylesheet" type="text/css" href="mdesktop.css">
    <link rel="stylesheet" type="text/css" href="mobile.css">
    <link rel="stylesheet" type="text/css" href="ltablet.css">
    <link rel="stylesheet" type="text/css" href="base.css">
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
            <!--<ul class="nav navbar-nav tleft">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#story">GOODS</a></li> 
                <li id="left_menu"><a href="#pay">PURCHASE</a></li>
                <li id="left_menu"><a href="#last">CONTACT</a></li>                    
            </ul>-->

            <ul class="nav navbar-nav navbar-center tcenter">                              
                <li id="logo_menu"><a href="index.php"><img src="logo.png"></a></li>                                
            </ul>

            <!--<ul class="nav navbar-nav navbar-right tright">
                <li id="right_menu"><a href="#pay">PURCHASE</a></li>
                <li id="right_menu"><a href="#last">CONTACT</a></li>
            </ul>
        </div>-->
    </nav>

    <!-- =========================END OF NAVBAR============================ -->

    <!-- ============================== SECTION 1 - GOODY INTRO ========================= -->

    <div id="about" class="container-fluid">

           
        <div class="row">

            <div class="col-lg-1 ">
                
            </div>

            <div class="col-lg-4  ">
                <img class="img-responsive center-block dog_img" src="dog.png">                
            </div>   

            <div class="col-lg-2">
                <img class="one_img" src="one.png">
            </div>       

            <div class="col-lg-4">

                <?php   

                    

                    if(isset($_POST['submit']))
                    {
                        $fname = $database->escape_string($_POST['fname']);
                        $lname = $database->escape_string($_POST['lname']);
                        $email = $database->escape_string($_POST['email']);
                        $address = $database->escape_string($_POST['address']);
                        $city = $database->escape_string($_POST['city']);
                        $zip = $database->escape_string($_POST['zip']);
                        $state = $database->escape_string($_POST['state']);
                        $phone = $database->escape_string($_POST['phone']);

                        $q1 = $database->query("INSERT INTO user (fname, lname, email, address, city, zip, state, phone, pay_time) VALUES ('".$fname."','".$lname."','".$email."','".$address."','".$city."','".$zip."','".$state."','".$phone."',now())");

                        if($database->confirm_query($q1))
                            echo "success!";

                        if($state=="CA")
                            $total = $total + ($total*0.075);

                    }

                    $database->products();
                    $database->cart();

                    // General website data
                    $company_name = "Hotel Emporium Inc.";
                    $bank_statement_descripton = "ACME-WIDGETS";
                    // Order Data
                    $description = "Widgets";
                    $quantity = 12;
                    $statement_descriptor = $bank_statement_descripton . ' ' . $quantity . ' ' . $description;
                    $amount = $total;
                ?>
                <p style="font-size: 11px; padding-top: 5px;"> *Includes $20 shipping. If more than <br> 6 products, kindly purchase the case!</p>                 
            </div>  

            <div class="col-lg-2 col-md-1">
                
            </div>                                  
        </div>      
    </div>

    

    <!-- ============================== END OF SECTION 1 ================================ -->

    <!-- ============================= SECTION 2 - OUR STORY ============================ -->

    <div id="story" class="container-fluid">

        <div class="row center-block story_gap">            

            <div class="col-lg-5 col-md-12 story_form">

                <form class="form-horizontal" method="post" action="" id="register-form" >
                    
                    <fieldset>

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name" class="col-lg-2 control-label">Name:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                            </div>
                        </div>

                        <!-- Email Address --> 
                        <div class="form-group">
                            <label for="emailAddress" class="col-lg-2 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input type="email"  class="form-control" name="email" id="email" placeholder="Email Address">
                            </div>
                        </div>    

                        <!-- Address -->
                        <div class="form-group">
                            <label for="address" class="col-lg-2 control-label">Address:</label>
                            <div class="col-lg-8">
                            <input type="text"  class="form-control" name="address" id="address" placeholder="Address">
                            </div>
                        </div>

                        
                        <!-- City -->
                        <div class="form-group">
                            <label for="city" class="col-lg-2 control-label">City:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="city" id="city" placeholder="City">
                            </div>                            
                        </div>                                                       
                            
                    
                        <div class="form-group">
                            <label for="zip" class="col-lg-2 control-label">ZIP:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="zip" id="zip" placeholder="ZIP">
                            </div>
                        </div>                 
                        
                        <div class="form-group">
                            <label for="emailSubject" class="col-lg-2 control-label">State:</label>  
                            <div class="col-lg-4">
                                <select class="form-control" name="state" id="state">
                                    <option value="" selected="selected">State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>                          
                        </div>                        

                        <div class="form-group">
                            <label for="emailSubject" class="col-lg-2 control-label">Phone:</label>
                            <div class="col-lg-4">
                                <input type="text"  class="form-control" name="phone" id="phone" placeholder="Phone">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-lg-2 col-md-2 control-label"></label>
                            <div class="col-lg-4 col-md-4">
                                <input class="button button5" type="submit" name="submit" value="Add Information">
                                <!--<button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>-->
                            </div>
                        </div>                                 
                    </fieldset>                    
                </form> 
            </div>  

            <div class="col-lg-2">
                <img class="two_img" src="two.png">
            </div>

            <div class="col-lg-5">
                <img class="img-responsive gif_img" src="gif.gif">                
            </div>                                                        
        </div>       
    </div>

    <!-- ============================== END OF SECTION 2 ================================ -->

    <!-- ================================ SECTION 3 ===================================== -->

    <div id="pay" class="container-fluid">
        
        <div class="row tall">
            

            <div class="col-lg-4">
                
            </div>
            

            <div class="col-lg-3 col-md-12 pay_story" style="padding-left: 100px;">
                <div id="hidden_div">
                    <input type="hidden" id="stripe-pk" value="<?=$st_test_public_key?>"/>
                    <input type="hidden" id="company-name" value="<?=$company_name?>"/>
                    <input type="hidden" id="quantity" value="<?=$quantity?>">
                    <input type="hidden" id="amount" value="<?=$amount?>">
                    <input type="hidden" id="description" value="<?=$description?>">
                    <input type="hidden" id="statement-descriptor" value="<?=$statement_descriptor?>">
                    <p id="checkout-loading-message" class="checkout-message center-text">
                        Loading ...
                    </p>
                    <script src="https://checkout.stripe.com/checkout.js"></script>
                    
                    <!--<p id="checkout-btn-container" class="center-text imp">
                        <a id="checkout-btn" href="#" class="pay-btn">Credit Card</a>
                    </p>-->
                    <p id="checkout-processing-message" class="checkout-message center-text">
                        Processing ...
                    </p>
                    <p id="checkout-success-message" class="checkout-message center-text">
                        Thank you for your order.
                    </p>
                    <p id="checkout-fail-message" class="checkout-message center-text error-message-text">
                        Something Went Horribly Wrong!
                    </p>
                    <p id="checkout-btn-container" class="center-text imp"><button id="checkout-btn" class="button button6">PAY NOW</button></p>
                </div>          
            </div>

            <div class="col-lg-2">

               
            </div>

                            
        </div>
    </div>

    <!-- ============================= END OF SECTION 3 ================================= -->

    <!-- ========================== SECTION 4 - NEWSLETTER ============================== -->

    
    
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

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script type="text/javascript" src="scrollTop.js"></script>
    <script src="checkout_ui.js"></script>
    <script type="text/javascript">        
    function ShowPay()
    {
        $("#hidden_div").fadeIn("fast");
    }
    </script>
    <script src="validate.js"></script>
</body>
</html>