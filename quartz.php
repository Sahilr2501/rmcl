<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quartz / Silica Powder (SiO₂) | Rajasthan Minerals & Chemicals</title>

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

        /* HERO IMAGE – FULL IMAGE, NO CROP, NO TEXT */
        .hero-image {
            width: 100%;
            background: #000;
        }

        .hero-image img {
            width: 100%;
            height: auto;
            display: block;
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

    <!-- HERO IMAGE -->
    <section class="hero-image">
        <picture>
            <!-- Mobile Image -->
            <source media="(max-width: 767px)" srcset="img/quartz-silica-powder-small.png">

            <!-- Desktop Image -->
            <img src="img/quartz-silica-powder-banner.jpg" alt="Quartz Silica Powder">
        </picture>
    </section>

    <!-- CONTENT -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <!-- MAIN CONTENT -->
                <div class="col-lg-8">
                    <div class="content-box">

                        <h1 class="fw-bold mb-3">
                            Quartz / Silica Powder – SiO<sub>2</sub>
                        </h1>

                        <h5 class="fw-semibold mb-3">Description</h5>
                        <p>
                            This is natural silica found in purity of more than 99.7%.
                        </p>
                        <p>
                            RMCL's Quartz powder available in snow white colour which has 96% whiteness in 'A' Grade silica. Usually white to reddish in colour, vitreous in luster, is insoluble in acids except hydrogen fluoride and is non combustive in nature and supplied specially customized as per industry's desired specification.
                        </p>

                        <div class="highlight-box">
                            <h4 class="fw-semibold mb-3">Key Highlights</h4>
                            <ul class="mb-0">
                                <li><strong>Exceptional Purity</strong> – Natural silica with purity > 99.7%.</li>
                                <li><strong>High Whiteness</strong> – Snow white 'A' Grade silica with 96% whiteness.</li>
                                <li><strong>Chemically Stable</strong> – Insoluble in acids (except HF) and non-combustive.</li>
                                <li><strong>Customizable</strong> – Supplied as per specific industry mesh and grade requirements.</li>
                            </ul>
                        </div>

                        <h4 class="fw-semibold mt-5 mb-3">Core Applications</h4>

                        <ul class="core-apps">
                            <li><strong>Ceramic, Rubber, Plastic, Leather, Chemicals Industries</strong> – Used as a high-purity filler.</li>
                            <li><strong>Electronics</strong> – Used in circuits for consumer electronics, frequency control devices, and electronic filters.</li>
                            <li><strong>Glass Industry</strong> – Essential in production of container glass, flat panel glass, specialty glass, and fiber glass.</li>
                        </ul>

                        <h4 class="fw-semibold mt-5 mb-3">Extended Applications</h4>

                        <ul class="extended-apps">
                            <li><strong>Laser Industries</strong> – Used as lenses and windows due to optical clarity.</li>
                            <li><strong>Railroad and Mining</strong> – Applied in traction applications.</li>
                            <li><strong>Refractory Industry</strong> – Used as a raw material for high-temperature resistant linings.</li>
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