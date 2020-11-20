
<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <div  class="jumbotron-fluid">

        <div class="p-2 bg-dark mb-4">
            <h3 class="captionCenter  text-center text-white">
                <span class="bG"> <?= $this->module->arguments->title ?></span>
            </h3>
        </div>
        <div class="container">
            <div class="row">
                <?php if (! empty($newscast)): ?>
                    <?php foreach ($newscast as $item): ?>
                        <div class="col-md-4 hoverCss  p-2">
                            <div class="news-box clearfix border ">
                                <a href="<?= clink(array('@news', $item->slug, $item->id)) ?>">
                                    <img class="img-fluid" style="width: 100%;"
                                         src="<?= uploadPath($item->image, 'news') ?>"
                                         alt="<?= htmlspecialchars($item->title) ?>">
                                </a>
                                <div class="col-md-12 mt-3">
                                <a href="<?= clink(array('@news', $item->slug, $item->id)) ?>">
                                    <h4 class="eclipse"><?= $item->title ?></h4>
                                <p>
                                    <?= mb_substr($item->summary,0,120,'UTF-8') ?>
                                </p>
                                </a>
                                </div>
                                <div class="col-md-12 p-2 m-0  bg-dark">
                                    <a class="btn1 sm pull-right text-white"
                                       href="<?= clink(array('@news', $item->slug, $item->id)) ?>">
                                    <div class="time pull-left text-white"><?= $this->date->set($item->date)->dateWithName() ?></div>
                                        Yazının Devamı ...
                                    </a>
                                </div>
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
    </div>

    <?php $this->view('lastbar') ?>
</main>