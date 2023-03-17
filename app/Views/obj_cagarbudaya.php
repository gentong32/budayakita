<?= $this->extend('layout/l_obj_cagarbudaya') ?>

<?= $this->section('titel') ?>
<title>Cagar Budaya</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-body">
            <div class="content">
                <div class="container-fluid pg-header" style="background-image: url(<?=base_url()?>/template/image/topimages/bg-cb-small.jpg);">
                    <div class="pg-header-content">
                        <h1 class="pg-title">
                            <?=$detailcb->nama;?>
                        </h1>
                    </div>
                </div>
            </div>
            
            <!-- Content Area-1 -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-margin">
                            <div class="card-body">
                            
                                <!--slide show-->
                                <div class="container pg-content">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="selik">
                                            <?php foreach ($fotocb as $key => $value) :?>
                                                <div>
                                                    <img style="margin-bottom:20px;height:360px;width:auto" src="https://foto.data.kemdikbud.go.id/getImage/<?=$value->location_file?>">
                                                </div>
                                            <?php endforeach;?>
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <table class="table table-striped">
                                                <tbody>
                                                <!-- <tr>
                                                    <td  width="200px">No. Regnas CB</td>
                                                    <td>CB.1726</td>
                                                </tr> -->
                                                <tr>
                                                    <td>SK Penetapan</td>
                                                    <td>
                                                        <div style="margin-bottom: 5px;">
                                                        No SK : <?=$detailcb->no_sk_cb;?><br>
                                                        Tanggal SK : <?=$detailcb->tanggal;?><br>
                                                        <!-- Tingkat SK : Bupati -->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Peringkat Cagar Budaya</td>
                                                    <td><?=$detailcb->nama_level;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Cagar Budaya</td>
                                                    <td><?=$detailcb->Jenis;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Cagar Budaya</td>
                                                    <td><?=$detailcb->nama;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Keberadaan</td>
                                                    <td> Provinsi : <strong><?=$detailcb->propinsi;?></strong>
                                                    <br>Kabupaten / Kota : <strong><?=$detailcb->kota;?></strong> </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--end of slide show-->
                                
                                <div class="row">
                                <!-- tab -->
                                    <div class="col-md-12">
                                        <div class="white_shd full margin_bottom_30">
                                            <div class="full inner_elements">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="tab_style1">
                                                            <div class="tabbar padding_infor_info">
                                                                <nav>
                                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                        <!-- <button class="nav-link active" id="nav-sejarah-tab" data-bs-toggle="tab" data-bs-target="#nav-sejarah" type="button" role="tab" aria-controls="nav-sejarah" aria-selected="true">Sejarah</button> -->
                                                                        <button class="nav-link active" id="nav-peta-tab" data-bs-toggle="tab" data-bs-target="#nav-peta" type="button" role="tab" aria-controls="nav-peta" aria-selected="false">Peta</button>
                                                                        <button class="nav-link" id="nav-deskripsi-tab" data-bs-toggle="tab" data-bs-target="#nav-deskripsi" type="button" role="tab" aria-controls="nav-deskripsi" aria-selected="false">Deskripsi</button>
                                                                        <button class="nav-link" id="nav-terdekat-tab" data-bs-toggle="tab" data-bs-target="#nav-terdekat" type="button" role="tab" aria-controls="nav-terdekat" aria-selected="false">Sekolah Terdekat</button>
                                                                    </div>
                                                                </nav>
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <!-- <div class="tab-pane fade show active" id="nav-sejarah" role="tabpanel" aria-labelledby="nav-sejarah-tab">Bangunan ini terletak beberapa puluh meter saja dari rumah penjagalan sapi. Disini pernah tinggal Tuan De Priss seorang pejabat polisi Belanda.Pada zaman Jepang periode 1942-1945 rumah Barisan Muka (BM) diambil alih Jepang. Suatu ketika pada masa pergolakan itu para pejuang daerah berencana melakukan penyerangan terhadap pasukan Jepang yang berasrama di komplek Gereja Katholik sekaligus untuk melucuti senjata mereka. Sebuah penghianatan terjadi yang menyebabkan banyak pejuang dan masyarakat ditangkap, lalu dibawa dan dibunuhrumah BM ini. Peristiwa itu pula yang melatarbelakangi rumah Barisan Muka di sebut juga Barisan Maut.</div> -->
                                                                    <div class="tab-pane fade show active" id="nav-peta" role="tabpanel" aria-labelledby="nav-peta-tab">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6">
                                                                                <div style="min-height:300px;max-width:500px;" id="maps">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6">
                                                                                Lintang: <?=$detailcb->lintang;?><br>
                                                                                Bujur: <?=$detailcb->bujur;?><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-deskripsi" role="tabpanel" aria-labelledby="nav-deskripsi-tab"><div style="min-height:300px;"><?=$detailcb->deskripsi;?></div></div>
                                                                    <div class="tab-pane fade" id="nav-terdekat" role="tabpanel" aria-labelledby="nav-terdekat-tab"><tr>
                                                    <td><div class="ulsekolah"><ul><?php foreach($sekolahterdekat as $row)
                                                    {
                                                        echo "<li><a target='_blank' href='https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/".$row->sekolah_id."'>".$row->nama."</a> (<i>".$row->radius." km</i>)<br>".$row->alamat_jalan."</li>";
                                                    } ?>
                                                    </ul></div></td>
                                                </tr></div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab -->
                                    <!--collapsible-->
                                    
                                    <!-- <div class="col-md-6">
                                        <div style="position:relative;z-index:9999;min-height:300px;width:auto;" id="maps"></div>
                                    </div> -->

                                        <!-- <button class="collapsible">Pendidikan Formal Terdekat</button>
                                    <div class="contentcollaps">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                        <button class="collapsible">Pendidikan Non Formal Terdekat</button>
                                    <div class="contentcollaps">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                        <button class="collapsible">Cagar Budaya Terdekat</button>
                                    <div class="contentcollaps">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    </div> -->
                                    <!--end of collapsible-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content Area-1 -->
            
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scriptpeta') ?>
<script>
    var map = L.map('maps').setView({lat:<?=$detailcb->lintang?>, lon:<?=$detailcb->bujur?>}, 8);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'}).addTo(map);
    L.marker({lat:<?=$detailcb->lintang?>, lon:<?=$detailcb->bujur?>}).bindPopup('<?=$detailcb->nama?>').addTo(map);
</script>
<?= $this->endSection() ?>