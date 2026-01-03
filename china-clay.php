<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaolin / China Clay (Al₂Si₂O₅(OH)₄) | Rajasthan Minerals & Chemicals</title>

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
            <source media="(max-width: 767px)" srcset="img/China-Clay_Kaolin-small.png">

            <!-- Desktop Image -->
            <img src="img/Kaolin_China-Clay_Kaolinite-banner.jpg" alt="Kaolin China Clay">
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
                            Kaolin / China Clay – Al<sub>2</sub>Si<sub>2</sub>O<sub>5</sub>(OH)<sub>4</sub>
                        </h1>

                        <p><strong>Formula : Al<sub>2</sub>Si<sub>2</sub>O<sub>5</sub>(OH)<sub>4</sub></strong></p>

                        <h5 class="fw-semibold mb-3">Description</h5>
                        <p>
                            Kaolin Kaolinite also known as China Clay is a soft, earthy, usually white mineral (dioctahedral phyllosilicate clay), produced by the chemical weathering of aluminium silicate minerals like feldspar.
                        </p>
                        <p>
                            At RMCL's China Clay continues to be a highly valuable raw material in both traditional and modern applications. Also processed or refined kaolin is available in white powder form, granule cum powder form, and in lumps form.
                        </p>

                        <div class="highlight-box">
                            <h4 class="fw-semibold mb-3">Key Highlights</h4>
                            <ul class="mb-0">
                                <li><strong>Chemical Inertness</strong> – Non-reactive, safe, and stable under diverse conditions.</li>
                                <li><strong>Fine Particle Size</strong> – Improves smoothness and printability in multiple applications.</li>
                                <li><strong>High Whiteness & Brightness</strong> – Ensures superior optical and aesthetic properties.</li>
                                <li><strong>Multiple Grades</strong> – Available in crude, washed, calcined, and micronized forms.</li>
                            </ul>
                        </div>

                        <h4 class="fw-semibold mt-5 mb-3">Core Applications</h4>

                        <ul class="core-apps">
                            <li><strong>Ceramics</strong> – Primary raw material for porcelain, tiles, sanitaryware, and refractories.</li>
                            <li><strong>Electrical Industry</strong> – Provides insulation in high-voltage and specialty applications.</li>
                            <li><strong>Paints & Coatings</strong> – Enhances opacity, durability, and smooth application.</li>
                            <li><strong>Pharmaceuticals & Cosmetics & Soap</strong> – Used in medicinal formulations, It is used in toothpaste, cosmetic and soap industry.</li>
                            <li><strong>Rubber & Plastics</strong> – Provides reinforcement, reduces shrinkage, and lowers production costs.</li>
                        </ul>

                        <h4 class="fw-semibold mt-5 mb-3">Extended Applications</h4>

                        <ul class="extended-apps">
                            <li><strong>Agriculture</strong> – Improves soil conditioning and acts as a carrier in pesticides.</li>
                            <li><strong>Construction Materials</strong> – Used in cement, adhesives, and sealants for added strength.</li>
                            <li><strong>Environmental Uses</strong> – Applied in water purification and pollutant absorption.</li>
                            <li><strong>Food Industry</strong> – Functions as an anti-caking and clarifying agent.</li>
                            <li><strong>Paper Industry</strong> – Widely used as a filler and coating agent to improve brightness and print quality.</li>
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