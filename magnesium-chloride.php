<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Magnesium Chloride (MgCl₂) | Rajasthan Minerals & Chemicals</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .content-box {
            background: #ffffff;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .highlight-box {
            background-color: #f0f8ff;
            border-left: 5px solid #0d6efd;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }

        .core-apps li, .extended-apps li {
            padding-left: 10px;
            margin-bottom: 12px;
            line-height: 1.5;
        }

        /* HERO IMAGE - PC IMAGE ON ALL DEVICES, FIT WITHOUT CUTTING */
        .hero-image-container {
            width: 100%;
            background: #000;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-image-container img {
            width: 100%;
            height: auto;
            max-height: 500px; /* Adjust this value as needed */
            object-fit: contain; /* This ensures the entire image fits without cropping */
            display: block;
        }

        /* Responsive height adjustments */
        @media (max-width: 1200px) {
            .hero-image-container img {
                max-height: 450px;
            }
        }

        @media (max-width: 992px) {
            .hero-image-container img {
                max-height: 400px;
            }
        }

        @media (max-width: 768px) {
            .hero-image-container img {
                max-height: 350px;
            }
        }

        @media (max-width: 576px) {
            .hero-image-container img {
                max-height: 300px;
            }
        }

        @media (max-width: 400px) {
            .hero-image-container img {
                max-height: 250px;
            }
        }

        /* Hover dropdown (desktop only) */
        @media (min-width: 992px) {
            .navbar .dropdown:hover>.dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }

        .dropdown-menu {
            transition: all 0.25s ease;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <?php include 'nav.php'; ?>

    <!-- HERO IMAGE - PC IMAGE ON ALL DEVICES -->
    <section class="hero-image-container">
        <!-- Use PC image for all devices -->
        <img src="img/magnesium-chloride-banner.png" 
             alt="Magnesium Chloride Flakes and Powder"
             loading="eager">
    </section>

    <!-- CONTENT -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <!-- MAIN CONTENT -->
                <div class="col-lg-8">
                    <div class="content-box">

                        <h1 class="fw-bold mb-3">
                            Magnesium Chloride – MgCl<sub>2</sub>
                        </h1>

                        <p><strong>Formula : MgCl<sub>2</sub></strong></p>

                        <h5 class="fw-semibold mb-3">Description</h5>
                        <p>
                            Magnesium Chloride is a highly soluble, hygroscopic salt, widely recognized for its de-icing, dust control, and health-related applications. Found naturally in seawater and brine or obtained from magnesite ore, MgCl₂ is valued for its versatility, safety, and cost-effectiveness. Its unique properties make it an essential material in construction, pharmaceuticals, chemicals, and agriculture, as well as in environmental management.
                        </p>

                        <div class="highlight-box">
                            <h4 class="fw-semibold mb-3">Key Highlights</h4>
                            <ul class="mb-0">
                                <li><strong>Available in Multiple Forms</strong> – Supplied as flakes, powder, pellets, and liquid solutions.</li>
                                <li><strong>Eco-Friendly De-Icer</strong> – Works efficiently at low temperatures with reduced environmental impact.</li>
                                <li><strong>Highly Soluble & Hygroscopic</strong> – Absorbs moisture effectively and dissolves quickly in water.</li>
                                <li><strong>Versatile Uses</strong> – Functions as a stabilizer, firming agent, and raw material for magnesium products.</li>
                            </ul>
                        </div>

                        <h4 class="fw-semibold mt-5 mb-3">Core Applications</h4>

                        <ul class="core-apps">
                            <li><strong>Animal Feed</strong> – Provides an essential mineral supplement for livestock.</li>
                            <li><strong>Chemical Industry</strong> – Used in producing magnesium metal, salts, and other compounds.</li>
                            <li><strong>Construction Industry</strong> – Improves stability of roads, used in magnesia cement, and as a concrete additive.</li>
                            <li><strong>De-Icing & Dust Control</strong> – Used on roads, highways, and unpaved areas for ice melting and dust suppression.</li>
                            <li><strong>Food Industry</strong> – Approved as a food additive (E511), firming agent, and coagulant in tofu production.</li>
                            <li><strong>Pharmaceuticals & Healthcare</strong> – Serves as a magnesium supplement and therapeutic bath salt.</li>
                        </ul>

                        <h4 class="fw-semibold mt-5 mb-3">Extended Applications</h4>

                        <ul class="extended-apps">
                            <li><strong>Agriculture</strong> – Supplies magnesium to crops and conditions alkaline soils.</li>
                            <li><strong>Paper & Pulp</strong> – Used in processing and improving pulp quality.</li>
                            <li><strong>Water Treatment</strong> – Helps in hardness adjustment and mineral balancing.</li>
                            <li><strong>Wellness & Spa</strong> – Commonly used in bath flakes for relaxation and skin health.</li>
                        </ul>

                    </div>
                </div>

                <!-- SIDEBAR -->
                <div class="col-lg-4">
                    <div class="content-box">

                        <h5 class="fw-semibold mb-3">Quick Contact</h5>

                        <form action="quick-contact.php" method="post">
                            <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>
                            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone">
                            <textarea name="message" class="form-control mb-3" rows="3"
                                placeholder="Message"></textarea>
                            <button class="btn btn-primary w-100">Submit</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-light py-4">
        <div class="container text-center text-muted small">
            © 2011 Rajasthan Minerals & Chemicals. All Rights Reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>