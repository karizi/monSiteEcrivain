<?php
    $title = "Accueil";
    include ('partials/_header.php');
?>

<style>
    @media (max-width: 479px){
    .mytitle{
            font-size: 20px;
        }
    }
    @media (min-width: 480px){
        .mytitle{
            font-size: 30px;
        }
    }
</style>
<br>
<br>
<br>

    <div class="row">
        <div classe="col-2"></div>
        <div class="col-8 d-flex mx-auto jumbotron mt-5">
            <div>
                <img src="assets/images/imgAccueil.jpg" alt="" class="img-fluid">
            </div>
                    
            <div> 
                <h1 class="mytitle ml-5 "> Bienvenue sur mon site ⌨.</h1>
                <h3 class="ml-5 mt-3">Je tiens à remercier tous ceux qui m'ont encouragé à tenir mon crayon et chercher les idées,
                    avec eux je suis en contact.</h3>
                <h3 class="ml-5  mt-3"> N'hésitez pas à me rejoignez sur mon site.<h4>
                <h3 class="ml-5 mt-3"> Grande merci à vous.</h3>
            </div>
        </div>   
    </div>




<?php include ('partials/_footer.php');?>


