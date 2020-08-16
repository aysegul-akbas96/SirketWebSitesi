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
                        <h4 class="page-title">Galeri Resim Yükle</h4>
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

<?php if($this->session->flashdata("mesaj"))
    { ?>
  <div class="alert alert-info alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
         <strong></strong> <?=$this->session->flashdata("mesaj")?>
  </div>
    
  <?php }?>



</div>
                            </div>

                       
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

							          <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/sayfa/galeri_kaydet/<?=$id?>" role="form">

                               




                               <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="resim" class="form-control" id="email1" placeholder="Yükleme için gözat">
                                         
                                      </div>

							  
							  </div>
  
							  
							  <br>
                                 <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" style="margin-left: 650px;" class="btn btn-success">Resmi Yükle</button>
                                </div>
                            </div>

                        </form>

                        <div>
                            <br>
                        </div>

                     
<div class="row el-element-overlay">
     <?php foreach ($veriler as $rs) {?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="user">
                                   
                                </div>
                                <div class="el-card-content">
                                    <a href="<?=base_url()?>admin/sayfa/galeri_sil/<?=$id?>/<?=$rs->resim_id?>" class="btn btn-danger btn-danger"   onclick="return confirm('Silinecek! Son Kararın mı?');" role="button"   ><i class="fas fa-trash-alt"> Resmi Sil</i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                  
                       <?php } ?>
                  
                   
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

