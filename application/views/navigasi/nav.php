                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <?php echo anchor('web','SIG PDAM');?>
                        <?php echo anchor('',' ', array('class'=>'x-navigation-control'));?>

                    </li>

                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url();?>assets/uploads/<?php echo $this->session->userdata('gambar');?>"
                              alt="<?php echo $this->session->userdata('gambar');?>"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url();?>assets/uploads/<?php echo $this->session->userdata('gambar');?>"
                                  alt="<?php echo $this->session->userdata('gambar');?>"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">

                                    <?php echo $this->session->userdata("nama_lengkap");?>

                                </div>

                                <div class="profile-data-title">

                                    <?php echo $this->session->userdata("jabatan");?>

                                </div>
                            </div>
                        </div>
                    </li>

                    <?php
                        $jabatan = [ 1 => "Super Admin", "Admin", "Direktur", "Subag Hublang", "Teknik"];
                        $hak_akses = $this->session->userdata('jabatan');
                        if($hak_akses == $jabatan[1]) {
                    ;?>

                   <!--MENU-->
                   <li class="">
                       <a href="<?php echo base_url();?>web"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
                   </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Data Master</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>kelola_lokasi_unit/lokasi_unit"><span class="fa fa-file"></span> Kelola Unit Lokasi</a></li>
                            <li><a href="<?php echo base_url();?>Kelola_pelanggan/lihat_pelanggan"><span class="fa fa-file"></span> Kelola Pelanggan</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-photo"></span> <span class="xn-text">Pemetaan</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>kelola_pelanggan/sig_pelanggan"><span class="fa fa-photo"></span> SIG Pelanggan</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url();?>Kelola_pengguna/tampil_pengguna"><span class="fa fa-user"></span> <span class="xn-text">Kelola Pengguna</span></a>
                    </li>
                  <?php }

                    if($hak_akses == $jabatan[2]) { ;?>
                    <!--MENU-->
                    <li class="">
                        <a href="<?php echo base_url();?>web"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                     <li class="xn-openable">
                         <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Data Master</span></a>
                         <ul>
                             <li><a href="<?php echo base_url();?>kelola_lokasi_unit/lokasi_unit"><span class="fa fa-file"></span> Kelola Unit Lokasi</a></li>
                             <li><a href="<?php echo base_url();?>Kelola_pelanggan/lihat_pelanggan"><span class="fa fa-file"></span> Kelola Pelanggan</a></li>
                         </ul>
                     </li>
                     <li class="xn-openable">
                         <a href="#"><span class="fa fa-photo"></span> <span class="xn-text">Pemetaan</span></a>
                         <ul>
                             <li><a href="<?php echo base_url();?>kelola_pelanggan/sig_pelanggan"><span class="fa fa-photo"></span> SIG Pelanggan</a></li>
                         </ul>
                     </li>
                     <li class="">
                         <a href="<?php echo base_url();?>Kelola_pengguna/tampil_pengguna"><span class="fa fa-user"></span> <span class="xn-text">Kelola Pengguna</span></a>
                     </li>
                    <?php }

                      if($hak_akses == $jabatan[3]) { ;?>

                    <!--MENU-->

                     <li class="xn-openable">
                         <a href="#"><span class="fa fa-photo"></span> <span class="xn-text">Pemetaan</span></a>
                         <ul>
                             <li><a href="<?php echo base_url();?>kelola_pelanggan/sig_pelanggan"><span class="fa fa-photo"></span> SIG Pelanggan</a></li>
                         </ul>
                     </li>
                     <li class="xn-openable">
                         <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Laporan</span></a>
                         <ul>
                             <li><a href="<?php echo base_url();?>kelola_pelanggan/laporan_pelanggan"><span class="fa fa-file"></span> Laporan Pelanggan</a></li>
                         </ul>
                     </li>

                   <?php }

                   if($hak_akses == $jabatan[4]) { ;?>
                   <!--MENU-->
                   <li class="">
                       <a href="<?php echo base_url();?>web"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
                   </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Data Master</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>kelola_lokasi_unit/lokasi_unit"><span class="fa fa-file"></span> Kelola Unit Lokasi</a></li>
                            <li><a href="<?php echo base_url();?>Kelola_pelanggan/lihat_pelanggan"><span class="fa fa-file"></span> Kelola Pelanggan</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-photo"></span> <span class="xn-text">Pemetaan</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>kelola_pelanggan/sig_pelanggan"><span class="fa fa-photo"></span> SIG Pelanggan</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Laporan</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>kelola_pelanggan/laporan_pelanggan"><span class="fa fa-file"></span> Laporan Pelanggan</a></li>
                        </ul>
                    </li>
                  <?php }

                if($hak_akses == $jabatan[5]) { ;?>
                <!--MENU-->
                 <li class="xn-openable">
                     <a href="#"><span class="fa fa-photo"></span> <span class="xn-text">Pemetaan</span></a>
                     <ul>
                         <li><a href="#"><span class="fa fa-photo"></span> SIG Pelanggan</a></li>
                     </ul>
                 </li>
               <?php } ;?>
                </ul>

                <!-- END X-NAVIGATION -->
