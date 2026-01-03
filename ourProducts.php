<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Products | Rajasthan Minerals & Chemicals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        :root {
            --primary: #0d6efd;
            --dark: #212529;
            --gray: #6c757d;
            --light: #f8f9fa;
        }

        body {
            background-color: var(--light);
        }

        h2.section-title {
            font-weight: 700;
            color: var(--primary);
        }

        /* ===== PRODUCTS SECTION ===== */
        #products {
            padding: 4rem 0;
        }

        .product-card {
            border: none;
            border-radius: 14px;
            height: 100%;
            transition: all 0.3s ease;
            background: #fff;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
        }

        .product-img-container {
            height: 150px;
            background: linear-gradient(180deg, #eef5ff, #ffffff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .product-img-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .product-card .card-body {
            padding: 1.25rem;
            text-align: center;
        }

        .product-card .card-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.4rem;
            min-height: 2.2rem;
        }

        .product-card .card-text {
            font-size: 0.85rem;
            color: var(--gray);
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 3.4rem;
        }

        .btn-view {
            background-color: var(--primary);
            color: #fff;
            font-size: 0.8rem;
            border-radius: 30px;
            padding: 0.45rem 1rem;
        }

        .btn-view:hover {
            background-color: #0b5ed7;
            color: #fff;
        }
    </style>
</head>

<body>

<?php include 'nav.php'; ?>

<section id="products">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Our Product Range</h2>
            <p class="text-muted mt-2">
                High-quality industrial minerals engineered for performance across diverse industries.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            <?php
            $products = [
                ['name'=>'Barytes','slug'=>'barytes','desc'=>'Used in drilling muds, paints, rubber, and paper industries.','img'=>'img/barytes-small.png'],
                ['name'=>'Bentonite','slug'=>'bentonite','desc'=>'Used in foundry, drilling mud, pelletizing, and construction.','img'=>'img/bentonite-small.png'],
                ['name'=>'Calcium Carbonate','slug'=>'calcium-carbonate','desc'=>'Essential for plastics, paper, paints, adhesives, and sealants.','img'=>'img/calcium-carbonates_calcite-small.png'],
                ['name'=>'Calcium Hydroxide','slug'=>'calcium-hydroxide','desc'=>'Used in water treatment, construction, and chemicals.','img'=>'img/calcium-hydroxides_hydrated-lime-small.png'],
                ['name'=>'Calcium Oxide','slug'=>'calcium-oxide','desc'=>'Used in steel manufacturing and construction.','img'=>'img/calcium-oxides_quick-lime-small.png'],
                ['name'=>'China Clay','slug'=>'china-clay','desc'=>'Essential for ceramics, paper, paints, and rubber.','img'=>'img/china-clay_kaolin-small.png'],
                ['name'=>'Dolomite','slug'=>'dolomite','desc'=>'Used in glass, ceramics, agriculture, and construction.','img'=>'img/dolomite-small.png'],
                ['name'=>'Magnesium Oxide','slug'=>'magnesium-oxide','desc'=>'Used in refractory, agriculture, and chemical industries.','img'=>'img/Magnesium-oxide_carbonates.png'],
                ['name'=>'Mica','slug'=>'mica','desc'=>'Used in electrical insulation, paints, and cosmetics.','img'=>'img/mica-small.png'],
                ['name'=>'Red Oxide','slug'=>'red-oxide','desc'=>'Used in paints, pigments, and construction materials.','img'=>'img/natural-red-oxide_red-ochre-small.png'],
                ['name'=>'Potash Feldspar','slug'=>'potash-feldspar','desc'=>'Used in ceramics, glass, and enamel.','img'=>'img/potash-feldspar_soda-feldspar-small.png'],
                ['name'=>'Quartz','slug'=>'quartz','desc'=>'Used in glass, electronics, and construction.','img'=>'img/Quartz-small.png'],
                ['name'=>'Soapstone (Talc)','slug'=>'soapstone-talc','desc'=>'Used in ceramics, plastics, rubber, and cosmetics.','img'=>'img/Soapstone_Talc-small.png'],
                ['name'=>'Whiting','slug'=>'whiting','desc'=>'High-purity calcium carbonate used as filler and coating pigment.','img'=>'img/Whiting-small.png']
            ];

            foreach ($products as $product) {
                ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="card product-card h-100">
                        <figure class="product-img-container mb-0">
                            <img src="<?= $product['img']; ?>" alt="<?= $product['name']; ?>" loading="lazy">
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['name']; ?></h5>
                            <p class="card-text"><?= $product['desc']; ?></p>
                            <a href="<?= $product['slug']; ?>.php" class="btn btn-view w-100">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
            