<?php

if($_POST["submit"]) {
    $recipient="candice.marie.mcdermott@gmail.com";
    $subject="Contact Me form submission.";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! I will get back to you shortly.</p>";
}


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--
  ========================================================================
  EXCLUSIVE ON themeforest.net
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Template Name   : Alexio
  Author          : PxDraft
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Copyright (c) 2018 - PxDraft
  ========================================================================
  -->
  <!-- Page Title -->
  <title>Candice McDermott - Portfolio</title>
  <!-- / -->

  <!---Font Icon-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
  <!-- / -->

  <!-- Plugin CSS -->
  <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet">
  <link href="static/plugin/nav/css/component.css" rel="stylesheet" />
  <!-- / -->

  <!-- Theme Style -->

  <link href="static/css/styles.css" rel="stylesheet">
  <link href="static/css/color/default.css" rel="stylesheet">

  <script src="static/plugin/nav/js/modernizr-custom.js"></script>
  <!-- / -->

  <!--Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">

  
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" />
  <!-- / -->


</head>

<!-- Body Start -->
<body class="dark-body">
   <!-- Loading -->
  <div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>
  <!-- / -->



  <!-- navigation -->
  <nav class="pages-nav">
    <div class="pages-nav__item"><a class="link link--page" href="#home">Home</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#about">About Me</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#resume">Resume</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#portfolio">Portfolio</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#contact">Contact Me</a></div>
  </nav>
  <!-- /navigation-->

  <div class="pages-stack">

    <!-- 
    ====================
    Home Banner
    ====================
     -->
    <div class="page home-banner white-bg" id="home">
      <div class="container-fluid p-0">
        <div class="row no-gutters full-screen">
          <div class="col-lg-3 col-xl-4 blue-bg">
            <div class="d-flex align-items-end home-user-avtar v-center-box">
              <img src="static/img/candicemcdermott.jpg" title="" alt="">
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">
                <div class="v-center-box d-flex align-items-center">
                  <div class="home-text">
                    <h6 class="dark-color theme-after">Hello, I'm</h6>
                    <h1 class="dark-color blue-after">Candice McDermott</h1>
                    <p>WEB <span id="type-it"></span></p>
                    <div class="btn-bar">
                      <a href="/static/resume.pdf" class="btn btn-theme">Download CV</a>
                    </div>
                  </div>
                  <ul class="social-icons">
                    <li><a class="email" href="mailto:candice.marie.mcdermott@gmail.com"><i class="far fa-envelope-open"></i></a></li>
                    <li><a class="linkedin" href="https://www.linkedin.com/in/candicemcdermott/"><i class="fab fa-linkedin-in"></i></i></a></li>
                  </ul>
                </div>
               </div> 
             </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 
    ====================
    About Us
    ====================
     -->
    <div class="page about-section white-bg" id="about">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-xl-4 page-title" style="background-image: url(static/img/mcdermott.jpg); ">
            <div class="v-center-box d-flex align-items-end">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">

                <!-- 
                ==========================
                  Page Titel
                ==========================
                -->
                <div class="section-titel">
                  <h6 class="theme-after dark-color">WHO I AM</h6>
                  <div class="st-title">
                    <h2 class="theme-after dark-color">ABOUT</h2>
                  </div>
                </div>

                <!-- 
                ==========================
                  About Me
                ==========================
                -->
                <div class="row">
                  <div class="col-md-4">
                    <img src="static/img/sig_mcdermott.jpg" title="" alt="">
                  </div>
                  <div class="col-md-8 md-m-30px-t">
                    <div class="about-text">
                      <h3 class="dark-color">I'm Candice McDermott</h3>
                      <p class="m-0px">From artists and sole entrepreneurs to large businesses and nonprofits, every individual and organization has a story to tell. That’s where I come in. I professionally curate and promote YOUR story through website development and content creation. My goal is to utilize every technology at my disposal to create functional, visually captivating websites and compelling content for my clients and their audience.

