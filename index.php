<?php
session_start();

include_once 'includes/navbar.php';






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore our fleet of quality cars for rent. Affordable and reliable car rental services with flexible booking options.">
    <meta name="author" content="Patrik Majcher">
    <title>VELOCITYLUX Car Rentals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/heroes/hero-5/assets/css/hero-5.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/pricings/pricing-2/assets/css/pricing-2.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/projects/project-2/assets/css/project-2.css" />
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/ctas/cta-1/assets/css/cta-1.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section -->
    <?php include_once 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="bsb-hero-5 px-3 bsb-overlay" style="background-image: url('./assets/hero.jpg');">
        <div class="container">
            <div class="row justify-content-md-center align-items-center">
                <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7">
                    <h1 class="display-1 text-white text-center fw-bold mb-4">Dream of Success</h1>
                    <p class="lead text-white text-center mb-5 d-flex justify-content-sm-center">
                        <span class="col-12 col-sm-10 col-md-8 col-xxl-7">From the sleek curves of a classic to the cutting-edge technology of the latest models, each car in our collection is a masterpiece of engineering and elegance.</span>
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn bsb-btn-2xl btn-outline-light">BOOK RIDE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Cards Section with Prices -->
    <section class="bsb-pricing-2 bg-light py-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h3 class="fs-6 text-secondary mb-2 text-uppercase text-center">Our Pricing</h3>
                    <h2 class="display-5 mb-4 mb-md-5 text-center">We offer great pricing plans for everyone.</h2>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gy-5 gy-lg-0 gx-xl-5">
                <div class="col-12 col-lg-4">
                    <div class="card border-0 border-bottom border-danger shadow-sm transformx">
                        <div class="card-body p-4 p-xxl-5">
                            <h2 class="h4 mb-2">BMW M3</h2>
                            <h4 class="display-3 fw-bold text-danger mb-0">$2000</h4>
                            <p class="text-secondary mb-4">USD / Month</p>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Engine:</strong>Quad-Turbocharged W16</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Horsepower:</strong>1,200 HP</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Top Speed:</strong>400 KM/H</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                            </ul>
                            <a href="#!" class="btn bsb-btn-xl btn-danger ">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card border-0 border-bottom border-danger shadow-lg pt-md-4 pb-md-4 bsb-pricing-popular transformx ">
                        <div class="card-body p-4 p-xxl-5">
                            <h2 class="h4 mb-2">AUDI RS8</h2>
                            <h4 class="display-3 fw-bold text-danger mb-0">$3200</h4>
                            <p class="text-secondary mb-4">USD / Month</p>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Engine:</strong>Quad-Turbocharged W16</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Horsepower:</strong>1,200 HP</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Top Speed:</strong>400 KM/H</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                            </ul>
                            <a href="#!" class="btn bsb-btn-xl btn-danger">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card border-0 border-bottom border-danger shadow-sm transformx">
                        <div class="card-body p-4 p-xxl-5">
                            <h2 class="h4 mb-2">FORD MUSTANG GT</h2>
                            <h4 class="display-3 fw-bold text-danger mb-0">$1800</h4>
                            <p class="text-secondary mb-4">USD / Month</p>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Engine:</strong>Quad-Turbocharged W16</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Horsepower:</strong>1,200 HP</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Top Speed:</strong>400 KM/H</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>
                                    <span><strong>Transmission:</strong>7-Speed Automatic</span>
                                </li>
                            </ul>
                            <a href="#!" class="btn bsb-btn-xl btn-danger">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="bg-light py-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="mb-4 display-5 text-center">Our Cars</h2>
                    <p class="text-secondary mb-5 text-center lead fs-4">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container overflow-hidden">
            <div class="row gy-2 g-md-2 g-xl-3 bsb-project-2-grid">
                <div class="col-12 col-md-4 bsb-project-2-item">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="#!">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="https://cdn.pixabay.com/photo/2021/10/13/13/19/bmw-6706660_1280.jpg" alt="">
                        </a>
                        <figcaption>
                            <h3 class="text-white bsb-hover-fadeInLeft">BMW</h3>
                            <div class="text-white bsb-hover-fadeInRight">M3 CSL</div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-12 col-md-4 bsb-project-2-item">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="#!">
                            <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="https://cdn.pixabay.com/photo/2017/05/15/13/55/automotive-2314911_1280.jpg" alt="">
                        </a>
                        <figcaption>
                            <h3 class="text-white bsb-hover-fadeInUp">AUDI</h3>
                            <div class="text-white bsb-hover-fadeInDown">RS6</div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-12 col-md-4 bsb-project-2-item">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="#!">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="https://cdn.pixabay.com/photo/2017/03/27/13/26/auto-2178707_1280.jpg" alt="">
                        </a>
                        <figcaption>
                            <h3 class="text-white bsb-hover-fadeInLeft">MERCEDES BENZ</h3>
                            <div class="text-white bsb-hover-fadeInRight">S 500 BRABUS</div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-12 col-md-4 bsb-project-2-item">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="#!">
                            <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="https://cdn.pixabay.com/photo/2019/05/13/19/08/bugatti-4200700_1280.jpg" alt="">
                        </a>
                        <figcaption>
                            <h3 class="text-white bsb-hover-fadeInUp">BUGGATI</h3>
                            <div class="text-white bsb-hover-fadeInDown">VEYRON</div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-12 col-md-4 bsb-project-2-item">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="#!">
                            <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="https://cdn.pixabay.com/photo/2021/12/25/19/09/car-6893707_1280.jpg" alt="">
                        </a>
                        <figcaption>
                            <h3 class="text-white bsb-hover-fadeInUp">NISSAN</h3>
                            <div class="text-white bsb-hover-fadeInDown">GTR</div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-12 col-md-4 bsb-project-2-item">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="#!">
                            <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="https://cdn.pixabay.com/photo/2020/10/19/08/20/car-5667110_1280.jpg" alt="">
                        </a>
                        <figcaption>
                            <h3 class="text-white bsb-hover-fadeInUp">FORD</h3>
                            <div class="text-white bsb-hover-fadeInDown">MUSTANG</div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-12 col-md-4 bsb-project-2-item">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="#!">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="https://cdn.pixabay.com/photo/2021/11/30/10/14/volkswagen-6834967_1280.jpg" alt="">
                        </a>
                        <figcaption>
                            <h3 class="text-white bsb-hover-fadeInLeft">VOLKSWAGEN</h3>
                            <div class="text-white bsb-hover-fadeInRight">GOLF GTD SPORT</div>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-12 col-md-4 bsb-project-2-item">
                    <figure class="rounded rounded-3 overflow-hidden bsb-overlay-hover m-0">
                        <a href="#!">
                            <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="https://cdn.pixabay.com/photo/2021/06/01/14/07/bmw-m4-6301796_1280.jpg" alt="">
                        </a>
                        <figcaption>
                            <h3 class="text-white bsb-hover-fadeInLeft">BMW</h3>
                            <div class="text-white bsb-hover-fadeInRight">M4 COMPETITION</div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="bsb-cta-1 px-2 bsb-overlay" style="background-image: url('assets/car\ \(1\).jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="fs-5 mb-3 text-white text-uppercase">Our Services & Expertise</h2>
                    <h3 class="display-5 text-white mb-4">We are a Professional Car Rental Service delivering custom expensive sportscar to our exclusive clients.</h3>
                    <a href="#!" class="btn bsb-btn-2xl btn-danger rounded mb-0 text-nowrap">Join Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2023 Patrik Majcher</p>
        </footer>
    </div>


    <!-- Custom Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Javascript Files: Vendors -->
    <script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>

    <!-- Javascript Files: Controllers -->
    <script src="https://unpkg.com/bs-brain@2.0.2/components/projects/project-2/assets/controller/project-2.js"></script>
</body>

</html>