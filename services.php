<?php
include('functions.php');
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
    <title>Our Services</title>
    <link rel="shortcut icon" type="image/jpg" href="666yyy.png"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top" style="background-color: #820ad1;">
        <div class="container">
            <a href="index.php" class="navbar-brand fs-2 fw-bold" style="color: #ffffff;">Digital Marketing Agency</a>
            <button class="navbar-toggler" type="button"data-bs-toggle="collapse"
            data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fw-bold lead pe-5">
                        <a href="services.php" class="nav-link" style="color: #ffffff;">Our Services</a>
                    </li>
                    <li class="nav-item fw-bold lead pe-5">
                        <a href="" class="nav-link" style="color: #ffffff;">About Us</a>
                    </li>
                    <li class="nav-item fw-bold lead pe-5">
                        <a href="" class="nav-link" style="color: #ffffff;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="p-5 service-description goals" style="background-color: #820ad1;">
        <h2 class="text-center text-white">
            What are Your Goals?
        </h2>
        <p class="lead text-center text-white mb-5">
            Let's Start By Understanding Your Business Goals
        </p>
        <div class="container">
            <div class="row text-center g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center justify-content-center">
                            <h3 class="card-tittle mb-8 service-top">
                                 Social Media Management Services
                            </h3>
                            <a href="webdesign.php" class="btn btn-light">
                                Learn More >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center justify-content-center">
                            <h3 class="card-tittle mb-8 service-top">
                                Search Engine Optimization Services
                            </h3>
                            <a href="SEO.php" class="btn btn-light">
                                Learn More >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center justify-content-center">
                            <h3 class="card-tittle mb-8 service-top">
                                Content Marketing Services
                            </h3>
                            <a href="contentmarketing.php" class="btn btn-light">
                                Learn More >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center justify-content-center">
                            <h3 class="card-tittle mb-8 service-top">
                                Social Marketing Service
                            </h3>
                            <a href="digital marketing.php" class="btn btn-light">
                                Learn More >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center justify-content-center">
                            <h3 class="card-tittle mb-8 service-top">
                                Graphics Design Services
                            </h3>
                            <a href="Graphics Design.php" class="btn btn-light">
                                Learn More >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light size" style="background-color: #820ad1;">
                        <div class="card-body text-center justify-content-center">
                            <h3 class="card-tittle mb-8 service-top">
                            Web Development Services
                            </h3>
                            <a href="Accountmanagement.php" class="btn btn-light">
                                Learn More >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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