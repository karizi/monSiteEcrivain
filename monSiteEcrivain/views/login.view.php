
<?php

    $title = "Connextion";

require ('partials/_header.php');
require('partials/_flash.php');
?>
<br>
<br>
<br>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <h2 class="m-3">Connexion !</h2>

            <?php include('partials/_errors.php')?>

            <form method="post" class="jumbotron">
                <!-- Identifiant field -->
                <div>
                    <label class="control-label" for="identifiant">Pseudo ou Adresse électronique :</label>
                    <input type="text" class="form-control" id="identifiant" name="identifiant" required="required"/>
                </div>

                <!-- Password field -->
                <div>
                    <label class="control-label" for="password">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" required="required"/>
                </div>

                <input type="submit" class="btn btn-primary mt-3" value="Connextion" name="login"/>

            </form>

        </div>
    </div>



<?php include ('partials/_footer.php');?>


