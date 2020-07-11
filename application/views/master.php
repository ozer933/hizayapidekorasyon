<!DOCTYPE html>
<html lang="<?php echo $this->language ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->site->get('metaTitle') ?></title>
	<?php 
		$var=$_SERVER['REQUEST_URI'];
		if(strlen($var)==1) {
	?>
    <meta name="description" content="<?php echo $this->site->get('metaDescription') ?>">
	<?php } ?>
    <meta name="keywords" content="<?php echo $this->site->get('metaKeywords') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <base href="<?php echo base_url('/') ?>" />


    <link rel="stylesheet" type="text/css" href="public/plugin/bootstrap/css/bootstrap.min.css" />

 

    <link rel="stylesheet" type="text/css" href="public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="public/css/custom.css" />
	<script type="text/javascript" src="public/js/jquery.js"></script>

    <script type="text/javascript" src="http://afarkas.github.io/lazysizes/lazysizes.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,600i,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="public/img/favicon.png">
	<meta name="google" content="notranslate">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if ($ogType = $this->site->get('ogType')): ?>
        <meta property="og:type" content="<?php echo $ogType ?>" />
    <?php endif; ?>
    <?php if ($ogTitle = $this->site->get('ogTitle')): ?>
        <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle) ?>" />
    <?php endif; ?>
    <?php if ($ogDescription = $this->site->get('ogDescription')): ?>
        <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription) ?>" />
    <?php endif; ?>
    <?php if ($ogImage = $this->site->get('ogImage')): ?>
        <meta property="og:image" content="<?php echo base_url('/').$ogImage ?>"/>
    <?php endif; ?>

    <meta property="og:url" content="<?php echo current_url() ?>"/>

    <?php echo $this->site->get('customMeta') ?>

</head>
<body>

<header id="header">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="top-contact">
                <a  onclick="headersayac()"  href="tel:<?= $this->site->get('sitePhone') ?>">
                    <span><?= $this->site->get('sitePhone') ?></span>
                </a>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobilmenu" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= clink('@home') ?>">
                    <img src="public/img/logo.png" class="logo-img" alt="Hiza Yapı Dekorasyon Logo" width="200" height="116">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="mobilmenu">
                <ul class="nav navbar-nav navbar-right">
                    <?php foreach ($this->menu->get('main') as $menu): ?>
                        <li class="<?= !empty($menu->childs) ? 'dropdown' : '' ?>
                                <?= clink($menu->link) == uri_string() ? 'active' : '' ?>
                                <?= uri_string() == "" && clink($menu->link) == './' ? 'active' : '' ?>">
                            <a href="<?= clink($menu->link) ?>" title="<?= $menu->hint ?>"
                               class="<?= !empty($menu->childs) ? ' dropdown-toggle' : '' ?>"
                                <?= !empty($menu->childs) ? 'data-toggle="dropdown" aria-expanded="false"' : '' ?>>
                                <?= $menu->title; ?><?= !empty($menu->childs) ? '<span class="caret"></span>' : '' ?>
                            </a>
                            <?php if (!empty($menu->childs)): ?>
                                <ul class="dropdown-menu">
                                    <?php foreach ($menu->childs as $child): ?>
                                        <li>
                                            <a href="<?= clink($child->link) ?>"
                                               title="<?= htmlspecialchars($child->title) ?>">
                                                <?= $child->title ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </nav>
</header>

    <?php $this->view($view); ?>
	

