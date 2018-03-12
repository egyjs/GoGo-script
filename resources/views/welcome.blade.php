
@extends("layouts.app")

@section("content")

<!--===== HEADER AREA =====-->
<header class="navbar custom-navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="logo">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a class="theme-color" href="index-2.html">Alex.</a> <!--== logo ==-->
                </div>
            </div>

            <div class="col-md-9 col-sm-8 col-xs-12">
                <nav class="main-menu">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav"> <!--== manin menu ==-->
                            <li class="active"><a class="smoth-scroll" href="#home">Home</a></li>
                            <li><a class="smoth-scroll" href="#about">About</a></li>
                            <li><a class="smoth-scroll" href="#services">service</a></li>
                            <li><a class="smoth-scroll" href="#work">work</a></li>
                            <li><a class="smoth-scroll" href="#testimonial">testimonial</a></li>
                            <li><a class="smoth-scroll" href="#contact">contact</a></li>
                            <li><a class="smoth-scroll" href="blog.html">blog</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
</header>
<!--===== END HEADER AREA ======-->

<!--======= WELCOME AREA =======-->
@include('header')
<!--===== END WELCOME AREA =====-->

<!--===== ABOUT AREA =====-->
@include('about')
<!--===== END ABOUT AREA =====-->

<!--===== SERVICES AREA =====-->
@include('serv')
<!--====== END SERVICES AREA ======-->


<!--====== WORK AREA ======-->
@include('work')
<!--====== END WORK AREA ======-->

<!--===== STAT AREA ======-->
<div class="stat-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6"> <!-- Single stat  -->
                <div class="single-stat">
                    <div class="inner">
                        <div class="stat-icon-box">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="stat-content">
                            <h2 class="counter">154</h2>
                            <h3>Happy Clients</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6"> <!-- Single stat  -->
                <div class="single-stat">
                    <div class="inner">
                        <div class="stat-icon-box">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="stat-content">
                            <h2 class="counter">15</h2>
                            <h3>YEARS OF EXPERIENCE</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6"> <!-- Single stat  -->
                <div class="single-stat">
                    <div class="inner">
                        <div class="stat-icon-box">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="stat-content">
                            <h2 class="counter">256</h2>
                            <h3>Projects completed</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6"> <!-- Single stat  -->
                <div class="single-stat">
                    <div class="inner">
                        <div class="stat-icon-box">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="stat-content">
                            <h2 class="counter">97</h2>
                            <h3>Award Won</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--/.row -->
    </div> <!--/.container -->
</div>
<!--===== END STAT AREA ======-->

<!--==== TESTIMONIAL AREA =====-->
@include("test")
<!--====END TESTIMONIAL AREA =====-->


<!--==== CTA AREA =====-->
<div class="cta-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="wow fadeInLeft" data-wow-delay="0.4s">Do you have any project?</p>
                <h2 class="wow fadeInRight" data-wow-delay="0.8s">Let's work together indeed!</h2>
                <a href="#contact" class="smoth-scroll wow fadeInDown" data-wow-delay="1.2s">get quotes</a>
            </div>
        </div>
    </div>
</div>
<!--==== END CTA AREA =====-->

<!--====== CONTACT INFO AREA ======-->
<div id="contact" class="contact-info-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>contact me.</h2>
                    <p>Feel Free to Contact</p>
                </div>
            </div>
        </div> <!--/.row-->

        <div class="row">
            <div class="col-md-7">
                <div class="contact-form">
                    <form id="contact-form" method="post" action="http://mhbthemes.com/demos/alex/alex/contact.php"> <!-- Start Contact From -->
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-user-o"></i>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Name*" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-envelope-o"></i>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email*" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <i class="fa fa-question-circle-o"></i>
                                        <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject*" required="required" data-error="Subject is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <i class="fa fa-comment-o"></i>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message*" rows="7" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-effect btn-sent" value="Send message">
                                </div>
                            </div>
                        </div>
                    </form> <!-- End Contact From -->
                </div>
            </div>

            <div class="col-md-5">
                <div class="single-info"> <!-- Single Info -->
                    <div class="info-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="info-content">
                        <h5>my location:</h5>
                        <p>{{ $info->locat }}</p>
                    </div>
                </div>
                <div class="single-info"> <!-- Single Info -->
                    <div class="info-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h5>Phone number:</h5>
                        <p>{{ $info->phone }}</p>
                    </div>
                </div>
                <div class="single-info"> <!-- Single Info -->
                    <div class="info-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h5>email address:</h5>
                        <p>{{ $info->email }}</p>
                    </div>
                </div>
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
</div>
<!--===== END CONTACT INFO AREA ======-->

    @endsection