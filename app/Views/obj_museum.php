<?= $this->extend('layout/l_obj_museum') ?>

<?= $this->section('titel') ?>
<title>Museum</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-body">
            <div class="content">
                <div class="container-fluid pg-header" style="background-image: url(<?=base_url()?>/template/image/topimages/bg-wbtb-small.jpg);">
                    <div class="pg-header-content">
                        <h1 class="pg-title">
                            <?=$detailmuseum->nama_lembaga;?>
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
                                            <?php foreach ($fotomuseum as $key => $value) :?>
                                                <div>
                                                    <img style="margin-bottom:20px;height:360px;width:auto" src="https://foto.data.kemdikbud.go.id/getImage/<?=$value->location_file?>">
                                                </div>
                                            <?php endforeach;?>
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <table class="table table-striped">
                                                <tbody>
                                                <tr>
                                                    <td  width="200px">Kode Pengelolaan</td>
                                                    <td><?=$detailmuseum->kode_pengelolaan;?></td>
                                                </tr>
                                                <tr>
                                                    <td>SK Pendirian</td>
                                                    <td>
                                                        <div style="margin-bottom: 5px;">
                                                        No SK : <?=$detailmuseum->sk_pendirian=="NULL" ? "-" : $detailmuseum->sk_pendirian;?><br>
                                                        Tanggal SK : <?=$detailmuseum->tgl_pendirian;?><br>
                                                        <!-- Tingkat SK : Bupati -->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Lembaga</td>
                                                    <td><?=$detailmuseum->nama_lembaga;?></td>
                                                </tr>
                                                <tr>
                                                    <td> Provinsi</td><td><?=$detailmuseum->propinsi;?></td>
                                                </tr>
                                                <?php if (substr($detailmuseum->kode_pengelolaan,0,2)=="MS"){?>
                                                <tr>
                                                    <td> Jenis Museum</td><td><?=$detailmuseum->jenis_mus;?></td>
                                                </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td> Nama Pengelola</td><td><?=$detailmuseum->nama_pengelola=="NULL" ? "-" : $detailmuseum->nama_pengelola;?></td>
                                                </tr>
                                                <tr>
                                                    <td> Kontak</td><td><?=$detailmuseum->kontak=="NULL" ? "-" : $detailmuseum->kontak;?></td>
                                                </tr>
                                                <tr>
                                                    <td> Email</td><td><?=$detailmuseum->email=="NULL" ? "-" : $detailmuseum->email;?></td>
                                                </tr>
                                                <tr>
                                                    <td> Website</td><td><?=$detailmuseum->website=="NULL" ? "-" : $detailmuseum->website ;?></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--end of slide show-->
                                
                                <div class="row">
                                <!-- tab -->
                                    <div class="col-md-6">
                                        <div class="white_shd full margin_bottom_30">
                                            <div class="full inner_elements">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="tab_style1">
                                                            <div class="tabbar padding_infor_info">
                                                                <nav>
                                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                        <!-- <button class="nav-link active" id="nav-sejarah-tab" data-bs-toggle="tab" data-bs-target="#nav-sejarah" type="button" role="tab" aria-controls="nav-sejarah" aria-selected="true">Sejarah</button> -->
                                                                        <button class="nav-link active" id="nav-deskripsi-tab" data-bs-toggle="tab" data-bs-target="#nav-deskripsi" type="button" role="tab" aria-controls="nav-deskripsi" aria-selected="false">Jam Kunjung</button>
                                                                        
                                                                    </div>
                                                                </nav>
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <!-- <div class="tab-pane fade show active" id="nav-sejarah" role="tabpanel" aria-labelledby="nav-sejarah-tab">Bangunan ini terletak beberapa puluh meter saja dari rumah penjagalan sapi. Disini pernah tinggal Tuan De Priss seorang pejabat polisi Belanda.Pada zaman Jepang periode 1942-1945 rumah Barisan Muka (BM) diambil alih Jepang. Suatu ketika pada masa pergolakan itu para pejuang daerah berencana melakukan penyerangan terhadap pasukan Jepang yang berasrama di komplek Gereja Katholik sekaligus untuk melucuti senjata mereka. Sebuah penghianatan terjadi yang menyebabkan banyak pejuang dan masyarakat ditangkap, lalu dibawa dan dibunuhrumah BM ini. Peristiwa itu pula yang melatarbelakangi rumah Barisan Muka di sebut juga Barisan Maut.</div> -->
                                                                    <div class="tab-pane fade show active" id="nav-deskripsi" role="tabpanel" aria-labelledby="nav-deskripsi-tab"><?=$detailmuseum->jam_kunjung;?></div>
                                                                    
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
                                    
                                    <div class="col-md-6">
                                        <div style="position:relative;z-index:9999;min-height:300px;width:auto;" id="maps"></div>
                                    </div>

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