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
                        <h4 class="page-title"><?=$m[0]->menu_adi?> Yönetimi</h4>
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
                                <form class="form-horizontal" method="post" autocomplete="off"  enctype="multipart/form-data"  action="<?=base_url()?>admin/medya/ekle_kaydet" role="form">
                               

                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label"><?=$m[0]->menu_adi?> Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="menu_alt_adi" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>
   


                                <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Parent id</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="parent_id" value="2"  class="form-control" id="email1" placeholder="2">
                                        </div>
                                </div>

                               




                               <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="menu_alt_resim" class="form-control" id="email1" placeholder="Yükleme için gözat" required="">
                                         
                                      </div>
                              
                              </div>

                            
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Açıklama</label>
                                    <div class="col-sm-9">
                                       <textarea name="menu_alt_aciklama" class="ckeditor" id=""></textarea>
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

