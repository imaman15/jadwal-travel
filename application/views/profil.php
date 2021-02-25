<div class="block-header">
    <?php echo $this->session->flashdata('info'); ?>
                <span style="font-size: 30px;font-weight: bold;">PROFIL SAYA</span>
                <div class = "pull-right">
                <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>">
                                        <i class="material-icons">home</i> Beranda
                                    </a>
                                </li>
                                <li class="active">                                    
                                        <i class="material-icons">account_box</i> Profil Saya
                                </li>                                
                            </ol>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
                    <div class="card">                        
                        <div class="body">
                            <form id="form_validation" method="POST">
                                <div class="demo-color-box bg-yellow">
                                       <div class="form-group form-float">
                                    
                                        <center><img src="<?php echo base_url();?>assets/images/avatar2.png" width="100" height="100" alt="User" /></center>
                                    
                                </div>
                                    </div>
                            
                                <div class="form-group form-float">
                                <div class="input-group input-group-md">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $value->nama; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                              <div class="input-group input-group-md">
                                        <span class="input-group-addon">
                                            <i class="material-icons">@</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Email" value="<?php echo $value->email; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                        
                                    
                                        <input type="button"  value="EDIT PROFIL" class="btn btn-primary waves-effect" onclick="window.location = 'edit_profil';" />
                                </div>
                               
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->