<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>
    <div  class="jumbotron-fluid">

        <div class="p-2 bg-dark mb-4">
            <h3 class="captionCenter  text-center text-white">
                <span><?= $this->module->arguments->title ?></span>
            </h3>
        </div>

        <div class="container">
            <div class="content-body clearfix">
                <div class="row">
                    <?php if (! empty($projects)): ?>
                        <?php foreach ($projects as $project): ?>
                            <div class="col-md-4 col-sm-6 mB30">
                                <a href="">
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