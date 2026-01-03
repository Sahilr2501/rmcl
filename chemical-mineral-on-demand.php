<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chemical & Mineral on Demand | Rajasthan Minerals & Chemicals</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .hero {
            background: linear-gradient(135deg, #0d6efd, #084298);
            color: #fff;
            padding: 70px 0;
        }

        .hero h1 {
            font-weight: 700;
        }

        .feature-card {
            background: #fff;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            height: 100%;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .product-list li {
            padding: 6px 0;
        }

        .cta-box {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
            padding: 30px;
        }

        /* Enable hover dropdown (desktop only) */
        @media (min-width: 992px) {
            .navbar .dropdown:hover>.dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }

        /* Smooth animation */
        .dropdown-menu {
            transition: all 0.25s ease;
        }

        /* Submenu support for Bootstrap 5 */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: 0.1rem;
        }

        /* Desktop hover */
        @media (min-width: 992px) {
            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <?php include 'nav.php'; ?>

    <!-- HERO -->
    <section class="hero text-center">
        <div class="container">
            <h1>Chemical & Mineral on Demand</h1>
            <p class="mt-3 mb-0">
                Customized sourcing, processing & supply tailored to your industry needs
            </p>
        </div>
    </section>

    <!-- INTRO -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p class="lead text-muted">
                        At <strong>Rajasthan Minerals & Chemicals (RMCL)</strong>, we understand that every industry has
                        unique requirements. Beyond our standard product range, we offer
                        <strong>Chemical & Mineral on Demand</strong> solutions - delivering customized grades,
                        compositions, and packaging as per your specifications.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY ON DEMAND -->
    <section class="pb-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <h6 class="fw-semibold">Customized Specifications</h6>
                        <p class="text-muted small mb-0">
                            Tailor-made chemical composition, mesh size, purity & packaging.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <h6 class="fw-semibold">Flexible Quantities</h6>
                        <p class="text-muted small mb-0">
                            Small batches to bulk industrial orders handled efficiently.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <h6 class="fw-semibold">Quality Assurance</h6>
                        <p class="text-muted small mb-0">
                            Strict quality checks ensuring consistency and reliability.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <h6 class="fw-semibold">Timely Delivery</h6>
                        <p class="text-muted small mb-0">
                            Reliable logistics for domestic and international clients.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PRODUCTS LIST -->
    <section class="py-5 bg-light">
        <div class="container">

            <div class="text-center mb-4">
                <h3 class="fw-bold">Available on Demand</h3>
                <p class="text-muted mb-0">
                    The following products can be supplied on demand as per requirement
                </p>
            </div>

            <div class="row g-4">

                <!-- CHEMICALS -->
                <div class="col-lg-6">
                    <div class="feature-card h-100">
                        <h5 class="fw-semibold mb-3">Chemicals</h5>
                        <ul class="product-list text-muted mb-0">
                            <li>Calcium Chloride</li>
                            <li>Magnesium Chloride</li>
                            <li>Magnesium Sulphate</li>
                            <li>Calcium Hypochlorite</li>
                            <li>Tri-Calcium Phosphate</li>
                            <li>Di-Calcium Phosphate</li>
                            <li>Manganese Sulphate</li>
                        </ul>
                    </div>
                </div>

                <!-- MINERALS -->
                <div class="col-lg-6">
                    <div class="feature-card h-100">
                        <h5 class="fw-semibold mb-3">Minerals</h5>
                        <ul class="product-list text-muted mb-0">
                            <li>Mica</li>
                            <li>Bentonite</li>
                            <li>Barytes</li>
                            <li>Aluminum Hydroxide</li>
                            <li>Whiting Powder</li>
                            <li>Red Oxide</li>
                            <li>Feldspar (including Quartz grades)</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="cta-box">
                        <h4 class="fw-bold mb-3">Need a Custom Solution?</h4>
                        <p class="text-muted mb-4">
                            Share your requirements with us and our team will get back with
                            the best possible solution for your industry.
                        </p>
                        <a href="contact.php" class="btn btn-primary px-4">
                            Contact Us Now
                        </a>
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