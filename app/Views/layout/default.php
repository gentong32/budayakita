<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Budaya Kita</title>
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
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
	
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="<?=base_url()?>/template/css/main.css?ver=1.2">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="<?=base_url()?>/template/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/css/custom.css">
  <!-- Autocomplete -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
   
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">

  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->

    <!--Site Header Area -->
    <header class="site-header site-header--menu-right sticky-menu-bg landing-menu site-header--absolute site-header--sticky">
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
                  <a href="#" class="nav-link-item drop-trigger">Lembaga&nbsp;Kebudayaan<i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu">
                    <li class="sub-menu--item">
                    <a href="<?//=site_url('museum')?>">Museum</a>
					</li>
					<li class="sub-menu--item">
					  <a href="<?//=site_url('sanggar')?>">Sanggar</a>
					</li>
					<li class="sub-menu--item">
					  <a href="#">Taman Budaya</a>
					</li>
				  </ul>
				</li>
				<li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Objek&nbsp;Lain<i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu">
                    <li class="sub-menu--item">
                      <a href="<?//=site_url('maestro')?>">Maestro</a>
                    </li>
				
				  </ul>
				</li> -->
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
    <!-- Hero Area -->
    <div class="hero-area-l1 position-relative background-property" style="background: url(<?=base_url()?>/template/image/landing/hero-bg2.png);">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-10 order-lg-1 order-1" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
            <div class="content">
				<h2>Jelajahi dan temukan</h2>
				<h3>berbagai informasi mengenai objek kebudayaan Indonesia di sini.</h3>
              <!-- <p>Profil Objek Kebudayaan, Warisan Budaya Benda dan Warisan Budaya Tak Benda di 514 Kab/Kota.</p>-->
	<!-- search -->
			  <div class="location-search-area1">
            
                  <div class="d-sm-flex align-items-center">
                    <div class="d-sm-flex">
                      <div class="location-search-area__dropdown">
                        <div class="location-heading">
                          <label>Lokasi</label>
                        </div>
						

                        <select class="js-example-basic-single" id="kode_wilayah" name="kode_wilayah" 
                        style="width: 100%;">
                            <option  value="000000">Seluruh Indonesia</option>
                            <?php foreach ($datakota as $key => $value) :?>
                            <option value="<?=$value->kode_wilayah?>"><?=$value->namakota?></option>
                            <?php endforeach;?>
                        </select>

                      </div>
                      
                      <!-- CSRF token --> 
                      <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                      <input type="hidden" name="kodewilayah" value="" />

                      <div class="location-type__input" style="margin-right:5px">
                        <div class="location-type">
                          <label>Nama Objek</label>
                          <input type="text" class="form-control" name="isearch" id="isearch" placeholder="Ketikkan nama objek">
                          <!-- <div class="position-absolute" id="form2_complete" style="z-index: 99;"></div> -->
                        </div>
                      </div>

                    </div>
                    <div class="location-search-area__search-btn">
                      <button onclick="return cariobjek()" class="btn btn-style-03 btn--search">Cari</button>
                    </div>
                  </div>
              
              </div>
    <!--end search-->
            </div>
          </div>
          <div class="offset-xxl-2 col-xxl-5 offset-xl-1 col-xl-5 col-lg-6 col-md-8 order-lg-1 order-0" data-aos="fade-left" data-aos-delay="700" data-aos-duration="1000">
            <div class="hero-image-group-l1">
              <div class="image-1">
                <img class="w-100" src="<?=base_url()?>/template/image/landing/image1.png" alt="image">
              </div>
              <div class="image-2">
				<img class="horizontal-move w-50" src="<?=base_url()?>/template/image/landing/awankiri.png" alt="image">
				</div>
			  <div class="image-3">
				<img class="horizontal-move-backward w-50" src="<?=base_url()?>/template/image/landing/awankanan.png" alt="image">
				</div>
              <!--<div class="image-3">
                <img class="vertical-move" src="<?=base_url()?>/template/image/landing/icon-3d-heart.svg" alt="image">
              </div>
              <div class="image-4">
                <img class="spinback" src="<?=base_url()?>/template/image/landing/icon-chart.svg" alt="image">
              </div>-->
            </div>
          </div>
        </div>
      </div>

    </div>
      <div class="content-area-l10-2-shape-1 w-100 z-index-1 ">
        <img src="<?=base_url()?>/template/image/landing/l1-featrues-bg-shape.svg" alt="" class="w-100">
      </div>
    <!-- Content Area-1 -->
    <div class="content-area">
      <div class="container">
        <div class="row align-items-center justify-content-lg-start justify-content-center">
          <div class="col-lg-5 col-md-8" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <div class="hero-image-group-l1">
              <div class="image-1">
				<img src="<?=base_url()?>/template/image/landing/image2.png" alt="" class="w-100">
              </div>
			  <div class="image-4">
				<img class="horizontal-move w-25" src="<?=base_url()?>/template/image/landing/awankiri.png" alt="image">
			  </div>
			  <div class="image-5">
				<img class="horizontal-move-backward w-50" src="<?=base_url()?>/template/image/landing/awankanan.png" alt="image">
			  </div>
            </div>
		  </div>
          <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-8" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-11">
              <h2>Cagar Budaya</h2>
              <p>Berdasarkan Undang-Undang Republik Indonesia Nomor 11 tahun 2010, Cagar Budaya adalah warisan budaya bersifat kebendaan berupa Benda Cagar Budaya, Bangunan Cagar Budaya, Struktur Cagar Budaya, Situs Cagar Budaya, dan Kawasan Cagar Budaya di darat dan/atau di air yang perlu dilestarikan keberadaannya karena memiliki nilai penting bagi sejarah, ilmu pengetahuan, pendidikan, agama, dan/atau kebudayaan melalui proses penetapan.</p>
              <a href="cagarbudaya" class="btn focus-reset">Lanjut ke Pencarian</a>
            </div>
          </div>
        </div>
      </div>
	</div>
    <!-- Content Area-2  -->
    <div class="content-area-2 position-relative">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-8" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <div class="content section-heading-1">
              <h2>Warisan Budaya Takbenda</h2>
              <p>Warisan Budaya Takbenda (WBTb) diatur dalam UU No 5 Tahun 2017 tentang pemajuan kebudayaan, beserta objek-objeknya, diantaranya tradisi lisan, manuskrip, adat istiadat, ritus, pengetahuan tradisional, teknologi tradisional, seni, bahasa, permainan rakyat, olahraga tradisional. Dalam pengertiannya, WBTb merupakan peninggalan atau warisan budaya yang sifatnya tidak dapat dipegang (<i>intagible</i>/abstrak) namun ada disekitar kita.</p>
              <a href="wbtb" class="btn focus-reset">
                Lanjut ke Pencarian
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
          <div class="offset-xl-1 col-xl-5 col-lg-5 col-md-8 order-lg-1 order-0" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
			<div class="hero-image-group-l1">
              <div class="image-1">
				<img src="<?=base_url()?>/template/image/landing/image3.png" alt="" class="w-100">
              </div>
			  <div class="image-6">
				<img class="horizontal-move w-50" src="<?=base_url()?>/template/image/landing/awankiri.png" alt="image">
			  </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-area-2">
        <img src="<?=base_url()?>/template/image/landing/shape2.svg" alt="" class="w-100">
      </div>
    </div>
    <!-- Content Area-3 -->
    <div class="content-area">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-5 col-md-8" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <div class="content-img">
              <img src="<?=base_url()?>/template/image/landing/image4.png" alt="" class="w-100">
            </div>
          </div>
          <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-8" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-11">
              <h2>Lembaga Kebudayaan</h2>
              <p>Menurut Peraturan Pemerintah (PP) Nomor 87 Tahun 2021 pasal 1 ayat 13 tentang Peraturan Pelaksanaan Undang-Undang Nomor 5 Tahun 2017 tentang Pemajuan Kebudayaan, Lembaga Kebudayaan adalah organisasi yang bertujuan mengembangkan dan membina Kebudayaan.</p>
              <a href="#" class="btn focus-reset">Lanjut ke Pencarian</a>
            </div>
          </div>
        </div>
      </div>
    </div>
	  
    <!--Content Area-4-->
    <div class="area-20 position-relative">
      <!-- <div class="image-group">
        <div class="image-1 d-none d-xl-block hero-image-group-l1">
          <div>
			<img src="<?=base_url()?>/template/image/landing/pin-kiri.png" alt="">
		  </div>
		  <div class="image-9">
			<img class="vertical-move-3" src="<?=base_url()?>/template/image/landing/pin-ki-tosca.png" alt="image">
		  </div>
		  <div class="image-11">
			<img class="vertical-move-2" src="<?=base_url()?>/template/image/landing/pin-ka-biru.png" alt="image">
		  </div>
		  <div class="image-10">
			<img class="vertical-move  w-50" src="<?=base_url()?>/template/image/landing/pin-ka-pink.png" alt="image">
		  </div>
        </div>
	
		<div class="image-3 d-none d-xl-block hero-image-group-l1">
          <div>
			<img src="<?=base_url()?>/template/image/landing/pin-kanan.png" alt="">
          </div>
		  <div class="image-1">
			<img class="vertical-move-3" src="<?=base_url()?>/template/image/landing/pin-ka-ungu.png" alt="image">
		  </div>
		  <div class="image-7">
			<img class="vertical-move-2" src="<?=base_url()?>/template/image/landing/pin-ka-pink.png" alt="image">
		  </div>
		  <div class="image-8">
			<img class="vertical-move" src="<?=base_url()?>/template/image/landing/pin-ka-biru.png" alt="image">
		  </div>
        </div>
		
      </div> -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-8 col-md-10" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-4 text-center">
              <h2>
                Data Spasial
              </h2>
              <p>Menampilkan representasi geografis dari data melalui peta sebagai referensi tiap-tiap objek.</p>
              <div class="btn-area">
                <a href="spasial.html" class="btn">
                  <i class="icon icon-map-lighthouse"></i>Tampilkan Peta</a>
              </div>
            </div>
          </div>
			

			
        </div>
      </div>
    </div>
    <!-- Content Area-5  -->
    <div class="content-area-3">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
            <div class="content text-center text-xl-start">
              <h2>Galeri Foto Budaya</h2>
              <p>Menampilkan foto-foto berbagai objek dan aktifitas budaya.</p>
              <div class="check-lis-btn-2">
                <a href="gallery.html" class="btn btn-style-03 focus-reset">Lihat Galeri</a>
              </div>
            </div>
          </div>
          <div class="offset-xxl-1 col-xxl-6 col-xl-6">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
				<div class="hero-image-group-l1">
				  <div class="content-2-2-image-1 image-hover-style-01 overflow-hidden">
				    <div class="image-1">
					  <img class="w-100" src="<?=base_url()?>/template/image/landing/tongkonan.png" alt="image">
				    </div>
                  </div>
				  <div class="image-12">
					<img class="horizontal-move w-50" src="<?=base_url()?>/template/image/landing/awankiri.png" alt="image">
				  </div>
				</div>
              </div>
              <div class="col-md-6">
                <div class="content-2-2-image-2 overflow-hidden image-hover-style-01" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                  <img class="w-100" src="<?=base_url()?>/template/image/landing/foto-2.png" alt="image">
                </div>
                <div class="content-2-2-image-3 overflow-hidden image-hover-style-01" data-aos="fade-left" data-aos-delay="700" data-aos-duration="1000">
                  <img class="w-100" src="<?=base_url()?>/template/image/landing/foto-1.png" alt="image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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

  <!-- <script src="<?=base_url()?>/template/js/vendor.min.js"></script> -->
  <!-- Plugin's Scripts -->
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/fancybox/jquery.fancybox.min.js"></script>
  <!-- <script src="<?=base_url()?>/template/plugins/nice-select/jquery.nice-select.min.js"></script> -->
  <script src="<?=base_url()?>/template/plugins/aos/aos.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/slick/slick.min.js"></script>
  <!-- <script src="../../../porjoton.netlify.app/mekanic/js/waypoints.min.js"></script> -->
  
  <script src="<?=base_url()?>/template/plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/packery.pkgd.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/image.loaded.js"></script>
  <script src="<?=base_url()?>/template/plugins/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="<?=base_url()?>/template/js/custom.js"></script>
  <!-- <script src="<?=base_url()?>/template/js/autocomplete.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  <!-- Editable Select Jquery tapi lambat kalau data banyak -->
  <!-- <script src="template/js/jquery-select.min.js"></script>
  <link href="/template/css/jquery-select.min.css" rel="stylesheet"> -->
  
  
