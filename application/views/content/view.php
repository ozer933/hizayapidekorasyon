<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <div  class="jumbotron-fluid">

        <div class="p-2 bg-dark mb-4">
            <h3 class="captionCenter  text-center text-white">
                <span class="bG">HAKKIMIZDA ?</span>
            </h3>
        </div>
        <div class="container">
            <div class="content-body clearfix">
                <div class="row">
                    <div class="col-md-12">
                       
                        <?= $content->detail ?>

                    </div>


                    <?php if (! empty($content->parent->childs) || ! empty($content->childs)): ?>
                        <div class="col-md-3">

                            <?php if (! empty($content->parent->childs)): ?>
                                <div class="list-group">
                                    <a class="list-group-item"
                                       href="<?php echo clink(array('@content', $content->parent->slug, $content->parent->id)) ?>"
                                       title="<?php echo $content->parent->title ?>">
                                        <?php echo $content->parent->title ?>
                                    </a>
                                    <?php foreach ($content->parent->childs as $child): ?>
                                        <a class="list-group-item <?php echo $content->id === $child->id ? 'active':'' ?>"
                                           href="<?php echo clink(array('@content', $child->slug, $child->id)) ?>"
                                           title="<?php echo $child->title ?>">
                                            <?php echo $child->title ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (! empty($content->childs)): ?>
                                <div class="list-group">
                                    <a class="list-group-item active"
                                       href="<?php echo clink(array('@content', $content->slug, $content->id)) ?>"
                                       title="<?php echo $content->title ?>">
                                        <?php echo $content->title ?>
                                    </a>
                                    <?php foreach ($content->childs as $child): ?>
                                        <a class="list-group-item"
                                           href="<?php echo clink(array('@content', $child->slug, $child->id)) ?>"
                                           title="<?php echo $child->title ?>">
                                            <?php echo $child->title ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php $this->view('share', ['content' => $content]) ?>
        </div>
    </div>

    <?php $this->view('lastbar') ?>
</main>