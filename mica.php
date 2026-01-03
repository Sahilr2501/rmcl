<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mica Group of Silicate Minerals | Rajasthan Minerals & Chemicals</title>

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
            <source media="(max-width: 767px)" srcset="img/mica-small.png">

            <!-- Desktop Image -->
            <img src="img/mica-banner.jpg" alt="Mica Mineral Flakes and Sheets">
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
                            Mica – Group of Silicate Minerals
                        </h1>

                        <h5 class="fw-semibold mb-3">Description</h5>
                        <p>
                            Mica is a mineral name given to a group of minerals that are similar in their physical properties and chemical compositions. They are all silicate minerals, which means that chemically they all contain silica (SiO<sub>4</sub>).
                        </p>
                        <p>
                            Mica is stable when exposed to electricity, light, moisture, and extreme temperatures. Mica sheets are chemically inert, dielectric, insulating, lightweight, reflective, refractive, resilient, and transparent to opaque.
                        </p>
                        <p>
                            RMCL’s mica is valued for its electrical insulation, thermal resistance, and shimmering appearance.
                        </p>

                        <div class="highlight-box">
                            <h4 class="fw-semibold mb-3">Key Highlights</h4>
                            <ul class="mb-0">
                                <li><strong>Excellent Electrical Insulator</strong> – Widely used in electrical and electronic applications.</li>
                                <li><strong>High Thermal Resistance</strong> – Retains stability under extreme heat conditions.</li>
                                <li><strong>Perfect Cleavage</strong> – Splits easily into thin, flexible, and transparent sheets.</li>
                                <li><strong>Versatile Forms</strong> – Available in natural flakes, ground mica, and mica sheets.</li>
                            </ul>
                        </div>

                        <h4 class="fw-semibold mt-5 mb-3">Core Applications</h4>

                        <ul class="core-apps">
                            <li><strong>Construction Materials</strong> – Improves strength, flexibility, and thermal resistance in products like roofing materials and joint compounds.</li>
                            <li><strong>Cosmetics</strong> – Popular in makeup for its shimmering and reflective properties.</li>
                            <li><strong>Electrical & Electronics</strong> – Used in capacitors, insulation, and heat-resistant components.</li>
                            <li><strong>Paint Industry</strong> – Ground mica is used as a pigment extender that also facilitates suspension due to its light weight and platy morphology. It reduces checking and chalking, prevents shrinkage and shearing of the paint film, provides increased resistance to water penetration and weathering, and brightens the tone of colored pigments.</li>
                            <li><strong>Plastic Industry</strong> – Used ground mica as an extender and filler and also as a reinforcing agent.</li>
                            <li><strong>Rubber Industry</strong> – Used ground mica as an inert filler and as a mold lubricant in the manufacture of molded rubber products, including tires.</li>
                            <li><strong>Steel Industry</strong> – Also used as segment plates between copper commutator sections to insulate copper from the steel.</li>
                        </ul>

                        <h4 class="fw-semibold mt-5 mb-3">Extended Applications</h4>

                        <ul class="extended-apps">
                            <li><strong>Automotive Industry</strong> – Used in brake linings, clutch facings, and insulation materials.</li>
                            <li><strong>Decorative Applications</strong> – Adds glitter and luster in wall paints and surface coatings.</li>
                            <li><strong>Environmental Uses</strong> – Applied in specialty composites and insulation products for energy efficiency.</li>
                            <li><strong>Oil & Gas Drilling</strong> – Functions as a mud additive to prevent fluid loss.</li>
                            <li><strong>Paper Industry</strong> – Improves quality, opacity, and smoothness of specialty papers.</li>
                            <li><strong>Well-Drilling</strong> – Used as an additive to drilling "muds."</li>
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