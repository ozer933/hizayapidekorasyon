<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <section class="content clearfix news">
        <h3 class="captionCenter mB0">
            <span><?= $this->module->arguments->title ?></span>
        </h3>
        <div class="container">
            <div class="content-body clearfix">
                <?php if (! empty($newscast)): ?>
                    <?php foreach ($newscast as $item): ?>
                        <div class="col-sm-6 col-md-4 mB30">
                            <div class="news-box clearfix">
                                <a href="<?= clink(array('@news', $item->slug, $item->id)) ?>">
                                    <img class="img-responsive"
                                         src="<?= uploadPath($item->image, 'news') ?>"
                                         alt="<?= htmlspecialchars($item->title) ?>">
                                </a>
                                <a href="<?= clink(array('@news', $item->slug, $item->id)) ?>">
                                    <h4 class="eclipse"><?= $item->title ?></h4>
                                </a>
                                <p>
                                    <?= $item->summary ?>
                                </p>
                                <div class="time pull-left"><?= $this->date->set($item->date)->dateWithName() ?></div>
                                <a class="btn1 sm pull-right"
                                   href="<?= clink(array('@news', $item->slug, $item->id)) ?>">
                                    Detaya Git
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="clearfix"></div>

            <div class="text-center">
                <?php if (! empty($pagination)): ?>
                    <?php echo $pagination ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php $this->view('lastbar') ?>
</main>