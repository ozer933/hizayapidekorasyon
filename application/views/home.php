<style>
.imgfav {
margin-top:15px;
height:250px;
overflow:hidden;
}
.top-socials{
list-style-type:none;
float:left;
font-size:35px;
margin-left:15px;
}
.social {
border-bottom: 2px solid gray; 
	width:100%;
	font-family: 'Lacquer', sans-serif;
	font-size:16px;
color:black;
background-color:rgba(255,255,255,0.6);

padding-right:15px;
}
</style>

<main id="main">

    <section class="banner clearfix">
	
        <?php if (isset($this->banner)): ?>
            <?php $this->view('banner/slider') ?>
        <?php endif; ?>
    </section>
<div class="col-md-12">
<hr>
<div style="clear:both;"></div>
</div>
 <h3 class="captionCenter">
            <span>TAMAMLANAN İŞLER</span>
        </h3>
<div class="container">
<div class="col-md-12    centered">
<style>

        #lazy .div{
            border: 1px solid lightgrey;
            padding: 50px;
            text-align: center;
        }
        #lazy .img{
            display: block;
            margin: auto;
        }


.count {
  width: 100%;
  height: 60px;
  background: lightgray;

  border: 1px solid gray;
  display: flex;
text-aligin:center;
  justify-content: center;
  align-items: center;
  color: white;
  font-weight: bold;
  font-size: 20px;
  font-family: verdana;
  float: left;

  text-shadow: 1px 1px black;
 
}
.kutu{
background-color:gray;
-webkit-border-radius: 33px;
-moz-border-radius: 33px;
border-radius: 33px;


}
.buyukkutu {
	font-size:18px;
	font-family: 'Lacquer', sans-serif;

	 color:black;
}
</style>

<div class ="col-md-12">
 
<div class="buyukkutu col-md-3 col-xs-3 text-center">
 Ofis <br>
<div class="kutu count">40</div> 
</div>
<div class="buyukkutu col-md-3 col-xs-3 text-center">
 Ev <br>
<div class="kutu count">20</div> 
</div>
<div class="buyukkutu col-md-3 col-xs-3 text-center">
 Banyo <br>
<div class="kutu count col-xs-3">90</div> 
</div>
<div class="buyukkutu col-md-3 col-xs-3 text-center">
 Mutfak <br>
<div class="kutu count">160</div> 
</div>
</div>


