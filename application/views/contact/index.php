<!-- Event snippet for iletişim sayfasına ulaşma conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-849998012/C_qSCLWb_bMBELzhp5UD'});
</script>

<main id="main">

    <?php if (! empty($this->module->arguments->googleMap)): ?>
    <section class="banner clearfix">
        <div id="map-canvas" class="bShadow" style="width: 100%; height: 400px;">
		
		
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.0711658377013!2d28.97260931538958!3d40.207479879389986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca16a1ec98d685%3A0x762c1dd6b6c99217!2sMehtap+Sitesi!5e0!3m2!1str!2str!4v1549830368950" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>
    </section>
    <?php endif; ?>

    <section class="content clearfix">
        <h3 class="captionCenter mB0">
            <span><?= $this->module->arguments->title ?></span>
        </h3>
        <div class="container">
            <div class="content-body clearfix">
                <div class="row">
                    <div class="col-sm-3 text-center mB30 contact-col">
                        <img src="public/img/adres.svg" alt=" adres" height="63" class="logo-img">
                        <p><?= $this->module->arguments->address ?></p>
                    </div>
                    <div class="col-sm-3 text-center mB30 contact-col">
                        <img src="public/img/telefon.svg" alt="Telefon" height="63" class="logo-img">
                        <p>Telefon ve Faks</p>
                        <a class="contact-phone"  onclick="iletisimsayac()" href="tel:<?= $this->module->arguments->phone ?>">
                            <span><?= $this->module->arguments->phone ?></span>
							
                        </a>
						   <a class="contact-phone" onclick="iletisimsayac()" href="tel:+902244517051">
						<br>Sabit numara<br> <span> 0224 451 70 51 </span>
						</a>
                    </div>
                    <div class="col-sm-3 text-center mB30 contact-col">
                        <img src="public/img/message.svg" alt="Mail" height="63" class="logo-img">
                        <p>Mail</p>
                        <span><?= $this->module->arguments->email ?></span>
                    </div>
                    <div class="col-sm-3 text-center mB30 contact-col">
                        <img src="public/img/sosyal.svg" alt=" Sosyal Medya" class="logo-img" height="63">
                        <div class="clearfix"></div>
                        <ul class="contact-social">
                            <?php foreach ($this->social->all() as $item): ?>
                                <li>
                                    <a href="<?= $item->link ?>" rel="external"
                                       data-toggle="tooltip" data-placement="bottom"
                                       title="<?= htmlspecialchars($item->title) ?>">
                                        <i class="<?= $item->icon ?>"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="row">

                    <form method="post" action="<?php echo clink('@contact') ?>" accept-charset="utf-8" class="contact-form clearfix mB30">
                        <?php echo $this->site->alert() ?>

                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="<?php echo lang('contact-fullname') ?>"
                                               name="fullname" required="required" value="<?php echo set_value('fullname') ?>">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="<?php echo lang('contact-email') ?>"
                                               name="email" required="required" value="<?php echo set_value('email') ?>" />
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control mask-phone" placeholder="<?php echo lang('contact-phone') ?>"
                                               name="phone" required="required" value="<?php echo set_value('phone') ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <textarea class="form-control" placeholder="<?php echo lang('contact-message') ?>"
                                      name="comment" required="required" rows="5"><?php echo set_value('comment') ?></textarea>
                        </div>

                        <div class="col-xs-12 text-right mT15">
                            <button type="submit" class="btn btn1"><span class="glyphicon glyphicon-ok"></span>&nbsp;
                                <?php echo lang('contact-send') ?></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
