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
                                 
                                </div>

                           

                            <table class="table">
 

  


                              <thead>
                                <tr>
                                  <th>S.No</th>
                                 
                                  <th scope="col">Menü Adı</th>
                                  <th scope="col">Durum</th>
                                
                                  <th scope="col">Resim</th>
                                  
                                  <th scope="col">Galeri Yükle</th>
                                  
                                  
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
                                 
                                  <td><?=$rs->menu_adi?></td>
                                  <td><?=$rs->menu_durum?></td>
                            


 <td>
        <?php  if($rs->menu_resim){ ?>


          <a href="<?=base_url()?>admin/menu/resim_yukle/<?=$rs->menu_id?>">
          <img height="40" src="<?=base_url()?>uploads/<?=$rs->menu_resim?>"></a>
  
  
      <?php  }else  {?>
    
      <a href="<?=base_url()?>admin/menu/resim_yukle/<?=$rs->menu_id?>"></i> <span class="badge badge-pill badge-secondary">Resim Yükle</span>
    </a> 
      
      <?php }   ?>
    

    </td>
   <td>

 <a href="<?=base_url()?>admin/menu/galeri_yukle/<?=$rs->menu_id?>"></i> <span class="badge badge-pill badge-secondary">Galeri Yükle</span>

   </td>


                                 <td>

<a href="<?=base_url()?>admin/menu/duzenle/<?=$rs->menu_id?>" class="btn btn-info btn-info"><i class=" fas fa-edit"></i></a> 



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

