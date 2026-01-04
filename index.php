<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberShop System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="display: flex; flex-direction: column; align-items: center;">

    <div class="fixed-bg"></div>

    <nav class="navbar navbar-expand-lg navbar-custom w-100">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">Barber</span>Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" data-bs-slide-to="0">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center" style="margin-top: 150px;">
    <h1 class="text-white shadow-lg">Welcome to our BarberShop</h1>
    <div class="mt-4">
        <button class="btn btn-warning btn-lg fw-bold me-2" data-bs-toggle="modal" data-bs-target="#authModal" onclick="showLogin()">LOGIN</button>
        <button class="btn btn-outline-light btn-lg fw-bold" data-bs-toggle="modal" data-bs-target="#authModal" onclick="showRegister()">SIGN UP</button>
    </div>
    </div>
    
    <div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content auth-modal-bg"> 
            <div class="modal-body p-4">
                <button type="button" class="btn-close btn-close-white ms-auto d-block" data-bs-dismiss="modal"></button>
                
                <div class="wrapper border-0 shadow-none bg-transparent">
                    <form id="login-form" action="login.php" method="POST">
                        <h1 class="text-white">Login</h1>
                        <div class="input-box">
                            <input type="text" name="username" placeholder="Username" required>
                            <i class='bx bxs-user-circle'></i>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" placeholder="Password" required>
                            <i class='bx bxs-lock-alt'></i>
                        </div>
                        <button type="submit" name="login" class="btn btn-warning w-100 fw-bold">Login</button>
                        <div class="register-link text-center mt-3">
                            <p class="text-white">Don't have an account? <a href="#" onclick="showRegister()" class="text-warning">Register</a></p>
                        </div>
                    </form>

                    <form id="register-form" action="signup.php" method="POST" style="display: none;">
                        <h1 class="text-white">Sign Up</h1>
                        <div class="input-box">
                            <input type="text" name="username" placeholder="Username" required>
                            <i class='bx bxs-user-circle'></i>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Email" required>
                            <i class='bx bxs-envelope'></i>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" placeholder="Password" required>
                            <i class='bx bxs-lock-alt'></i>
                        </div>
                        <button type="submit" name="signup" class="btn btn-warning w-100 fw-bold">Register</button>
                        <div class="register-link text-center mt-3">
                            <p class="text-white">Already have an account? <a href="#" onclick="showLogin()" class="text-warning">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="carouselExample" class="carousel slide mt-5" style="width: 80%; max-width: 800px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="about.webp" class="d-block w-100" alt="Home">
                <div class="carousel-caption"><p>Tired of standing outside the shop or driving across town only to find a crowded lobby? Our Barbershop Reservation System puts the power of time back in your hands.</p></div>
            </div>
            <div class="carousel-item">

	<img src="about.webp" class="d-block w-100" alt="About">
                <div class="carousel-caption"><p> Browse available time and date, choose your Hairstyle, and book your haircut in seconds.</p></div>
            </div>
            <div class="carousel-item">
                <img src="services.jpg" class="d-block w-100" alt="Services">
                <div class="carousel-caption"><p>No more wasted trips, no more long lines—just a premium grooming experience scheduled around your life.</p></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

