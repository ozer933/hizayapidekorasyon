
<!-- Event snippet for iletişim sayfasına ulaşma conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-849998012/C_qSCLWb_bMBELzhp5UD'});
</script>

<main id="main">


    <div  class="jumbotron-fluid">

        <div class="p-2 bg-dark mb-2">
            <h3 class="captionCenter  text-center text-white">
                <span class="bG">İLETİŞİM</span>

            </h3>
        </div>
    </div>


    <div class="row mt-4 mx-auto">

        <div class="col-md-12 ">
            <div class="content-body clearfix">
                <div class="row">
                    <div class="col-sm-3 text-center mB30 contact-col mx-auto">
                        <img src="public/img/adres.svg" alt=" adres" style="height:  63px!important;" class="logo-img">
                        <p><?= $this->module->arguments->address ?></p>
                    </div>
                    <div class="col-sm-3 text-center mB30 contact-col ">
                        <img src="public/img/telefon.svg" alt="Telefon" style="height:  63px!important;" class="logo-img">
                        <p>Telefon ve Faks</p>
                        <a class="contact-phone"  onclick="iletisimsayac()" href="tel:<?= $this->module->arguments->phone ?>">
                            <span><?= $this->module->arguments->phone ?></span>
							
                        </a>
						   
                    </div>
                    <div class="col-sm-3 text-center mB30 contact-col">
                        <img src="public/img/message.svg" alt="Mail" style="height:  63px!important;" class="logo-img">
                        <p>Mail</p>
                        <span><?= $this->module->arguments->email ?></span>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-md-10 mx-auto mt-4">

        <form method="post" action="<?php echo clink('@contact') ?>" accept-charset="utf-8" class="contact-form clearfix mB30">


            <div class="col-md-12">
                    <?php echo $this->site->alert() ?>
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
                <textarea class="form-control" placeholder="<?php echo lang('contact-message') ?>" name="comment" required="required" rows="5"><?php echo set_value('comment') ?></textarea>
            </div>

            <div class="col-xs-12 text-right mT15">
                <button type="submit" class="btn btn-secondary mt-2"><span class="glyphicon glyphicon-ok"></span>&nbsp;
                    <?php echo lang('contact-send') ?></button>
            </div>

        </form>
    </div>
</main>
