<main id="main">
    <section class="banner clearfix">
        <?php if (isset($this->banner)): ?>
            <?php $this->view('banner/slider') ?>
        <?php endif; ?>
    </section>
    <div class="jumbotron-fluid">
        <div class=" bg-dark mb-4 mt-0">
            <h3 class="captionCenter  text-center text-white">
                <span class="bG">ÇALIŞMALARIMIZ</span>
            </h3>
        </div>
        <section class="services bG clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php if (! empty($services)): ?>
                                <?php foreach ($services as $service): ?>
                                    <div class="col-md-4 mb-2 hoverCss " style="cursor: pointer;">
                                        <div class="col-md-12 border ">
                                            <img class="img-fluid "
                                                 src="<?= uploadPath($service->image, 'project') ?>"
                                                 alt="<?= htmlspecialchars($service->title) ?>">

                                        <a   title="<?= $service->title ?>" class="db" href="<?php echo "https://" . $_SERVER['SERVER_NAME'];?>/<?= clink(array('icerik-detay', $service->slug, $service->id)) ?>">
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
                    </div>
                </div>
            </div>
        </section>




</main>


</div>
</div>