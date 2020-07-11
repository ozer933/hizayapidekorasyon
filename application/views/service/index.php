<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <section class="content clearfix">
        <h3 class="captionCenter mB0">
            <span><?= $this->module->arguments->title ?></span>
        </h3>
        <div class="container">
            <div class="content-body services clearfix">
                <?php if (! empty($services)): ?>
                    <?php foreach ($services as $service): ?>
                        <div class="col-md-6 mB30">
                            <a class="db" href="<?= clink(array('@service', $service->slug, $service->id)) ?>">
                                <div class="service-box clearfix">
                                    <img class="trlY svg"
                                         src="<?= uploadPath($service->icon, 'service/svg') ?>"
                                         alt="<?= htmlspecialchars($service->title) ?>">
                                    <div class="text">
                                        <h4 class="f7"><?= $service->title ?></h4>
                                        <p>
                                            <?= $service->summary ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="clearfix"></div>

            <div class="text-center mT15">
                <?php if (! empty($pagination)): ?>
                    <?php echo $pagination ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php $this->view('lastbar') ?>
</main>