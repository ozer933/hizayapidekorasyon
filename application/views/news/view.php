<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <div  class="jumbotron-fluid">

        <div class="p-2 bg-dark mb-4">
            <h3 class="captionCenter  text-center text-white">
                <span class="bG"><?= htmlspecialchars($news->title) ?></span>
            </h3>
        </div>
        <div class="container">
            <div class="content-body clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <div class="time"><?= $this->date->set($news->date)->dateWithname() ?></div>
                    </div>
                    <!-- Bu image news-detail-img class'ına sahip -->
                    <div class="col-md-5 " >
                    <img  style="object-fit: contain!important;" class="img-fluid mb-3  "
                         src="<?= uploadPath($news->image, 'news/big') ?>"
                         alt="<?= htmlspecialchars($news->title) ?>">
                    </div>
                    <div class="col-md-7" >
                    <h3 class="news-detail-title "><?= $news->title ?></h3>
                    <div class="col-md-12"> <?= $news->detail ?></div>
                    </div>
                </div>
            </div>
            <?php $this->view('share', ['content' => $news]) ?>
        </div>
    </div>

    <?php $this->view('lastbar') ?>
</main>