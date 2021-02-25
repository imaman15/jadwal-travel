<div class="block-header">
    <?php echo $this->session->flashdata('info'); ?>
                <span style="font-size: 30px;font-weight: bold;">EDIT PASSWORD</span>
                <div class = "pull-right">
                <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>">
                                        <i class="material-icons">home</i> Beranda
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>profil">
                                        <i class="material-icons">account_box</i> Profil Saya
                                    </a>
                                </li>
                                <li class="active">                                    
                                        <i class="material-icons">lock</i> Edit Password
                                </li>                                
                            </ol>
            </div>
               <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">                        
                        <div class="body">
                            <form id="form_validation" action="<?php echo base_url(); ?>Mycon/update_profil" method="POST">
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $value->nama; ?>" required>
                                        <input type="hidden" class="form-control" name="user" value="<?php echo $value->user; ?>" required>
                                        <label class="form-label">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" value="<?php echo $value->email; ?>" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="pass_lama" required>
                                        <label class="form-label">Masukan Password Lama</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="pass" required>
                                        <label class="form-label">Masukan Password Baru</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="pass2" required>
                                        <label class="form-label">Konfirmasi Password Baru Kembali</label>
                                    </div>
                                </div>
                                <div class="form-group">                                    
                                <input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-teal" onclick="myFunction()">
                                    <label for="md_checkbox_29">Apakah anda yakin?</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit" id="Btn"  disabled="">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            </div>