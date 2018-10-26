
<?php
    $title = "Inscription";
    include ('partials/_header.php');
    include ('partials/_nav.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <h2>Inscrivez-vous!</h2>

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
</div>





