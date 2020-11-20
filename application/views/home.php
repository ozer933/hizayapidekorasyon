<main id="main">
    <section class="banner clearfix">
        <?php if (isset($this->banner)): ?>
            <?php $this->view('banner/slider') ?>
        <?php endif; ?>
    </section>
    <div class="jumbotron-fluid">
        <div class=" bg-dark mb-4 mt-0">
            <h3 class="captionCenter  text-center text-white">
                <span class="bG">HİZMETLERİMİZ</span>
            </h3>
        </div>
        <section class="services bG clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php if (! empty($services)): ?>
                                <?php foreach ($services as $service): ?>
                                    <div class="col-md-4 mb-2 hoverCss " style="cursor: pointer;">
                                        <div class="col-md-12 border ">
                                            <img class="img-fluid "
                                                 src="<?= uploadPath($service->image, 'service') ?>"
                                                 alt="<?= htmlspecialchars($service->title) ?>">

                                        <a   title="<?= $service->title ?>" class="db" href="<?php echo "https://" . $_SERVER['SERVER_NAME'];?>/<?= clink(array('@service', $service->slug, $service->id)) ?>">
                                            <div class="service-box clearfix">
                                                <div class="text">
                                                    <h4 class="mt-3 ml-0"><?= $service->title ?></h4>
                                                    <p>
                                                        <?= $service->summary ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div  class="jumbotron-fluid">
            <div class="bg-dark mb-1 p-1">
                <div class="jumbotron-fluid pb-1">
                    <img style="width: 100%" class="img-fluid" title="bursa mutfak tadilatı" src="/public/upload/editor/images/mutfak-dekorasyonu.jpg"/>
                </div>

            </div>
            <div class="bg-dark mb-4">
                <h3 class="captionCenter  text-center text-white">
                    <span class="bG">HİZA YAPI DEKORASYON </span>
                </h3>
            </div>
            <div class="container text-justify" style="  margin-bottom: 15px; text-align: center">
                Evlerimiz, çalışma ofislerimiz artık yaşam tarzımızı yansıtmakta. <br> Bu nedenledir ki son yıllarda bu mekanların <a href="/" title="bursa yapı dekorasyon"> yapı dekorasyon</a> işleri iyice popülerlik kazandı.
                <strong>Dekorasyon</strong> ciddi ve belli maliyeti olan bir iştir..
                Biz Hiza Yapı olarak ,size daha profesyonel hizmet vermek için her yıl fuarlara katılıyor  sürekli yenilik ve ar-ge çalışmaları yapıyoruz.
                Ev ,ofis ,işyerinizin dekorasyonu veya tadilatı  için biri aramanız yeterli. Ücretsiz keşif ve ölçülendirme yaparak hızlı bir şekilde ihtiyacınıza ve talebinize uygun proje ve fiyatlandırma yapıyoruz.
                Siz onay verdiğinizde başlama ve bitiş teminleri netleşir hızlı kaliteli ve işinin ehli güler yüzlü personelimizle sizlere keyif alacağınız mekanlar yapıyoruz.
            </div>
        </div>

        <div class="jumbotron-fluid">
            <div class=" bg-dark mb-4">
                <h3 class="captionCenter  text-center text-white">
                    <span class="bG">DEKORATİF ÜRÜNLER ?</span>
                </h3>
            </div>
            <div class="container text-justify" style="  margin-bottom: 15px;">
                <strong>Hizart Desing</strong> firmamız Hiza Yapı Dekorasyon şirketine aittir.Yıllardır dekorasyon alanındaki tecrübeleri ile göz dolduran firmamız,<a href="http://hizartdesing.com/" target="_blank">Dekoratif obje satışı</a> ve üretimi için ikinci bir firma açmıştır.
                Hizart Desing olarak firmamız 2019 yılında kurulmuş olup, üstün hizmer kalitesi ile sizleri hayatın yoğun temposunda yormayarak dilediğiniz dekoratif ürünleri kapınıza kadar ulaştırmak için varız. Doğadan ilham alan tasarımlarımız ile özlediğiniz sadeliği, şıklığı yaşam alanlarınıza sunuyoruz. Kişiye özel tasarımlarımız, hem modern hem de fonksiyonel ürünlerimizle sizler de yaşam alanlarınıza değer katın.
                Yaşamın tüm renkleri için gelin Hizart Desing’de buluşalım.
                <br>
                Site Adresi:<a href="http://hizartdesing.com/" target="_blank" style="color:blue;"> Dekoratif Ürün Satış Mağazamız</a>
            </div>
        </div>
        <div  class="jumbotron-fluid">
            <div class=" bg-dark mb-4">
                <h3 class="captionCenter  text-center text-white">
                    <span class="bG">BİZDEN HABERLER</span>
                </h3>
            </div>
            <div class="container">
                <div class="row">
                    <?php if (! empty($news)): ?>
                        <?php foreach ($news as $new): ?>
                            <div class="col-md-4  mb-4 hoverCss " >
                                <div class="col-md-12 border p-0" >
                                    <img class="img-responsive img-fluid" style="width: 100%;"
                                         src="<?= uploadPath($new->image, 'news') ?>"
                                         alt="<?= htmlspecialchars($new->title) ?>" >
                                    <div class="col-md-12">
                                        <a title="<?= $new->title ?>" href="<?= clink(array('@news', $new->slug, $new->id)) ?>">
                                            <h4 class="eclipse mt-3"><?= $new->title ?></h4>

                                        <p>
                                            <?= mb_substr($new->summary,0,120,'UTF-8') ?>
                                        </p>
                                        </a>

                                    </div>
                                    <div class="col-md-12 p-2 m-0  bg-dark">
                                        <a class="btn1 sm pull-right text-white"
                                           href="<?= clink(array('@news', $new->slug, $new->id)) ?>">
                                            <div class="time pull-left text-white"><?= $this->date->set($new->date)->dateWithName() ?></div>
                                            Yazının Devamı ...
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</main>


</div>
</div>