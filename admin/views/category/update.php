
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <?php echo $this->utils->alert(); ?>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-edit"></i> Kayıt Düzenle</div>
                <div class="panel-body">

                    <?php echo bsFormText('title', 'Başlık', array('required' => true, 'value' => $record->title)) ?>
                    <?php echo bsFormSlug('slug', 'Slug', array(
                        'checked' => true,
                        'value' => $record->slug
                        )) ?>
                    <?php echo bsFormImage('image', 'Resim', array(
                        'value' => $record->image,
                        'path' => '../public/upload/category/')) ?>
                    <?php echo bsFormTextarea('summary', 'Özet', array('value' => $record->summary)) ?>


                </div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Kaydet</button>
                    <a class="btn btn-default" href="<?php echo $this->module ?>/records">Vazgeç</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Özel Key Ekle</div>
                <div class="panel-body">
                    <?php echo bsFormText('item', 'Key', array('value' => $record->item, 'disabled' => true)) ?>
                    <p class="help-block"><i>"Key"</i> özel olarak kategorinin çağırılıcağı zaman kullanılması
                        gerekir. <strong>Bilgi sahibi değilseniz lütfen boş geçiniz.</strong></p>
                </div>
            </div>
        </div>

    </form>
</div>

