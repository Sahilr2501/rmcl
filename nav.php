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

/* ISO Certificate Button Styling */
.iso-btn {
  background: linear-gradient(135deg, #0047AB 0%, #002D62 100%);
  color: white;
  border: none;
  padding: 8px 20px;
  border-radius: 6px;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  margin-left: 10px;
}

.iso-btn:hover {
  background: linear-gradient(135deg, #002D62 0%, #0047AB 100%);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Logo container styling */
.logo-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  min-height: 70px; /* Match logo height */
  justify-content: center;
}

.logo-text {
  font-size: 10px;
  font-weight: 600;
  color: #0047AB;
  margin-top: 2px;
  letter-spacing: 0.5px;
  line-height: 1.2;
}

/* Adjust navbar brand to have proper spacing */
.navbar-brand {
  padding-top: 10px;
  padding-bottom: 10px;
  margin-right: 40px; /* Add more space between logo and menu items */
}

/* Adjust navbar items alignment */
.navbar-nav {
  align-items: center;
}

/* Responsive adjustments */
@media (max-width: 991.98px) {
  .iso-btn {
    margin-left: 0;
    margin-top: 10px;
    width: 100%;
    text-align: center;
  }
  
  .navbar-nav .nav-item.ms-lg-2 {
    margin-left: 0 !important;
  }
  
  .logo-text {
    font-size: 9px;
    text-align: center;
    margin-top: 5px;
  }
  
  .logo-container {
    align-items: center;
    text-align: center;
    min-height: auto;
  }
  
  .navbar-brand {
    margin-right: 0;
    padding-top: 5px;
    padding-bottom: 5px;
  }
}

/* Ensure proper spacing in navbar */
.navbar-collapse {
  padding-top: 5px;
  padding-bottom: 5px;
}

/* Add padding to nav items for better spacing */
.navbar-nav .nav-link {
  padding: 15px 12px !important;
}

/* Adjust dropdown positioning */
.dropdown-menu {
  margin-top: 0 !important;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">

    <!-- LOGO with ISO text -->
    <a class="navbar-brand" href="/rmcl">
      <div class="logo-container">
        <img src="img/ISO 90012015 certified company.png" height="77" alt="RMCL">
      </div>
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
          <a class="nav-link" href="industries-we-serve.php">Industries</a>
        </li>

        <!-- SPECIALTY MINERALS -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Speciality Minerals
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="calcium-hydroxides.php">Calcium Hydroxide/ Hydrated Lime</a></li>
            <li><a class="dropdown-item" href="calcium-carbonates.php">Calcium Carbonate/ Calcite</a></li>
            <li><a class="dropdown-item" href="china-clay.php">China Clay/ Kaolin</a></li>
            <li><a class="dropdown-item" href="dolomite.php">Dolomite /Calcined Dolomite</a></li>
            <li><a class="dropdown-item" href="potash-feldspar.php">Feldspar/ Quartz</a></li>
            <li><a class="dropdown-item" href="magnesium-oxide.php">Magnesium Oxide / Carbonates</a></li>
            <li><a class="dropdown-item" href="natural-red-oxide.php">Red Ochre/ Natural Red Oxide</a></li>
            <li><a class="dropdown-item" href="soapstone-(talc).php">Soap stone/ Talc</a></li>
          </ul>
        </li>

        <!-- CHEMICALS -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Chemicals
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="calcium-chloride.php">Calcium Chloride</a></li>
            <li><a class="dropdown-item" href="calcium-hypochlorite.php">Calcium Hypochlorite</a></li>
            <li><a class="dropdown-item" href="dcp-tcp.php">Di Calcium/ Tri Calcium Phosphate</a></li>
            <li><a class="dropdown-item" href="magnesium-chloride.php">Magnesium Chloride</a></li>
            <li><a class="dropdown-item" href="magnesium-sulphate.php">Magnesium Sulphate</a></li>
          </ul>
        </li>

        <!-- On Demand -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            On Demand
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="aluminium-hydroxide.php">Alluminium Hydroxide</a></li>
            <li><a class="dropdown-item" href="mica.php">Mica</a></li>
            <li><a class="dropdown-item" href="bentonite.php">Bentonite</a></li>
          </ul>
        </li>

        <!-- CONTACT -->
        <li class="nav-item">
          <a class="nav-link" href="sds&tds.php">Request TDS</a>
        </li>

        <!-- ISO CERTIFICATE BUTTON - Opens PDF directly -->
        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
          <a href="img/ISO Certificate.pdf" class="btn iso-btn" target="_blank">
            <i class="fas fa-award me-2"></i>ISO Certificate
          </a>
        </li>

        <!-- <li>
          <a href="test.php">Test Button </a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<!-- Add Font Awesome if not already included -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
