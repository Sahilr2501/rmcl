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
            --primary: #0a5c7f;
            --primary-dark: #08435e;
            --secondary: #d4a017;
            --light: #f8f9fa;
            --dark: #2c3e50;
            --gray: #6c757d;
        }

        body {
            font-family: 'bookman', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark);
            line-height: 1.5; /* Reduced line height */
            background-color: var(--light);
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            color: var(--primary);
        }

        /* ====== REDUCE SPACE BETWEEN CAROUSEL AND WELCOME SECTION ====== */
        #heroCarousel {
            margin-bottom: 0.25rem;
        }

        #welcome {
            padding-top: 1rem !important; /* Significantly reduced from 2.5rem */
        }

        #welcome .text-center {
            margin-bottom: 1rem !important; /* Reduced from 1.5rem */
        }

        #welcome h1 {
            margin-top: 0.25rem; /* Reduced top margin */
            margin-bottom: 0.5rem; /* Reduced from 0.75rem */
        }

        #welcome .tagline {
            margin-top: 0.5rem; /* Added to control spacing */
            margin-bottom: 1rem !important; /* Reduced from 1.5rem */
        }

        /* ====== COMMON STYLES ====== */
        .section-padding {
            padding: 2.5rem 0; /* Reduced from 4rem */
        }

        .section-title {
            position: relative;
            margin-bottom: 1.5rem; /* Reduced from 2rem */
            padding-bottom: 0.5rem; /* Reduced from 0.75rem */
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px; /* Reduced from 60px */
            height: 2px; /* Reduced from 3px */
            background-color: var(--secondary);
        }

        .text-center .section-title:after {
            left: 50%;
            transform: translateX(-50%);
        }

        .text-start .section-title:after {
            left: 0;
            transform: none;
        }

        .highlight-bg {
            background: linear-gradient(135deg, #e8f4f8 0%, #f0f7fa 100%);
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-3px); /* Reduced from -5px */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1) !important; /* Reduced shadow */
        }

        .btn-primary-custom {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
            padding: 0.5rem 1.25rem; /* Reduced padding */
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-secondary-custom {
            background-color: var(--secondary);
            border-color: var(--secondary);
            color: #333;
            font-weight: 600;
            padding: 0.5rem 1.25rem; /* Reduced padding */
            transition: all 0.3s ease;
        }

        .btn-secondary-custom:hover {
            background-color: #c29115;
            border-color: #c29115;
            transform: translateY(-2px);
        }

        /* ====== HERO SLIDER - SHOW ONLY IMAGES ====== */
        #heroCarousel {
            position: relative;
            width: 100%;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
        }

        .carousel-item {
            position: relative;
            display: none;
            width: 100%;
            transition: transform 0.6s ease;
            height: 400px; /* Reduced from 450px for more compact look */
        }

        .carousel-item.active {
            display: block;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            display: block;
        }

        /* Responsive height adjustments - REDUCED for closer spacing */
        @media (min-width: 1200px) {
            .carousel-item {
                height: 380px; /* Reduced for closer spacing */
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .carousel-item {
                height: 340px; /* Reduced for closer spacing */
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .carousel-item {
                height: 300px; /* Reduced for closer spacing */
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            .carousel-item {
                height: 250px; /* Reduced for closer spacing */
            }
        }

        @media (max-width: 575px) {
            .carousel-item {
                height: 200px; /* Reduced for closer spacing */
            }
        }

        @media (max-width: 400px) {
            .carousel-item {
                height: 180px; /* Reduced for closer spacing */
            }
        }

        /* ====== WELCOME SECTION ====== */
        #welcome {
            background-color: white;
        }

        #welcome h1 {
            font-size: 1.8rem; /* Reduced from 2.2rem */
        }

        #welcome .tagline {
            font-size: 1rem; /* Reduced from 1.1rem */
            color: var(--gray);
        }

        .key-points .card {
            border: none;
            border-left: 3px solid var(--primary); /* Reduced from 4px */
            border-radius: 6px; /* Reduced from 8px */
            margin-bottom: 0.75rem; /* Reduced from 1rem */
        }

        .highlight-box {
            background-color: #f8f9fa;
            border-left: 3px solid var(--secondary); /* Reduced from 4px */
            padding: 1.25rem; /* Reduced from 1.5rem */
            border-radius: 6px; /* Reduced from 8px */
            margin: 1.5rem 0; /* Reduced from 2rem */
        }

        /* ====== PRODUCTS GALLERY SECTION ====== */
        #products {
            background-color: white;
            position: relative;
        }

        #products::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--primary), transparent);
        }

        .product-gallery-item {
            border: 1px solid #eaeaea;
            border-radius: 8px; /* Reduced from 10px */
            background: white;
            padding: 20px; /* Reduced from 25px */
            height: 100%;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-gallery-item:hover {
            transform: translateY(-3px); /* Reduced from -5px */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08); /* Reduced shadow */
            border-color: var(--primary);
        }

        .product-image-wrapper {
            width: 100%;
            height: 150px; /* Reduced from 180px */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px; /* Reduced from 20px */
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border-radius: 6px; /* Reduced from 8px */
            padding: 12px; /* Reduced from 15px */
        }

        .product-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .product-title {
            font-size: 1.1rem; /* Reduced from 1.2rem */
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px; /* Reduced from 10px */
            text-align: center;
            line-height: 1.3;
            height: 2.4rem; /* Reduced from 2.8rem */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-description {
            color: var(--gray);
            line-height: 1.5; /* Reduced from 1.6 */
            flex-grow: 1;
            margin-bottom: 15px; /* Reduced from 20px */
            text-align: center;
            font-size: 0.9rem;
        }

        .btn-more-details {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            color: var(--primary);
            border: 1.5px solid var(--primary); /* Reduced from 2px */
            padding: 6px 16px; /* Reduced from 8px 20px */
            border-radius: 5px; /* Reduced from 6px */
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            width: fit-content;
            margin: 0 auto;
        }

        .btn-more-details:hover {
            background: var(--primary);
            color: white;
            transform: translateX(3px); /* Reduced from 5px */
        }

        .btn-more-details i {
            margin-left: 6px; /* Reduced from 8px */
            transition: transform 0.3s ease;
        }

        .btn-more-details:hover i {
            transform: translateX(2px); /* Reduced from 3px */
        }

        .btn-view-all {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border: none;
            padding: 10px 35px; /* Reduced from 12px 40px */
            border-radius: 6px; /* Reduced from 8px */
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-view-all:hover {
            transform: translateY(-2px); /* Reduced from -3px */
            box-shadow: 0 8px 20px rgba(10, 92, 127, 0.2); /* Reduced shadow */
        }

        /* ====== WHY CHOOSE US SECTION ====== */
        #why-choose {
            background: linear-gradient(135deg, #e8f4f8 0%, #f0f7fa 100%);
        }

        .feature-card {
            background: white;
            border-radius: 8px; /* Reduced from 10px */
            padding: 1.25rem; /* Reduced from 1.5rem */
            text-align: center;
            height: 100%;
            margin-bottom: 1rem; /* Reduced from 1.5rem */
        }

        .feature-icon {
            width: 50px; /* Reduced from 60px */
            height: 50px; /* Reduced from 60px */
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.75rem; /* Reduced from 1rem */
            color: white;
            font-size: 1.25rem; /* Reduced from 1.5rem */
        }

        .feature-card h4 {
            font-size: 1rem; /* Reduced from 1.1rem */
            margin-bottom: 0.5rem; /* Reduced from 0.75rem */
        }

        .feature-card p {
            font-size: 0.85rem; /* Reduced from 0.9rem */
            color: var(--gray);
            line-height: 1.4; /* Reduced from default */
        }

        .mission-statement {
            background: white;
            border-radius: 8px; /* Reduced from 10px */
            padding: 1.5rem; /* Reduced from 2rem */
            margin-top: 1.5rem; /* Reduced from 2rem */
            border-left: 3px solid var(--secondary); /* Reduced from 4px */
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
            border-radius: 8px; /* Reduced from 10px */
            padding: 1.5rem; /* Reduced from 2rem */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); /* Reduced shadow */
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem; /* Reduced from 1.25rem */
            padding-bottom: 1rem; /* Reduced from 1.25rem */
            border-bottom: 1px solid #dee2e6;
        }

        .contact-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .contact-icon {
            width: 36px; /* Reduced from 40px */
            height: 36px; /* Reduced from 40px */
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 6px; /* Reduced from 8px */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 0.75rem; /* Reduced from 1rem */
            flex-shrink: 0;
        }

        .contact-content h5 {
            font-size: 0.95rem; /* Reduced from 1rem */
            margin-bottom: 0.2rem; /* Reduced from 0.25rem */
        }

        .contact-content p {
            font-size: 0.85rem; /* Reduced from 0.9rem */
            color: var(--gray);
            margin-bottom: 0;
        }

        .contact-content a {
            color: var(--primary);
            text-decoration: none;
        }

        .contact-content a:hover {
            color: var(--secondary);
            text-decoration: underline;
        }

        /* FIX: Make Get In Touch line more prominent */
        #contact .section-title:after {
            width: 70px; /* Reduced from 80px */
            height: 3px; /* Reduced from 4px */
        }

        .contact-form-container {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 8px; /* Reduced from 10px */
            padding: 1.25rem; /* Reduced from 1.5rem */
            color: white;
            height: 100%;
        }

        .contact-form-container h3 {
            color: white;
            margin-bottom: 1rem; /* Reduced from 1.25rem */
        }

        .contact-form .form-control {
            border-radius: 5px; /* Reduced from 6px */
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0.5rem 0.65rem; /* Reduced from 0.6rem 0.75rem */
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            margin-bottom: 0.65rem; /* Reduced from 0.75rem */
            font-size: 0.85rem; /* Reduced from 0.9rem */
        }

        .contact-form .form-control:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 0.15rem rgba(212, 160, 23, 0.25); /* Reduced */
            background-color: rgba(255, 255, 255, 0.15);
        }

        .contact-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .contact-form textarea.form-control {
            min-height: 90px; /* Reduced from 100px */
            resize: vertical;
        }

        /* ====== UTILITIES ====== */
        .text-justify {
            text-align: justify;
        }

        .opacity-7 {
            opacity: 0.7;
        }

        /* Reduced margins for headings and paragraphs throughout */
        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 0.75rem;
        }

        p {
            margin-bottom: 1rem;
        }

        .lead {
            margin-bottom: 1.5rem;
        }

        /* Responsive adjustments - FURTHER REDUCED */
        @media (max-width: 768px) {
            .product-gallery-item {
                padding: 16px; /* Reduced from 20px */
            }
            
            .product-title {
                font-size: 1rem;
                height: 2.2rem; /* Reduced */
            }
            
            .product-image-wrapper {
                height: 130px; /* Reduced from 150px */
            }
            
            .product-description {
                font-size: 0.85rem; /* Reduced from 0.9rem */
            }

            .section-padding {
                padding: 2rem 0; /* Reduced from 3rem */
            }

            /* Mobile spacing adjustments for closer look */
            #welcome {
                padding-top: 0.75rem !important;
            }

            #welcome .text-center {
                margin-bottom: 0.75rem !important;
            }

            #welcome h1 {
                margin-top: 0.1rem;
                margin-bottom: 0.4rem;
            }

            #welcome .tagline {
                margin-top: 0.3rem;
                margin-bottom: 0.8rem !important;
            }
        }
        
        @media (max-width: 576px) {
            .product-title {
                font-size: 0.95rem;
                height: 2rem; /* Reduced */
            }
            
            .product-image-wrapper {
                height: 110px; /* Reduced from 130px */
                padding: 8px; /* Reduced from 10px */
            }

            .section-padding {
                padding: 1.75rem 0; /* Reduced from 2.5rem */
            }

            #welcome h1 {
                font-size: 1.6rem; /* Reduced from 1.8rem */
            }
            
            #welcome .tagline {
                font-size: 0.95rem; /* Reduced */
                margin-bottom: 0.75rem !important;
            }

            /* Even closer spacing on mobile */
            #heroCarousel {
                margin-bottom: 0.1rem;
            }

            #welcome {
                padding-top: 0.5rem !important;
            }
        }

        /* Extra small devices */
        @media (max-width: 400px) {
            #heroCarousel {
                margin-bottom: 0;
            }

            #welcome {
                padding-top: 0.25rem !important;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <?php include 'nav.php'; ?>

    <!-- HERO SLIDER - ONLY IMAGES, NO BACKGROUND -->
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
        
        <!-- Optional: Add carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- WELCOME SECTION -->
    <section id="welcome" class="section-padding">
        <div class="container">
            <div class="text-center mb-2"> <!-- Reduced from mb-3 -->
                <h1>Welcome To The World Of RMCL</h1>
                <p class="tagline">We play a silent but prominent role in your matters of daily need, Life Objects & Desire.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="text-justify mb-3"> <!-- Reduced from mb-4 -->
                        RMCL's products find a place in every beat of your day to day life. RMCL's products touch all walks of your day to day life- from toothpaste to sanitary ware for your bathroom, grooming cosmetics, neutraceuticals for your health, crockery of your choice and stature, paper, plastic and steel- we have silent yet sturdy presence in all.
                    </p>

                    <div class="row key-points">
                        <div class="col-md-4 mb-2"> <!-- Reduced from mb-3 -->
                            <div class="card card-hover h-100">
                                <div class="card-body p-3"> <!-- Reduced padding -->
                                    <h5 class="card-title">Specialty Industrial & Life Essential Minerals</h5>
                                    <p class="card-text mb-0">Customizing specialty grades to suit advanced process needs of chemical and allied industries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2"> <!-- Reduced from mb-3 -->
                            <div class="card card-hover h-100">
                                <div class="card-body p-3"> <!-- Reduced padding -->
                                    <h5 class="card-title">Global Reputation</h5>
                                    <p class="card-text mb-0">Trusted by reputed global MNCs around the world with a growing portfolio of satisfied clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2"> <!-- Reduced from mb-3 -->
                            <div class="card card-hover h-100">
                                <div class="card-body p-3"> <!-- Reduced padding -->
                                    <h5 class="card-title">Highest Quality Standards</h5>
                                    <p class="card-text mb-0">Supplying clients with the highest quality minerals available in India and globally.</p>
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

    <!-- PRODUCTS GALLERY SECTION -->
    <section id="products" class="section-padding">
        <div class="container">
            <div class="row mb-4"> <!-- Reduced from mb-5 -->
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Our Products</h2>
                    <p class="lead text-muted mb-3"> <!-- Reduced margin -->
                        Premium minerals for glass, ceramics, cosmetics, agriculture & plastic industries.
                    </p>
                </div>
            </div>

            <div class="row g-3"> <!-- Reduced from g-4 -->
                <!-- Product 1: Calcium Hydroxide -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-gallery-item card-hover">
                        <h3 class="product-title">Calcium Hydroxide</h3>
                        <div class="product-image-wrapper">
                            <img src="img/calcium-hydroxides_hydrated-lime-small.png" alt="Calcium Hydroxide" class="product-image">
                        </div>
                        
                        <p class="product-description">Produced with high purity—ideal for construction, water treatment, and chemical processes.</p>
                        <a href="calcium-hydroxides.php" class="btn-more-details">
                            More Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 2: Calcium Chloride -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-gallery-item card-hover">
                        <div class="product-image-wrapper">
                            <img src="img/calcium-chloride-small.png" alt="Calcium Chloride" class="product-image">
                        </div>
                        <h3 class="product-title">Calcium Chloride</h3>
                        <p class="product-description">Manufactured for dependable performance across industrial, moisture-control, and de-icing applications.</p>
                        <a href="calcium-chloride.php" class="btn-more-details">
                            More Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 3: Calcium Carbonates -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-gallery-item card-hover">
                        <div class="product-image-wrapper">
                            <img src="img/calcium-carbonates_calcite-small.png" alt="Calcium Carbonates" class="product-image">
                        </div>
                        <h3 class="product-title">Calcium Carbonates</h3>
                        <p class="product-description">High-brightness ground calcium carbonate for coatings, plastics, paper, and construction uses.</p>
                        <a href="calcium-carbonates.php" class="btn-more-details">
                            More Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 4: Burnt Lime -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-gallery-item card-hover">
                        <div class="product-image-wrapper">
                            <img src="img/calcium-oxides_quick-lime-small.png" alt="Burnt Lime" class="product-image">
                        </div>
                        <h3 class="product-title">Burnt Lime</h3>
                        <p class="product-description">Processed for consistent quality—suited to steel, construction, and chemical industries.</p>
                        <a href="burnt-lime.php" class="btn-more-details">
                            More Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 5: Dolomite -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-gallery-item card-hover">
                        <div class="product-image-wrapper">
                            <img src="img/dolomite-small.png" alt="Dolomite" class="product-image">
                        </div>
                        <h3 class="product-title">Dolomite</h3>
                        <p class="product-description">Double carbonate of calcium & magnesium used in glass, ceramics, agriculture, and metallurgy.</p>
                        <a href="dolomite.php" class="btn-more-details">
                            More Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 6: Magnesium Chloride -->
                <div class="col-lg-4 col-md-6">
                    <div class="product-gallery-item card-hover">
                        <div class="product-image-wrapper">
                            <img src="img/Magnesium-oxide_carbonates.png" alt="Magnesium Chloride" class="product-image">
                        </div>
                        <h3 class="product-title">Magnesium Chloride</h3>
                        <p class="product-description">Formulated for reliable performance in de-icing, dust control, and diverse industrial applications.</p>
                        <a href="magnesium-chloride.php" class="btn-more-details">
                            More Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- View All Products Button -->
            <div class="text-center mt-4"> <!-- Reduced from mt-5 -->
                <a href="ourProducts.php" class="btn btn-view-all btn-lg px-4"> <!-- Reduced px-5 to px-4 -->
                    <i class="fas fa-th-large me-2"></i> View All Products
                </a>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section id="why-choose" class="section-padding highlight-bg">
        <div class="container">
            <div class="text-center mb-4"> <!-- Reduced from mb-5 -->
                <h2 class="section-title">Why Industry Leaders Trust RMCL</h2>
                <p class="opacity-7 mb-3"> <!-- Added margin -->
                    Discover what sets us apart in the mineral industry
                </p>
            </div>

            <div class="row g-3 mb-4"> <!-- Reduced from g-4 and mb-4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card-hover shadow-sm">
                        <div class="feature-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4>R&D-Driven Innovation</h4>
                        <p>Continuous innovation and technical development on regular basis to deliver cutting-edge mineral solutions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card-hover shadow-sm">
                        <div class="feature-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <h4>Global Reach</h4>
                        <p>High-quality minerals delivered annually across the globe with responsible and reliable supply chains.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card-hover shadow-sm">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>Environment Friendly</h4>
                        <p>Sustainable mining and processing practices to minimize ecological footprint and promote green initiatives.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card card-hover shadow-sm">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Trusted Legacy</h4>
                        <p>The trust of leading national and global brands across diverse sectors for decades of excellence.</p>
                    </div>
                </div>
            </div>

            <div class="mission-statement">
                <p class="mb-2"> <!-- Reduced from mb-3 -->
                    With a growing portfolio of satisfied domestic and international clients, RMCL stands out for its <span class="highlight">reliable supply chain, ethical business practices, and commitment to sustainability</span>. From sourcing to final delivery, we emphasize transparency, environmental responsibility, and customer-first service – making us the preferred choice for businesses seeking consistent excellence in every shipment.
                </p>
                
                <p class="mb-0">
                    When you choose RMCL, you're choosing a legacy of trust, innovation, and results – quietly powering the products people use every day.
                </p>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <h2 class="section-title text-center mb-3"> <!-- Reduced from mb-4 -->
                            Get In Touch
                        </h2>
                        <p class="mb-3 opacity-7"> <!-- Reduced from mb-4 -->
                            Have questions about our products or need a customized mineral solution? Contact our team of experts for personalized assistance.
                        </p>

                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-content">
                                    <h5>Our Location</h5>
                                    <p>
                                    20, Harihar Society, Sainath Road, 
                                </br>PETLAD - 388450. Anand. (Guj.) INDIA</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h5>Phone Number</h5>
                                    <p>
                                        <a href="tel:+911234567890">+91 123 456 7890</a><br>
                                        <a href="tel:+919876543210">+91 987 654 3210</a>
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
                            <h3 class="section-title text-center mb-3"> <!-- Reduced from mb-4 -->
                                Quick Contact
                            </h3>

                            <?php if (isset($_GET['success'])): ?>
                                <div class="alert alert-success mb-3"> <!-- Added margin -->
                                    Thank you! Your message has been sent.
                                </div>
                            <?php elseif (isset($_GET['error'])): ?>
                                <div class="alert alert-danger mb-3"> <!-- Added margin -->
                                    Something went wrong. Please try again.
                                </div>
                            <?php endif; ?>
                            
                            <form class="contact-form" action="quick-contact.php" method="post">
                                <input type="text" name="name" class="form-control mb-2" placeholder="Your Name" required>
                                <input type="email" name="email" class="form-control mb-2" placeholder="Email Address" required>
                                <input type="tel" name="phone" class="form-control mb-2" placeholder="Phone Number">
                                <textarea name="message" class="form-control mb-2" rows="3" placeholder="Your Message"></textarea>
                                <button type="submit" class="btn btn-secondary-custom w-100">Submit Message</button>
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
        document.getElementById('current-year')?.textContent = new Date().getFullYear();

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

        // Initialize carousel if it exists
        if (document.getElementById('heroCarousel')) {
            const heroCarousel = new bootstrap.Carousel(document.getElementById('heroCarousel'), {
                interval: 5000,
                wrap: true,
                ride: 'carousel'
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70, // Reduced from 80
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>