<style type="text/css">
#htmltagcloud{


	font-size: 100%;
	width: auto;		/* auto or fixed width, e.g. 500px   */
	font-family:'lucida grande','trebuchet ms',arial,helvetica,sans-serif;
	background-color:#fff;
	margin:1em 1em 0 1em;
	border:2px dotted #ddd;
	padding:2em; 


}
#htmltagcloud{line-height:2.4em;word-spacing:normal;letter-spacing:normal;text-transform:none;text-align:justify;text-indent:0}#htmltagcloud a:link{text-decoration:none}#htmltagcloud a:visited{text-decoration:none}#htmltagcloud a:hover{color:white;background-color:#05f}#htmltagcloud a:active{color:white;background-color:#03d}.wrd{padding:0;position:relative}.wrd a{text-decoration:none}.tagcloud0{font-size:1.0em;color:#ACC1F3;z-index:10}.tagcloud0 a{color:#ACC1F3}.tagcloud1{font-size:1.4em;color:#ACC1F3;z-index:9}.tagcloud1 a{color:#ACC1F3}.tagcloud2{font-size:1.8em;color:#86A0DC;z-index:8}.tagcloud2 a{color:#86A0DC}.tagcloud3{font-size:2.2em;color:#86A0DC;z-index:7}.tagcloud3 a{color:#86A0DC}.tagcloud4{font-size:2.6em;color:#607EC5;z-index:6}.tagcloud4 a{color:#607EC5}.tagcloud5{font-size:3.0em;color:#607EC5;z-index:5}.tagcloud5 a{color:#607EC5}.tagcloud6{font-size:3.3em;color:#4C6DB9;z-index:4}.tagcloud6 a{color:#4C6DB9}.tagcloud7{font-size:3.6em;color:#395CAE;z-index:3}.tagcloud7 a{color:#395CAE}.tagcloud8{font-size:3.9em;color:#264CA2;z-index:2}.tagcloud8 a{color:#264CA2}.tagcloud9{font-size:4.2em;color:#133B97;z-index:1}.tagcloud9 a{color:#133B97}.tagcloud10{font-size:4.5em;color:#002A8B;z-index:0}.tagcloud10 a{color:#002A8B}.freq{font-size:10pt !important;color:#bbb}#credit{text-align:center;color:#333;margin-bottom:0.6em;font:0.7em 'lucida grande',trebuchet,'trebuchet ms',verdana,arial,helvetica,sans-serif}#credit a:link{color:#777;text-decoration:none}#credit a:visited{color:#777;text-decoration:none}#credit a:hover{color:white;background-color:#05f}#credit a:active{text-decoration:underline}

</style>

<div id="htmltagcloud"> <span id="0" class="wrd tagcloud0"><a href="#tagcloud">aksesuarlari</a></span> <span id="1" class="wrd tagcloud6"><a href="#tagcloud">hiza</a></span> <span id="2" class="wrd tagcloud0"><a href="#tagcloud">alci</a></span> <span id="3" class="wrd tagcloud0"><a href="#tagcloud">alcipan</a></span> <span id="4" class="wrd tagcloud0"><a href="#tagcloud">anasayfa</a></span> <span id="5" class="wrd tagcloud0"><a href="#tagcloud">asma</a></span> <span id="6" class="wrd tagcloud4"><a href="#tagcloud">banyo</a></span> <span id="7" class="wrd tagcloud0"><a href="#tagcloud">baskili</a></span> <span id="8" class="wrd tagcloud7"><a href="#tagcloud">boya</a></span> <span id="9" class="wrd tagcloud0"><a href="#tagcloud">cam</a></span> <span id="10" class="wrd tagcloud0"><a href="#tagcloud">cati</a></span> <span id="11" class="wrd tagcloud0"><a href="#tagcloud">cozumler</a></span> <span id="12" class="wrd tagcloud9"><a href="#tagcloud">dekorasyon</a></span> <span id="13" class="wrd tagcloud4"><a href="#tagcloud">dekoratif</a></span> <span id="14" class="wrd tagcloud0"><a href="#tagcloud">demir</a></span> <span id="15" class="wrd tagcloud0"><a href="#tagcloud">dusakabin</a></span> <span id="16" class="wrd tagcloud0"><a href="#tagcloud">duvar</a></span> <span id="17" class="wrd tagcloud0"><a href="#tagcloud">fayans</a></span> <span id="18" class="wrd tagcloud0"><a href="#tagcloud">firmamiz</a></span> <span id="19" class="wrd tagcloud0"><a href="#tagcloud">guvenlik</a></span> <span id="20" class="wrd tagcloud2"><a href="#tagcloud">hakkimizda</a></span> <span id="21" class="wrd tagcloud4"><a href="#tagcloud">hayalinizi</a></span> <span id="22" class="wrd tagcloud0"><a href="#tagcloud">isitma</a></span> <span id="23" class="wrd tagcloud10"><a href="#tagcloud">isleri</a></span> <span id="24" class="wrd tagcloud2"><a href="#tagcloud">kapi</a></span> <span id="25" class="wrd tagcloud0"><a href="#tagcloud">klozet</a></span> <span id="26" class="wrd tagcloud0"><a href="#tagcloud">merdiven</a></span> <span id="27" class="wrd tagcloud0"><a href="#tagcloud">mermerit</a></span> <span id="28" class="wrd tagcloud0"><a href="#tagcloud">modelleri</a></span> <span id="29" class="wrd tagcloud0"><a href="#tagcloud">odasi</a></span> <span id="30" class="wrd tagcloud0"><a href="#tagcloud">oluk</a></span> <span id="31" class="wrd tagcloud0"><a href="#tagcloud">panel</a></span> <span id="32" class="wrd tagcloud2"><a href="#tagcloud">pencere</a></span> <span id="33" class="wrd tagcloud2"><a href="#tagcloud">projeler</a></span> <span id="34" class="wrd tagcloud2"><a href="#tagcloud">pvc</a></span> <span id="35" class="wrd tagcloud0"><a href="#tagcloud">sauna</a></span> <span id="36" class="wrd tagcloud0"><a href="#tagcloud">seramik</a></span> <span id="37" class="wrd tagcloud4"><a href="#tagcloud">sistemleri</a></span> <span id="38" class="wrd tagcloud4"><a href="#tagcloud">size</a></span> <span id="39" class="wrd tagcloud0"><a href="#tagcloud">somine</a></span> <span id="40" class="wrd tagcloud0"><a href="#tagcloud">su</a></span> <span id="41" class="wrd tagcloud4"><a href="#tagcloud">sunuyoruz</a></span> <span id="42" class="wrd tagcloud4"><a href="#tagcloud">tesisati</a></span> <span id="43" class="wrd tagcloud0"><a href="#tagcloud">teslim</a></span> <span id="44" class="wrd tagcloud0"><a href="#tagcloud">urunleri</a></span> <span id="45" class="wrd tagcloud4"><a href="#tagcloud">uygulama</a></span> <span id="46" class="wrd tagcloud0"><a href="#tagcloud">vestiyer</a></span> <span id="47" class="wrd tagcloud0"><a href="#tagcloud">vitrifiye-armatur</a></span> <span id="48" class="wrd tagcloud7"><a href="#tagcloud">yapi</a></span> <span id="49" class="wrd tagcloud0"><a href="#tagcloud">yerden</a></span> </div></div>




