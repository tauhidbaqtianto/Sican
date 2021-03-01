	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
  }
	?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/can_ico.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page Loader-->
    <div id="page-loader">
      <div class="page-loader-body">
        <div class="cssload-spinner">
          <div class="cssload-cube cssload-cube0"></div>
          <div class="cssload-cube cssload-cube1"></div>
          <div class="cssload-cube cssload-cube2"></div>
          <div class="cssload-cube cssload-cube3"></div>
          <div class="cssload-cube cssload-cube4"></div>
          <div class="cssload-cube cssload-cube5"></div>
          <div class="cssload-cube cssload-cube6"> </div>
          <div class="cssload-cube cssload-cube7"></div>
          <div class="cssload-cube cssload-cube8"></div>
          <div class="cssload-cube cssload-cube9"></div>
          <div class="cssload-cube cssload-cube10"></div>
          <div class="cssload-cube cssload-cube11"></div>
          <div class="cssload-cube cssload-cube12"></div>
          <div class="cssload-cube cssload-cube13"></div>
          <div class="cssload-cube cssload-cube14"></div>
          <div class="cssload-cube cssload-cube15"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Top Banner-->
      <!-- Page header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="5px" data-lg-stick-up-offset="5px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php">
                      <div class="brand__name"><img class="brand__logo-dark" src="images/logo-default.png" alt="" width="237" height="35"/><img class="brand__logo-light" src="images/logo-inverse-237x35.png" alt="" width="237" height="35"/>
                      </div><span class="brand__slogan">Cipta Asa Nusantara</span></a></div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-element">
                    <ul class="list-icons list-inline-sm">
                      <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                      <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                      <li><a class="icon icon-sm fa fa-pinterest icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                      <li><a class="icon icon-sm fa fa-user icon-style-camera" href="logout.php"><span></span><span></span><span></span><span></span></a></li>
                    </ul>
                  </div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="indexadmin.php">Beranda<span></span><span></span><span></span><span></span></a>
                    </li>
                    <li><a href="about-meadmin.php">Tentang<span></span><span></span><span></span><span></span></a>
                    </li>
                    <li><a href="typographyadmin.php">Artikel<span></span><span></span><span></span><span></span></a>
                    </li>
                    <li><a href="contact-usadmin.php">Kontak Kami<span></span><span></span><span></span><span></span></a>
                    </li>
                    <li><a href="donasiadmin.php">Donasi<span></span><span></span><span></span><span></span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <!-- My Best Photos -->
      <section class="section text-center">
        <!-- Slick Carousel-->
        <div class="slick-wrap">
          <div class="slick-slider slick-style-1" data-arrows="true" data-autoplay="true" data-loop="true" data-dots="true" data-swipe="true" data-xs-swipe="true" data-sm-swipe="false" data-items="1" data-sm-items="3" data-md-items="3" data-lg-items="3" data-center-mode="true" data-lightgallery="group-slick">
            <div class="item">
              <div class="slick-slide-inner">
                <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" href="images/gambarberandahead.jpg" data-lightgallery="item"><img class="thumb-ann__image" src="images/gambarberandahead.jpg" alt="" width="961" height="664"/><!--
                    <div class="thumb-ann__caption"> 
                      <p class="thumb-ann__title heading-3">Image #1</p>
                      <p class="thumb-ann__text">With the experience of more than 10 years, I am glad to offer you a wide variety of love story photography services at affordable prices.</p>
                    </div>--></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="slick-slide-inner">
                <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" href="images/gambarberandahead2.jpg" data-lightgallery="item"><img class="thumb-ann__image" src="images/gambarberandahead2.jpg" alt="" width="961" height="664"/><!--
                    <div class="thumb-ann__caption"> 
                      <p class="thumb-ann__title heading-3">Image #2</p>
                      <p class="thumb-ann__text">With the experience of more than 10 years, I am glad to offer you a wide variety of love story photography services at affordable prices.</p>
                    </div>--></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="slick-slide-inner">
                <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" href="images/gambarberandahead3.jpg" data-lightgallery="item"><img class="thumb-ann__image" src="images/gambarberandahead3.jpg" alt="" width="961" height="664"/><!--
                    <div class="thumb-ann__caption"> 
                      <p class="thumb-ann__title heading-3">Image #3</p>
                      <p class="thumb-ann__text">With the experience of more than 10 years, I am glad to offer you a wide variety of love story photography services at affordable prices.</p>
                    </div>--></a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="slick-slide-inner">
                <div class="slick-slide-caption"><a class="thumb-ann thumb-mixed_large" href="images/gambarberandahead4.jpg" data-lightgallery="item"><img class="thumb-ann__image" src="images/gambarberandahead4.jpg" alt="" width="961" height="664"/><!--
                    <div class="thumb-ann__caption"> 
                      <p class="thumb-ann__title heading-3">Image #4</p>
                      <p class="thumb-ann__text">With the experience of more than 10 years, I am glad to offer you a wide variety of love story photography services at affordable prices.</p>
                    </div>--></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <button class="tombol"><a href="menueditberanda1.php">Edit</a></button>
        </div>
      </section>

      <!-- About Me-->
      <section class="section section-md bg-white">
        <div class="shell">
          <div class="range range-50 range-sm-center range-md-left range-md-middle range-md-reverse">
            <div class="cell-sm-6 wow fadeInRightSmall">
              <div class="thumb-line"><img src="images/about-1-531x640.jpg" alt="" width="531" height="640"/>
              </div>
            </div>
            <div class="cell-sm-6">
              <div class="box-width-3">
                <p class="heading-1 wow fadeInLeftSmall">Tentang Kami</p>
                <article class="quote-big wow fadeInLeftSmall" data-wow-delay=".1s">
                  <p class="q">Profile</p>
                </article>
                <div class="divider wow fadeInLeftSmall" data-wow-delay=".2s"></div>
                <p class="wow fadeInLeftSmall" data-wow-delay=".3s">