<section id="about" class="about-section-padding">
    <div class="container">
        <div class="row align-items-center"> <div class="col-lg-5 col-md-12 col-12"> <div class="about-img">
                    <img src="abouts.jpg" alt="Barbershop" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text p-4"> <h2 class="display-5 fw-bold">Don't Waste Time <br> Waiting in Line</h2>
                    <p class="lead mt-3">
                        We know the struggle you arrive for a haircut only to find a crowd waiting outside, 
                        and the next shop is too far to travel. Our Barbershop Reservation System allows you to book your spot in advance so you can skip the wait and get back to your day.
                    </p>
                    <a href="#" class="btn btn-warning btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#authModal" onclick="showLogin()">Book Your Chair Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2 class="text-dark">Our Services</h2>
                    <p class="text-muted">Choose the perfect service for your style.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card text-center border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-scissors text-warning mb-3" style="font-size: 3rem;"></i>
                        <h3 class="card-title text-dark h5">Classic Haircut</h3>
                        <p class="text-muted small">A professional cut tailored to your style, including a refreshing wash and style finish.</p>
                        <button class="btn btn-warning btn-sm">READ MORE</button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card text-center border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-person-bounding-box text-warning mb-3" style="font-size: 3rem;"></i>
                        <h3 class="card-title text-dark h5">Beard Trim</h3>
                        <p class="text-muted small">Shape and trim your beard with precision, followed by a soothing hot towel treatment.</p>
                        <button class="btn btn-warning btn-sm">READ MORE</button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card text-center border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-magic text-warning mb-3" style="font-size: 3rem;"></i>
                        <h3 class="card-title text-dark h5">Luxury Shave</h3>
                        <p class="text-muted small">Experience a traditional straight-razor shave with premium oils and facial massage.</p>
                        <button class="btn btn-warning btn-sm">READ MORE</button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card text-center border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-palette text-warning mb-3" style="font-size: 3rem;"></i>
                        <h3 class="card-title text-dark h5">Make-up Artistry</h3>
                        <p class="text-muted small">Enhance your features with expert make-up application for events, weddings, or photoshoots.</p>
                        <button class="btn btn-warning btn-sm">READ MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="team section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Our Team</h2>
                    <p>BarberShop Reservation System <br> Style their top priority</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-3">
                    <div class="card-body">
                        <img src="anne.jpg" alt="Barber 1" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title py-2">Anne Shereina Guro</h3>
                        <p class="card-text">Junior Hairstylist Boy/Girls.</p>
                        
                        <p class="socials">
                            <a href="https://www.facebook.com/share/1bgvz2x2SZ/" target="_blank">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>

                            <a href="https://www.instagram.com/xo.anne24?igsh=MWlpYWViN2Z2Z2wwMw==" target="_blank">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>

                            <i class="bi bi-twitter text-dark mx-1"></i>
                            <i class="bi bi-linkedin text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
             <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-3">
                    <div class="card-body">
                        <img src="rojhan.jpg" alt="Barber 1" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title py-2">Rojhan Jero Najito</h3>
                        <p class="card-text">Senior Hairstylist for Boys.</p>
                        
                        <p class="socials">
                            <a href="https://www.facebook.com/share/16wLxFGBfU/" target="_blank">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>

                            <a href="https://www.instagram.com/sainazito?igsh=MW01YmwxaWN6bXZqeg==" target="_blank">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>

                            <i class="bi bi-twitter text-dark mx-1"></i>
                            <i class="bi bi-linkedin text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
             <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-3">
                    <div class="card-body">
                        <img src="jades.jpg" alt="Barber 1" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title py-2">Princess Jade Aclan</h3>
                        <p class="card-text">Senior Hairstylist for Girls.</p>
                        
                        <p class="socials">
                            <a href="https://www.facebook.com/share/18B17t9GmT/" target="_blank">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>

                            <a href="https://www.instagram.com/jadeeyuh_?igsh=MTR4ZmgwcWdtejh0Zg==" target="_blank">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>

                            <i class="bi bi-twitter text-dark mx-1"></i>
                            <i class="bi bi-linkedin text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-3">
                    <div class="card-body">
                        <img src="eyah.jpg" alt="Barber 1" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title py-2">Eleah Medina</h3>
                        <p class="card-text">Make-up artist for Boys.</p>
                        
                        <p class="socials">
                            <a href="https://www.facebook.com/share/1BjZEEy61T/" target="_blank">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>

                            <a href="" target="_blank">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>

                            <i class="bi bi-twitter text-dark mx-1"></i>
                            <i class="bi bi-linkedin text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
             <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-center border-0 shadow-sm p-3">
                    <div class="card-body">
                        <img src="bles.jpg" alt="Barber 1" class="img-fluid rounded-circle mb-3">
                        <h3 class="card-title py-2">Blessnes Cascalla</h3>
                        <p class="card-text">Make-up artist for Girls.</p>
                        
                        <p class="socials">
                            <a href="https://www.facebook.com/share/17uY8fGepU/" target="_blank">
                                <i class="bi bi-facebook text-dark mx-1"></i>
                            </a>

                            <a href="https://www.instagram.com/bxj_cxl?igsh=MWdqcGZid2ZvMGF4ZA==" target="_blank">
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </a>

                            <i class="bi bi-twitter text-dark mx-1"></i>
                            <i class="bi bi-linkedin text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section id="contact" class="contact section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2 class="text-dark fw-bold">Contact Us</h2>
                    <p class="text-muted">Have questions? Reach out to us or visit our shop.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <form action="#" class="p-4 shadow-sm rounded border">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea rows="5" class="form-control" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 fw-bold">SEND MESSAGE</button>
                </form>
            </div>

            <div class="col-lg-6 col-md-12 ps-lg-5">
                <div class="contact-info">
                    <div class="d-flex mb-4">
                        <i class="bi bi-geo-alt text-warning fs-3 me-3"></i>
                        <div>
                            <h5 class="fw-bold">Location</h5>
                            <p class="text-muted">123 Barber Street, Manila, Philippines</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-telephone text-warning fs-3 me-3"></i>
                        <div>
                            <h5 class="fw-bold">Phone</h5>
                            <p class="text-muted">+63 912 345 6789</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-envelope text-warning fs-3 me-3"></i>
                        <div>
                            <h5 class="fw-bold">Email</h5>
                            <p class="text-muted">info@barbershop.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="bi bi-clock text-warning fs-3 me-3"></i>
                        <div>
                            <h5 class="fw-bold">Opening Hours</h5>
                            <p class="text-muted">Mon - Sat: 9:00 AM - 8:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');

function showRegister() {
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
}

function showLogin() {
    registerForm.style.display = 'none';
    loginForm.style.display = 'block';
}
    </script>
</body>

<footer class="bg-white py-5 border-top">
    <div class="container text-center">
        <h2 class="navbar-brand mb-4" style="font-size: 2rem;">
            <span class="text-warning">Barber</span>Shop
        </h2>
        
        <div class="footer-socials mb-4">
            <a href="#" target="_blank" class="text-dark mx-2"><i class="bi bi-facebook fs-4"></i></a>
            <a href="#" target="_blank" class="text-dark mx-2"><i class="bi bi-instagram fs-4"></i></a>
            <a href="#" target="_blank" class="text-dark mx-2"><i class="bi bi-twitter fs-4"></i></a>
        </div>

        <p class="text-muted mb-2">Book your chair and skip the line!</p>
        <p class="text-secondary small">© 2026 BarberShop Reservation System. All Rights Reserved.</p>
    </div>
</footer>

</html>
