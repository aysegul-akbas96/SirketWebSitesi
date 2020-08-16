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
                        <h4 class="page-title">Site Genel Ayarları</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                
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
                                <form class="form-horizontal" method="post" enctype="multipart/form-data" autocomplete="off" action="<?=base_url()?>admin/anasayfa/anasayfa_guncelle/<?=$veri[0]->Id?>" role="form">
                             



  <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Açıklama</label>
                                    <div class="col-sm-9">
                                       <textarea name="aciklama" class="ckeditor" id=""><?=$veri[0]->aciklama?></textarea>
                                    </div>
                                </div>
 



                                 
<hr> 

       
                               <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Head Resim</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="resim" value="<?=$veri[0]->resim?>" class="form-control" id="email1" placeholder="Yükleme için gözat"><?=$veri[0]->resim?>
                                         
                                      </div>
                              
                            </div>


                               <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Body Resim</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="kucuk_resim" value="<?=$veri[0]->kucuk_resim?>" class="form-control" id="email1" placeholder="Yükleme için gözat"><?=$veri[0]->kucuk_resim?>
                                         
                                      </div>
                              
                            </div>





                            

                              







                            
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" style="margin-left: 650px;" class="btn btn-success">Kaydet</button>
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

