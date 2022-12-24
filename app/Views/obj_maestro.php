<?= $this->extend('layout/l_obj_museum') ?>

<?= $this->section('titel') ?>
<title>Maestro</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-body">
            <div class="content">
                <div class="container-fluid pg-header" style="background-image: url(<?=base_url()?>/template/image/topimages/bg-wbtb-small.jpg);">
                    <div class="pg-header-content">
                        <h1 class="pg-title">
                            <?=$detailmaestro->nama;?>
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
                                            <table class="table table-striped">
                                                <tbody>
                                                <tr>
                                                    <td>Nama Maestro</td>
                                                    <td><?=$detailmaestro->nama;?></td>
                                                </tr>
                                                <tr>
                                                    <td> Provinsi</td><td><?=$detailmaestro->propinsi;?></td>
                                                </tr>
                                                <tr>
                                                    <td> Jenis Kelamin</td><td><?=$detailmaestro->sex;?></td>
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
                                                                        <button class="nav-link active" id="nav-deskripsi-tab" data-bs-toggle="tab" data-bs-target="#nav-deskripsi" type="button" role="tab" aria-controls="nav-deskripsi" aria-selected="false">Informasi lain</button>
                                                                        
                                                                    </div>
                                                                </nav>
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <!-- <div class="tab-pane fade show active" id="nav-sejarah" role="tabpanel" aria-labelledby="nav-sejarah-tab">Bangunan ini terletak beberapa puluh meter saja dari rumah penjagalan sapi. Disini pernah tinggal Tuan De Priss seorang pejabat polisi Belanda.Pada zaman Jepang periode 1942-1945 rumah Barisan Muka (BM) diambil alih Jepang. Suatu ketika pada masa pergolakan itu para pejuang daerah berencana melakukan penyerangan terhadap pasukan Jepang yang berasrama di komplek Gereja Katholik sekaligus untuk melucuti senjata mereka. Sebuah penghianatan terjadi yang menyebabkan banyak pejuang dan masyarakat ditangkap, lalu dibawa dan dibunuhrumah BM ini. Peristiwa itu pula yang melatarbelakangi rumah Barisan Muka di sebut juga Barisan Maut.</div> -->
                                                                    <div class="tab-pane fade show active" id="nav-deskripsi" role="tabpanel" aria-labelledby="nav-deskripsi-tab"></div>
                                                                    
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