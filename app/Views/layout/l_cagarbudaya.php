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
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="<?=base_url()?>/template/css/main.css">
  <!-- Custom stylesheet -->
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>/template/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/css/responsive.dataTables.min.css">
  
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
    <div class="no-bottom no-top">
      <div class="content">
            
        <!-- section begin -->
        <div class="hero-area-l-19" style="background-image:url(<?=base_url()?>/template/image/topimages/bg-cb.jpg); top;">
          <div class="col-md-12 text-center" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content">
			  <h1>Kategori Cagar Budaya</h1>
            </div>
		  </div>
        </div>
	  </div>
    <!-- section close -->
    </div>


    <!-- Content Area-1 -->
<div style="margin:30px;">
<div>
  Kategori: <select style="width:150px;height:25px;" id="ikategori" name="ikategori">
                            <option <?php if ($kategori==0) 
                            echo "selected";?> value="0">Semua Kategori</option>
                            <?php foreach ($daftarkategori as $key => $value) :?>
                            <option <?php if ($kategori==trim($value->jenis_id)) 
                            echo "selected";?> value="<?=$value->jenis_id?>"><?=$value->Jenis?></option>
                            <?php endforeach;?>
                        </select>
  <br>
  <br>
 
</div>
<table class="table table-striped" id='table1'>
        <thead>
            <tr>
                <th>#</th>
                <th>Kode Pengelolaan</th>
                <th>Nama Objek</th>
                <th>Kategori</th>
                <th>Provinsi</th>
            </tr>
        </thead>
        <!-- <tbody>
                        
        </tbody> -->
        <!-- <tfoot>
            <tr>
                <th>Kode Referensi</th>
                <th>Nama Objek</th>
                <th>Kategori</th>
                <th>Provinsi</th>
            </tr>
        </tfoot> -->
    </table>
	
</div>

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
  <script src="<?=base_url()?>/template/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>/template/js/dataTables.responsive.min.js"></script>
  
  <script src="<?=base_url()?>/template/plugins/aos/aos.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/slick/slick.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/packery.pkgd.min.js"></script>
  <script src="<?=base_url()?>/template/plugins/isotope/image.loaded.js"></script>
  <script src="<?=base_url()?>/template/plugins/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="<?=base_url()?>/template/js/custom.js"></script>

  <script type="text/javascript">
	
	jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
	});
	  
  </script>
	  
</body>

</html>

<script>
$(document).ready( function () {

  $("#ikategori").change(function () {
    if ($('#ikategori').val()==0)
    window.open('<?=base_url()?>/cagarbudaya', '_self');
    else
    window.open('<?=base_url()?>/cagarbudaya?kategori='+$('#ikategori').val(), '_self');
  });
  
    var data = [];
   
    <?php 
      // $hitung=1;
      foreach ($daftarcb as $key => $value) :
      // $hitung++;
      // if ($hitung>4282)
      // continue;
      $namaobjek = str_replace('"', "'", $value->nama);
      ?>

      
      
      data.push([<?=$key + 1?>, "<a href=\"<?=site_url('cagarbudaya/objek/').$value->kode_pengelolaan?>\"><?=$value->kode_pengelolaan?></a>", "<?=$namaobjek?>", "<?=$value->Jenis?>","<?=$value->propinsi?>"]);
      
      <?php endforeach;?>

      $('#table1').DataTable({
			data: data,
			deferRender: true,
			scrollCollapse: true,
			scroller: true,
			pagingType: "simple",
			language: {
				paginate: {
					previous: "<",
					next: ">"
				}
			},
			'responsive': true,
			'columnDefs': [
				{
					render: function (data, type, full, meta) {
						return "<div class='text-wrap width-50'>" + data + "</div>";
					},
					targets: [2]
				},
				{responsivePriority: 1, targets: 0},
				{responsivePriority: 2, targets: 1},
				{responsivePriority: 10001, targets: 2},
				// {responsivePriority: 3, targets: -2},
				{
					width: 25,
					targets: 0
				}
			],
			"order": [[0, "asc"]]
		});
} );
</script>