
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <?php echo $this->utils->alert(); ?>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-edit"></i> Kayıt Düzenle</div>
                <div class="panel-body">

                    <?= bsFormDropdown('projectId', 'Kategori Seçiniz', array(
                        'required' => true,
                        'options' => prepareForSelect($this->appmodel->getCategories(), 'id', 'title', 'Seçiniz'),
                        'value' => $record->projectId,
                    )) ?>
                    <?php echo bsFormText('title', 'Başlık', array('required' => true, 'value' => $record->title)) ?>
                    <?php echo bsFormSlug('slug', 'Slug', array('required' => true, 'value' => $record->slug)) ?>
                    <?php echo bsFormImage('image', 'Resim', array('value' => $record->image, 'path' => '../public/upload/project/')) ?>
                    <?php echo bsFormTextarea('summary', 'Özet', array('required' => true, 'value' => $record->summary)) ?>
                    <?php echo bsFormEditor('detail', 'Detay', array('value' => $record->detail)) ?>


                </div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Kaydet</button>
                    <a class="btn btn-default" href="<?php echo $this->module ?>/records">Vazgeç</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Proje Özellikleri</div>

                <div class="panel-body">
                    <?php echo bsFormText('type', 'Proje Tipi', array('value' => $record->type)) ?>
                    <?php echo bsFormText('location', 'Lokasyon', array('value' => $record->location)) ?>
                    <?php echo bsFormText('price', 'Fiyat', array('value' => $record->price)) ?>
                    <?php echo bsFormText('room', 'Oda Tipleri', array('value' => $record->room)) ?>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Meta Bilgileri</div>

                <div class="panel-body">
                    <?php echo bsFormText('metaTitle', 'Title', array('value' => $record->metaTitle)) ?>
                    <?php echo bsFormTextarea('metaDescription', 'Description', array('value' => $record->metaDescription)) ?>
                    <?php echo bsFormTextarea('metaKeywords', 'Keywords', array('value' => $record->metaKeywords)) ?>
                </div>
            </div>
        </div>
    </form>
</div>

