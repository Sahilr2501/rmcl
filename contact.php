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

		.sds-hero {
		position: relative;
		min-height: 420px;
		display: flex;
		align-items: center;
		background: url('images/sds-hero.jpg') center/cover no-repeat;
		color: #fff;
		}

		.sds-hero::before {
		content: "";
		position: absolute;
		inset: 0;
		background: rgba(0, 0, 0, 0.65);
		}

		.sds-content {
		position: relative;
		max-width: 900px;
		}

		.sds-content h1 {
		font-size: 42px;
		font-weight: 700;
		margin-bottom: 12px;
		}

		.red-line {
		width: 120px;
		height: 4px;
		background: #0d6efd;
		margin: 15px 0 25px;
		}

		.sds-content .lead {
		font-size: 18px;
		margin-bottom: 18px;
		color: #f1f1f1;
		}

		.sds-content .note {
		font-size: 16px;
		color: #ddd;
		margin-bottom: 30px;
		}

		.warning-icon {
		color: #ffc107;
		margin-right: 6px;
		}

		.sds-actions {
		display: flex;
		flex-wrap: wrap;
		gap: 15px;
		}

		.sds-actions .btn {
		padding: 12px 22px;
		font-weight: 600;
		border-radius: 6px;
		}

		/* MOBILE */
		@media (max-width: 768px) {
		.sds-content h1 {
			font-size: 30px;
		}

		.sds-content .lead {
			font-size: 16px;
		}

		.sds-actions {
			flex-direction: column;
		}

		.sds-actions .btn {
			width: 100%;
			text-align: center;
		}
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

	</style>
</head>

<body>

	<!-- NAVBAR -->
    <?php include 'nav.php'; ?>

	<!-- HERO -->
	<section class="sds-hero">
    <div class="container">
      <div class="sds-content">

        <h1>Contact US</h1>
        <div class="red-line"></div>

        <p class="lead">
		We’re here to support your business needs with reliable products,
        technical expertise, and prompt assistance.
        </p>

        <p class="note">
		Whether you’re looking for product information, technical support,
        or a customized solution, our team at Rajasthan Minerals & Chemicals
        is ready to help. Reach out to us via phone, email, or the contact form below.
        </p>

      </div>
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
