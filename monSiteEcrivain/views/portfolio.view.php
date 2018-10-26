<?php
$title = "Mon parcours";
 include ('partials/_header.php');
 include ('partials/_nav.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

            <main role="main" class="container">

                <div class="jumbotron">
                    <h1>Découvrir Hicham BOUSSELHAM</h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur excepturi earum tenetur repellendus
                        saepe, animi quia culpa nemo similique cumque quas quae iure necessitatibus suscipit. Neque sit
                        nemo ipsum repellat. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt obcaecati
                        in fuga fugiat qui a omnis quidem? Nobis, maxime doloremque neque voluptate laboriosam maiores,
                        tempora sint autem ratione aperiam animi.
                        <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores cum officiis, nisi perferendis
                        provident temporibus nulla eum necessitatibus cumque voluptatem amet voluptatum perspiciatis
                        aspernatur tempora totam. Repellendus blanditiis sequi animi.
                        <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil perspiciatis earum cumque error
                        quos ad repellat perferendis autem voluptates eveniet. Accusamus saepe reprehenderit ratione
                        modi omnis corrupti sed ullam porro?Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Laudantium, reprehenderit assumenda nemo ab, ut ducimus doloremque dignissimos minus, maiores
                        atque quia itaque repellat. Reiciendis, deserunt libero? Recusandae ab ipsum aperiam? Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Pariatur tempora quia, in dolore exercitationem
                        similique ratione, laudantium quo dolor dignissimos provident ipsam explicabo facilis labore
                        impedit aliquam est quod. Soluta?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id
                        ducimus a quibusdam voluptatum quod veniam corporis iste! Quaerat explicabo debitis voluptas,
                        vero, odio laborum voluptates rem accusantium, quidem dolore
                        <br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio impedit corporis molestias cupiditate
                        iste debitis enim mollitia corrupti. A ducimus laborum laboriosam vel quae aliquid. Voluptatum
                        ea ex fugit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi sed reprehenderit
                        architecto odit animi eaque aliquid iure inventore assumenda similique perferendis, doloremque
                        expedita! Reprehenderit, unde repudiandae omnis harum incidunt quaerat!

                    </p>
                    <div id="commentaire">
                        <h6><a href="portfolioComment.php?id=<?= get_session('user_id') ?>&title=<?= $title ?>">Commenter ..</a></h6>
                    </div>
                </div>

            </main>

        </div>
    </div>
</div>

<?php include ('partials/_footer.php');?>

