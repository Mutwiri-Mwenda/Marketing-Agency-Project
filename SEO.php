<?php include('functions.php') ?>
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
    <title>Search Engine Optimization</title>
    <link rel="shortcut icon" type="image/jpg" href="666yyy.png"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top" style="background-color: #820ad1;">
        <div class="container">
            <a href="index.php" class="navbar-brand fs-2 fw-bold text-light">Digital Marketing Agency</a>
            <button class="navbar-toggler" type="button"data-bs-toggle="collapse"
            data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fw-bold lead pe-5">
                        <a href="Services.php" class="nav-link text-light">Our Services</a>
                    </li>
                    <li class="nav-item fw-bold lead pe-5">
                        <a href="Login.php" class="nav-link text-light">Login</a>
                    </li>
                    <li class="nav-item fw-bold lead pe-5">
                        <a href="Signup.php" class="nav-link text-light">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="big-banner text-white justify-content-center p-5 p-lg-0 pt-lg-5 text-align-center text-sm-start top-bg">
        <div class="container section">
            <div class="align-items-center text-align-center">
                <div>
                    <h1> <span class="fw-bold " style="color: #820ad1;">Providing SEO Solutions</span> To Solve Your Problems</h1>
                    <p class="lead fs-4" style="color: #820ad1;">
                        Create a website designed to convert sales or leads and drive relevant traffic for scalable results.
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
    <section class="p-5 description-SEO goals" style="background-color: #820ad1;">
        <h2 class="text-center text-white">
            You’ve Finally Found the Right SEO Company With Answers
        </h2>
        <p class="lead text-center text-white mb-5">
            BluBerry has the SEO solutions you’ve been searching for. 
            Don’t let another day go by where your competitors are looking down on you! It’s time to be discovered!
        </p>
        <div class="container">
            <div class="row text-center g-5">
                <div class="col-md">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                Keyword Research & Strategy
                            </h3>
                            <p class="card-text lead fs-5">
                                BluBerry is an SEO company that understands your niche and can boost your ranking for specific search terms. 
                                Your SEO specialist will review the keywords your website is currently ranking for, 
                                take your keyword wishlist and conduct additional keyword research 
                                to build a list that makes the most sense for your website and the competitive landscape.
                            </p>
                            <a href="getQoute.php" class="btn btn-light">
                                Work With Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                Link Building
                            </h3>
                            <p class="card-text lead fs-5">
                                Backlinks are a huge component of ranking higher in search results, but not just any link!
                                That’s why you should partner with an SEO company like BluBerry that has a 
                                dedicated link building team and has connections with many high-quality and relevant websites.
                            </p>
                            <a href="getQoute.php" class="btn btn-light">
                                Work With Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-cart"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                Technical SEO
                            </h3>
                            <p class="card-text lead fs-5">
                                Rankings can improve with optimizations on your website’s back-end, such as improving page speed. 
                                By fixing these errors, it makes it easier on search engines when they crawl your website. 
                                And when you make search engines happy, your rankings can make you even happier!
                            </p>
                            <a href="getQoute.php" class="btn btn-light">
                                Work With Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                Local SEO
                            </h3>
                            <p class="card-text lead fs-5">
                                Statistics show that 64 percent of customers search for local businesses online. 
                                Improve your company’s local SEO rankings with Google My Business (GMB) optimization and attract high-intent customers. 
                                We optimize your GMB profile and manage your online reputation to grow your local following.
                            </p>
                            <a href="getQoute.php" class="btn btn-light">
                                Work With Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                eCommerce SEO
                            </h3>
                            <p class="card-text lead fs-5">
                                Provide your customers with a 24/7 convenient shopping experience and increase your client retention rate.
                                We launch targeted email marketing campaigns and optimize your site for mobile 
                                and voice search to create personalized brand experiences. 
                                
                            </p>
                            <a href="getQoute.php" class="btn btn-light">
                                Work With Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-dark text-light size">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                On-Page SEO
                            </h3>
                            <p class="card-text lead fs-5">
                                Enhance your online visibility and earn high-quality traffic. At BluBerry, 
                                we ensure our SEO services are aligned with search engines’ best practices to boost your website’s trustworthiness. 
                                Our SEO experts publish unique, value-rich content, optimize your headlines and HTML tags and utilize high-resolution images.
                            </p>
                            <a href="getQoute.php" class="btn btn-light">
                                Work With Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 bg-dark">
        <h2 class="text-center text-white">
            Our Leader Team
        </h2>
        <p class="lead text-center text-white mb-5">
            Whilst we work with a range of businesses, all of different sizes - 
            we apply big business thinking across the board, 
            allowing small businesses to scale accordingly.
        </p>
        <div class="row g-4 bg-dark">
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="images/download.png" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3 text-light">Mutwiri Mwenda</h3>
                        <p class="card-text text-light">
                            Co-founder & Director
                        </p>
                        <a href="#"><i class="bi bi-instagram text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-twitter text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-snapchat text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-light mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="images/download.png" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3 text-light">Festus Mutembei</h3>
                        <p class="card-text text-light">
                            Co-founder & Director
                        </p>
                        <a href="#"><i class="bi bi-instagram text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-twitter text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-snapchat text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-light mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="images/download.png" class="rounded-circle mb-3" alt="">
                        <h3 class="card-title mb-3 text-light">Levis Mutethia</h3>
                        <p class="card-text text-light">
                            Chief Executive Officer
                        </p>
                        <a href="#"><i class="bi bi-instagram text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-twitter text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-snapchat text-light mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-light mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5" style="background-color: #657888;">
        <div class="container">
            <h2 class="text-center text-white">
                The BluBerry Value
            </h2>
            <p class="lead text-center text-white mb-5">
                Whilst we work with a range of businesses, all of different sizes - 
                we apply big business thinking across the board, 
                allowing small businesses to scale accordingly.
            </p>
            <div class="row text-center g-5">
                <div class="col-md col-lg-6">
                    <div class="card text-light size" style="background-color: #657888;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                Virtual
                            </h3>
                            <p class="card-text lead">
                                Return on your marketing investment is what it's all about. 
                                We have spent years researching various industries and identifying the types of 
                                digital services that deliver the most cost-effective outcomes for specific needs. 
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg-6">
                    <div class="card text-light size" style="background-color: #657888;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                Virtual
                            </h3>
                            <p class="card-text lead">
                                Return on your marketing investment is what it's all about. 
                                We have spent years researching various industries and identifying the types of 
                                digital services that deliver the most cost-effective outcomes for specific needs. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg-6">
                    <div class="card  text-light size" style="background-color: #657888;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                Virtual
                            </h3>
                            <p class="card-text lead">
                                Return on your marketing investment is what it's all about. 
                                We have spent years researching various industries and identifying the types of 
                                digital services that deliver the most cost-effective outcomes for specific needs. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg-6">
                    <div class="card text-light size" style="background-color: #657888;">
                        <div class="card-body text-center">
                            <div class="h1 mb-1">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-tittle mb-8">
                                Virtual
                            </h3>
                            <p class="card-text lead">
                                Return on your marketing investment is what it's all about. 
                                We have spent years researching various industries and identifying the types of 
                                digital services that deliver the most cost-effective outcomes for specific needs. 
                            </p>
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
            <p class="lead">Copyright &copy; 2021 BluBerry</p>
            <a href="" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </section>
    <!-- Modal -->
<div class="modal fade" id="workwithus" tabindex="-1" 
aria-labelledby="workwithusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tell Us Know More About Your Business</h5>
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
                <input type="text" class="text form-control" id="first-name">
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