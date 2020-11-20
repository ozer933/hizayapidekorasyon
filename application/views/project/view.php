<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>
    <section class="content clearfix">
        <div class="container">
            <div class="content-body clearfix">
                <div class="row">
                    <div class="container mt-3  ">
                        <h2><?= $project->title ?> </h2>

                        <?php $data=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                        $data=explode('/', $data);
                        ?>
                        <ol class="breadcrumb bg-dark text-white">
                            <li><a class="text-white" href="/"><?php echo $data[0]; ?></a></li>
                            <li><a class="text-white" href="/projeler/<?php echo $data[2]; ?>/<?php echo $data[3]; ?>">/projeler/<?php echo $data[2]; ?>/<?php echo $data[3]; ?></a></li>
                        </ol>
                    </div>
                    <div class="col-sm-4 mB30">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="<?= htmlspecialchars($project->title) ?>" src="/public/img/bursa-yapi-dekorasyon.jpg" alt="<?= $project->title ?>">
                                </div>
                                <?php $say=0; if (!empty($project->images)): ?>
                                    <?php foreach ($project->images as $image): ?>
                                        <div class="carousel-item <?php //if($say==0) echo 'active'; ?> ">
                                            <img class="d-block w-100" alt="<?=  htmlspecialchars($project->title) ?>" src="<?= uploadPath($image->image, 'project/show') ?>" alt="<?= $project->title ?>">
                                        </div>
                                        <?php $say++; endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>





                    </div>

                    <div class="col-sm-8 mB30">
                        <div class="project-detail-text">


                            <?= $project->detail ?>
                            Eklenme Tarihi: <?php echo date('d/m/Y'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->view('share', ['content' => $project]) ?>
        </div>
    </section>

    <?php if (! empty($project->others)): ?>
        <section class="other-project">
            <h3 class="captionLeft mB0">
                <div class="container">
                    <span>DİĞER PROJELER</span>
                </div>
            </h3>
            <div class="container">
                <div class="row">
                    <?php foreach ($project->others as $other): ?>
                        <div class="col-md-4 col-sm-6 mB30">
                            <a href="<?= clink(array('@project', $other->slug, $other->id)) ?>">
                                <div class="project-box">
                                    <img src="<?= uploadPath($other->image, 'project/showcase') ?>"
                                         alt="<?= htmlspecialchars($other->title) ?>">
                                    <h3 class="caption trlY"><?= $other->title ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php $this->view('lastbar') ?>
</main>