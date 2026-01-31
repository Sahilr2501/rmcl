<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dolomite (CaMg(CO₃)₂) | Rajasthan Minerals & Chemicals</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Bookman Old Style", "Bookman", "URW Bookman L", serif;
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
        <img src="img/Dolomite-banner.jpg" 
             alt="Dolomite Mineral"
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
                            Dolomite
                        </h1>

                        <p><strong>Formula : CaMg(CO<sub>3</sub>)<sub>2</sub></strong></p>

                        <h5 class="fw-semibold mb-3">Description</h5>
                        <p>
                            Dolomite is a Double Carbonate of Calcium and Magnesium - CaCO<sub>3</sub>. MgCO<sub>3</sub>. It is sedimentary in origin and is supposed to have been formed due to chemical action of sea-water containing high percentage of Magnesia and Limestone. A true chemically uniform calcium magnesium carbonate with the chemical formula CaMg(CO<sub>3</sub>)<sub>2</sub>, and a dolomitic limestone – an irregular mixture of calcium and magnesium carbonates.
                        </p>

                        <div class="highlight-box">
                            <h4 class="fw-semibold mb-3">Key Highlights</h4>
                            <ul class="mb-0">
                                <li><strong>Chemical Stability</strong> – Maintains performance under varied industrial conditions.</li>
                                <li><strong>Dual Composition</strong> – Natural source of both calcium and magnesium carbonates.</li>
                                <li><strong>High Durability</strong> – Resistant to weathering, making it ideal for construction uses.</li>
                                <li><strong>Versatility</strong> – Supplied in lumps, powder, and calcined forms.</li>
                            </ul>
                        </div>

                        <h4 class="fw-semibold mt-5 mb-3">Core Applications</h4>

                        <ul class="core-apps">
                            <li><strong>Animal Feed</strong> – Supplies essential minerals (Ca & Mg) for livestock nutrition.</li>
                            <li><strong>Chemical Industry</strong> – Used to produce magnesium salts, refractory materials, and lime.</li>
                            <li><strong>Glass & Ceramics</strong> – Used as a source of Magnesium. Large quantities of processed dolomite used in the production of Float glass. It also finds use in the manufacture of Mineral Wool.</li>
                            <li><strong>Paints & Coatings</strong> – Serves as a filler and extender, providing whiteness and consistency.</li>
                            <li><strong>Pharmaceuticals & Health</strong> – Processed forms used in mineral supplements and formulation.</li>
                            <li><strong>Steel & Metallurgy</strong> – Acts as a flux to remove impurities in iron and steel production.</li>
                        </ul>

                        <h4 class="fw-semibold mt-5 mb-3">Extended Applications</h4>

                        <ul class="extended-apps">
                            <li><strong>Agriculture</strong> – Improves soil fertility, reduces acidity, and provides magnesium for crops.</li>
                            <li><strong>Construction & Building</strong> – Due to the mineral's increased hardness and density, while asphalt and concrete applications prefer dolomite as filler for its strength and hardness.</li>
                            <li><strong>Environmental Applications</strong> – Used in flue gas desulfurization and waste treatment.</li>
                            <li><strong>Horticulture</strong> – Dolomitic limestone and dolomite are added to soils and soilless potting mixes to lower their acidity, as well as a magnesium source.</li>
                            <li><strong>Water Treatment</strong> – Helps neutralize acidic water and stabilize pH.</li>
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