<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The R One - Home</title>
    <?php require("inc/links.php") ?>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    
    <style>
        .avail-form{
            margin-top: -85px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .avail-form{
                margin-top: 0px;
                padding: 0 35px;
            } 
        }

    </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php') ?>

     <!-- Swiper carousel -->
    <div class="container-fluid px-lg-4 mt-0">   
        <div class="swiper swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="image/heroSlider/1.jpg" class="w-100   d-block">
                </div>
                <div class="swiper-slide">
                    <img src="image/heroSlider/2.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="image/heroSlider/3.jpg" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- Check availability form -->

    <div class="container avail-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking availability</h5>
                <form class="">
                    <div class="row  align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">
                                Check in
                            </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">
                                Check in
                            </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">
                                Adult
                            </label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">four</option>
                                <option value="5">five</option>
                                <option value="6">six</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">
                                Children
                            </label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">four</option>
                                <option value="5">five</option>
                                <option value="6">six</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Room form -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-">
                <div class="card" style="max-width: 350px; margin: auto;">
                    <img src="image/rooms/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="">Sea View Room</h5>
                      <h6 class="mb-4">$ 200 per Night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room Hearter
                        </span>
                      </div>
                      <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            5 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            4 Children
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark text-white custom-bg">More Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-">
                <div class="card" style="max-width: 350px; margin: auto;">
                    <img src="image/rooms/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="">Non Sea View Room</h5>
                      <h6 class="mb-4">$ 200 per Night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room Hearter
                        </span>
                      </div>
                      <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            5 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            4 Children
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark text-white custom-bg">More Details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-">
                <div class="card" style="max-width: 350px; margin: auto;">
                    <img src="image/rooms/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="">Sea View Room</h5>
                      <h6 class="mb-4">$ 200 per Night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Queen Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room Hearter
                        </span>
                      </div>
                      <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            5 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            4 Children
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark text-white custom-bg">More Details</a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5 ">
                <a href="#" class="btn btn-sm btn-outline-primary rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>


    <!-- Our Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="image/facilities/icons8-wi-fi.gif" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="image/facilities/star.png" width="80px">
                <h5 class="mt-3">Star</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="image/facilities/pool.png" width="80px">
                <h5 class="mt-3">Swimming Pool</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="image/facilities/waitress.png" width="80px">
                <h5 class="mt-3">Restaurant</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="image/facilities/spa-care.png" width="80px">
                <h5 class="mt-3">SPA</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-primary rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Testimonials</h2>
    
    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper Swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="image/facilities/star.png" width="30px">
                        <h6 class="m-0 ms-2">
                            Random User1
                        </h6>
                    </div>
                    <p class="">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores corporis libero dignissimos eaque debitis quibusdam quasi ratione quas assumenda.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="image/facilities/star.png" width="30px">
                        <h6 class="m-0 ms-2">
                            Random User1
                        </h6>
                    </div>
                    <p class="">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores corporis libero dignissimos eaque debitis quibusdam quasi ratione quas assumenda.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="image/facilities/star.png" width="30px">
                        <h6 class="m-0 ms-2">
                            Random User1
                        </h6>
                    </div>
                    <p class="">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores corporis libero dignissimos eaque debitis quibusdam quasi ratione quas assumenda.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="image/facilities/star.png" width="30px">
                        <h6 class="m-0 ms-2">
                            Random User1
                        </h6>
                    </div>
                    <p class="">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores corporis libero dignissimos eaque debitis quibusdam quasi ratione quas assumenda.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-primary rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>

    <!-- Contact us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.061085350478!2d73.54050061457951!3d4.208322596940591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b3f7f5b4cdbfbbb%3A0xf0e7e0b3cba4e5b5!2s20%20Nirolhu%20Magu%2C%20Mal%C3%A9%2C%20Maldives!5e0!3m2!1sen!2sin!4v1680632770409!5m2!1sen!2sin"
                    height="320px" 
                    class="w-100 rounded mb-4"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5 class="">
                        call us
                    </h5>
                    <a href="tel: +9609781546" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +960-9781546
                    </a>
                    
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5 class="">
                        Follow us
                    </h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter m-1"></i> Twitter
                        </span>
                    </a>
                    <br> 
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook m-1"></i> Facebook
                        </span>
                    </a> 
                    <br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram m-1"></i> Instagram
                        </span>
                    </a> 
                    <br>                    
                </div>
            </div>
        </div>
    </div>


    <?php require("inc/footer.php") ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay:{
            delay: 3500,
            disableOnInteraction:false,
        }
        });

        var swiper = new Swiper(".Swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop:true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
</body>
</html>