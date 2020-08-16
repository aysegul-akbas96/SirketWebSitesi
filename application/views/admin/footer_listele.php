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
                        <h4 class="page-title">Footer Yönetimi</h4>
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

<?php if($this->session->flashdata("mesaj"))
    { ?>
  <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>İşlem:</strong> <?=$this->session->flashdata("mesaj")?>
  </div>
    
  <?php }?>


                               
                            </div>


<div class="row mb-3">
                                    <div class="col-lg-9">
                                        
                                    </div>
                                    <div class="col-lg-3 ">
                                         <a href="<?=base_url()?>admin/footer/ekle" class="btn btn-success btn-success"><i class=" fas fa-edit"></i>Yeni Ekle</a> 
                                    </div>
                                </div>

                           

                            <table class="table">
 

  


                              <thead>
                                <tr>
                                  <th>S.No</th>
                                  <th scope="col">Footer Başlık</th>
                                
                                 
                             
                                  
                                  
                                  <th scope="col">İşlemler</th>
                                </tr>
                              </thead>
                              <tbody>
        <?php
  $sno=0;
          foreach($veriler as $rs)
      { $sno++;   
    ?>

                                <tr>
                                  <td><?=$sno?></td>
                                  <th scope="row"><?=$rs->footer_adi?></th>
                                
                                



   








<td>


<a href="<?=base_url()?>admin/footer/duzenle/<?=$rs->footer_id?>" class="btn btn-info btn-info"><i class=" fas fa-edit"></i></a> 




<a href="<?=base_url()?>admin/footer/sil/<?=$rs->footer_id?>" class="btn btn-danger btn-danger"   onclick="return confirm('Silinecek! Son Kararın mı?');" role="button"   ><i class="fas fa-trash-alt"></i></a> 








  </td>
                                </tr>

 <?php
      }
      ?>









                              </tbody>
                            </table>
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

