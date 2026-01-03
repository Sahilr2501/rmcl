<style>
/* ===== DESKTOP HOVER DROPDOWN ===== */
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
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">

    <!-- LOGO -->
    <a class="navbar-brand" href="/rmcl">
      <img src="img/log.png" height="60" alt="RMCL">
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU -->
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">

        <!-- HOME -->
        <li class="nav-item">
          <a class="nav-link" href="/rmcl">Home</a>
        </li>

        <!-- INDUSTRIES -->
        <li class="nav-item">
          <a class="nav-link" href="industries-we-serve.php">Industries We Serve</a>
        </li>

        <!-- SPECIALTY MINERALS -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Speciality Minerals
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="calcium-carbonates.php">Calcium Carbonate</a></li>
            <li><a class="dropdown-item" href="calcium-hydroxides.php">Calcium Hydroxides</a></li>
            <li><a class="dropdown-item" href="china-clay.php">China Clay</a></li>
            <li><a class="dropdown-item" href="dolomite.php">Dolomite</a></li>
            <li><a class="dropdown-item" href="#">Calcium Chloride</a></li>
            <li><a class="dropdown-item" href="magnesium-oxide.php">Magnesium Oxide</a></li>
            <li><a class="dropdown-item" href="soapstone-(talc).php">Soap Stone</a></li>
            <li><a class="dropdown-item" href="#">Di Calcium Phosphate</a></li>
          </ul>
        </li>

        <!-- CHEMICALS -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Chemicals
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="calcium-hydroxides.php">Calcium Hydrocloride</a></li>
            <li><a class="dropdown-item" href="#">Calcium Chloride</a></li>
            <li><a class="dropdown-item" href="#">Di Calcium / Tricalcium Phosphate</a></li>
            <li><a class="dropdown-item" href="#">Magnesium Chloride</a></li>
            <li><a class="dropdown-item" href="#">Magnesium Sulphate</a></li>
            <li><a class="dropdown-item" href="aluminium-hydroxide.php">Aluminum Hydroxide</a></li>
          </ul>
        </li>

        <!-- On Demand -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            On Demand
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Calcium Hydrocloride</a></li>
            <li><a class="dropdown-item" href="aluminum-hydroxide.php">Aluminum Hydroxide</a></li>
            <li><a class="dropdown-item" href="mica.php">Mica</a></li>
            <li><a class="dropdown-item" href="bentonite.php">Bentonite</a></li>
          </ul>
        </li>

        <!-- CONTACT -->
        <li class="nav-item">
          <a class="nav-link" href="sds&tds.php">Request TDS</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
