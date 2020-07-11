
<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <section class="content clearfix">
        <h3 class="captionCenter mB0">
            <span><?= $category->title ?></span>
        </h3>
        <div class="container">
            <div class="content-body clearfix">
                <div class="row">
                    <?php if (! empty($category->projects)): ?>
                        <?php foreach ($category->projects as $project): ?>
                            <div class="col-md-4 col-sm-6 mB30">
                                <a href="<?= clink(array('@project', $project->slug, $project->id)) ?>">
                                    <div class="project-box">
                                        <img src="<?= uploadPath($project->image, 'project/showcase') ?>"
                                             alt="<?= htmlspecialchars($project->title) ?>">
                                        <h3 class="caption trlY"><?= $project->title ?></h3>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <?php $this->view('lastbar') ?>
</main>