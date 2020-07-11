
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <?php echo $this->utils->alert(); ?>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Yeni Kayıt Ekle</div>
                <div class="panel-body">

                    <?php echo bsFormText('title', 'Başlık', array('required' => true)) ?>
                    <?php echo bsFormSlug('slug', 'Slug', array('checked' => true)) ?>
                    <?php echo bsFormImage('image', 'Resim') ?>
                    <?php echo bsFormFile('file', 'Ikon (.svg uzantılı ikonlar gerekmektedir.)', array(
                        'required' => true,
                    )) ?>
                    <?php echo bsFormTextarea('summary', 'Özet', array('required' => true)) ?>
                    <?php echo bsFormEditor('detail', 'Detay', array('required' => true)) ?>

                </div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Kaydet</button>
                    <button class="btn btn-success" type="submit" name="redirect" value="<?php echo $this->module ?>/records">Kaydet ve Listeye Dön</button>
                    <a class="btn btn-default" href="<?php echo $this->module ?>/records">Vazgeç</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Meta Bilgileri</div>

                <div class="panel-body">
                    <?php echo bsFormText('metaTitle', 'Title') ?>
                    <?php echo bsFormTextarea('metaDescription', 'Description') ?>
                    <?php echo bsFormTextarea('metaKeywords', 'Keywords') ?>
                </div>
            </div>
        </div>
    </form>
</div>