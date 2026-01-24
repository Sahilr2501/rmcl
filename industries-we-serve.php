<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Industries We Serve | Rajasthan Minerals & Chemicals</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #0a5c7f;
            --primary-dark: #08435e;
            --secondary: #d4a017;
            --accent: #2c8c6d;
            --light: #f8f9fa;
            --dark: #2c3e50;
            --gray: #6c757d;
            --light-gray: #e9ecef;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark);
            background-color: #fafafa;
            line-height: 1.6;
        }

        /* ====== INDUSTRY CARDS ====== */
        .industry-section {
            padding: 80px 0 40px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title .divider {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            margin: 0 auto 15px;
            border-radius: 2px;
        }

        .section-title p {
            color: var(--gray);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .industry-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
            background: white;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        .industry-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .industry-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--primary);
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            z-index: 2;
            box-shadow: 0 3px 10px rgba(10, 92, 127, 0.3);
        }

        .industry-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .industry-card:hover .industry-image {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.7) 100%);
            z-index: 1;
        }

        .card-body {
            padding: 25px;
            position: relative;
            z-index: 2;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .minerals-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .minerals-list li {
            margin-bottom: 8px;
            display: flex;
            align-items: flex-start;
        }

        .mineral-icon {
            color: var(--secondary);
            margin-right: 10px;
            flex-shrink: 0;
            margin-top: 3px;
        }

        .mineral-link {
            color: var(--dark);
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            line-height: 1.4;
            display: block;
        }

        .mineral-link:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        .view-all-minerals {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            margin-top: 15px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .view-all-minerals:hover {
            color: var(--primary-dark);
        }

        .view-all-minerals i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .view-all-minerals:hover i {
            transform: translateX(5px);
        }

        /* ====== INDUSTRY STATS ====== */
        .stats-section {
            background: linear-gradient(135deg, #e8f4f8 0%, #f0f7fa 100%);
            padding: 70px 0;
        }

        .stat-card {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.8rem;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .stat-text {
            color: var(--gray);
            font-size: 1rem;
            font-weight: 500;
        }

        /* ====== CTA SECTION ====== */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,0L1000,100L1000,0Z" fill="rgba(255,255,255,0.05)"/></svg>');
            background-size: cover;
        }

        .cta-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cta-text {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 600px;
        }

        .cta-btn {
            background: white;
            color: var(--primary);
            border: none;
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .cta-btn:hover {
            background: var(--light-gray);
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }

        .cta-btn i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .cta-btn:hover i {
            transform: translateX(5px);
        }

        /* ====== RESPONSIVE DESIGN ====== */
        @media (max-width: 992px) {
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .cta-title {
                font-size: 1.8rem;
            }
            
            .industry-card {
                margin-bottom: 25px;
            }
        }

        @media (max-width: 768px) {
            .industry-section {
                padding: 60px 0 30px 0;
            }
            
            .cta-section {
                text-align: center;
                padding: 60px 0;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .industry-image {
                height: 180px;
            }
            
            .card-body {
                padding: 20px;
            }
            
            .card-title {
                font-size: 1.2rem;
            }
            
            .cta-btn {
                padding: 12px 30px;
                font-size: 1rem;
                width: 100%;
                justify-content: center;
            }
        }

        /* Remove filter-related styles since we removed the filter section */
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <?php include 'nav.php'; ?>

    <!-- INDUSTRIES GRID -->
    <section class="industry-section">
        <div class="container">
            <div class="section-title">
                <h2>Industry-Specific Mineral Solutions</h2>
                <div class="divider"></div>
                <p>RMCL provides tailored mineral products for each industry's unique requirements, ensuring optimal performance and efficiency.</p>
            </div>

            <div class="row g-4">
                <!-- Industry 1: Paint & Coatings -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Paint & Coatings</span>
                        <div class="position-relative">
                            <img src="industries/Paint-Industry_Surface-Coating_Glaze-Industry_Abrasives1.jpg" class="industry-image" alt="Paint Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Paint, Surface Coating & Abrasives Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-oxides_quick-lime.php" class="mineral-link">Calcium Oxide / Quick Lime</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="natural-red-oxide.php" class="mineral-link">Red Ocher / Natural Red Oxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="soapstone_talc-whiteness.php" class="mineral-link">Soapstone / Talc</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="whiting.php" class="mineral-link">Whiting Powder</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 2: Plastics & Rubber -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Plastics & Rubber</span>
                        <div class="position-relative">
                            <img src="industries/Plastics-Polymer-and-Cable-Industry_Rubber-&-Adhesives-Industry1..jpg" class="industry-image" alt="Plastics Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Plastics, Polymer, Cable & Rubber Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="barytes.php" class="mineral-link">Barytes / Barite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="china-clay.php" class="mineral-link">Kaoline / China Clay</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="potash-feldspar.php" class="mineral-link">Feldspar</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 3: Agriculture -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Agriculture</span>
                        <div class="position-relative">
                            <img src="industries/Agricultural-Fertilizer-Industry_Pesticides-Industry1.jpg" class="industry-image" alt="Agriculture Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Agricultural, Fertilizer & Pesticides Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="bentonite.php" class="mineral-link">Bentonite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-hydroxides.php" class="mineral-link">Hydrated Lime</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="china-clay.php" class="mineral-link">Kaolin / China Clay</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-oxide.php" class="mineral-link">Magnesium Oxide</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 4: Construction -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Construction</span>
                        <div class="position-relative">
                            <img src="industries/Construction-Engineering_Cement-Industry_Foundary-Sand-Casting1.jpg" class="industry-image" alt="Construction Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Construction, Cement & Foundry Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="barytes.php" class="mineral-link">Barytes / Barite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="bentonite.php" class="mineral-link">Bentonite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-carbonates.php" class="mineral-link">Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcite</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 5: Pharmaceuticals -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Pharmaceuticals</span>
                        <div class="position-relative">
                            <img src="industries/Pharmaceutical-Nutraceutical-Industry_Chemical-Industries_Drying-Agent_Lubricating-Oils1.jpg" class="industry-image" alt="Pharmaceutical Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pharmaceutical, Nutraceutical & Chemical Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="barytes.php" class="mineral-link">Barytes / Barite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="bentonite.php" class="mineral-link">Bentonite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-hydroxides.php" class="mineral-link">Hydrated Lime</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 6: Water Treatment -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Water Treatment</span>
                        <div class="position-relative">
                            <img src="industries/Environmental-Applications_Water-Treatment-Plants.jpg" class="industry-image" alt="Water Treatment">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Environmental & Water Treatment Applications</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-hydroxides.php" class="mineral-link">Hydrated Lime / Calcium Hydroxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-oxide.php" class="mineral-link">Magnesium Oxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-carbonate.php" class="mineral-link">Magnesium Carbonate</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 7: Cosmetics -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Cosmetics</span>
                        <div class="position-relative">
                            <img src="industries/Cosmetic_Oral-Care_Skin-Care_Hair-Care-Industry.jpg" class="industry-image" alt="Cosmetics Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cosmetic, Oral Care & Skin Care Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="barytes.php" class="mineral-link">Barytes / Barite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="bentonite.php" class="mineral-link">Bentonite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="china-clay.php" class="mineral-link">Kaoline / China Clay</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 8: Glass & Ceramic -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Glass & Ceramic</span>
                        <div class="position-relative">
                            <img src="industries/Glass_Ceramic-Industry_Sanitary-ware_Tiles-Industries1.jpg" class="industry-image" alt="Glass & Ceramic Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Glass & Ceramic, Sanitary Ware & Tiles Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="barytes.php" class="mineral-link">Barytes / Barite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="china-clay.php" class="mineral-link">Kaoline / China Clay</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="potash-feldspar.php" class="mineral-link">Feldspar</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 9: Food & Beverage -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Food & Beverage</span>
                        <div class="position-relative">
                            <img src="industries/Food_Beverages_Food-Preservatives_Hygiene_Cleaning-Industry.jpg" class="industry-image" alt="Food & Beverage Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Food, Beverages & Hygiene Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="bentonite.php" class="mineral-link">Bentonite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-hydroxides.php" class="mineral-link">Hydrated Lime / Calcium Hydroxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-oxide.php" class="mineral-link">Magnesium Oxide</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 10: Animal Feed -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Animal Feed</span>
                        <div class="position-relative">
                            <img src="industries/Animal-Feed_Veterinary-Industry1.jpg" class="industry-image" alt="Animal Feed Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Animal Feed & Veterinary Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-oxide.php" class="mineral-link">Magnesium Oxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="soapstone-(talc).php" class="mineral-link">Soapstone / Talc</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-carbonate.php" class="mineral-link">Magnesium Carbonate</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 11: Healthcare -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Healthcare</span>
                        <div class="position-relative">
                            <img src="industries/Medical_Health_Dietary-Supplement_Life-Support-Systems.jpg" class="industry-image" alt="Healthcare Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Medical, Health & Dietary Supplement</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="mica.php" class="mineral-link">Mica</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-hydroxides.php" class="mineral-link">Hydrated Lime / Calcium Hydroxide</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 12: Electronics -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Electronics</span>
                        <div class="position-relative">
                            <img src="industries/Electricals_Electronics_Semi-Conductors_Laser-Industry.jpg" class="industry-image" alt="Electronics Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Electricals, Electronics & Semi-Conductors</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="china-clay.php" class="mineral-link">Kaoline / China Clay</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-oxide.php" class="mineral-link">Magnesium Oxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="quartz.php" class="mineral-link">Quartz</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 13: Metallurgy -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Metallurgy</span>
                        <div class="position-relative">
                            <img src="industries/Iron_Steel_Metallurgical_Auto-Mobiles-Industry_Sheet_Bulk-Moulding_Refractory-Industry.jpg" class="industry-image" alt="Metallurgy Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Iron, Steel, Metallurgical & Auto Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-hydroxides.php" class="mineral-link">Hydrated Lime / Calcium Hydroxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-oxide.php" class="mineral-link">Magnesium Oxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="quartz.php" class="mineral-link">Quartz</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 14: Paper & Leather -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Paper & Leather</span>
                        <div class="position-relative">
                            <img src="industries/Pharmaceutical-Nutraceutical-Industry_Chemical-Industries_Drying-Agent_Lubricating-Oils1.jpg" class="industry-image" alt="Paper & Leather Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Wood, Paper, Printing & Leather Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-hydroxides.php" class="mineral-link">Hydrated Lime / Calcium Hydroxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="china-clay.php" class="mineral-link">Kaoline / China Clay</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="feldspar.php" class="mineral-link">Feldspar</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Industry 15: Mining & Oil -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card">
                        <span class="industry-badge">Mining & Oil</span>
                        <div class="position-relative">
                            <img src="industries/Mining-Industry_Drilling-Mud_Oil-Refineries-Industry-Uranium_Gallium_Boron-Mining-Industry_Petroleum-Reservoir-Rock-Industry.jpg" class="industry-image" alt="Mining & Oil Industry">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mining, Drilling & Oil Refineries Industry</h5>
                            <ul class="minerals-list">
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="bentonite.php" class="mineral-link">Bentonite</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="limestone-calcite.php" class="mineral-link">Limestone / Calcium Carbonate</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="calcium-hydroxides.php" class="mineral-link">Hydrated Lime / Calcium Hydroxide</a></li>
                                <li><i class="fas fa-check-circle mineral-icon"></i> <a href="magnesium-oxide.php" class="mineral-link">Magnesium Oxide</a></li>
                            </ul>
                            <a href="ourProducts.php" class="view-all-minerals">View All Minerals <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="cta-title">Need Industry-Specific Mineral Solutions?</h2>
                    <p class="cta-text">Contact RMCL for customized mineral grades, bulk supply, and technical support tailored to your industry requirements.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="contact.php" class="btn cta-btn">
                        Contact Our Experts <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Simplified JavaScript since filter functionality is removed
        document.addEventListener('DOMContentLoaded', function() {
            // Animation on scroll for industry cards
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Apply animation to industry cards
            const industryCards = document.querySelectorAll('.industry-card');
            industryCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                card.style.transitionDelay = (index % 3) * 0.1 + 's';
                observer.observe(card);
            });
            
            // Initialize all cards as visible
            setTimeout(() => {
                industryCards.forEach(card => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                });
            }, 100);
        });
    </script>
</body>
</html>