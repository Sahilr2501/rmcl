<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Potash & Soda Feldspar | Rajasthan Minerals & Chemicals</title>

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

        .industry-list li {
            margin-bottom: 10px;
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
            <source media="(max-width: 767px)" srcset="img/Potash-Feldspar_Soda-Feldspar-small.png">

            <!-- Desktop Image -->
            <img src="img/Potash-Feldspar_Soda-Feldspar.jpg" alt="Potash & Soda Feldspar">
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
                            Potash & Soda Feldspar
                        </h1>

                        <p class="text-muted">
                            Chemical Formula:
                            KAlSi<sub>3</sub>O<sub>8</sub> ·
                            NaAlSi<sub>3</sub>O<sub>8</sub> ·
                            CaAl<sub>2</sub>Si<sub>2</sub>O<sub>8</sub>
                        </p>

                        <p>
                            The term <strong>Feldspar</strong> refers to a group of
                            aluminium silicate minerals containing potassium,
                            sodium, and calcium. Potash and Soda Feldspars
                            are differentiated based on the ratio of potassium
                            and sodium content.
                        </p>

                        <p>
                            RMCL Feldspars are generally light-colored and
                            available in shades such as snow white, pink, tan,
                            green, or grey. These variations occur due to natural
                            impurities within the crystal structure.
                        </p>

                        <h4 class="fw-semibold mt-4 mb-3">Industries We Serve</h4>

                        <ul class="industry-list">
                            <li><strong>Ceramics:</strong> Fluxing agent in bodies and glazes</li>
                            <li><strong>Glass Industry:</strong> Lowers melting temperature and controls viscosity</li>
                            <li><strong>Plastics & Rubber:</strong> Filler with chemical inertness and abrasion
                                resistance</li>
                            <li><strong>Sanitary Ware:</strong> Enhances vitrification and strength</li>
                            <li><strong>Surface Coatings & Glazes:</strong> Improves finish and defect-free surfaces
                            </li>
                            <li><strong>Tableware:</strong> Provides good fusibility without defects</li>
                            <li><strong>Earth Sciences:</strong> Used in geological and archaeological dating</li>
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