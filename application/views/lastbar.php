<?php $references = $this->reference->all(); ?>
<?php if (! empty($references)): ?>
<section class="referance">
    <div class="container">
        <div class="row">
            <div class="referanslar">

                <div class="buttons" id="Prev"><i class="fa fa-angle-left"></i></div>
                <div class="buttons" id="Next"><i class="fa fa-angle-right"></i></div>

                <div id="referanslar">
                    <?php foreach ($references as $reference): ?>
                        <div class="item flexCC">
                            <img src="<?= uploadPath($reference->image, 'reference') ?>"
                                 alt="<?= htmlspecialchars($reference->title) ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>