Sesuai dengan akte pendirian, Yayasan Cipta Asa Nusantara bergerak di bidang sosial dan kemanusiaan. Pendirian PAUD di beberapa wilayah Indonesia, mengadakan kegiatan bakti sosial bagi korban bencana alam serta kegiatan lain yang bersifat kemanusiaan merupakan langkah serta bukti nyata pergerakan Yayasan Cipta Asa Nusantara di bumi nusantara tercinta.
Tak hanya itu, Yayasan ini juga akan membuka sekolah lanjutan PAUD, yaitu sekolah dasar ataupun homeschooling untuk memenuhi kebutuhan pendidikan dasar terutama bagi masyarakat yang tidak mampu. Yayasan Cipta Asa Nusantara akan senantiasa peduli dan cepat tanggap atas setiap masalah sosial kemanusiaan yang terjadi di bangsa ini.
.</p><a class="button button-primary-outline button-ujarak button-size-1 wow fadeInLeftSmall" href="about-me.php" data-wow-delay=".4s">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Awards--><!--
            <section class="section parallax-container bg-image-dark" data-parallax-img="images/bg-image-7-1920x1244.jpg">
              <div class="parallax-content">
                <div class="section-md text-center">
                  <div class="shell">
                    <div class="range range-50 range-lg-bottom">
                      <div class="cell-xs-6 cell-md-3 wow fadeIn">-->
                        <!-- Box award--><!--
                        <article class="box-award"><img class="box-award__image" src="images/award-1-134x98-inverse.png" alt="" width="134" height="98"/>
                          <h3 class="box-award__title">Best photo of the year</h3>
                          <div class="box-award__divider"></div>
                          <time class="box-award__time" datetime="2010">2010</time>
                        </article>
                      </div>
                      <div class="cell-xs-6 cell-md-3 wow fadeIn" data-wow-delay=".1s">-->
                        <!-- Box award--><!--
                        <article class="box-award"><img class="box-award__image" src="images/award-2-115x117-inverse.png" alt="" width="115" height="117"/>
                          <h3 class="box-award__title">Best nature photo</h3>
                          <div class="box-award__divider"></div>
                          <time class="box-award__time" datetime="2014">2014</time>
                        </article>
                      </div>
                      <div class="cell-xs-6 cell-md-3 wow fadeIn" data-wow-delay=".2s">-->
                        <!-- Box award--><!--
                        <article class="box-award"><img class="box-award__image" src="images/award-3-116x103-inverse.png" alt="" width="116" height="103"/>
                          <h3 class="box-award__title">Best love story photo</h3>
                          <div class="box-award__divider"></div>
                          <time class="box-award__time" datetime="2015">2015</time>
                        </article>
                      </div>
                      <div class="cell-xs-6 cell-md-3 wow fadeIn" data-wow-delay=".3s">-->
                        <!-- Box award--><!--
                        <article class="box-award"><img class="box-award__image" src="images/award-4-131x96-inverse.png" alt="" width="131" height="96"/>
                          <h3 class="box-award__title">Photographer of the year</h3>
                          <div class="box-award__divider"></div>
                          <time class="box-award__time" datetime="2016">2016</time>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

          -->
      <!-- Portfolio-->
      <section class="section section-md bg-white text-center">
        <div class="shell-fluid">
          <p class="heading-1">Portfolio</p>
          <div class="isotope thumb-ruby-wrap wow fadeIn" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href="images/gambarberandaportofolio.jpg" data-lightgallery="item"><img class="thumb-ruby__image" src="images/gambarberandaportofolio.jpg" alt="" width="440" height="327"/>
                        <div class="thumb-ruby__caption"> 
                          <p class="thumb-ruby__title heading-3">Image #</p>
                        </div></a>
              </div><!--
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" href="images/gallery-image-9-1200x800-original.jpg" data-lightgallery="item"><img class="thumb-ruby__image" src="images/gallery-image-9-444x683.jpg" alt="" width="444" height="683"/>
                        <div class="thumb-ruby__caption"> 
                          <p class="thumb-ruby__title heading-3">Image #</p>
                          <p class="thumb-ruby__text">If you are looking for high quality wedding photography, I will be glad to help you.</p>
                        </div></a>
              </div>-->
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href="images/gambarberandaportofolio2.jpg" data-lightgallery="item"><img class="thumb-ruby__image" src="images/gambarberandaportofolio2.jpg" alt="" width="440" height="327"/>
                        <div class="thumb-ruby__caption"> 
                          <p class="thumb-ruby__title heading-3">Image #</p>
                        </div></a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href="images/gambarberandaportofolio3.jpg" data-lightgallery="item"><img class="thumb-ruby__image" src="images/gambarberandaportofolio3.jpg" alt="" width="440" height="327"/>
                        <div class="thumb-ruby__caption"> 
                          <p class="thumb-ruby__title heading-3">Image #</p>
                        </div></a>
              </div>
              <!--
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-3 thumb-mixed_md" href="images/gallery-image-10-835x1200-original.jpg" data-lightgallery="item"><img class="thumb-ruby__image" src="images/gallery-image-10-444x683.jpg" alt="" width="444" height="683"/>
                        <div class="thumb-ruby__caption"> 
                          <p class="thumb-ruby__title heading-3">Image #</p>
                          <p class="thumb-ruby__text">If you are looking for high quality wedding photography, I will be glad to help you.</p>
                        </div></a>
              </div>-->
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item"><a class="thumb-ruby thumb-mixed_height-2 thumb-mixed_md" href="images/gambarberandaportofolio4.jpg" data-lightgallery="item"><img class="thumb-ruby__image" src="images/gambarberandaportofolio4.jpg" alt="" width="440" height="327"/>
                        <div class="thumb-ruby__caption"> 
                          <p class="thumb-ruby__title heading-3">Image #</p>
                        </div></a>
              </div>
          </div>
        </div>
        <div>
          <center></a><button><a href="menueditberanda.php"> edit</a></button></center>
      </div>
      </section>
      <!-- Bottom Banner-->
      <!-- Page Footer-->
      <footer class="footer-centered section bg-gray-darker">
        <div class="shell">
          <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-8 cell-lg-6">
              <!-- Brand--><a class="brand" href="index.html">
                <div class="brand__name"><img src="images/logo-inverse.png" alt="" width="237" height="35"/>
                </div><span class="brand__slogan">Cipta Asa Nusantara</span></a>
                    <!-- RD Mailform-->
                    <form class="rd-mailform form_inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form__inner"><!--
                        <div class="form-wrap">
                          <input class="form-input" id="subscribe-form-footer-email" type="email" name="email" data-constraints="@Email @Required">
                          <label class="form-label" for="subscribe-form-footer-email">Your E-mail...</label>
                        </div>
                        <div class="form-button">
                          <button class="button button-link" type="submit">Subscribe</button>
                        </div>-->
                      </div>
                    </form>
              <ul class="list-icons list-inline-sm">
                <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
                <li><a class="icon icon-sm fa fa-pinterest icon-style-camera" href="#"><span></span><span></span><span></span><span></span></a></li>
              </ul>
              <!-- Rights-->
              <p class="rights"><span>Cipta Asa Nusantara</span><span>&nbsp;&copy;&nbsp; </span><span class="copyright-year"></span>.&nbsp; <br class="veil-xs"><a class="link-underline" href="#">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>