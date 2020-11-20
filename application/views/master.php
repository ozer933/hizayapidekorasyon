<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <?php $var=$_SERVER['REQUEST_URI'];
    if(strlen($var)==1){?>
    <title><?php echo $this->site->get('metaTitle') ?></title>
    <meta name="description" content="<?php echo $this->site->get('metaDescription') ?>">
    <?php } else {?>
    <title><?php echo $this->site->get('metaTitle') ?> - Bursa Yapı Dekorasyon</title>
    <?php }?>
    <meta name="content-language" content="tr" />
    <meta name="keywords" content="<?php echo $this->site->get('metaKeywords') ?>">
    <base href="<?php echo base_url('/') ?>"/>
    <link rel="shortcut icon" type="image/png" href="/public/img/favicon.png">
    <link rel="canonical" href="https://www.hizayapidekorasyon.com" />
    <meta property="og:title" content="Bursa Yapı Dekorasyon - Nilufer /  Bursa Ev Tadilatı  Hiza Yapı" />
    <meta name="description" content="Hiza, Nilufer / Bursa Yapı Dekorasyon kaliteli hizmetin adresidir.Bursa Yapı Dekorasyon, Bursa Ev Tadilatı, Bursa Mutfak Tadilatı, Bursa Banyo Tadilatı hizmetleri vermektedir.">
    <meta property="og:description" content="Hiza, Nilufer / Bursa Yapı Dekorasyon kaliteli hizmetin adresidir.Bursa Yapı Dekorasyon, Bursa Ev Tadilatı, Bursa Mutfak Tadilatı, Bursa Banyo Tadilatı hizmetleri vermektedir." />
    <meta property="og:image" content="https://www.hizayapidekorasyon.com/public/logonew.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Ads: 849998012 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-849998012"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-849998012');
    </script>

    <style>
        img{
            max-width: 100% !important;
            height: auto !important;
        }
        .slider-box{
            min-height: 200px;
        }
        .navbar-toggler-icon{
            font-size: 12px !important;
        }
        footer a {
            color:white!important;
        }
        footer ul,li{
            list-style-type: none;
            margin: 0px;
            padding: 0px;
        }
        *{
            font-size: 16px!important;
            font-family: "Poppins",sans-serif;
            font-style: normal;
            text-align: justify-all;
        }
        .nav-link, .navbar-brand{
            font-family: "Poppins",sans-serif;
            font-style: normal;
            font-weight: 600;
            color: black !important;
            font-size: 15px;
            text-transform: uppercase;
        }
        a {
            color:black;
        }
        a:hover{
            color:black;
            text-decoration: none;
        }
        .footer h4{
            color:white!important;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family: "Poppins",sans-serif;
            font-weight: 600;
            color: black !important;
            font-size: 17px!important;
            text-transform: uppercase;
        }
        .captionCenter {
            padding: 10px;
        }
        .bg-dark {
            background-color:#163086!important
        }
    </style>
    <style>
        .hoverCss:hover {
            background-color: #d2dcff;
        }
    </style>

</head>
<body>


<!-- Event snippet for Satın alma işlemi conversion page -->
<script>
    gtag('event', 'conversion', {
        'send_to': 'AW-849998012/FjkICN2D3d8BELzhp5UD',
        'value': 1.0,
        'currency': 'TRY',
        'transaction_id': '<?php echo uniqid(); ?>'
    });
</script>


<header id="header">
    <nav class="zindex-tooltip shadow  fixed-top navbar navbar-expand-lg navbar-light bg-white ">
        <div class="container">
            <a class="navbar-brand" href="<?= clink('@home') ?>">
                <img title="Bursa Yapı Dekorasyon - Hiza Yapı" src="public/logonew.png" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php foreach ($this->menu->get('main') as $menu): ?>
                        <li class="<?= !empty($menu->childs) ? 'dropdown' : '' ?><?= clink($menu->link) == uri_string() ? ' active' : '' ?><?= uri_string() == "" && clink($menu->link) == './' ? ' active' : '' ?>">
                            <a href="<?php echo "https://" . $_SERVER['SERVER_NAME'];?>/<?= clink($menu->link) ?>" title="<?= $menu->hint ?>" class="nav-link <?= !empty($menu->childs) ? ' dropdown-toggle' : '' ?>"<?= !empty($menu->childs) ? 'data-toggle="dropdown" aria-expanded="false"' : '' ?>><?= $menu->title; ?><?= !empty($menu->childs) ? '<span class="caret"></span>' : '' ?></a>
                            <?php if (!empty($menu->childs)): ?>
                                <ul class="dropdown-menu">
                                    <?php foreach ($menu->childs as $child): ?>
                                        <li>
                                            <a class="nav-link " href="<?php echo "https://" . $_SERVER['SERVER_NAME'];?>/<?= clink($child->link) ?>" title="<?= htmlspecialchars($child->title) ?>"><?= $child->title ?></a>
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
<div class="col-md-12" style="height: 55px;"></div>
<?php $this->view($view); ?>
<style>
    .cloudTag hoverCssx{
        float:left;
        padding-right: 7px;
        padding-left: 7px;
        color:#d8d8d8!important;
        border-right: 2px solid white;
        text-align: center!important;
    }
    .cloudTag {
        float:left;
        margin-right: 7px;
        color:white!important;
    }
    .hoverCssx:hover{
        background-color: indigo;
    }
</style>
<div class="col-md-12 pt-3  mt-5 pb-3 text-center" style="background-color: #163086!important ">
    <div class="container">
        <h1 class="cloudTag hoverCssx Title">Anahtar Kelimeler</h1>
        <div style="clear: both"></div>
        <h1 class="cloudTag hoverCssx">Bursa Yapı Dekorasyon</h1>
        <h2 class="cloudTag hoverCssx">Bursa Mutfak Tadilatı</h2>
        <h3 class="cloudTag hoverCssx">Bursa Banyo Tadilatı</h3>
        <h4 class="cloudTag hoverCssx">Bursa Yapı Dekorasyon Firmaları </h4>
        <h5 class="cloudTag hoverCssx">Bursa Ev Tadilatı</h5>
        <h6 class="cloudTag hoverCssx">Bursa Nilufer Yapı Dekorasyon</h6>
        <h1 class="cloudTag hoverCssx">Bursa Osmangazi Yapı Dekorasyon</h1>
        <h2 class="cloudTag hoverCssx">Bursa Anahtar Teslim Ev Tadilatı</h2>
        <h3 class="cloudTag hoverCssx">Bursa Tadilat Firması</h3>
        <h4 class="cloudTag hoverCssx">Bursa Mutfak Dekorasyonu</h4>
        <h5 class="cloudTag hoverCssx">Bursa Ev Dekorasyonu ve Tadilatı</h5>
        <div style="clear: both"></div>
    </div>
</div>
<footer id="footer " class="footer bg-dark text-white mt-1 pt-5">
    <div class="container">
        <div class="row col-md-12">

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
<div class="col-md-12 text-right bg-dark text-white  ">
    <a class="text-light" style="position: static; z-index:999;" href="http://irfanozer.com/"> Web Tasarım</a> Tüm Hakları irfanozer.com tarafından korunmaktadır.
</div>
</div>
<a style="position: fixed; bottom:20px; left: 0px; right: 0px; text-align: center; z-index: 2;" href="https://wa.me/905326947587?text=Merhabalar" target="_blank"><img src="/public/WAlogo2.png"  width="150" alt="WhatsApp ile iletişime geç"></a>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>