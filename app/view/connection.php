<body>
    <div id="wrapper_connection">
        <div class="row" id="container_connection">
            
        <form action="" method="POST" class="pb-4">
               
            <!-- Title -->
                <div class="row">
                    <h1>Connexion</h1>
                </div>

                <!-- Username -->
                <div class="row justify-content-center">
                    <div class="col-11 no-padding">
                        <label class="no-margin ml-5"><b>Nom d'utilisateur</b></label>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-user-alt mr-3"></i>
                            <input class="rounded" type="text" id="Connection-Username" placeholder="Entrer le nom d'utilisateur" name="logUsername" required>
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div class="row justify-content-center">
                    <div class="col-11 no-padding">
                        <label class="no-margin ml-5"><b>Mot de passe</b></label>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-lock mr-3"></i>
                            <input class="rounded" type="password" id="Connection-Password" placeholder="Entrer le mot de passe" name="logPassword" required>
                        </div>
                    </div>
                </div>

                <!-- Button Connection -->
                <div class="row justify-content-center">
                    <div class="col-4 no-padding">
                        <input class="no-margin rounded" type="submit" id='Connection' value='Valider'>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>