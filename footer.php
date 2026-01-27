<style>
/* ====== FOOTER ====== */
.site-footer {
  background: linear-gradient(135deg, #0f172a, #020617);
  color: #e5e7eb;
  padding: 3rem 0 2rem;
  font-size: 0.95rem;
}

.site-footer h6 {
  font-weight: 600;
  margin-bottom: 1rem;
  color: #ffffff;
}

.footer-link {
  color: rgba(255, 255, 255, 0.75);
  text-decoration: none;
  display: block;
  margin-bottom: 0.5rem;
  transition: all 0.3s ease;
}

.footer-link:hover {
  color: #0d6efd;
  transform: translateX(3px);
}

.footer-divider {
  border-top: 1px solid rgba(255, 255, 255, 0.12);
  margin: 2rem 0 1.5rem;
}

.footer-bottom {
  font-size: 0.85rem;
  color: rgba(255, 255, 255, 0.65);
}

.footer-brand {
  font-weight: 600;
  font-size: 1.1rem;
}

.footer-contact i {
  color: #0d6efd;
  margin-right: 8px;
}

/* ====== MOBILE ====== */
@media (max-width: 768px) {
  .site-footer {
    text-align: center;
  }

  .footer-contact {
    justify-content: center;
  }
}
</style>


<footer class="site-footer">
  <div class="container">

    <div class="row gy-4">

      <!-- BRAND -->
      <div class="col-lg-4">
        <div class="footer-brand mb-2">
          Rajasthan Minerals & Chemicals
        </div>
        <p class="small text-muted-white">
          Trusted manufacturer & supplier of industrial minerals and chemicals,
          delivering quality with integrity since 2011.
        </p>
      </div>

      <!-- QUICK LINKS -->
      <div class="col-lg-2 col-md-4">
        <h6>Quick Links</h6>
        <a href="industries-we-serve.php" class="footer-link">Industries</a>
        <a href="contact.php" class="footer-link">Contact</a>
        <a href="join-rmcl.php" class="footer-link">Career</a>
        <a href="img/ISO Certificate.pdf" class="footer-link" target="_blank">ISO Certificate</a>
      </div>

      <!-- PRODUCTS -->
      <div class="col-lg-3 col-md-4">
        <h6>Speciality Minerals</h6>
        <a href="barytes.html" class="footer-link">Barytes</a>
        <a href="bentonite.html" class="footer-link">Bentonite</a>
        <a href="feldspar.html" class="footer-link">Feldspar / Quartz</a>
        <a href="whiting.html" class="footer-link">Whiting Powder</a>
        <li><a class="dropdown-item" href="calcium-hydroxides.php">Calcium Hydroxide/ Hydrated Lime</a></li>
            <li><a class="dropdown-item" href="calcium-carbonates.php">Calcium Carbonate/ Calcite</a></li>
            <li><a class="dropdown-item" href="china-clay.php">China Clay/ Kaolin</a></li>
            <li><a class="dropdown-item" href="dolomite.php">Dolomite /Calcined Dolomite</a></li>
            <li><a class="dropdown-item" href="potash-feldspar.php">Feldspar/ Quartz</a></li>
            <li><a class="dropdown-item" href="magnesium-oxide.php">Magnesium Oxide / Carbonates</a></li>
            <li><a class="dropdown-item" href="natural-red-oxide.php">Red Ochre/ Natural Red Oxide</a></li>
            <li><a class="dropdown-item" href="soapstone-(talc).php">Soap stone/ Talc</a></li>
      </div>

      <!-- CONTACT -->
      <div class="col-lg-3 col-md-4">
        <h6>Contact</h6>
        <p class="footer-contact mb-2">
          <i class="bi bi-geo-alt"></i> Petlad, Gujarat, India
        </p>
        <p class="footer-contact mb-2">
          <i class="bi bi-telephone"></i> +91-2697-222337
        </p>
        <p class="footer-contact mb-0">
          <i class="bi bi-envelope"></i> contact@rmcl.co.in
        </p>
      </div>

    </div>

    <div class="footer-divider"></div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom text-center">
      © 2011 – <span id="current-year"></span> Rajasthan Minerals & Chemicals. All Rights Reserved.
    </div>

  </div>
</footer>

<script>
  document.getElementById('current-year').textContent =
    new Date().getFullYear();
</script>
