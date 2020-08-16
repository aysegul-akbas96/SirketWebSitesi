 <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->

                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url()?>admin" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Anasayfa</span></a></li>
                      

                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-file-alt"></i><span class="hide-menu">Menü Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item"><a href="<?=base_url()?>admin/anasayfa" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> Anasayfa Yönetimi </span></a></li>

                               
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/menu" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> Menü Listele </span></a></li>

                               
                            </ul>
                        </li>

                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-chart-area"></i><span class="hide-menu"><?=$s[0]->menu_adi?> Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/sektor/ekle" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> <?=$s[0]->menu_adi?> Ekle </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/sektor" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> <?=$s[0]->menu_adi?> Listele </span></a></li>

                               
                            </ul>
                        </li>

                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-tasks"></i><span class="hide-menu"><?=$h[0]->menu_adi?> Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/hizmet/ekle" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> <?=$h[0]->menu_adi?> Ekle </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/hizmet" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> <?=$h[0]->menu_adi?> Listele </span></a></li>

                               
                            </ul>
                        </li>

                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-spinner"></i><span class="hide-menu"><?=$m[0]->menu_adi?> Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/medya/ekle" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> <?=$m[0]->menu_adi?> Ekle </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/medya" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> <?=$m[0]->menu_adi?> Listele </span></a></li>

                               
                            </ul>
                        </li>

                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-chart-pie"></i><span class="hide-menu"><?=$g[0]->menu_adi?> Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/guncel/ekle" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> <?=$g[0]->menu_adi?> Ekle </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/guncel" class="sidebar-link"><i class="fas fa-angle-right"></i><span class="hide-menu"> <?=$g[0]->menu_adi?> Listele </span></a></li>

                               
                            </ul>
                        </li>

                          <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-align-left"></i><span class="hide-menu"><?=$hakki[0]->menu_adi?> Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/hakkimizda/ekle" class="sidebar-link"><i class=" fas fa-angle-right"></i><span class="hide-menu"> <?=$hakki[0]->menu_adi?> Ekle </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/hakkimizda" class="sidebar-link"><i class=" fas fa-angle-right"></i><span class="hide-menu"> <?=$hakki[0]->menu_adi?> Listele </span></a></li>

                               
                            </ul>
                        </li>



                        <?php 



                              foreach ($me as $rs) {
                                # code...
                           
                                  if($rs->menu_id >5){


 

                        ?>


                          <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-star-half"></i><span class="hide-menu"><?=$rs->menu_adi?> Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/menualt/ekle/<?=$rs->parent_id?>" class="sidebar-link"><i class=" fas fa-angle-right"></i><span class="hide-menu"> <?=$rs->menu_adi?> Ekle </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/menualt/li/<?=$rs->parent_id?>" class="sidebar-link"><i class=" fas fa-angle-right"></i><span class="hide-menu"> <?=$rs->menu_adi?> Listele </span></a></li>

                               
                            </ul>
                        </li>


                    <?php 
 }
                        }


                    ?>



                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-ravelry"></i><span class="hide-menu">Alt Sayfalar Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/sayfa/ekle" class="sidebar-link"><i class=" fas fa-angle-right"></i><span class="hide-menu">Alt Sayfa Ekle </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/sayfa" class="sidebar-link"><i class=" fas fa-angle-right"></i><span class="hide-menu"> Alt Sayfaları Listele </span></a></li>

                               
                            </ul>
                        </li>


  <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=" fas fa-user-circle"></i><span class="hide-menu">Yönetim Kadrosu Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/kadro/ekle" class="sidebar-link"><i class=" fas fa-angle-right"></i><span class="hide-menu">Çalışan Ekle </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/kadro" class="sidebar-link"><i class=" fas fa-angle-right"></i><span class="hide-menu"> Yönetim Kadrosunu Listele </span></a></li>

                               
                            </ul>
                        </li>






                
                       
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=" fas fa-cogs"></i><span class="hide-menu">Site Yönetimi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/ayar" class="sidebar-link"><i class="fas fa-cogs"></i><span class="hide-menu"> Site Ayarları </span></a></li>

                                 <li class="sidebar-item"><a href="<?=base_url()?>admin/footer" class="sidebar-link"><i class="fas fa-code-branch"></i><span class="hide-menu"> Footer Ayarları </span></a></li>

                                <li class="sidebar-item"><a href="<?=base_url()?>admin/uyeler/ekle" class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu"> Yeni Yönetici Ekleme </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url()?>admin/uyeler" class="sidebar-link"><i class="fas fa-user-secret"></i><span class="hide-menu"> Yönetici Listesi </span></a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>