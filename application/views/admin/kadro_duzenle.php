 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 


  <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Yönetim Kadrosu Yönetimi</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        
                                      

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="<?=base_url()?>admin/kadro/guncelle/<?=$veri[0]->yonetim_id?>" role="form">





                               <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Ad Soyad</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="yonetim_adsoyad" value="<?=$veri[0]->yonetim_adsoyad?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>

                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Açıklama</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="yonetim_aciklama" value="<?=$veri[0]->yonetim_aciklama?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>
   




                                <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Telefon</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="yonetim_telefon" value="<?=$veri[0]->yonetim_telefon?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Mail</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="yonetim_mail" value="<?=$veri[0]->yonetim_mail?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Linkedin</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="yonetim_linkedin" value="<?=$veri[0]->yonetim_linkedin?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>





                               
            







                            
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" style="margin-left: 650px;" class="btn btn-success">Güncelle</button>
                                </div>
                            </div>

                        </form>










                            </div>
                        </div>
                    </div>
                </div>








                         













                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

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
    


<?php
$this->load->view('admin/_footer');
?>

