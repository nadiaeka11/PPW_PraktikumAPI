@extends('auth.layouts')

@section('content')

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('imgs/logo.svg') }}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navibation -->

    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">Hello,I'm</h6>
                <h6 class="title">Nadia Eka</h6>
                <p>UI/UX Designer</p>

                <div class="buttons pt-3">
                    <a href="mailto:nadiaekafebrianti@gmail.com" target="_blank" class="btn btn-primary rounded">HIRE ME</a>
                    <a href="https://drive.google.com/file/d/1uDNKUuCmDtrvig6Hyzuv6l50zx8Bjbds/view?usp=sharing" target="_blank" class="btn btn-dark rounded">DOWNLOAD CV</a>
                </div>      

                <div class="socials mt-4">
                    <a class="social-item" href="https://www.instagram.com/nadia.e.f"><i class="ti-instagram"></i></a>
                    <a class="social-item" href="mailto:nadiaekafebrianti@gmail.com"><i class="ti-google"></i></a>
                    <a class="social-item" href="https://github.com/nadiaeka11"><i class="ti-github"></i></a>
                    <a class="social-item" href="https://www.linkedin.com/in/nadia-eka-febrianti-a2348b229"><i class="ti-linkedin"></i></a>
                </div>
            </div>              
            <div class="img-holder">
                <img src="{{ asset('imgs/girl.svg') }}" alt="">
            </div>      
        </div>  

        <!-- Header-widget -->
        <div class="widget">
            <div class="widget-item">
                <h2>124</h2>
                <p>Happy Clients</p>
            </div>
            <div class="widget-item">
                <h2>236</h2>
                <p>Project Completed</p>
            </div>
            <div class="widget-item">
                <h2>53</h2>
                <p>Awards Won</p>
            </div>
        </div>
    </header>
    <!-- End of Page Header -->
    
    <!-- About section -->
    <section id="about" class="section mt-3">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="col-md-3">
                    <img src="{{ asset('imgs/nadd.png') }}" alt="" class="img-thumbnail mb-4">
                </div>
                <div class="pl-md-4 col-md-9">
                    <h6 class="title">Nadia Eka Febrianti</h6>
                    <p class="subtitle">UI/UX Designer</p>
                    <p>As an enthusiastic software engineering technology student, Nadia Eka is pursuing the world of design, editing and photography. His skills include digital design with Adobe Photoshop, Illustrator, and Figma, as well as video editing using Adobe Premiere Pro and After Effects. Additionally, he has skills in photography.</p>
                    <p>Nadia is known for her proactive, collaborative and adaptive attitude, which makes her a valuable asset in any project. With high enthusiasm, he continues to strive to make valuable contributions to the creative industry.</p>
                    <a href="https://drive.google.com/file/d/1uDNKUuCmDtrvig6Hyzuv6l50zx8Bjbds/view?usp=sharing" target="_blank" class="btn btn-primary rounded mt-3">DOWNLOAD CV</a>                
                </div>
            </div>
        </div>
    </section>

    <!-- Service section -->
    <section id="service" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Service</h6>
            <h6 class="section-title mb-4">What I Do</h6>
            <p class="mb-5 pb-4">Some things<br> I've gotten better lately.</p>

            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-crown"></i>
                            <h5>UI/UX Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-desktop"></i>
                            <h5>Web Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-mobile"></i>
                            <h5>Video Editing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-camera"></i>
                            <h5>Photography</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Sectoin -->

    <!-- Skills section -->
    <section class="section">
        <div class="container text-center">
            <h6 class="subtitle">Skills</h6>
            <h6 class="section-title mb-4">Why Choose me</h6>
            <p class="mb-5 pb-4">With a strong focus on detail and innovation,<br> I always strive to create exceptional user experiences.</p>

            <div class="row text-left">
                <div class="col-sm-6">
                    <h6 class="mb-3">Figma</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>89%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">Web Design</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 87%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>83%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">App Design</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3">Photography</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 94%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- End of Skills sections -->

    <!-- Portfolio section -->
    <section id="portfolio" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Portfolio</h6>
            <h6 class="section-title mb-4">Check My Wonderful Works</h6>
            <p class="mb-5 pb-4">The portfolio reflects expertise in creating elegant and functional designs. <br> From web design to UI/UX projects, each of my works is based on a combination of strong aesthetics and a seamless user experience. </p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="{{ asset('imgs/permad.png') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Dokumentasi PPSMB Permadani 2023</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="{{ asset('imgs/Slice 3.png') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Video Profile BEM KM SV UGM</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="{{ asset('imgs/LOGO.png') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Logo KahaSolusi</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="{{ asset('imgs/Hi-Fi.png') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>KAHA Solution ComProf Website</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="{{ asset('imgs/Feeds.png') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>Feeds Instagram Gamaaksara</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="{{ asset('imgs/garasi.png') }}" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5>GARASI Vokasi UGM</h5>
                                <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                <a href="javascript:void(0)"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                  
                </div>
            </div>

        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- Hire me section -->
    <section class="bg-gray p-0 section">
        <div class="container">
            <div class="card bg-primary">
                <div class="card-body text-light">
                    <div class="row align-items-center">
                        <div class="col-sm-9 text-center text-sm-left">
                            <h5 class="mt-3">Hire Me For Your Project</h5>
                            <p class="mb-3">Ready to help make your project a reality.</p>
                        </div>
                        <div class="col-sm-3 text-center text-sm-right">
                            <a href="mailto:nadiaekafebrianti@gmail.com" target="_blank" class="btn btn-light rounded">Hire Me!</a>                
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>      
    <!-- End od Hire me section. -->

    <!-- Contact Section -->
    <section id="contact" class="position-relative section">
        <div class="container text-center">
            <h6 class="subtitle">Contact</h6>
            <h6 class="section-title mb-4">Get In Touch With Me</h6>
            <p class="mb-5 pb-4">Let's discuss your ideas and create something amazing together!<br> Contact me below.</p>

            <div class="contact text-left">
                <div class="form">
                    <h6 class="subtitle">Available 24/7</h6>
                    <h6 class="section-title mb-4">Get In Touch</h6>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
                    </form>
                </div>
                <div class="contact-infos">
                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Location</h5>
                            <p>Sleman, Daerah Istimewa Yogyakarta</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Phone Number</h5>
                            <p>(123) 456-7890</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email Address</h5>
                            <p>nadiaekafebrianti@gmail.com</p>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>  
        <div id="map">
            <iframe src="https://snazzymaps.com/embed/61257"></iframe>
        </div>      
    </section>
    <!-- End of Contact Section -->

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a>nadia.e.f</a></p>
                </div>
                <div class="col-sm-6">
                    <div class="socials">
                        <a class="social-item" href="https://www.instagram.com/nadia.e.f"><i class="ti-instagram"></i></a>
                    <a class="social-item" href="mailto:nadiaekafebrianti@gmail.com"><i class="ti-google"></i></a>
                    <a class="social-item" href="https://github.com/nadiaeka11"><i class="ti-github"></i></a>
                    <a class="social-item" href="https://www.linkedin.com/in/nadia-eka-febrianti-a2348b229"><i class="ti-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <!-- End of page footer -->
	
	<!-- core  -->
    <script src="resources/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="resources/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="resources/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- steller js -->
    <script src="resources/js/steller.js"></script>

</body>
    
@endsection