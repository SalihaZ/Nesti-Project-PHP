<nav class="navbar" id ="mainNavbar">
  <form class="form-inline">

    <!-- Buttons nav -->
    <div class="wrapper-buttons-nav d-flex mr-auto">

      <!-- Button Recipe -->
      <a class="nav-link btnNavbar mr-5 rounded-sm <?= ($loc == "recipes") ? "active" : ""; ?>" href= "<?php echo BASE_URL ?>recipes">
        <button class="btn text-white" type="button">
          <i class="fas fa-clipboard-list pr-3"></i>
          Recettes</button>
      </a>

      <!-- Button Articles -->
      <a class="nav-link btnNavbar mr-5 rounded-sm <?= ($loc == "articles") ? "active" : ""; ?>" href= "<?php echo BASE_URL ?>articles">
        <button class="btn text-white" type="button">
          <i class="fas fa-utensils pr-3"></i>
          Articles</button>
      </a>

      <!-- Button Users -->
      <a class="nav-link btnNavbar mr-5 rounded-sm <?= ($loc == "users") ? "active" : ""; ?>" href="<?php echo BASE_URL ?>users">
        <button class="btn text-white" type="button">
          <i class="fas fa-users pr-3"></i>
          Utilisateurs</button>
      </a>

      <!-- Button Recipe -->
      <a class="nav-link btnNavbar mr-5 rounded-sm <?= ($loc == "statistics") ? "active" : ""; ?>" href="statistics">
        <button class="btn text-white" type="button">
          <i class="far fa-chart-bar pr-3"></i>
          Statistiques</button>
      </a>
    </div>

    <!-- Button Session -->
    <div class="wrapper-buttons-session d-flex justify-content-end rounded-sm bg-white">

      <!-- Button User -->
      <a class="nav-link btnNavbarUser mr-5">
        <button class="btn text-black" type="button">
          <i class="fas fa-user pr-3"></i>
          <!-- <?php echo $_SESSION["lastName"] . " " . $_SESSION["firstName"] ?> </button> -->
      </a>

      <!-- Button Disconnection -->
      <a class="nav-link btnNavbarUser mr-5" href="<?php echo BASE_URL ?>disconnection">
        <button class="btn text-black" type="button">
          <i class="fas fa-sign-out-alt pr-3"></i>
          Déconnexion</button>
      </a>
    </div>

  </form>
</nav>