<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?=$this->renderSection('titel')?>
  <link rel="shortcut icon" href="<?=base_url()?>/template/image/favicon.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="<?=base_url()?>/template/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/fonts/icon-font/css/style.css">

  <link rel="stylesheet" href="<?=base_url()?>/template/fonts/typography-font/typo.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/fonts/fontawesome-5/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/slick/slick.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/slick/slick-theme.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="<?=base_url()?>/template/css/main.css">
  <!-- Custom stylesheet -->


  <!-- Leaflet Maps styles-->
  <link rel="stylesheet" href="<?=base_url()?>/leaflet/leaflet.css">
  
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">

  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
    <!--Site Header Area -->
    <header class="site-header site-header--menu-right dark-mode-texts landing-17-menu  site-header--absolute site-header--sticky">
      <div class="container-fluid">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="index.html">
              <!-- light version logo (logo must be black)-->
              <img src="<?=base_url()?>/template/image/logo-black.png" alt="" class="light-version-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="<?=base_url()?>/template/image/logo-white.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
				<li class="nav-item">
                  <a href="<?=site_url()?>" class="nav-link-item">Beranda</a>
                </li>
				<li class="nav-item">
                  <a href="<?=site_url('cagarbudaya')?>" class="nav-link-item">Cagar&nbsp;Budaya</a>
                </li>
				<li class="nav-item">
                  <a href="<?=site_url('wbtb')?>" class="nav-link-item">Warisan&nbsp;Budaya&nbsp;Takbenda</a>
                </li>
				<li class="nav-item">
                  <a href="<?=site_url('lembaga')?>" class="nav-link-item">Lembaga&nbsp;Kebudayaan</a>
                </li>
				<li class="nav-item">
                  <a href="<?=site_url('maestro')?>" class="nav-link-item">Maestro</a>
                </li>
				<!-- <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Fitur&nbsp;Lain<i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu">
					<li class="sub-menu--item">
                      <a href="spasial.html">Data Spasial</a>
                    </li>
					<li class="sub-menu--item">
                      <a href="#">Statistik</a>
                    </li>
					<li class="sub-menu--item">
                      <a href="gallery.html">Galeri Foto</a>
                    </li>
				  </ul>
				  </li> -->
				</ul>
            </nav>
          </div>

          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- content begin -->
    <div class="main-content">
      <?=$this->renderSection('content')?>
    </div>
    <!-- content end -->

<br>
    <!-- Footer Area -->
    <footer class="footer-area bg-skeptic">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-5">
            <div class="footer-copyright">
              <p>© 2022 Pusdatin Kemendikbudristek. All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
	
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>
	
    <!-- Vendor Scripts -->
    <script src="<?=base_url()?>/template/js/vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="<?=base_url()?>/template/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/nice-select/jquery.nice-select.min.js"></script>
   <!-- DataTables -->
  
  <script src="<?=base_url()?>/template/plugins/aos/aos.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/slick/slick.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/packery.pkgd.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/image.loaded.js"></script>
  <script src="<?=base_url()?>/template/plugins/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="<?=base_url()?>/template/js/custom.js"></script>

  <!-- Maps Leaflet -->
  <script src="<?=base_url()?>/leaflet/leaflet.js"></script>

  <?=$this->renderSection('scriptpeta')?>

  <script type="text/javascript">

    $(document).ready(function()
      {
          $('.selik').slick({
              autoplay: true,
              autoplaySpeed: 2500,
              dots: true,
              infinite: true,
            });
    });
	  
	  var coll = document.getElementsByClassName("collapsible");
		  var i;

		  for (i = 0; i < coll.length; i++) {
  			coll[i].addEventListener("click", function() {
    			this.classList.toggle("active");
    			var contentcollaps = this.nextElementSibling;
    			if (contentcollaps.style.maxHeight){
      				contentcollaps.style.maxHeight = null;
    			} else {
      				contentcollaps.style.maxHeight = contentcollaps.scrollHeight + "px";
    			} 
  			});
		  }
	  
  </script>

</body>
</html>