</div>
</div>
  


    <section class="projects cover" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <?php if (! empty($nextProject)): ?>
                    <div class="col-md-6 mB30 projects-left">
                        <h2 class="caption"><?= $nextProject->title ?></h2>
                        <div class="row">
                            <div class="col-sm-8 mB15 text">
                                <p>
                                    <?= $nextProject->summary ?>
                                </p>
                            </div>
                            <div class="col-sm-4 mB15">
                                <img class="img-responsive center-block"

                                     data-src="<?= uploadPath($nextProject->image, 'category') ?>"
                                     alt="<?= htmlspecialchars($nextProject->title) ?>" class="lazyload">
                            </div>
                            <div class="col-sm-12">
                                <a title="Yapı Dekorasyon Projelerimiz" class="btn1" href="<?= clink(array('@category', $nextProject->slug, $nextProject->id)) ?>">
                                    Projeler
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (! empty($doneProject)): ?>
                    <div class="col-md-6 mB30 projects-right">
                        <h2 class="caption"><?= $doneProject->title ?></h2>
                        <div class="row">
                            <div class="col-sm-8 mB15 text">
                                <p>
                                    <?= $doneProject->summary ?>
                                </p>
                            </div>
                            <div class="col-sm-4 mB15">
                                <img class="img-responsive center-block"
                                     data-src="<?= uploadPath($doneProject->image, 'category') ?>"
                                     alt="<?= htmlspecialchars($doneProject->title) ?>">
                            </div>
                            <div class="col-sm-12">
                                <a  title="Hiza Yapının Projeleri" class="btn1" href="<?= clink(array('@category', $doneProject->slug, $doneProject->id)) ?>">
                                    Projeler
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
 
    <section class="services bG clearfix">
        <h3 class="captionCenter">
            <span class="bG">HİZMETLER ?</span>
        </h3>
        <div class="container">
        


            <div class="row">
               
                <div class="col-md-12">
                    <div class="row">
                        <?php if (! empty($services)): ?>
                            <?php foreach ($services as $service): ?>
                                <div class="col-md-6 mB15">
                                    <a   title="Hiza Yapı" class="db" href="<?= clink(array('@service', $service->slug, $service->id)) ?>">
                                        <div class="service-box clearfix">
                                            <img class="trlY svg"
                                                 src="<?= uploadPath($service->icon, 'service/svg') ?>"
                                                 alt="<?= htmlspecialchars($service->title) ?>">
                                            <div class="text">
                                                <h4 class="f7"><?= $service->title ?></h4>
                                                <p>
                                                    <?= $service->summary ?>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="news clearfix">
   
        <h3 class="captionCenter">
            <span> FARKIMIZ?</span>
        </h3>
 <div class="container text-justify" style="line-height: 30px;  margin-bottom: 15px; text-align: center">
                Evlerimiz, çalışma ofislerimiz artık yaşam tarzımızı yansıtmakta. <br> Bu nedenledir ki son yıllarda bu mekanların dekorasyon işleri iyice popülerlik kazandı.
     <strong>Dekorasyon</strong> ciddi ve belli maliyeti olan bir iştir..
                Biz Hiza Yapı olarak ,size daha profesyonel hizmet vermek için her yıl fuarlara katılıyor  sürekli yenilik ve ar-ge çalışmaları yapıyoruz.
                Ev ,ofis ,işyerinizin dekorasyonu veya tadilatı  için biri aramanız yeterli. Ücretsiz keşif ve ölçülendirme yaparak hızlı bir şekilde ihtiyacınıza ve talebinize uygun proje ve fiyatlandırma yapıyoruz.
                Siz onay verdiğinizde başlama ve bitiş teminleri netleşir hızlı kaliteli ve işinin ehli güler yüzlü personelimizle sizlere keyif alacağınız mekanlar yapıyoruz.


            </div>
</section>
    <section class="news clearfix">

        <h2 class="captionCenter">
            <span> Hiza Art Desing</span>
        </h2>
        <div class="container text-justify" style="line-height: 30px;  margin-bottom: 15px;">
            <strong>Hizart Desing</strong> firmamız Hiza Yapı Dekorasyon şirketine aittir.Yıllardır dekorasyon alanındaki tecrübeleri ile göz dolduran firmamız,Dekoratif obje satışı ve üretimi için ikinci bir firma açmıştır.
            Hizart Desing olarak firmamız 2019 yılında kurulmuş olup, üstün hizmer kalitesi ile sizleri hayatın yoğun temposunda yormayarak dilediğiniz dekoratif ürünleri kapınıza kadar ulaştırmak için varız. Doğadan ilham alan tasarımlarımız ile özlediğiniz sadeliği, şıklığı yaşam alanlarınıza sunuyoruz. Kişiye özel tasarımlarımız, hem modern hem de fonksiyonel ürünlerimizle sizler de yaşam alanlarınıza değer katın.
            Kaliteli, genele hitap eden ve siz değerli müşterilerimize makul fiyatlar ile sunduğumuz ürünlerimiz, yeni trendlere öncülük ederken sizlerle buluşmaya devam edeceğiz. Hizart Desing <strong>mutfak, ev dekorasyonu</strong>, tamamlayıcı dekoratif ürünler gibi ev ve yaşam kategorilerinde geniş bir ürün yelpazesi sunmayı vaat ediyor. Modernliğin yanında özlediğimiz doğallığı da oluşturarak sizleri heyecanlandırmayı önemsiyoruz. Yalın olmasının yanında göz alıcı, farklı mekanlar için kurmuş olduğumuz e-ticaret sitemiz her geçen gün sizler için gelişimini sürdürmeye devam edecek.
            Türkiye’nin dört bir yanına sunduğumuz hızlı ve güvenilir teslimat ise bizleri rakiplerimizden ayıran bir diğer özelliğimizdir. Birlikte büyüteceğimiz bu geniş ailemizde düzgün, kaliteli ve güvenilir hizmet anlayışı ile yaşam alanlarınızı birlikte güzelleştireceğiz. Bunu yaparken enerjik ekibimiz, ilham veren tasarımlarımız ve güçlü teknoloji ile sizlere en iyi hizmeti sunmak için çalışıyoruz.  Yaşamın tüm renkleri için gelin Hizart Desing’de buluşalım.
            <br>
             <a href="http://hizartdesing.com/" target="_blank">Site Adresi: Hizartdesing.com Siteye git</a>
        </div>
    </section>
    <section class="news clearfix">
   
        <h3 class="captionCenter">
            <span> HABERLER</span>
        </h3>
        <div class="container">

            <div class="row">
                <?php if (! empty($news)): ?>
                    <?php foreach ($news as $new): ?>
                        <div class="col-md-4 mB30">
                            <div class="news-box clearfix">
                                <a  title="Hiza Yapı Haberler" href="<?= clink(array('@news', $new->slug, $new->id)) ?>">
                                    <img class="img-responsive"
                                         src="<?= uploadPath($new->image, 'news') ?>"
                                         alt="<?= htmlspecialchars($new->title) ?>" class="lazyload">
                                </a>
                                <a  title="Hiza Yapı Haber Detayı" href="<?= clink(array('@news', $new->slug, $new->id)) ?>">
                                    <h4 class="eclipse"><?= $new->title ?></h4>
                                </a>
                                <p>
                                    <?= $new->summary ?>
                                </p>
                                <div class="time pull-left">
                                    <?= $this->date->set($new->date)->dateWithName() ?>
                                </div>
                                <a class="btn1 sm pull-right"
                                   href="<?= clink(array('@news', $new->slug, $new->id)) ?>">
                                    Detaya Git
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <?php if (! empty($references)): ?>
        <section class="referance main-ref">
            <h3 class="captionCenter">
                <span>REFERANSLAR</span>
            </h3>
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

