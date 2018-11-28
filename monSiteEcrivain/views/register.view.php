
<?php
    $title = "Inscription";
    include ('partials/_header.php');
    include ('partials/_flash.PHP');
?>


    <div class="row mb-5">
        <div class="col-3 "></div>
        <div class="col-6 ">

            <h2 class="mt-5">Inscrivez-vous!</h2>

<!--   POUR AFFICHER LES ERREURS -->
            <?php include('partials/_errors.php')?>

            <form method="post" class="jumbotron">
                <div>
                    <label class="control-label" for="name">Nom :</label>
                    <input type="text" class="form-control" id="name" name="name" required="required"/>
                </div>

                <div>
                    <label class="control-label" for="pseudo">Pseudo :</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" required="required"/>
                </div>

                <div>
                    <label class="control-label" for="email">Adress émail :</label>
                    <input type="email" class="form-control" id="email" name="email" required="required"/>
                </div>

                <div>
                    <label class="control-label" for="password">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" required="required"/>
                </div>

                <div>
                    <label class="control-label" for="password_confirm">Confirmer votre mot de passe :</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required"/>
                </div>

                <input type="submit" class="btn btn-primary mt-3" value="Inscription" name="register"/>
            </form>

        </div>
    </div>






