<main id="main">
    <div  class="jumbotron-fluid">

        <div class="p-2 bg-dark mb-4">
            <h3 class="captionCenter  text-center text-white">
                <span><?php echo $service->title ?></span>
            </h3>
        </div>

        <div class="container">
            <div class="content-body clearfix">
                <div class="service-detail clearfix">
                    <div class="float-right col-md-4 ml-3 img-thumbnail">
                    <img class="img-fluid "
                         src="<?= uploadPath($service->image, 'service') ?>"
                         alt="<?= htmlspecialchars($service->title) ?>">
                    </div>
                    <h3 class="service-detail-title"><?php echo $service->title;?></h3>
                   <div class="m-4">
                       <?= $service->detail ?>
                   </div>
                </div>
            </div>

            <?php $this->view('share', ['content' => $service]) ?>
        </div>
    </div>

    <?php $this->view('lastbar') ?>
</main>