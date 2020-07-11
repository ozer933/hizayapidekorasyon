<div class="w100 mT30">
    <a class="btn1 xs pull-right" href="javascript:history.back();">
        <i class="fa fa-arrow-left"></i>
        <?php echo lang('content-go-back') ?>
    </a>
    <div class="share-box clearfix">
        <h5 class="share-caption"><?php echo lang('content-share-social') ?></h5>
        <a class="btnShare facebook" href="http://facebook.com/sharer.php?u=<?php echo current_url() ?>"
           data-toggle="tooltip" data-placement="top"
           title="<?php echo lang('content-share-facebook') ?>">
            <i class="fa share"></i>
            <span><?php echo lang('content-share-facebook') ?></span>
        </a>

        <a class="btnShare twitter" href="https://twitter.com/share?url=<?php echo current_url() ?>&text=<?php echo htmlspecialchars($content->title) ?>"
           data-toggle="tooltip" data-placement="top"
           title="<?php echo lang('content-share-twitter') ?>">
            <i class="fa share"></i>
            <span><?php echo lang('content-share-twitter') ?></span>
        </a>

        <a class="btnShare google-plus" href="https://plus.google.com/share?url=<?php echo current_url() ?>"
           data-toggle="tooltip" data-placement="top"
           title="<?php echo lang('content-share-google') ?>">
            <i class="fa share"></i>
            <span><?php echo lang('content-share-google') ?></span>
        </a>
    </div>
</div>