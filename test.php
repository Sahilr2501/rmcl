<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rajasthan Minerals & Chemicals</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #6CBEE3;
            --primary-light: #E8F6FD;
            --primary-dark: #4A9CC4;
            --secondary: #2C3E50;
            --accent: #FF9F43;
            --light: #FFFFFF;
            --dark: #333333;
            --gray: #666666;
            --light-gray: #F8F9FA;
        }

        body {
            font-family: 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif;
            color: var(--dark);
            line-height: 1.6;
            background-color: var(--light);
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            color: var(--secondary);
        }

        /* ====== COMMON STYLES ====== */
        .section-padding {
            padding: 5rem 0;
        }

        .section-title {
            position: relative;
            /* display: inline-block; */
            margin-bottom: 2rem;
            padding-bottom: 1rem;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--primary);
        }

        .text-center .section-title {
            display: inline-block; /* Make sure it's inline-block */
            text-align: center;
        }

        .text-center .section-title:after {
            left: 50%;
            transform: translateX(-50%);
        }

        .highlight-bg {
            background: linear-gradient(135deg, var(--primary-light) 0%, #F0F9FF 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
            border: 1px solid #E8F3FB;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(108, 190, 227, 0.15) !important;
            border-color: var(--primary);
        }

        .btn-primary-custom {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108, 190, 227, 0.3);
        }

        .btn-secondary-custom {
            background-color: var(--secondary);
            border-color: var(--secondary);
            color: white;
            font-weight: 600;
            padding: 0.6rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-secondary-custom:hover {
            background-color: #1A2530;
            border-color: #1A2530;
            transform: translateY(-2px);
        }

        /* ====== HERO SLIDER ====== */
        #heroCarousel {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-item img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .carousel-item img {
                height: 400px;
            }
        }

        @media (max-width: 576px) {
            .carousel-item img {
                height: 300px;
            }
        }

        /* Optional: Add overlay for better text readability if you add captions later */
        .carousel-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4));
            z-index: 1;
        }

        /* ====== WELCOME SECTION ====== */
        #welcome {
            padding: 5rem 0;
            background-color: white;
        }

        #welcome h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--secondary);
        }

        #welcome .tagline {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 2.5rem;
        }

        .key-points .card {
            border: none;
            border-left: 4px solid var(--primary);
            border-radius: 10px;
            background-color: var(--light-gray);
            transition: all 0.3s ease;
        }

        .key-points .card:hover {
            background-color: var(--primary-light);
            border-left-color: var(--primary-dark);
        }

        .highlight-box {
            background: linear-gradient(135deg, var(--primary-light) 0%, #F0F9FF 100%);
            border-left: 4px solid var(--primary);
            padding: 2rem;
            border-radius: 10px;
            margin: 3rem 0;
        }

        /* ====== PRODUCTS SECTION ====== */
        #products {
            background-color: var(--light-gray);
        }

        .product-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .product-img-container {
            height: 160px;
            background: linear-gradient(135deg, var(--primary-light) 0%, white 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            border-bottom: 1px solid #E8F3FB;
        }

        .product-img-container img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }

        .product-card .card-body {
            padding: 1.5rem;
            text-align: center;
        }

        .product-card .card-title {
            font-size: 1rem;
            margin-bottom: 0.75rem;
            color: var(--secondary);
            font-weight: 600;
        }

        .product-card .card-text {
            font-size: 0.85rem;
            color: var(--gray);
            margin-bottom: 1.25rem;
            min-height: 4rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        #products .section-title:after {
            width: 80px;
            height: 4px;
        }

        /* Explore More Card */
        .explore-more-card {
            background: #fff;
            border: 2px solid var(--primary);
            border-radius: 8px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            min-height: 200px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .explore-more-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(108, 190, 227, 0.2);
            background: var(--primary);
            border-color: var(--primary-dark);
        }

        .explore-more-card:hover .explore-content {
            color: white;
        }

        .explore-more-card:hover .explore-icon {
            transform: translateX(5px);
        }

        .explore-content {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .explore-icon {
            font-size: 1rem;
            transition: transform 0.3s ease;
        }

        .explore-text {
            font-size: 0.95rem;
        }

        /* Responsive grid */
        @media (max-width: 575px) {
            .product-grid .col-6 {
                width: 50%;
            }
        }

        /* ====== WHY CHOOSE US SECTION ====== */
        #why-choose {
            background: linear-gradient(135deg, var(--primary-light) 0%, #F0F9FF 100%);
        }

        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.75rem;
        }

        .feature-card h4 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: var(--secondary);
        }

        .feature-card p {
            font-size: 0.95rem;
            color: var(--gray);
        }

        .mission-statement {
            background: white;
            border-radius: 12px;
            padding: 2.5rem;
            margin-top: 3rem;
            border-left: 4px solid var(--primary);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .mission-statement .highlight {
            color: var(--primary);
            font-weight: 600;
        }

       

        /* ====== CONTACT SECTION ====== */
        #contact {
            background-color: white;
        }

        .contact-wrapper {
            background: white;
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(108, 190, 227, 0.1);
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #E8F3FB;
        }

        .contact-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .contact-content h5 {
            font-size: 1.05rem;
            margin-bottom: 0.25rem;
            color: var(--secondary);
        }

        .contact-content p {
            font-size: 0.95rem;
            color: var(--gray);
            margin-bottom: 0;
        }

        .contact-content a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-content a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        #contact .section-title:after {
            width: 80px;
            height: 4px;
        }

        .contact-form-container {
            background: linear-gradient(135deg, var(--secondary) 0%, #1A2530 100%);
            border-radius: 12px;
            padding: 2rem;
            color: white;
            height: 100%;
            box-shadow: 0 10px 30px rgba(44, 62, 80, 0.2);
        }

        .contact-form-container h3 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .contact-form .form-control {
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0.75rem 1rem;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }

        .contact-form .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(108, 190, 227, 0.25);
            background-color: rgba(255, 255, 255, 0.15);
        }

        .contact-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .contact-form textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        /* ====== UTILITIES ====== */
        .text-justify {
            text-align: justify;
        }

        .opacity-7 {
            opacity: 0.7;
        }

        .text-primary {
            color: var(--primary) !important;
        }

        .border-primary {
            border-color: var(--primary) !important;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <?php include 'nav.php'; ?>

    <!-- HERO SLIDER -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner1.png" class="d-block w-100" alt="Rajasthan Minerals Industrial Solutions">
            </div>
            <div class="carousel-item">
                <img src="images/banner2.jpg" class="d-block w-100" alt="Quality Minerals Processing">
            </div>
            <div class="carousel-item">
                <img src="images/banner3.jpg" class="d-block w-100" alt="Mineral Export Services">
            </div>
        </div>
    </div>

    <!-- WELCOME SECTION -->
    <section id="welcome" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="section-title d-inline-block">Welcome To The World Of RMCL</h1>
                <p class="tagline">We play a silent but prominent role in your matters of daily need, Life Objects & Desire.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-center mb-5">
                        RMCL's products find a place in every beat of your day to day life. RMCL's products touch all walks of your day to day life- from toothpaste to sanitary ware for your bathroom, grooming cosmetics, neutraceuticals for your health, crockery of your choice and stature, paper, plastic and steel- we have silent yet sturdy presence in all.
                    </p>

                    <div class="row key-points">
                        <div class="col-md-4 mb-4">
                            <div class="card card-hover h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Specialty Industrial & Life Essential Minerals</h5>
                                    <p class="card-text">Customizing specialty grades to suit advanced process needs of chemical and allied industries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card card-hover h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Global Reputation</h5>
                                    <p class="card-text">Trusted by reputed global MNCs around the world with a growing portfolio of satisfied clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card card-hover h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Highest Quality Standards</h5>
                                    <p class="card-text">Supplying clients with the highest quality minerals available in India and globally.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-box">
                        <p class="mb-0">
                            <strong>RMCL incorporates business of Specialty Industrial and Life essential Minerals</strong> with a unique focus on customizing specialty grades to suit advance process needs of chemical and allied industry. RMCL's client base includes reputed global MNCs around the globe. RMCL strives on supplying clients with highest quality minerals available in India and from our upcoming subsidiaries from other parts of the globe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="products" class="section-padding">
        <div class="container">
            <h2 class="section-title text-center">Our Product Range</h2>
            <p class="text-center mb-5 opacity-7">Discover wide range of high-quality industrial minerals essential for various applications across multiple industries.</p>

            <div class="product-grid">
                <div class="row g-4 justify-content-center">
                    <?php
                    // Define only the specified products
                    $specifiedProducts = [
                        'Calcium Carbonates' => [
                            'desc' => 'Essential in plastics, paper, paints, adhesives, and sealants.', 
                            'img' => 'img/calcium-carbonates_calcite-small.png'
                        ],
                        'Calcium Hydroxides' => [
                            'desc' => 'Used in water treatment, construction, and chemical manufacturing.', 
                            'img' => 'img/calcium-hydroxides_hydrated-lime-small.png'
                        ],
                        'China Clay' => [
                            'desc' => 'Essential for ceramics, paper, paint, rubber, and plastics.', 
                            'img' => 'img/china-clay_kaolin-small.png'
                        ],
                        'Dolomite' => [
                            'desc' => 'Used in construction, agriculture, glass, and ceramics.', 
                            'img' => 'img/dolomite-small.png'
                        ],
                        'Calcium Chloride' => [
                            'desc' => 'Used for dust control, de-icing, concrete acceleration, and moisture control.', 
                            'img' => 'img/calcium-chloride-small.png'
                        ],
                        'Magnesium Oxide' => [
                            'desc' => 'Used in refractory, agriculture, construction, and chemical industries.', 
                            'img' => 'img/Magnesium-oxide_carbonates.png'
                        ]
                    ];

                    foreach ($specifiedProducts as $name => $details) {
                        echo '
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="card product-card card-hover">
                                <div class="product-img-container">
                                
                                    <img src="' . $details['img'] . '" alt="' . $name . '">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">' . $name . '</h5>
                                    <a href="' . strtolower(str_replace(' ', '-', $name)) . '.php" class="btn btn-primary-custom btn-sm w-100"> View Details </a>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                    <a href="ourProducts.php" class="btn btn-primary-custom btn-sm w-100"> Explore More Products </a>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <!-- WHY CHOOSE US SECTION -->
    <section id="why-choose" class="section-padding highlight-bg">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Industry Leaders Trust RMCL</h2>
                <p class="opacity-7">Discover what sets us apart in the mineral industry</p>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card-hover">
                        <div class="feature-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4>R&D-Driven Innovation</h4>
                        <p>Continuous innovation and technical development on regular basis to deliver cutting-edge mineral solutions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card-hover">
                        <div class="feature-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <h4>Global Reach</h4>
                        <p>High-quality minerals delivered annually across the globe with responsible and reliable supply chains.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card-hover">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>Environment Friendly</h4>
                        <p>Sustainable mining and processing practices to minimize ecological footprint and promote green initiatives.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card-hover">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Trusted Legacy</h4>
                        <p>The trust of leading national and global brands across diverse sectors for decades of excellence.</p>
                    </div>
                </div>
            </div>

            <div class="mission-statement">
                <p class="mb-3">With a growing portfolio of satisfied domestic and international clients, RMCL stands out for its <span class="highlight">reliable supply chain, ethical business practices, and commitment to sustainability</span>. From sourcing to final delivery, we emphasize transparency, environmental responsibility, and customer-first service – making us the preferred choice for businesses seeking consistent excellence in every shipment.</p>
                
                <p class="mb-0">When you choose RMCL, you're choosing a legacy of trust, innovation, and results – quietly powering the products people use every day.</p>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <h2 class="section-title text-center mb-4">Get In Touch</h2>
                        <p class="mb-4 opacity-7">Have questions about our products or need a customized mineral solution? Contact our team of experts for personalized assistance.</p>

                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-industry"></i>
                                </div>
                                <div class="contact-content">
                                    <h5>Our Location</h5>
                                    <ul>
                                        <li><p>Shivam, Harihar Society, Sainath Road,<br>Petlad, Anand, Gujarat - 388450, India</p></li>
                                        <li><p>Tinki Talab, Badni Harisingh,<br> Jodhpur Rural, Rajasthan - 342901, India</p></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h5>Phone Number</h5>
                                    <p>
                                        <a href="tel:+9102697299494">+91 (02697) 299494</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-content">
                                    <h5>Email Address</h5>
                                    <p>
                                        <a href="mailto:info@rajasthanminerals.com">info@rajasthanminerals.com</a><br>
                                        <a href="mailto:sales@rajasthanminerals.com">sales@rajasthanminerals.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-content">
                                    <h5>Working Hours</h5>
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 1:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="contact-form-container">
                            <h3 class="section-title text-center mb-4">Quick Contact</h3>

                            <?php if (isset($_GET['success'])): ?>
                                <div class="alert alert-success">Thank you! Your message has been sent.</div>
                            <?php elseif (isset($_GET['error'])): ?>
                                <div class="alert alert-danger">Something went wrong. Please try again.</div>
                            <?php endif; ?>
                            
                            <form class="contact-form" action="quick-contact.php" method="post">
                                <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>
                                <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>
                                <input type="tel" name="phone" class="form-control mb-3" placeholder="Phone Number">
                                <textarea name="message" class="form-control mb-3" rows="3" placeholder="Your Message"></textarea>
                                <button type="submit" class="btn btn-primary-custom w-100">Submit Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Set current year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Form submission handling
        document.getElementById('contact-form')?.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.textContent;
            
            // Show loading state
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                alert('Thank you! Your message has been sent successfully. We will contact you soon.');
                form.reset();
                submitBtn.textContent = originalBtnText;
                submitBtn.disabled = false;
            }, 1500);
        });

        // Product modal handling
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product');
                console.log('Viewing details for:', productName);
                // Load product details into modal here
            });

            document.getElementById('productModal')
            .addEventListener('show.bs.modal', function (e) {

                const productName = e.relatedTarget.getAttribute('data-product');

                const slug = productName
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/(^-|-$)/g, '');

                document.getElementById('viewFullPage').href = slug + '.php';
            });
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>