<?php
$title = "Page de mes blogues";
include ('partials/_header.php');
include ('filters/auth_filter.php');
?>

<style type="text/css">
    @media (max-width: 479px){
        .mytitleBlog{font-size: 30px;
        }
    }
    @media (min-width: 480px){
        .mytitleBlog{font-size: 50px;
        }
    }
</style>


    <!-- slider -->


    <div class="row slider1 d-flex justify-content-center  align-items-center">
        <div class=" col-12 text-center" >
            <h1 class="entete">Bienvenue sur ma page des articles!</h1>
            <hr>
        </div>
    </div>
    <!-- fin slider -->

    <div class="row">

        <div class="col-2"></div>
        <div class=" col-8 alert alert-primary profile d-flex justify-center mt-5">
            <aside>
                <img src="assets/images/win.jpg" alt="Hicham BOUSSELHAM" class="rounded-circle">
                <h5>Hicham BOUSSELHAM</h5>
                <hr>
            </aside>

            <article>
                <div class="lead mt-5 ml-3">
                    “Si tu as une pomme, que j’ai une pomme, et que l’on échange nos pommes, nous aurons chacun une pomme
                    . Mais si tu as une idée, que j’ai une idée et que l’on échange nos idées, nous aurons chacun deux idées.”<br/>
                    <small>George Bernard Shaw</small>
                </div>
                <hr>
            </article>
        </div>
    </div>
<!--_________________________________________________________________________________________________________________-->
<!--------------------------------------------------------------------------------------------------------------------->
            <!-- articles -->
<?php
    $articles = getBlogs(); 

    foreach($articles as $article):
    
    $title = $article->title;
    $blog = $article->content;
    $date = $article->date;
//strtotime donne le nombre de seconde depuis 1970
    $date =  strtotime($article->date);

    $date = date("d-m-y", $date);

    $article = $article->idBlog;
?>


        <div class="row">

            <div class="col-2"></div>
            <div class="col-8 jumbotron profile d-flex justify-center jumbotron mt-5">

                <aside class="col-3">
                    <img src="assets/images/cards1.jpg" alt="" class="img-fluid">
                    <p class="lead text-center"><?= $date ?></p>
                </aside>

                <article class="col-9">
                    <h1 class="display-6" ;"><?= $title ?></h1>
                    <p class="lead"><?= substr($blog, 0, 500) ?></p>
                    <a style="margin-left: 10px" href="pageBlog.php?id=<?= get_session('user_id') ?>&idBlog=<?= $article ?>">Lire la suite ...</a>
                    <hr>
                </article>
            </div>
        </div>




<?php endforeach; ?>
            <!-- fin 1 article -->



<?php include ('partials/_link.php');?>
<?php include ('partials/_footer.php');?>


