  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">   Anasayfa</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                   
                                    <br>
                                    <br>
                                </ol>
                            </nav>
                             <br>
                              <br>
                        </div>
                    </div>
                </div> 
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="height: 450px">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="<?=base_url()?>admin/home">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Anasayfa</h6>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <a href="<?=base_url()?>admin/sektor">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white"><?=$s[0]->menu_adi?></h6> 
                            </a>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                  <a href="<?=base_url()?>admin/hizmet">
                                <h1 class="font-light text-white"><i class="fas fa-tasks"></i></h1>
                                <h6 class="text-white"><?=$h[0]->menu_adi?></h6>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                  <a href="<?=base_url()?>admin/medya">
                                <h1 class="font-light text-white"><i class="fas fa-spinner"></i></h1>
                                <h6 class="text-white"><?=$m[0]->menu_adi?></h6>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <a href="<?=base_url()?>admin/guncel">
                                <h1 class="font-light text-white"><i class="fas fa-chart-pie"></i></h1>
                                <h6 class="text-white"><?=$g[0]->menu_adi?></h6> 
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                 <a href="<?=base_url()?>admin/menualt">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Alt Sayfalar</h6>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <a href="<?=base_url()?>admin/hakkimizda">
                                <h1 class="font-light text-white"><i class="fas fa-align-left"></i></h1>
                                <h6 class="text-white"><?=$hakki[0]->menu_adi?></h6>
                            </a>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="<?=base_url()?>admin/menualt/li/<?=$me[0]->parent_id?>">
                                <h1 class="font-light text-white"><i class="far fa-star-half"></i></h1>
                                <h6 class="text-white"><?=$me[0]->menu_adi?></h6>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <a href="<?=base_url()?>admin/footer">
                                <h1 class="font-light text-white"><i class="fas fa-code-branch"></i></h1>
                                <h6 class="text-white"> Footer Ayarları</h6>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                  <a href="<?=base_url()?>admin/ayar">
                                <h1 class="font-light text-white"><i class="fas fa-cogs"></i></h1>
                                <h6 class="text-white">Site Ayarları</h6>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                  
                    
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
               </div>
              
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
         
</div>
</div>