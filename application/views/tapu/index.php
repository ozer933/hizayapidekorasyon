<main id="main">
    <section class="banner clearfix">
        <div class="bread cover" style="background-image: url(public/img/bread-back.png);"></div>
    </section>

    <section class="content clearfix">
        <h3 class="captionCenter mB0">
            <span><?= $this->module->arguments->title ?></span>
        </h3>
        <div class="container">
            <div class="content-body clearfix">
                <form class="clearfix" method="post" accept-charset="utf-8">
                    <?= $this->site->alert(); ?>
                    <div class="form-group">
                        <label for="">Adınız (Gerekli)</label>
                        <input type="text" class="form-control" name="fullname" required
                               value="<?= set_value('fullname') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Cep Telefonunuz</label>
                        <input type="text" class="form-control" name="phone"
                               value="<?= set_value('phone') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">E-Postanız*</label>
                        <input type="email" class="form-control" name="email" placeholder="" required
                               value="<?= set_value('email') ?>">
                    </div>
                    <h1>Tapu Bilgileri</h1>
                    <div class="form-group">
                        <label for="">İl*</label>
                        <input type="text" class="form-control" name="city" required
                               value="<?= set_value('city') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">İlçe*</label>
                        <input type="text" class="form-control" name="town" required placeholder=""
                               value="<?= set_value('town') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Mahalle*</label>
                        <input type="text" class="form-control" name="district" required placeholder=""
                               value="<?= set_value('district') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Pafta*</label>
                        <input type="text" class="form-control" name="pafta" required placeholder=""
                               value="<?= set_value('pafta') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Ada*</label>
                        <input type="text" class="form-control" name="ada" required placeholder=""
                               value="<?= set_value('ada') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Parsel*</label>
                        <input type="text" class="form-control" name="parsel" required placeholder=""
                               value="<?= set_value('parsel') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Arsa Alanı*</label>
                        <input type="text" class="form-control" name="arsa_alani" required placeholder=""
                               value="<?= set_value('arsa_alani') ?>">
                    </div>
                    <div class="form-group">
                        <label for="">İletiniz</label>
                        <textarea class="form-control" name="comment" rows="6"><?= set_value('comment') ?></textarea>
                    </div>
                    <button type="submit" class="btn1">GÖNDER</button>
                </form>
            </div>
        </div>
    </section>

</main>