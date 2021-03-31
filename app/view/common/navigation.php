<nav class="navbar" id="mainNavbar">

  <!-- Buttons nav -->
  <div class="wrapper-buttons-nav w-100 d-flex justify-content-around py-4 text-decoration-none">

    <!-- Button Recipe -->
    <a class="nav-link btnNavbar rounded-sm <?= ($loc == "recipes") ? "active" : ""; ?>" href="<?php echo BASE_URL ?>recipes">
      <i class="fas fa-clipboard-list pr-3"></i>
      Recettes
    </a>

    <!-- Button Articles -->
    <a class="nav-link btnNavbar rounded-sm <?= ($loc == "articles") ? "active" : ""; ?>" href="<?php echo BASE_URL ?>articles">
      <i class="fas fa-utensils pr-3"></i>
      Articles
    </a>

    <!-- Button Users -->
    <a class="nav-link btnNavbar rounded-sm <?= ($loc == "users") ? "active" : ""; ?>" href="<?php echo BASE_URL ?>users">
      <i class="fas fa-users pr-3"></i>
      Utilisateurs
    </a>

    <!-- Button Recipe -->
    <a class="nav-link btnNavbar rounded-sm <?= ($loc == "statistics") ? "active" : ""; ?>" href="statistics">
      <i class="far fa-chart-bar pr-3"></i>
      Statistiques
    </a>

    <!-- Button Session -->
    <div class="wrapper-buttons-session d-flex justify-content-end rounded-sm bg-white">

      <!-- Button User -->
      <a class="nav-link btnNavbarUser">
        <i class="fas fa-user"></i>
        <?php echo $_SESSION["lastname_user"] . " " . $_SESSION["firstname_user"] ?>
      </a>

      <!-- Button Disconnection -->
      <a class="nav-link btnNavbarUser" href="<?php echo BASE_URL ?>disconnection">
        <i class="fas fa-sign-out-alt"></i>
        Déconnexion
      </a>
    </div>
  </div>
</nav>