
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
<div id="card1" class="card mt-3 mb-5 ml-4 mr-4 shadow-sm">
    <div class="card-body">
        <h2 class="m-2"><?= $nameBook ?></h2><br>
        <div class="m-3">
            <a  href="pageBook.php?id=<?= get_session('user_id') ?>&idBook=<?= $book->idBook ?>">Commenter ou voir <br>les commentaires</a>
        </div>


        <a class="m-5" href="<?=$book->bookUrl?>" target="_blank">Lire le livre<br></a>

        <small class="text-muted ml-5 ">Gratuit</small>

    </div>
</div>



redirect("pageBlog.php?id<?= get_session('user_id') ?>&idBlog=<?= $article->idBlog ?>");

++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

<div>
    <div class="field field-name-comment-body field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even"><p>Merci tu m'as  vraiment aidé en plus rien n'a dire je suis sans mots</p>
            </div></div></div>    </div>
</div>