<footer id="footer" class="mT30">
    <div class="container">
        <div class="row col-md-12">
		<p class="text-justify">
		Uzun yıllara yayılan  tecrübe, tasarım vizyonu, kaliteli üretim ve malzeme deneyimini kurumsal bir yapı altında daha geniş kitlelere  ve daha kapsamlı hizmet verebilmek için 2010 yılından itibaren, Hiza Yapı Mimarlık Tasarım Uygulama adı altında çalışmalarımızı  sürdürmeye başladık.

Hiza Yapı’da  müşterinin tarzı, beğenileri, özel istek ve ihtiyaçları, mimarinin verileri doğrultusunda analiz edilerek, tasarım ilkelerinden ödün vermeyecek kadar esnek bir çerçevede ürün ve mekan tasarımları yapılır. <BR><BR>
</p>            
<div class="col-sm-3 mB30 clearfix">
                <h4 class="caption">HİZA YAPI HAKKINDA</h4>
                <p>
                    <?= $this->site->get('aboutText') ?>
                </p>
            </div>
            <div class="col-sm-2 mB30">
                <h4 class="caption">MENÜ</h4>
                <ul class="footer-menu">
                    <?php foreach ($this->menu->get('footer') as $key => $item): ?>
                        <li>
                            <a href="<?= clink($item->link) ?>" title="<?= $item->hint ?>">
                                <?= $item->title ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-sm-3 mB30 clearfix">
                <h4 class="caption">İLETİŞİM</h4>
                <address>
                   Ücretsiz Keşif ve Uygun Fiyatlarımızla Telefonlarınızı Bekliyoruz.<br>
					
                    <span class="footer-phone"><a style="color:white;" onclick="footersayac()" href="tel:<?= $this->site->get('sitePhone') ?>"><?= $this->site->get('sitePhone') ?></a></span>
                </address>

            </div>

			
			
            <div class="col-sm-4 mB30 clearfix">
                <div class="copyright">
                    <br><br>
                    

 Yenilikçi ve özgün fikirleri; doğadan ilham alan, çağdaş ve kalıcı çizgilerle bütünleştirerek, herhangi bir moda ya da trende bağlı kalmadan  tasarıma hak etiği değeri vermek ana fikirdir.


                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>
   <a style="position: fixed; bottom:0px; left: 0px; right: 0px; text-align: center; z-index: 999999;" href="https://wa.me/905326947587?text=Merhabalar" target="_blank"><img src="/public/WAlogo2.png"  width="200" alt="WhatsApp ile iletişime geç"></a>
  <?php foreach ($this->site->assets('css') as $asset): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $asset ?>" />
    <?php endforeach; ?>
    

    <script type="text/javascript" src="public/js/main.js"></script>

   
    <script type="text/javascript" src="public/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/plugin/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>


    <script type="text/javascript" src="public/plugin/owl-carousel/owl.carousel.min.js"></script>

    <script type="text/javascript" src="public/plugin/notify/pnotify.custom.min.js"></script>
  
</body>
</html>
