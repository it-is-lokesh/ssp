<?php include('header.php');?>

<body data-spy="scroll" data-target="#primary-menu">
    <style>
    .foot{
        text-align:center;
        padding-top:20px;
    }
    .error{
        color: #FF0000;
    }
    .dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
 /* Important for vertical align on mobile phones */
}
.dropdown a{
    position:relative;
}
    /* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: relative;
  background-color:  #ffffff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align:center;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ffffff;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
  
}
 .logotop{
        width:300px;
    }
@media only screen and (max-width: 768px){
    .logotop{
        width:200px;
    }
}

    </style>
    

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="https://www.ecell-iitkgp.org/index.php" class="navbar-brand logo">
                    <img class="logotop" src ="images/e_cell.png" height="100px" >
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#timeline">TIMELINE</a></li>
                    <li><a href="#investors">INVESTORS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    
                    <li><div class="dropdown" style="text-align:center; padding:30px 15px;"><a  href="#">REGISTER <i class="fa fa-caret-down"></i></a>
                   <div class="dropdown-content">
                  <a href="https://forms.gle/Jo8qTC2LUNjUfj7k8" target="_blank">Startups</a>
                  <a href="investor.php" target="_blank">Investors</a>
                   </div>
                   </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->

    

    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home">
        <div class="absolute anlge-bg"></div>
        <div style=" margin-top:30px;" class="container">
                <div  class="col-xs-12 col-md-6 col-sm-6 header-text " >
                    <img src="images/header2.png"style="width:auto;height:auto;">
                    
                </div>
                <div style="padding-top:75px;" class="col-xs-12 col-md-6 header-text">
                    <img src="images/logo2.png" style="padding-bottom: 75px; width:auto;height:auto;">
                    <h3> “It’s almost always harder to raise capital than you thought it would be, and it always takes longer. So plan for that.”  
</h3>
                    <p>–Richard Harroch, Venture Capitalist and Author</p>
                    <a href="#about" class="button white">FIND OUT MORE</a>
                </div>
        </div>
    </header>
    <!--Header-area/-->

    <section class="section-padding gray-bg" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12   text-center">
                        <div class="page-title">
                            <p style="font-size:20px;"> Fundraising is arguably one of the most formidable phases of a startup. We understand that raising funds is a tedious task for most early-stage startups, if not all. You need to jump some hurdles and get a credible plan in place, usually with a prototype and some reliable people involved. Million at stake is here to give you a leg up by helping you raise INR 1.5 Million in just 10 minutes!
All you do is register, and we will do the rest.
</p><br>
                            <h3>10 minutes | 15+ startups | 1.5 Million</h3>
                            <a href="https://forms.gle/MJkDJ95J9BQrMs7a9" class="button blue" style="font-size:20px;">Register as a Startup</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   <!-- <section class="angle-bg sky-bg section-padding" id="timeline">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Registration Starts</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p style="font-size:20px;" >10th December 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Results of Round 1</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p style="font-size:20px;">19th January 2022 (tentative)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Declaration of Finalists</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p style="font-size:20px;">23rd January 2022 (tentative)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Event day </h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p style="font-size:20px;">19th February 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>1 </strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                                <strong>2</strong>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>3</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="3">
                                <strong>4 </strong>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>-->



    <section class="angle-bg sky-bg section-padding" id="timeline">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Timeline</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="box">
                        <div class="box-icon">
                            <i class="fa fa-edit" style="font-size:96px;color:white"></i>
                        </div>
                        <h2>Registration Starts</h2>
                         <p style="font-size:20px;" >1st December 2019</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="box">
                        <div class="box-icon">
                            <i class="fa fa-paper-plane" style="font-size:96px;color:white"></i>
                        </div>
                       <h2>Results of Round 1</h2>
                        <p style="font-size:20px;"> 5th Januray 2020</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="box">
                        <div class="box-icon">
                            <i class="fa fa-flag-checkered" style="font-size:96px;color:white"></i>
                        </div>
                       <h2>Declaration of Finalists</h2>
                         <p style="font-size:20px;">10th January 2020</p>
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="box">
                        <div class="box-icon">
                            <i class="fas fa-hand-holding-usd" style="font-size:96px;color:white"></i>
                        </div>
                       <h2>Event day </h2><br>
                         <p style="font-size:20px;">1st February 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="price-area overlay section-padding" id="price-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Afortable Price</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">Basic</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong class="amount">$ <span class="big">20</span></strong>/Month</li>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <hr>
                        <a href="#" class="button">Purchase</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table active">
                        <span class="price-info"><span class="ti-crown"></span></span>
                        <h3 class="text-uppercase price-title">STABDARD</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong class="amount">$ <span class="big">39</span></strong>/Month</li>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <hr>
                        <a href="#" class="button">Purchase</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">UNLIMITED</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong class="amount">$ <span class="big">59</span></strong>/Month</li>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <hr>
                        <a href="#" class="button">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

     <section class="section-padding gray-bg" >
        <div class="container">
                <div class="col-md-3"></div>
                <div class="col-xs-12 col-md-6" style="text-align:center;">
                    <h2 style="text-align:center;">Become an investor</h2>
                   <p style="font-size:20px;"> Interested in being an investor for Million-at-Stake?  Fill out the form and our team will contact you. </p>
                      <a href="investor.php" class="button blue " style="font-size:20px;">Register as a Investor</a>   
                </div>
           
        </div>
    </section>

    <section ID ="investors" class="testimonial-area section-padding gray-bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>This Year's Investors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="testimonials">
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/1.png" height=300px width=300px alt="">
                            </div>
                            <h3>Hari Balasubramanian </h3>
                            <p>(Director, Ontrack Systems)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/2.png" height=300px width=300px alt="">
                            </div>
                            <h3>Pankaj Thakar</h3>
                            <p> (Founder, Padup Ventures)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/3.png" height=300px width=300px alt="">
                            </div>
                            <h3>Arijit Bhattacharyya</h3>
                            <p>(CEO, VirtualInfocom)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/4.png" height=300px width=300px alt="">
                            </div>
                            <h3>Gaurav Agrawal</h3>
                            <p>(Angel Investor)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/5.png" height=300px width=300px alt="">
                            </div>
                            <h3>Prakhar Agarwal </h3>
                            <p>(India Investments, AngelList) </p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/6.png" height=300px width=300px alt="">
                            </div>
                            <h3>Surojit Roy</h3>
                            <p>(Head of Operations, Neotec Hub)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/7.png" height=300px width=300px alt="">
                            </div>
                            <h3>Raghav Kanoria </h3>
                            <p>(Founder, Neoleap Accelerator) </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Our Previous Investors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="testimonials">
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/1.png" height=300px width=300px alt="">
                            </div>
                            <h3>Hari Balasubramanian </h3>
                            <p>(Director, Ontrack Systems)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/2.png" height=300px width=300px alt="">
                            </div>
                            <h3>Pankaj Thakar</h3>
                            <p> (Founder, Padup Ventures)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/3.png" height=300px width=300px alt="">
                            </div>
                            <h3>Arijit Bhattacharyya</h3>
                            <p>(CEO, VirtualInfocom)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/4.png" height=300px width=300px alt="">
                            </div>
                            <h3>Gaurav Agrawal</h3>
                            <p>(Angel Investor)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/5.png" height=300px width=300px alt="">
                            </div>
                            <h3>Prakhar Agarwal </h3>
                            <p>(India Investments, AngelList) </p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/6.png" height=300px width=300px alt="">
                            </div>
                            <h3>Surojit Roy</h3>
                            <p>(Head of Operations, Neotec Hub)</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/7.png" height=300px width=300px alt="">
                            </div>
                            <h3>Raghav Kanoria </h3>
                            <p>(Founder, Neoleap Accelerator) </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!--<section class="gray-bg section-padding" id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Frequently Asked Questions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Sedeiusmod tempor inccsetetur aliquatraiy?</a>
                            </h4>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Tempor inccsetetur aliquatraiy?</a>
                            </h4>
                            <div id="collapse2" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Lorem ipsum dolor amet, consectetur adipisicing ?</a>
                            </h4>
                            <div id="collapse3" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Lorem ipsum dolor amet, consectetur adipisicing ?</a>
                            </h4>
                            <div id="collapse4" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
  <!-- <section class="section-padding overlay client-area overlay" id="client-page">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <div class="clients">
                        <div class="item">
                            <img src="images/themeforest.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/coadcanyon.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/graphicriver.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/docean.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/audiojungle.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/actividen.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/photodone.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/videgub.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/themeforest.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/coadcanyon.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/graphicriver.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/docean.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/audiojungle.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/actividen.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/photodone.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/videgub.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->




   <?php include('footer.php');?>
