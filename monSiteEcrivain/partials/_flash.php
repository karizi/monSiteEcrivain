
    <?php if(isset($_SESSION['notification']['message'])): ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-4">
                <div class="alert alert-<?= $_SESSION['notification']['type']?>">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><?= $_SESSION['notification']['message'] ?></h4>
                </div>
            </div>
        </div>
    </div>
    <?php $_SESSION['notification'] = []; ?>
    <?php endif; ?>