As a web developer and marketing professional, I have worked with clients from many walks of life. With each project, my goal is to help my clients express themselves in a way that enhances their visibility and honors their values and mission.</p>
                    </div> <!-- about-text -->

                    <div class="row m-30px-t">
                      <div class="col-md-6 col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon dark-color theme-after ti-ruler-pencil"></i>
                          <div class="feature-content">
                            <h5 class="dark-color">Web Development</h5>
                            <p>Fullstack web development for various clients, launching 20+ websites.</p>
                          </div>
                        </div>
                      </div> <!-- col -->

                      <div class="col-md-6 col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon dark-color theme-after ti-image"></i>
                          <div class="feature-content">
                            <h5 class="dark-color">Content Creation</h5>
                            <p>Crafting content strategies, marketing campaigns & public relations efforts.</p>
                          </div>
                        </div>
                      </div> <!-- col -->

                      <div class="col-md-6 col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon dark-color theme-after ti-brush-alt"></i>
                          <div class="feature-content">
                            <h5 class="dark-color">Web Design</h5>
                            <p>Collaborating with clients to design captivating websites in various fields.</p>
                          </div>
                        </div>
                      </div> <!-- col -->

                      <div class="col-md-6 col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon dark-color theme-after ti-mobile"></i>
                          <div class="feature-content">
                            <h5 class="dark-color">Mobile Apps</h5>
                            <p>Developing mobile e-commerce applications using Ruby on Rails.</p>
                          </div>
                        </div>
                      </div> <!-- col -->
                    </div> <!-- row -->

                    <div class="btn-bar">
                      <a href="/static/resume.pdf" class="btn btn-theme">Download CV</a>
                    </div>

                  </div>
                </div> <!-- row -->

                <!-- 
                ==========================
                  Counter
                ==========================
                -->
                <div class="counter-row m-50px-t p-40px-t lg-m-35px-t lg-p-25px-t sm-p-15px-t">
                  <div class="row">
                    <div class="col-md-3 col-sm-6 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="375">
                            <i class="theme-color ti-face-smile"></i>
                            <div class="count dark-color">40+</div>
                            <h6>Happy Clients</h6>
                        </div>
                      </div>
                    </div> <!-- col -->

                    <div class="col-md-3 col-sm-6 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="375">
                            <i class="theme-color ti-headphone"></i>
                            <div class="count dark-color">300+</div>
                            <h6>Hrs Listening to U2</h6>
                        </div>
                      </div>
                    </div> <!-- col -->

                    <div class="col-md-3 col-sm-6 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="375">
                            <i class="theme-color ti-camera"></i>
                            <div class="count dark-color">10,500</div>
                            <h6>Photos Taken</h6>
                        </div>
                      </div>
                    </div> <!-- col -->

                    <div class="col-md-3 col-sm-6 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="1,000">
                            <i class="theme-color ti-thumb-up"></i>
                            <div class="count dark-color">2,000+</div>
                            <h6>Hrs of Web Developing</h6>
                        </div>
                      </div>
                    </div> <!-- col -->

                  </div> <!-- row -->
                </div>

              </div> <!-- page-content -->
            </div> <!-- page-scroll  -->
          </div>
        </div> <!-- row -->
      </div>
    </div>

    <!-- 
    ====================
    Services
    ====================
     -->
    <div class="page resume-section white-bg" id="resume">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-xl-4 page-title" style="background-image: url(static/img/resume_candice.png); ">
            <div class="v-center-box d-flex align-items-end">
              <h2>My Resume</h2>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">

                <!-- 
                ==========================
                  Page Titel
                ==========================
                -->
                <div class="section-titel">
                  <h6 class="theme-after dark-color">History</h6>
                  <div class="st-title">
                    <h2 class="theme-after dark-color">My Resume</h2>
                  </div>
                </div>

                <!-- 
                ==========================
                  Resume Box
                ==========================
                -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="resume-row">
                      <h2 class="theme-after dark-color">Recent Experience</h2>
                      <ul>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg ti-briefcase"></i>
                            <span class="dark-color">Conscious Collaborative</span>
                            <label>AUG 2017 - PRESENT</label>
                          </div>
                          <div class="r-info">
                            <p>As Partner, Web Developer & Digital Specialist, I manage all accounts, web-based projects, and team members. My role has taken many forms, including developing growth and outreach strategies for the agency,
                              assisting in content writing, digital marketing, SEO optimization, and website development (WordPress, SquareSpace, Wix) for clients.</p>
                          </div>
                        </li>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg ti-briefcase"></i>
                            <span class="dark-color">Prairie Son Consulting</span>
                            <label>NOV 2018 - PRESENT</label>
                          </div>
                          <div class="r-info">
                            <p>As the Content Director & Web Specialist at this agency, I am responsible for curating digital content, customizing website designs, launching new websites, and offering my web development expertise to clients.</p>
                         </div>
                        </li>
                      </ul>
                    </div>
                  </div> <!-- col -->
                  <div class="col-md-6">
                    <div class="resume-row">
                      <h2 class="theme-after dark-color">Education</h2>
                      <ul>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg fas fa-graduation-cap"></i>
                            <span class="dark-color">CareerFoundry</span>
                            <label>2018 - 2019</label>
                          </div>
                          <div class="r-info">
                            <p>To expand upon my working knowledge of web development, I completed a 6-month web development program at CareerFoundry. During this program I used HTML, CSS, JavaScript, JQuery, and Bootstrap, building a responsive, single-page portfolio website. I created an e-commerce application using Ruby on Rails, and furthered my competency using various languages.</p>
                          </div>
                        </li>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg fas fa-graduation-cap"></i>
                            <span class="dark-color">Point Park University</span>
                            <label>2015 - 2016</label>
                          </div>
                          <div class="r-info">
                            <p>I hold an M.A. in Media Communication with a specialization in Journalism. My Master's thesis examined how nonprofit organizations' marketing strategies have shifted since the influx of digital media. While completing my degree, I honed my skills in creating effective marketing strategies and content on digital platforms.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div> <!-- col -->
                </div> <!-- row -->

                <div class="skill-row m-30px-t sm-m-20px-t">
                    <div class="sub-title m-30px-b">
                      <h2 class="dark-color theme-after">My Skills</h2>
                    </div>

                    <div class="row">
                      <div class="col-md-6 p-30px-r sm-p-15px-r">
      
                        <div class="skills">
                          <div class="progress-lt">
                            <h6>HTML</h6>
                           
                            
                          </div><!-- /progress-lt -->
                          <div class="progress-lt">
                            <h6>CSS</h6>
                           
                            
                          </div><!-- /progress-lt -->
                          <div class="progress-lt">
                            <h6>JavaScript</h6>
                           
                          </div><!-- /progress-lt -->
                          <div class="progress-lt">
                            <h6>JQuery</h6>
                           
                          </div><!-- /progress-lt -->
                           <div class="progress-lt">
                            <h6>WordPress</h6>
                         
                          </div><!-- /progress-lt -->
                           <div class="progress-lt">
                            <h6>WooCommerce</h6>
                         
                          </div><!-- /progress-lt -->
                        </div>
                      </div>
                      <div class="col-md-6 p-30px-l sm-p-15px-l sm-m-30px-t">
                        
                        <div class="skills">
                           <div class="progress-lt">
                            <h6>Ruby on Rails</h6>
                             
                       
                          </div><!-- /progress-lt -->
                           <div class="progress-lt">
                            <h6>Ruby</h6>
                         
                          </div><!-- /progress-lt -->
                          <div class="progress-lt">
                            <h6>Postgresql</h6>
                         
                          </div><!-- /progress-lt -->
                          <div class="progress-lt">
                            <h6>Mysql</h6>
                          
                          </div><!-- /progress-lt -->
                          <div class="progress-lt">
                            <h6>Git</h6>
                            
                          </div><!-- /progress-lt -->
                           <div class="progress-lt">
                            <h6>GitHub</h6>
                         
                          </div><!-- /progress-lt -->
                        </div>
                      </div>
                    </div>
                </div>

              </div> <!-- page-content -->
            </div> <!-- page-scroll  -->
          </div>
        </div> <!-- row -->
      </div>
    </div>

    <!-- 
    ====================
    Portfolio
    ====================
     -->
    <div class="page white-bg" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-xl-4 page-title" style="background-image: url(static/img/portfolio_candice.jpg); ">
            <div class="v-center-box d-flex align-items-end">
              <h2>My Projects</h2>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">

                <!-- 
                ==========================
                  Page Titel
                ==========================
                -->
                <div class="section-titel">
                  <h6 class="theme-after dark-color">Latest Work</h6>
                  <div class="st-title">
                    <h2 class="theme-after dark-color">My Projects</h2>
                  </div>
                </div>

                <!-- 
                ==========================
                  Portfolio
                ==========================
                -->
                <div class="portfolio-section">
                  <div class="portfolio-filter m-10px-b">
                    <ul class="filter text-left text-md-center">
                      <li class="active theme-after" data-filter="*">All</li>
                      <li class="theme-after" data-filter=".fun">For Fun</li>
                      <li class="theme-after" data-filter=".website">Website</li>
                      <li class="theme-after" data-filter=".apps">Apps</li>
                    </ul>
                  </div> <!-- Portfolio Filter -->

                  <div class="portfolio-content">
                    <ul class="portfolio-cols portfolio-cols-3">
                      <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="http://wealthshield.co/">
                              <img src="static/img/wealth_shield.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/wealth_shield_portfolio.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="http://wealthshield.co/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>E-Commerce Project</h5>
                            <span>HTML | CSS | WordPress</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      
                      
                      <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="http://www.prairiesonconsulting.com/">
                              <img src="static/img/prairie_son_home.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/prairie_son_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="http://www.prairiesonconsulting.com/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Responsive Website</h5>
                            <span>HTML | CSS | JavaScript </span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      
                      
                      
               
                      <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="https://masrath.com/">
                              <img src="static/img/masrath_home_page.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/masrath_magazine_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="https://masrath.com/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Publication Website</h5>
                            <span>HTML | CSS | WordPress</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      
                      
                      
                      <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="http://www.adamsuter.com/">
                              <img src="static/img/adam_suter_home.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/adam_suter_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="http://www.adamsuter.com/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Consulting & Blog</h5>
                            <span>HTML | CSS | WordPress</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      
                      
                      
                          
                      <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="https://healingyourheartministry.com">
                              <img src="static/img/healing_hearts_home.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/healing_hearts_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="https://healingyourheartministry.com" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Ministry Website</h5>
                            <span>HTML | CSS | WordPress</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      
                      
                      
                             
                         
                      <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="https://deer.network/">
                              <img src="static/img/deer_network_home.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/deer_network_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="https://deer.network/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Community & E-Commerce</h5>
                            <span>HTML | CSS | WordPress</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      
                      
                       <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="https://www.conscious-collaborative.com/">
                              <img src="static/img/conscious_collab_home.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/conscious_collab_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="https://www.conscious-collaborative.com/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Marketing Agency Site</h5>
                            <span>HTML | CSS | WordPress</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      
                      <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="https://www.gigilein.com/">
                              <img src="static/img/gigi_lein_home.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/gigi_lein_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="https://www.gigilein.com/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Image Consulting Website</h5>
                            <span>HTML | CSS | Javascript</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      
                      
                       <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="https://cloudwars.co/">
                              <img src="static/img/cloud_wars_home.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/cloud_wars_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="https://cloudwars.co/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Cloud-Based Information</h5>
                            <span>HTML | CSS | WordPress</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->
                      

                      <li class="portfolio-item apps">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="https://vinyl-closet.herokuapp.com/">
                              <img src="static/img/vinyl_closet_home.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  <a class="lightbox-gallery theme-color" href="static/img/vinyl_closet_project.png" title="Project Details...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="https://vinyl-closet.herokuapp.com/" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>E-Commerce App</h5>
                            <span>Ruby on Rails | MySQL</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> <!-- col -->

                  

                    </ul> <!-- row -->
                  </div> <!-- portfolio content -->
                </div>

                <!-- 
                ==========================
                  Testimonials
                ==========================
                -->
                <div class="testimonial-section m-30px-t sm-m-20px-t">
                  <div class="sub-title m-30px-b">
                      <h2 class="dark-color theme-after">What People Say?</h2>
                  </div>

                  <div id="client-slider-single" class="owl-carousel">
                    <div class="testimonial-col">
                        <div class="say">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        <div class="user">
                          <div class="img">
                            <img src="static/img/100x100.jpg" alt="" title="">
                          </div>
                          <div class="name">
                            <span>Jennifer Lutheran</span>
                            <label>CEO</label>
                          </div>
                        </div>
                    </div>

                    <div class="testimonial-col">
                        <div class="say">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        <div class="user">
                          <div class="img">
                            <img src="static/img/100x100.jpg" alt="" title="">
                          </div>
                          <div class="name">
                            <span>Salma Hayek</span>
                            <label>CEO</label>
                          </div>
                        </div>
                    </div>

                    <div class="testimonial-col">
                        <div class="say">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        <div class="user">
                          <div class="img">
                            <img src="static/img/100x100.jpg" alt="" title="">
                          </div>
                          <div class="name">
                            <span>Martin Lutheran</span>
                            <label>CEO</label>
                          </div>
                        </div>
                    </div>
                  </div> <!-- owl -->
                </div>

              </div> <!-- page-content -->
            </div> <!-- page-scroll  -->
          </div>
        </div> <!-- row -->
      </div>
    </div>

    <!-- 
    ====================
    Contact Me
    ====================
     -->
    <div class="page white-bg" id="contact">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-xl-4 page-title" style="background-image: url(static/img/contact_candice.jpg); ">
            <div class="v-center-box d-flex align-items-end">
              <h2>Contact Me</h2>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">

                <!-- 
                ==========================
                  Page Titel
                ==========================
                -->
                <div class="section-titel">
                  <h6 class="theme-after dark-color">Get In Touch</h6>
                  <div class="st-title">
                    <h2 class="theme-after dark-color">Contact Me</h2>
                  </div>
                </div>

                <!-- 
                ==========================
                  Contact Me
                ==========================
                -->
                <div class="row">
                  <div class="col-lg-12 m-30px-b sm-m-15px-b">
                    <div class="contact-form">
                        <h4 class="dark-color font-alt m-20px-b">Say Something</h4>
                        <form class="contactform" method="POST">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input id="name" name="name" type="text" placeholder="Name" class="validate form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                  <input id="email" type="email" placeholder="Email" name="email" class="validate form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                  <textarea id="message" placeholder="Your Comment" name="message" class="form-control" required=""></textarea>
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                               </div>
                                <div class="col-md-12">
                                  <div class="send">
                                     <button class="btn btn-theme" type="submit" name="send"> send message</button>
                                  </div>
                                  <span class="output_message"></span>
                                </div>
                              </div>
                        </form>
                    </div>
                  </div> <!-- col -->
                </div>

                <div class="row">
                  <div class="col-md-4 m-15px-tb">
                    <div class="contact-info">
                        <i class="theme-color ti-location-pin"></i>
                        <h6 class="dark-color font-alt">Current Abode</h6>
                        <p>Pittsburgh, PA USA</p>
                    </div>
                  </div>
                  <div class="col-md-4 m-15px-tb">
                    <div class="contact-info">
                      <i class="theme-color ti-mobile"></i>
                      <h6 class="dark-color font-alt">My Phone</h6>
                      <p>Mobile: 419.908.8503</p>
                    </div>
                  </div>
                  <div class="col-md-4 m-15px-tb sm-m-0px-b">
                    <div class="contact-info">
                        <i class="theme-color ti-email"></i>
                        <h6 class="dark-color font-alt">My Email</h6>
                        <p>candice.marie.mcdermott@gmail.com</p>
                    </div>
                  </div>
                </div>

              </div> <!-- page-content -->
            </div> <!-- page-scroll  -->
          </div>
        </div> <!-- row -->
      </div>  
    </div>

  
  </div>

  <!-- 
    ====================
    Header
    ====================
  -->
  <header class="header theme-bg">
    <div class="logo">"Anyone who keeps the ability to<br>
      see beauty never grows old." -Kafka</div>
    <div class="menu-toggle">
        <button class="menu-button"><span>Menu</span></button>
    </div>
  </header>

  <!-- jQuery -->
  <script src="static/js/jquery-3.3.1.slim.min.js"></script>

  <!-- Plugins -->
  <script src="static/plugin/bootstrap/js/popper.min.js"></script>
  <script src="static/plugin/bootstrap/js/bootstrap.min.js"></script>
  <script src="static/plugin/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="static/plugin/typeit-master/typeit.min.js"></script>
  <script src="static/plugin/isotope/isotope.pkgd.min.js"></script>
  <script src="static/plugin/magnific/jquery.magnific-popup.min.js"></script>

  <script src="static/plugin/nav/js/classie.js"></script>
  <script src="static/plugin/nav/js/main.js"></script>

  

  <!-- custom -->
  <script src="static/js/custom.js"></script>

</body>
<!-- Body End -->

</html>
