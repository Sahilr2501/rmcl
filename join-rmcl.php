<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Join RMCL | Careers at Rajasthan Minerals & Chemicals</title>

	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Icons -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

	<style>
		body {
			font-family: 'Bookman', sans-serif;
			background-color: #f5f7fa;
		}

		/* IMAGE-ONLY BANNER */
		.career-banner {
			background: url("img/join-rmcl.jpg") center center / cover no-repeat;
			height: 300px;
			width: 100%;
		}

		.career-card {
			border: none;
			border-radius: 14px;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
		}

		.icon-box {
			width: 55px;
			height: 55px;
			background: #0d6efd;
			color: #fff;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 12px;
			font-size: 1.4rem;
		}

		@media (min-width: 992px) {
			.navbar .dropdown:hover>.dropdown-menu {
				display: block;
				margin-top: 0;
			}
		}

		/* Smooth animation */
		.dropdown-menu {
			transition: all 0.25s ease;
		}
	</style>
</head>

<body>

	<!-- NAVBAR -->
    <?php include 'nav.php'; ?>

	<!-- IMAGE ONLY BANNER -->
	<section class="career-banner"></section>
	<!-- CONTENT -->
	<section class="py-5">
		<div class="container">
			<div class="row g-4 align-items-center">

				<!-- LEFT CONTENT -->
				<div class="col-lg-6">
					<h2 class="fw-bold mb-4">Careers at Rajasthan Minerals & Chemicals</h2>
					<p class="text-muted">
						Rajasthan Minerals & Chemicals offers a professional, ethical, and
						growth-oriented work environment. We value talent, innovation,
						and long-term commitment.
					</p>

					<div class="row g-4 mt-4">
						<div class="col-md-6">
							<div class="d-flex gap-3">
								<div class="icon-box"><i class="bi bi-people"></i></div>
								<div>
									<h6 class="fw-semibold mb-1">Team Culture</h6>
									<small class="text-muted">Collaborative & supportive workplace</small>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="d-flex gap-3">
								<div class="icon-box"><i class="bi bi-graph-up"></i></div>
								<div>
									<h6 class="fw-semibold mb-1">Career Growth</h6>
									<small class="text-muted">Continuous learning opportunities</small>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="d-flex gap-3">
								<div class="icon-box"><i class="bi bi-award"></i></div>
								<div>
									<h6 class="fw-semibold mb-1">Industry Leader</h6>
									<small class="text-muted">Trusted global mineral supplier</small>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="d-flex gap-3">
								<div class="icon-box"><i class="bi bi-shield-check"></i></div>
								<div>
									<h6 class="fw-semibold mb-1">Ethical Values</h6>
									<small class="text-muted">Integrity-driven organization</small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- RIGHT CARD -->
				<div class="col-lg-6">
					<div class="card career-card p-4">
						<h4 class="fw-semibold mb-3">Apply for Opportunities</h4>
						<p class="text-muted">
							Interested candidates can share their updated resume at:
						</p>

						<div class="alert alert-primary d-flex align-items-center gap-3">
							<i class="bi bi-envelope-fill fs-4"></i>
							<strong>contact@rmcl.co.in</strong>
						</div>

						<p class="small text-muted mb-0">
							Please mention the position you are applying for in the subject line.
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="bg-primary text-white py-5">
		<div class="container text-center">
			<h3 class="fw-bold mb-3">Build Your Career With RMCL</h3>
			<p class="mb-4">Join a company driven by quality, trust, and innovation</p>
			<a href="contact.php" class="btn btn-light btn-lg">Contact HR</a>
		</div>
	</section>

	<!-- FOOTER -->
	<?php include 'footer.php' ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>