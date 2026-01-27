<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us | Rajasthan Minerals & Chemicals</title>

	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

	<style>
		body {
			font-family: 'bookman', sans-serif;
			background-color: #f8f9fa;
		}

		/* HERO IMAGE ONLY - NO TEXT */
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

		/* TEXT CONTENT SECTION AFTER IMAGE */
		.content-section {
			padding: 60px 0 30px;
			text-align: center;
		}

		.content-section h1 {
			font-size: 42px;
			font-weight: 700;
			color: #0d6efd;
			margin-bottom: 20px;
		}

		.content-section .lead {
			font-size: 20px;
			color: #495057;
			max-width: 800px;
			margin: 0 auto 25px;
			line-height: 1.6;
		}

		.content-section .note {
			font-size: 16px;
			color: #666;
			max-width: 800px;
			margin: 30px auto;
			text-align: center;
			line-height: 1.6;
		}

		/* Enable hover dropdown (desktop only) */
		@media (min-width: 992px) {
			.navbar .dropdown:hover > .dropdown-menu {
				display: block;
				margin-top: 0;
			}
		}

		/* Smooth animation */
		.dropdown-menu {
			transition: all 0.25s ease;
		}

		.contact-card {
			background: #ffffff;
			border-radius: 16px;
			overflow: hidden;
			box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
			border: 1px solid #eee;
		}

		.contact-card-header {
			background: linear-gradient(135deg, #0d6efd, #084298);
			color: #ffffff;
			padding: 18px 24px;
			font-size: 18px;
			font-weight: 600;
		}

		.contact-card-body {
			padding: 24px;
		}

		.contact-card-body .address {
			color: #555;
			margin-bottom: 20px;
			line-height: 1.6;
		}

		.contact-row {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 0;
			border-bottom: 1px dashed #e5e5e5;
			font-size: 15px;
		}

		.contact-row:last-child {
			border-bottom: none;
		}

		.contact-row .label {
			font-weight: 600;
			color: #333;
		}

		.contact-row .value {
			color: #555;
		}

		.contact-row a {
			color: #0d6efd;
			text-decoration: none;
		}

		.contact-row a:hover {
			text-decoration: underline;
		}

		/* MOBILE */
		@media (max-width: 768px) {
			.content-section {
				padding: 40px 0 20px;
			}

			.content-section h1 {
				font-size: 32px;
			}

			.content-section .lead {
				font-size: 18px;
			}

			.content-section .note {
				font-size: 15px;
			}
		}

		@media (max-width: 576px) {
			.content-section h1 {
				font-size: 28px;
			}
			
			.content-section .lead {
				font-size: 16px;
			}
		}

	</style>
</head>

<body>

	<!-- NAVBAR -->
    <?php include 'nav.php'; ?>

	<!-- HERO IMAGE ONLY - NO TEXT -->
	<section class="hero-image-container">
		<img src="images/contact-us.jpg" 
			 alt="Contact Us - Rajasthan Minerals & Chemicals"
			 loading="eager">
	</section>

	<!-- TEXT CONTENT SECTION (BELOW THE IMAGE) -->
	<section class="content-section">
		<div class="container">
			<h1>Contact Us</h1>
			
			<p class="lead">
				We're here to support your business needs with reliable products,
				technical expertise, and prompt assistance.
			</p>
		</div>
	</section>

	<!-- CONTACT SECTION -->
	<section class="py-5">
		<div class="container">
			<div class="row g-4">

				<!-- CONTACT INFO -->
				<div class="col-lg-5">
					<div class="contact-card h-100">
						<div class="contact-card-header">
							Rajasthan Minerals & Chemicals
						</div>

						<div class="contact-card-body">
							<p class="address">
								Post Box No. 32, PETLAD – 388 450<br>
								Dist: Anand – Gujarat, INDIA
							</p>

							<div class="contact-row">
								<span class="label">📞 Phone</span>
								<span class="value">+91-2697-222337</span>
							</div>

							<div class="contact-row">
								<span class="label">📱 Mobile</span>
								<span class="value">+91-94092 39494</span>
							</div>

							<div class="contact-row">
								<span class="label">📠 Fax</span>
								<span class="value">+91-2697-225560 / 226779</span>
							</div>

							<div class="contact-row">
								<span class="label">✉️ Email</span>
								<span class="value">
									<a href="mailto:contact@rmcl.co.in">contact@rmcl.co.in</a>
								</span>
							</div>
						</div>
					</div>
				</div>

				<!-- CONTACT FORM -->
				<div class="col-lg-7">
					<div class="card shadow-sm">
						<div class="card-body">
							<h5 class="fw-semibold mb-3">Quick Contact</h5>

							<!-- SUCCESS / ERROR MESSAGE -->
							<?php if (isset($_GET['success'])): ?>
								<div class="alert alert-success">Thank you! Your message has been sent.</div>
							<?php elseif (isset($_GET['error'])): ?>
								<div class="alert alert-danger">Something went wrong. Please try again.</div>
							<?php endif; ?>

							<form action="quick-contact.php" method="post">
								<div class="row g-3">
									<div class="col-md-6">
										<input type="text" name="name" class="form-control" placeholder="Your Name" required>
									</div>
									<div class="col-md-6">
										<input type="email" name="email" class="form-control" placeholder="Your Email" required>
									</div>
									<div class="col-md-6">
										<input type="text" name="phone" class="form-control" placeholder="Phone Number">
									</div>
									<div class="col-md-12">
										<textarea name="message" class="form-control" rows="4"
											placeholder="Your Message"></textarea>
									</div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary px-4">
											Send Message
										</button>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<?php include 'footer.php' ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>