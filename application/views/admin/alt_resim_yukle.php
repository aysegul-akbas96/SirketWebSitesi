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
                        <h4 class="page-title">Resim Yükle</h4>
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
  <div class="alert alert-danger" role="alert">
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

							          <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/home/alt_resim_kaydet/<?=$id?>" role="form">
                               <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="menu_alt_resim" class="form-control" id="email1" placeholder="Yükleme için gözat">
                                         
                                      </div>
							  
							                    </div>
  
							  
							  
                                 <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" style="margin-left: 650px;" class="btn btn-success">Resmi Yükle</button>
                                </div>
                            </div>

                        </form>

                          <img height="150" width="150" src="<?=base_url()?>uploads/<?=$veri[0]->menu_alt_resim?>">


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