</body>

</html>

<script type='text/javascript'>

  var kodewilayah;

  $(document).ready(function() {
      $('.js-example-basic-single').select2();
      $( "#isearch" ).autocomplete({

      source: function( request, response ) {

        // CSRF Hash
        var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
        var csrfHash = $('.txt_csrfname').val(); // CSRF hash

        // Fetch data
        $.ajax({
            url: "<?=site_url('home/getAuto')?>",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term,
              kodwil: $('#kode_wilayah').val(),
              [csrfName]: csrfHash // CSRF Token
            },
            success: function( data ) {
              // Update CSRF Token
              $('.txt_csrfname').val(data.token);

              response( data.data );
            }
        });
      },
      select: function (event, ui) {
        // Set selection
        $('#isearch').val(ui.item.label); // display the selected text
        kodewilayah = ui.item.value; // save selected id to input
        return false;
      },
      focus: function(event, ui){
        $( "#isearch" ).val( ui.item.label );
        kodewilayah = ui.item.value;
        return false;
      },
      }); 
  });

  $(document).on('change', '#kode_wilayah', function () {
    $('#isearch').val("");
  });
  
	function cariobjek() {
		var cleanString =kodewilayah;
		// alert (cleanString);
    window.open('<?=base_url()?>/home/objek/' + cleanString, '_self');
	}
</script>