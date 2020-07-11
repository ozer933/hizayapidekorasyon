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
                <div class="news-detail clearfix">
                    <div class="time"><?= $this->date->set($news->date)->dateWithname() ?></div>
                    <!-- Bu image news-detail-img class'ına sahip -->
                    <img class="img-responsive news-detail-img"
                         src="<?= uploadPath($news->image, 'news/big') ?>"
                         alt="<?= htmlspecialchars($news->title) ?>">
                    <h3 class="news-detail-title"><?= $news->title ?></h3>
                    <?= $news->detail ?>
                </div>
            </div>
            <?php $this->view('share', ['content' => $news]) ?>
        </div>
    </section>

    <?php $this->view('lastbar') ?>
</main>