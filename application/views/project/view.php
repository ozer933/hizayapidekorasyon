<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <section class="content clearfix">
        <div class="container">
            <div class="content-body clearfix">
                <div class="row">
                   <div class="container">
					  <h2><?= $project->title ?> hakkında</h2>
									 
					<?php $data=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; 
					$data=explode('/', $data);
					?>
					  <ol class="breadcrumb">
						<li><a href="/"><?php echo $data[0]; ?></a></li>
						<li><a href="/projeler/<?php echo $data[2]; ?>/<?php echo $data[3]; ?>"><?php echo $data[2]; ?></a></li>
						<li><a href="/">Eklenme Tarihi: <?php echo date('d/m/Y'); ?></a></li>
							 
					  </ol>
					</div>
                    <div class="col-sm-4 mB30">

                        <div id="project-slide" class="owl-carousel owl-theme clearfix">
                            <div class="item">
                                <a class=" db" rel="gallery">
                                    <img src="<?= uploadPath($project->image, 'project/showcase') ?>"
                                         alt="<?= htmlspecialchars($project->title) ?>">
                                </a>
                            </div>
                            <?php if (!empty($project->images)): ?>
                                <?php foreach ($project->images as $image): ?>
                                    <div class="item">
                                        <a class=" db" rel="gallery"
                                           >
                                            <img src="<?= uploadPath($image->image, 'project/show') ?>"
                                                 alt="<?= htmlspecialchars($project->title) ?>">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div id="project-slide-thumb" class="owl-carousel owl-theme clearfix">
                            <div class="item">
                                <img src="<?= uploadPath($project->image, 'project/thumb') ?>"
                                     alt="<?= htmlspecialchars($project->title) ?>">
                            </div>
                            <?php if (!empty($project->images)): ?>
                                <?php foreach ($project->images as $image): ?>
                                    <div class="item">
                                        <img src="<?= uploadPath($image->image, 'project/thumb') ?>"
                                             alt="<?= htmlspecialchars($project->title) ?>">
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                    </div>
                    
                    <div class="col-sm-8 mB30">
                        <div class="project-detail-text">
                          

                            <?= $project->detail ?>
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