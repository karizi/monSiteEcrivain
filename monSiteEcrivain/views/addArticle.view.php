<?php
    require 'partials/_header.php' ;
?>



    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

<!--___________________________________________________________________________________-->
<!----------------------------FORMULAIRE D'INSERTION DES ARTICLES------------------------>

            <form method="post" class="mt-5">
                <div>
                    <textarea type="text" rows="2" cols="100" name="title"  placeholder="Titre à saisir" required="required" ></textarea>
                </div>

                <textarea class="mt-3" type="text" rows="15" cols="100" name="textcomment"  placeholder="Texte à saisir" required="required" ></textarea>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" class="btn mt-3" value="Insérer" name="register"/>
                    </div>
                </div>
            </form>


        </div>
    </div>