</main>
  

<div id="lazy">
 <h3 class="captionCenter">
            <span>HAKKIMIZDA</span>
        </h3>
    <div class="div"
	<p>Yapı Dekorasyon Firmaları: apıların iç cephelerinin boya, alçı tavan, duvar kâğıdı, alçı sıva, kartonpiyer, alçı levha kaplama, alçı bölme duvar, dökme tavan, renk tasarımı ve dekorasyon çizimleri ile bunlara ait hesap ve teknik çizimleri yapan ve uygulayan firmalardır. </p>
	</div>
   
    <div class="div"><p>Ofisimiz Bursa Beşevler Kara fatma heykeli yanındadır. Bulunduğumuz lokasyondan tüm bursaya hizmet vermekteyiz.</p></div>
    <div class="div"><p><a href="tel:05326947587">Mutfak Tadilatı Hizmeti almak için tıklayınız</a></p></div>
    <div class="div"><p><a href="tel:05326947587">Banyo Tadilatı hizmeti almak için tıklayınız</a></p></div>
    <div class="div"><p>Çağrı merkezimizi arayın hizlıca teklifinizi alın!</p></div>
<section class="services bG clearfix">
        <h3 class="captionCenter">
            <span class="bG">HİZMET BÖLGELERİMİZ</span>
        </h3>
        <div class="container">
        


            <div class="row">
               
                <div class="col-md-12">
                    <div class="row">
                        <?php
 if (! empty($categoryall)): ?>
                            <?php foreach ($categoryall as $service): ?>
                                <div class="col-md-6 mB15">
                                    <a href="/projeler/<?= $service->slug ?>/<?= $service->id ?>"  title="Hiza Yapı" class="db" href="">
										
									<div class=" clearfix" style="background-color:white; padding:10px; border:1px solid #ccc; height:120px; overflow:hidden;">
                                            
                                            <div class="text">
                                                <h4 class="f7"><?= $service->title ?></h4>
                                                <p>
                                                    <?= $service->detail ?>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>



$(document).ready(function() {

  var counters = $(".count");
  var countersQuantity = counters.length;
  var counter = [];

  for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
  }

  var count = function(start, value, id) {
    var localStart = start;
    setInterval(function() {
      if (localStart < value) {
        localStart++;
        counters[id].innerHTML = localStart;
      }
    }, 40);
  }

  for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
  }
});
</script>