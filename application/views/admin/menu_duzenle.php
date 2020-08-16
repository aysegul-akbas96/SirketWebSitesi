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
                        <h4 class="page-title">Menü Yönetimi</h4>
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
                                <form class="form-horizontal" method="post" action="<?=base_url()?>admin/menu/guncelle/<?=$veri[0]->menu_id?>" role="form">
                            
 
                                 <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Menü Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="menu_adi" value="<?=$veri[0]->menu_adi?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>
   


                               
 
                             

                             <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Menü Durum</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select select2-hidden-accessible" name="menu_durum" value="<?=$veri[0]->menu_durum?>" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  
                                           <?php 
                                            if($veri[0]->menu_durum==0){

                                           ?>

                                            <option>Pasif</option>

   <?php 
                                            }elseif($veri[0]->menu_durum==1){


                                           ?>

                                                <option>Aktif</option>

<?php 
}
?>





                                          

                                                <option value="1">Aktif</option>
                                                <option value="0">Pasif</option>
                                          
                                            
                                       </select>
                                     
                                    </div>
                                </div>

                               
                          
                          
                              

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Açıklama</label>
                                    <div class="col-sm-9">
                                       <textarea name="menu_aciklama" class="ckeditor" id=""><?=$veri[0]->menu_aciklama?></textarea>
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

