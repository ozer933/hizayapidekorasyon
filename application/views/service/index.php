    <section class="container">
        <h3 class="captionCenter mB0">
            <span><?= $this->module->arguments->title ?></span>
        </h3>
        <div class="container">
            <div class="row">
                <?php if (! empty($services)): ?>
                    <?php foreach ($services as $service): ?>
                        <div class="col-md-4 mb-2 hoverCss " style="cursor: pointer;">
                            <div class="col-md-12 border ">
                                <img class="img-fluid "
                                     src="<?= uploadPath($service->image, 'service') ?>"
                                     alt="<?= htmlspecialchars($service->title) ?>">

                                <a   title="<?= $service->title ?>" class="db" href="<?php echo "https://" . $_SERVER['SERVER_NAME'];?>/<?= clink(array('@service', $service->slug, $service->id)) ?>">
                                    <div class="service-box clearfix">
                                        <div class="text">
                                            <h4 class="mt-3 ml-0"><?= $service->title ?></h4>
                                            <p>
                                                <?= $service->summary ?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
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