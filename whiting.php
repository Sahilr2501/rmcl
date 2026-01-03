<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whiting Powder – CaCO₃ | Rajasthan Minerals & Chemicals</title>

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
            <source media="(max-width: 767px)" srcset="img/whiting-powder-small.png">

            <!-- Desktop Image -->
            <img src="img/whiting-powder-banner.jpg" alt="Whiting Powder Calcium Carbonate">
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
                            Whiting Powder – CaCO<sub>3</sub>
                        </h1>

                        <h5 class="fw-semibold mb-3">Description</h5>
                        <p>
                            Whiting powder is also naturally occurring calcium carbonate. It exists in amorphous form where as calcite exists in crystalline form. Its amorphous form gives tremendous suspending powder in coatings. It's also known as Chalk powder.
                        </p>
                        <p>
                            RMCL's optimum quality whiting powder is manufactured using naturally occurred calcium carbonate which is available in amorphous form. Owing to the tremendous suspending power, whiting powder is widely used in various applications like cleaning flux, oil, cement and other residue from stained glass projects.
                        </p>

                        <div class="highlight-box">
                            <h4 class="fw-semibold mb-3">Key Highlights</h4>
                            <ul class="mb-0">
                                <li><strong>Cost-Effective Filler</strong> – Reduces production costs without compromising quality.</li>
                                <li><strong>Excellent Particle Fineness</strong> – Provides smooth texture and easy mixing.</li>
                                <li><strong>High Whiteness & Brightness</strong> – Ensures smooth, clean, and consistent finishes.</li>
                                <li><strong>Stable & Non-Toxic</strong> – Safe for industrial, construction, and household use.</li>
                            </ul>
                        </div>

                        <h4 class="fw-semibold mt-5 mb-3">Core Applications</h4>

                        <ul class="core-apps">
                            <li><strong>Construction Materials</strong> – Essential in wall putty, cement, and plaster formulations.</li>
                            <li><strong>Cosmetics</strong> – Added to powders and personal care formulations for bulk and brightness.</li>
                            <li><strong>Paints & Coatings</strong> – Used as an extender to improve opacity, brightness, and smoothness.</li>
                            <li><strong>Paper Industry</strong> – Functions as a filler and coating material to improve brightness.</li>
                            <li><strong>Plastics & Rubber</strong> – Improves strength, reduces costs, and enhances processability.</li>
                            <li><strong>Polishing & Abrasives</strong> – Used in mild polishing powders and surface finishing.</li>
                        </ul>

                        <h4 class="fw-semibold mt-5 mb-3">Extended Applications</h4>

                        <ul class="extended-apps">
                            <li><strong>Ceramics</strong> – Acts as a fluxing agent and whitening material.</li>
                            <li><strong>Household Uses</strong> – Traditionally used in whitewash and cleaning powders.</li>
                            <li><strong>Printing Inks</strong> – Provides smoothness and controlled viscosity.</li>
                            <li><strong>Textiles</strong> – Functions as a filler and coating in certain fabric treatments.</li>
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