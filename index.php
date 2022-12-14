<?php 
	include('functions.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
            <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
            <link rel="stylesheet" href="hhh.css">
    <title>BluBerry</title>
    <link rel="shortcut icon" type="image/jpg" href="images/666yyy.png"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light  py-3 fixed-top" >
        <div class="container">
            <a href="index.html" class="navbar-brand fs-2 fw-bold" style="color: #ffffff;">Digital Marketing Agency</a>
            <button class="navbar-toggler" type="button"data-bs-toggle="collapse"
            data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fw-bold text-white lead pe-5">
                        <a href="services.html" class="nav-link text-white">Our Services</a>
                    </li>
                    <li class="nav-item fw-bold lead pe-5">
                        <a href="register.php" class="nav-link text-light">SignUp</a>
                    </li>
                    <li class="nav-item fw-bold text-white lead pe-5">
                        <a href="login.php" class="nav-link text-white">Login</a>
                    </li>
                    <li class="nav-item fw-bold text-white lead pe-5">
                        <a href="DigitalAdmin/index.php" class="nav-link text-white">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="big-banner text-white justify-content-center p-5 p-lg-0 pt-lg-5 text-align-center text-sm-start">
        <div class="container section">
            <div class="align-items-center text-align-center">
                <div>
                    <h1 style="color: #820ad1;">Welcome to <span class="fw-bold" style="color: #820ad1;">BluBerry Digital Agency</span></h1>
                    <p class="lead fs-4">Our digital marketing experts have put together thousands of successful digital 
                        <br> marketing campaigns for businesses looking to increase leads, phone calls, 
                        <br> transactions, and qualified website traffic. They'll do the same for you. 
                          <br> Request a free strategy proposal and get a game plan for elite revenue generation.
                    </p>
                    <button class="btn btn-primary btn-lg"
                    data-bs-toggle="modal"
                    data-bs-target="#workwithus"
                    >
                        Work With Us
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 description goals" style="background-color: #820ad1;">
        <h2 class="text-center text-white">
            What are Your Goals?
        </h2>
        <p class="lead text-center text-white mb-5">
            Let's Start By Understanding Your Business Goals
        </p>
        <div class="container">
            <div class="row text-center g-5">
                <div class="col-md">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center">
                            <h1 class="mb-1">1</h1>
                            <h3 class="card-title mb-8">
                                My Business Wants to Develop New Website
                            </h3>
                            <p class="card-text lead fs-5">
                                We have a proven track record in creating innovative websites designed to 
                                increase traffic and ultimately drive sales for your business. 
                                Your website is your key online presence and we know how important it is to get this right.
                            </p>
                            <a href="webdesign.html" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-title mb-8">
                                I Want My Search Engine Optimized 
                            </h3>
                            <p class="card-text lead fs-5">
                                What is the point of having a flashy website if no one views it or if it is useless at converting visitors into cash for you? 
                                Fortunately, we have the knowledge and expertise to increase visitors to your website and convert that traffic 
                                into sales for your company.
                            </p>
                            <a href="SEO.html" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-cart"></i>
                            </div>
                            <h3 class="card-title mb-8">
                                I Want To Get in Content Marketing and Press
                            </h3>
                            <p class="card-text lead fs-5">
                                An efficient content marketing startegy can work magic for you company. Our support of experienced content writers will 
                                give your company the capability to gain public attention through attention grabbing journals and articles audited in 
                                best targeted media to get your press to the civic in a very cheap way. 
                            </p>
                            <a href="contentmarketing.html" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-8">
                                I Want to Understand Digital Marketing Better
                            </h3>
                            <p class="card-text lead fs-5">
                                Over the many years we have accumulated in the Digital Marketing space, 
                                we have seen it all. We have learned much along the way. We know what works and 
                                what is ineffective. We can share our learnings with you. Digital 
                                Marketing is a rapidly growing frontier and any effective knowledge is priceless.
                            </p>
                            <a href="digital marketing.html" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-8">
                                I Want Creative Graphic Design For My Brand
                            </h3>
                            <p class="card-text lead fs-5">
                                Visual first impressions are powerful and enduring. 
                                Our diverse team of experienced designers have worked in all aspects of design 
                                including logos, websites, ads etc. As the saying goes, 
                                "A picture tells 1,000 words" so make it tell the best possible message.
                            </p>
                            <a href="Graphics Design.html" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-8">
                                I Want My Social Media Accounts Managed
                            </h3>
                            <p class="card-text lead fs-5">
                                Managing your social media content is both time-consuming and endlessly 
                                challenging. What content should you post? When should you post it? 
                                Where do you post it for best outcomes? 
                                We can take the guesswork away and do it all on your behalf with amazing results.
                            </p>
                            <a href="Accountmanagement.html" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-4 pt-lg-5 text-light " style="background-color: #657888;">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-lg-4">
                <div class="col-md p-5">
                    <h2>Creative Graphics Design</h2>
                    <p class="lead">
                          Before committing to a purchase, clients will analyse how credible your business is.
                          The quality of your visuals are typically the first thing noticed. 
                          Our team of designers have worked in all aspects of design. 
                          Consistency and quality will serve in establishing credibility when closing clients.
                    </p>
                    <p class="lead">
                        When your clients are deciding if you're the right fit, 
                        they will typically analyse your social media channels. Are you active? 
                        Is your quality of high content? Are you experienced? Your social media 
                        will typically tell them everything they need to know before committing.
                    </p>
                    <a href="#" class="btn btn-primary mt-3">
                        <i class="bi bi-chevron-right"></i> Get Your Free 30minutes Marketing Strategy
                    </a>
                </div>
                <div class="col-md">
                    <img src="images/images (2).png" class="img-fluid" width="356" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="p-1 text-light" style="background-color: #657888;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="images/004.png" class="img-fluid" width="356" alt="">
                </div>
                <div class="col-md p-5">
                    <h2>Social Media Marketing</h2>
                    <p class="lead">
                         Being marketing experts who live and breathe social media, we understand 
                         exactly how to meet all of your social media needs. Whether it's advertisements, 
                         brand development posts, logos, banners or general content - we are here to 
                         bassist.
                    </p>
                    <p class="lead">
                         Social media posts must also meet certain requirements such as having a 
                         common theme, looking good on all devices and captions to entice engagement or 
                         sales. We understand this and can assist past basic design.
                    </p>
                    <a href="#" class="btn btn-primary mt-3">
                        <i class="bi bi-chevron-right"></i> Get Your Free 30minutes Marketing Strategy
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-1 text-light" style="background-color: #657888;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>Creative Graphics Design</h2>
                    <p class="lead">
                         Before committing to a purchase, clients will analyse how credible your business is.
                         The quality of your visuals are typically the first thing noticed. 
                         Our team of designers have worked in all aspects of design. 
                         Consistency and quality will serve in establishing credibility when closing clients.
                    </p>
                    <p class="lead">
                        When your clients are deciding if you're the right fit, 
                        they will typically analyse your social media channels. Are you active? 
                        Is your quality of high content? Are you experienced? Your social media 
                        will typically tell them everything they need to know before committing.
                    </p>
                    <a href="#" class="btn btn-primary mt-3">
                        <i class="bi bi-chevron-right"></i> Get Your Free 30minutes Marketing Strategy
                    </a>
                </div>
                <div class="col-md">
                    <img src="images/images (2).png" class="img-fluid" width="356" alt="">
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="p-5" style="background-color: #FFFFFF;">
        <h2 class="text-center" style="color: #820ad1;">
            Our Leader Team
        </h2>
        <p class="lead text-center mb-5" style="color: #820ad1;">
            Whilst we work with a range of businesses, all of different sizes - 
            we apply big business thinking across the board, 
            allowing small businesses to scale accordingly.
        </p>
        <div class="row g-4" style="background-color: #FFFFFF;">
            <div class="col-md-6 col-lg-4">
                <div class="card" style="background-color: #FFFFFF;">
                    <div class="card-body text-center">
                        <img src="images/download.png" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3" style="color: #820ad1;">Mutwiri Mwenda</h3>
                        <p class="card-text" style="color: #820ad1;" >
                            Co-founder & Director
                        </p>
                        <a href="#"><i class="bi bi-instagram  mx-1" style="color: #820ad1;" ></i></a>
                        <a href="#"><i class="bi bi-twitter mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-snapchat mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-linkedin mx-1" style="color: #820ad1;"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card" style="background-color: #FFFFFF;">
                    <div class="card-body text-center">
                        <img src="images/download.png" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3" style="color: #820ad1;">Mutwiri Mwenda</h3>
                        <p class="card-text" style="color: #820ad1;" >
                            Co-founder & Director
                        </p>
                        <a href="#"><i class="bi bi-instagram  mx-1" style="color: #820ad1;" ></i></a>
                        <a href="#"><i class="bi bi-twitter mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-snapchat mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-linkedin mx-1" style="color: #820ad1;"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card" style="background-color: #FFFFFF;">
                    <div class="card-body text-center">
                        <img src="images/download.png" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3" style="color: #820ad1;">Mutwiri Mwenda</h3>
                        <p class="card-text" style="color: #820ad1;" >
                            Co-founder & Director
                        </p>
                        <a href="#"><i class="bi bi-instagram  mx-1" style="color: #820ad1;" ></i></a>
                        <a href="#"><i class="bi bi-twitter mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-snapchat mx-1" style="color: #820ad1;"></i></a>
                        <a href="#"><i class="bi bi-linkedin mx-1" style="color: #820ad1;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 bg-dark">
        <div class="container">
            <h2 class="text-center text-white">
               The BluBerry Value
            </h2>
            <p class="lead text-center text-white mb-5">
                While we work with a wide range of companies of varying sizes, 
                we apply big business thinking to all of them, 
                allowing small businesses to scale appropriately.
            </p>
            <div class="row text-center g-5">
                <div class="col-md col-lg-6">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle fw-bold mb-8">
                                Everyone Wins
                            </h3>
                            <p class="card-text fw-bold lead">
                                We believe in a concept that is simple yet effective. 
                                We delight you by exceeding your expectations, 
                                allowing your business to thrive and you to come back to us for more. 
                                We consider your success to be a victory. If you win, we win.
                            </p>
                            <a href="#" class="btn btn-light">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg-6">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle fw-bold mb-8">
                                Make More with Less
                            </h3>
                            <p class="card-text fw-bold lead">
                                Our major goal is to optimize your investment's return. 
                                With every Shilling you spend with us, our goal is to provide you the most bang for your dollars. 
                                We don't believe in overly complicated and costly solutions that offer little tangible value to you. 
                                Our value proposition is to provide greater value for you with fewer resources. 
                            </p>
                            <a href="#" class="btn btn-light">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg-6">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle fw-bold mb-8">
                                Relationship are More Valuable
                            </h3>
                            <p class="card-text lead fw-bold">
                                It means the world to us that you believe in our team. 
                                This is a really significant matter for us. 
                                We strive to earn your trust by consistently delivering the best possible solution and remaining with you for the long term. 
                                In a nutshell, your collaboration with us is priceless.
                            </p>
                            <a href="#" class="btn btn-light">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg-6">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle fw-bold mb-8">
                                Grow by Learning
                            </h3>
                            <p class="card-text lead fw-bold">
                                The digital world is moving at dizzying speed. It is always changing and evolving. 
                                Similarly, we must remain at the forefront of emerging technology and trends. 
                                We must provide you with the most recent and cutting-edge solutions. 
                                As a company and as individuals, we are constantly striving to learn and grow.
                            </p>
                            <a href="#" class="btn btn-light">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 bg-dark">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">
                        Contact info                        
                    </h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Our Headquarters:</span> Machakos town 
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Email:</span> bluberry@gmail.com
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Tel NO:</span> 007 404 7474 
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Bulding:</span> Machakos Plaza 
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p>Copyright &copy; 2021 BluBerry</p>
            <a href="" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </section>
    
    <!-- Modal -->
<div class="modal fade bg-dark" id="workwithus" tabindex="-1" 
aria-labelledby="workwithusModalLabel" aria-hidden="true">
    <div class="modal-dialog bg-dark">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tell Us More About Your Business</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">Let's Start By Understanding Your Business Objectives</p>
          <form>
              <div class="mb-3">
                  <label for="first-name" class="col-form-label">First Name:</label>
                  <input type="text" class="text form-control" id="first-name">
              </div>
              <div class="mb-3">
                <label for="first-name" class="col-form-label">Second Name:</label>
                <input type="text" class="text form-control" id="first-name">
            </div>
            <div class="mb-3">
                <label for="first-name" class="col-form-label">Phone:</label>
                <input type="number" class="text form-control" id="first-name">
            </div>
            <div class="mb-3">
                <label for="first-name" class="col-form-label">Email:</label>
                <input type="text" class="text form-control" id="first-name">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYmx1YmVycnkiLCJhIjoiY2t2OWZvN3ZqMDZhbzJybWdqNXhsMmU3OSJ9.re5JkcTTpv7qJgY3Q-Mb9w';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center:[-1.51667, 37.26667],
    zoom: 18,
       }); 
    </script>
</body>
</html>