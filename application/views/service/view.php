<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <section class="content clearfix">
        <h3 class="captionCenter mB0">
            <span><?= $this->module->arguments->title ?></span>
        </h3>
        <div class="container">
            <div class="content-body clearfix">
                <div class="service-detail clearfix">
                    <img class="img-responsive service-detail-img"
                         src="<?= uploadPath($service->image, 'service') ?>"
                         alt="<?= htmlspecialchars($service->title) ?>">
                    <h3 class="service-detail-title">
                        <?= $service->title ?>
                    </h3>
                    <?= $service->detail ?>
                </div>
            </div>

            <?php $this->view('share', ['content' => $service]) ?>
        </div>
    </section>

    <?php $this->view('lastbar') ?>
</main>