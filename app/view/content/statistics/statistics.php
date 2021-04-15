<main class="container wrapper-articles">
    <br>
    <!-- Title Page -->
    <div class="row">
        <div class="col-12">
            <h1>Statistiques</h1>
            <br>
        </div>
    </div>

    <!-- User Top Page -->
    <div class="row d-flex justify-content-between">
        <div class="col-5">

            <div class="row">
                <h2>Commandes</h2>
            </div>

            <div> </div>

        </div>
        <div class="col-5">

            <div class="row">
                <h2>Consultation du site</h2>
            </div>

            <div id="toastConnection"> </div>

            <!-- TOP 10 USERS -->
            <div class="row d-flex justify-content-between mb-1">

                <h3>Top 10 utilisateurs</h3>
            </div>
            <div class="row d-flex justify-content-center form-control shadow">
                <div class="col-8 ">
                    <?php
                    foreach ($top10ConnectedUsers as $user) {
                        echo "<div class='d-flex flex-row justify-content-between'> <div>" . $user['name'] . " </div> <a href='" . BASE_URL . "users/edition/" . $user['id'] . "'>Voir</a></div>";
                    } ?>

                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- User Top Page -->
    <div class="row d-flex justify-content-between">
        <div class="col-5">
            <div class="row d-flex justify-content-between">
                <div class="col-5">
                    <div class="row d-flex justify-content-between mb-1">
                        <h3>Top 10 Chefs</h3>
                    </div>
                    <div class="row d-flex justify-content-center form-control shadow">
                        <div class="col">
                            <?php
                            foreach ($top10ConnectedUsers as $user) {
                                echo "<div class='d-flex flex-row justify-content-between'> <div>" . $user['name'] . " </div> <a href='" . BASE_URL . "users/edition/" . $user['id'] . "'>Voir</a></div>";
                            } ?>

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row d-flex justify-content-between mb-1">

                        <h3>Top 10 Recettes</h3>
                    </div>
                    <div class="row d-flex justify-content-center form-control shadow">
                        <div class="col">
                            <?php
                            foreach ($top10Recipes as $recipe) {
                                echo "<div class='d-flex flex-row justify-content-between'> <div>" . $recipe['name'] . " </div> <a href='" . BASE_URL . "recipes/edition/" . $recipe['id'] . "'>Voir</a></div>";
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
        </div>
    </div>
    <br>
</main>

<script>
    var connectionPerHour = <?php echo json_encode($connectionPerHour) ?>;
</script>