<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Products | Rajasthan Minerals & Chemicals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        :root {
            --primary: #0d6efd;
            --primary-dark: #0b5ed7;
            --secondary: #6c757d;
            --dark: #212529;
            --light: #f8f9fa;
            --white: #ffffff;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --radius: 14px;
        }

        body {
            background-color: var(--light);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        /* ===== HERO IMAGE ONLY ===== */
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
            max-height: 500px;
            object-fit: contain;
            display: block;
        }

        /* ===== PRODUCTS GRID ===== */
        .product-card {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            height: 100%;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow);
            border-color: var(--primary);
        }

        .product-card:hover .product-img-wrapper::after {
            opacity: 1;
        }

        .product-img-wrapper {
            height: 180px;
            background: linear-gradient(135deg, #f0f8ff 0%, #e6f2ff 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            position: relative;
            overflow: hidden;
        }

        .product-img-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.1) 0%, rgba(13, 110, 253, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-img-wrapper img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-img-wrapper img {
            transform: scale(1.05);
        }

        .product-content {
            padding: 24px 20px;
            text-align: center;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
            line-height: 1.3;
            min-height: 2.6rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-description {
            font-size: 0.9rem;
            color: var(--secondary);
            margin-bottom: 20px;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 4rem;
        }

        .btn-view-details {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 10px 24px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
        }

        .btn-view-details:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.25);
            color: white;
        }

        .btn-view-details i {
            font-size: 0.9rem;
            transition: transform 0.3s ease;
        }

        .btn-view-details:hover i {
            transform: translateX(3px);
        }

        /* ===== CATEGORY BADGES ===== */
        .category-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.95);
            color: var(--primary);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            z-index: 2;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        /* ===== PRODUCT COUNTER ===== */
        .product-counter {
            text-align: center;
            margin: 30px 0 40px;
            color: var(--secondary);
            font-size: 1rem;
        }

        .product-counter .count {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.2rem;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1200px) {
            .product-img-wrapper {
                height: 160px;
            }
            
            .hero-image-container img {
                max-height: 450px;
            }
        }

        @media (max-width: 992px) {
            .product-img-wrapper {
                height: 150px;
            }
            
            .hero-image-container img {
                max-height: 400px;
            }
        }

        @media (max-width: 768px) {
            .product-img-wrapper {
                height: 140px;
            }
            
            .hero-image-container img {
                max-height: 350px;
            }
            
            .product-title {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .product-img-wrapper {
                height: 130px;
                padding: 20px;
            }
            
            .hero-image-container img {
                max-height: 300px;
            }
            
            .product-content {
                padding: 20px 15px;
            }
        }

        @media (max-width: 400px) {
            .hero-image-container img {
                max-height: 250px;
            }
        }

        /* ===== ANIMATION ===== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-card {
            animation: fadeInUp 0.5s ease forwards;
            opacity: 0;
        }

        .product-card:nth-child(1) { animation-delay: 0.1s; }
        .product-card:nth-child(2) { animation-delay: 0.2s; }
        .product-card:nth-child(3) { animation-delay: 0.3s; }
        .product-card:nth-child(4) { animation-delay: 0.4s; }
        .product-card:nth-child(5) { animation-delay: 0.5s; }
        .product-card:nth-child(6) { animation-delay: 0.6s; }
        .product-card:nth-child(7) { animation-delay: 0.7s; }
        .product-card:nth-child(8) { animation-delay: 0.8s; }
        .product-card:nth-child(9) { animation-delay: 0.9s; }
        .product-card:nth-child(10) { animation-delay: 1.0s; }
        .product-card:nth-child(11) { animation-delay: 1.1s; }
        .product-card:nth-child(12) { animation-delay: 1.2s; }
        .product-card:nth-child(13) { animation-delay: 1.3s; }
        .product-card:nth-child(14) { animation-delay: 1.4s; }
    </style>
</head>

<body>

<?php include 'nav.php'; ?>

<!-- HERO IMAGE ONLY -->
<section class="hero-image-container">
    <img src="images/banner4.jpg" 
         alt="Our Premium Mineral Products"
         loading="eager">
</section>

<!-- PRODUCTS GRID -->
<section id="products">
    <div class="container">
        
        <div class="product-counter">
            <span class="count">14</span> Premium Products Available
        </div>

        <div class="row g-4">
            <?php
            $products = [
                ['name'=>'Barytes', 'slug'=>'barytes', 'desc'=>'High-density mineral used in drilling muds, paints, rubber, and paper industries for superior performance.', 'img'=>'img/barytes-small.png', 'category'=>'Industrial'],
                ['name'=>'Bentonite', 'slug'=>'bentonite', 'desc'=>'Versatile clay mineral essential for foundry, drilling mud, pelletizing, and construction applications.', 'img'=>'img/bentonite-small.png', 'category'=>'Industrial'],
                ['name'=>'Calcium Carbonate', 'slug'=>'calcium-carbonate', 'desc'=>'Essential mineral for plastics, paper, paints, adhesives, and sealants with excellent whiteness.', 'img'=>'img/calcium-carbonates_calcite-small.png', 'category'=>'Industrial'],
                ['name'=>'Calcium Hydroxide', 'slug'=>'calcium-hydroxide', 'desc'=>'Key chemical for water treatment, construction, and various industrial chemical processes.', 'img'=>'img/calcium-hydroxides_hydrated-lime-small.png', 'category'=>'Chemical'],
                ['name'=>'Calcium Oxide', 'slug'=>'calcium-oxide', 'desc'=>'Critical component in steel manufacturing, construction, and chemical production industries.', 'img'=>'img/calcium-oxides_quick-lime-small.png', 'category'=>'Chemical'],
                ['name'=>'China Clay', 'slug'=>'china-clay', 'desc'=>'Premium kaolin essential for ceramics, paper coating, paints, rubber, and pharmaceutical applications.', 'img'=>'img/china-clay_kaolin-small.png', 'category'=>'Industrial'],
                ['name'=>'Dolomite', 'slug'=>'dolomite', 'desc'=>'Versatile mineral for glass manufacturing, ceramics, agriculture, and construction materials.', 'img'=>'img/dolomite-small.png', 'category'=>'Industrial'],
                ['name'=>'Magnesium Oxide', 'slug'=>'magnesium-oxide', 'desc'=>'High-purity mineral for refractory materials, agriculture supplements, and chemical industries.', 'img'=>'img/Magnesium-oxide_carbonates.png', 'category'=>'Chemical'],
                ['name'=>'Mica', 'slug'=>'mica', 'desc'=>'Natural mineral for electrical insulation, paints, cosmetics, and high-temperature applications.', 'img'=>'img/mica-small.png', 'category'=>'Industrial'],
                ['name'=>'Red Oxide', 'slug'=>'red-oxide', 'desc'=>'Natural pigment for paints, coatings, construction materials, and artistic applications.', 'img'=>'img/natural-red-oxide_red-ochre-small.png', 'category'=>'Pigment'],
                ['name'=>'Potash Feldspar', 'slug'=>'potash-feldspar', 'desc'=>'Essential flux material for ceramics, glass manufacturing, and enamel production.', 'img'=>'img/potash-feldspar_soda-feldspar-small.png', 'category'=>'Industrial'],
                ['name'=>'Quartz', 'slug'=>'quartz', 'desc'=>'High-silica mineral for glass production, electronics, construction, and industrial applications.', 'img'=>'img/Quartz-small.png', 'category'=>'Industrial'],
                ['name'=>'Soapstone (Talc)', 'slug'=>'soapstone-talc', 'desc'=>'Soft mineral for ceramics, plastics, rubber, cosmetics, and industrial applications.', 'img'=>'img/Soapstone_Talc-small.png', 'category'=>'Industrial'],
                ['name'=>'Whiting', 'slug'=>'whiting', 'desc'=>'High-purity calcium carbonate used as filler and coating pigment in various industries.', 'img'=>'img/Whiting-small.png', 'category'=>'Industrial']
            ];

            foreach ($products as $index => $product) {
                ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        
                        <div class="product-img-wrapper">
                            <img src="<?= $product['img']; ?>" alt="<?= $product['name']; ?>" loading="lazy">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><?= $product['name']; ?></h3>
                            <p class="product-description"><?= $product['desc']; ?></p>
                            <a href="<?= $product['slug']; ?>.php" class="btn btn-view-details">
                                View Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="text-center mt-5 pt-4">
            <p class="text-muted">Can't find what you're looking for? <a href="contact.php" class="text-primary fw-semibold">Contact our team</a> for custom mineral solutions.</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<script>
    // Add interactive hover effects
    document.addEventListener('DOMContentLoaded', function() {
        const productCards = document.querySelectorAll('.product-card');
        
        productCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });
    });
</script>

</body>
</html>