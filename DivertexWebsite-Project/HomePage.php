<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="HomePage.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <title>Divertex</title>
</head>

<body>
    <!-- Header Section -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a href="#home" class="navbar-brand">
                    <img src="images/logo2.png" alt="Divertex Logo" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <a href="login.php" class="btn btn-custom ms-lg-3">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">The leading telemarketing company in the Philippines</h1>
                    <p class="lead">With years of industry experience and a passion for customer engagement, we deliver results that drive growth. At Divertex, we believe that our people are our greatest asset.</p>
                    <a href="Applicant/applicationform.php" class="btn btn-custom btn-lg">APPLY NOW!</a>
                </div>
                <div class="col-lg-6">
                    <img src="images/image.png" alt="Telemarketing Company" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15443.492690430838!2d120.628755!3d14.074367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd0b4a27e3e7eb%3A0xc43c13be9c89c38d!2sP%20Rinoza%20St%2C%20Nasugbu%2C%20Batangas%2C%20Philippines!5e0!3m2!1sen!2sph!4v1696591268231!5m2!1sen!2sph" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-6 text-center">
                    <h2>LOCATION</h2>
                    <p>P Rinoza St., Nasugbu, Batangas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Vision Section -->
    <section class="py-5" id="mission">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center">MISSION</h5>
                            <p>To cultivate a positive and supportive environment for our employees, fostering the development of their skills and knowledge to achieve our organizational goals. We aim to add value and strength to our global partners through our commitment to excellence and continuous improvement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center">VISION</h5>
                            <p>To be a goal-oriented company with proven records of achievements, driven with passion to increase organization's profitability, highly motivated, experienced professionals with superb skills in any delegation assigned.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
    <div class="container">
        <h3 class="text-center mb-4">Our Services</h3>
        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="service-card p-3">
                    <h5>Inbound Telemarketing</h5>
                    <p>Your customers are important to you, and we ensure they get the assistance they need when they need it.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="service-card p-3">
                    <h5>Outbound Telemarketing</h5>
                    <p>Grow your client base with strategic, persuasive outbound calls, lead generation, and sales campaigns.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="service-card p-3">
                    <h5>After Sales Service</h5>
                    <p>We provide prompt and efficient after-sales service, ensuring a seamless customer experience.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 d-flex">
                <div class="service-card p-3">
                    <h5>Help Desk and Technical Support</h5>
                    <p>Our help desk assists with troubleshooting steps, offering quick and effective solutions.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="service-card p-3">
                    <h5>Cold Calling</h5>
                    <p>Engage potential customers professionally and build relationships from the first call.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="service-card p-3">
                    <h5>Appointment Setting</h5>
                    <p>Secure valuable time with potential clients, ensuring they are eager to learn more about your offerings.</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Contact Section -->
    <section class="py-5" id="contact">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <form action="#" method="post" class="text-center">
                        <input type="text" name="name" placeholder="Your Name" required class="form-control mb-3">
                        <input type="email" name="email" placeholder="Your Email" required class="form-control mb-3">
                        <textarea name="message" rows="5" placeholder="Your Message" required class="form-control mb-3"></textarea>
                        <button type="submit" class="btn btn-custom btn-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2024 Telemarketing Company. All Rights Reserved.</p>
    </footer>

    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
</body>

</html>
