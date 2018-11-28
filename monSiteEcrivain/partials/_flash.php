<!-- VERIFIE SI LE $_SESSION EXISTE -->
    <?php if(isset($_SESSION['notification']['message'])): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-4">
            <!-- AFFICHER LE TYPE DE MESSAGE -->
                <div class="alert alert-<?= $_SESSION['notification']['type']?>">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <!-- AFFICHER LE MESSAGE     -->
                    <h4><?= $_SESSION['notification']['message'] ?></h4>
                </div>
            </div>
        </div>
    </div
    <!-- POUR VIDER LA SESSION ELLE NE RESTE PAS AFFICHER -->
    <?php $_SESSION['notification'] = []; ?>
    <?php endif; ?>




