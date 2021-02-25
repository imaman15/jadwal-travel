<!-- Vertical Layout -->
<div class="block-header">
     <?php echo $this->session->flashdata('info'); ?>
                <span style="font-size: 30px;font-weight: bold;">INPUT DATA</span>
                <div class = "pull-right">
                <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>">
                                        <i class="material-icons">home</i> Beranda
                                    </a>
                                </li>
                                <li class="active">                                    
                                        <i class="material-icons">note_add</i> Input Data
                                </li>                                
                            </ol>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">                        
                        <div class="body">
                            
                            <!-- Bordered Table -->
            <div class="row clearfix">                                                    
                        <div class="body table-responsive">           
                        <form id="id_form" action="<?php echo base_url();?>Mycon/insert" method="post">                 
                            <table class="table table-bordered tableinput">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;">
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="no_order_pst" value="<?php echo $no_jadi ?>" class="form-control" placeholder="No. Order Semua Travel" maxlength="10" readonly>
                                    </div>
                                </div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                       <input placeholder="Tanggal Order" name="tanggal" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required>
                                    </div>
                                </div>
                                        </th>                                        
                                    </tr>
                                </thead>            
                            </table>                                                        
                            <table class="table table-bordered tableinput">
                            <thead>
                                    <tr>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nm_hendel" class="form-control" placeholder="Nama Hendel" maxlength="50" required>
                                    </div>
                                </div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nm_travel" class="form-control" placeholder="Nama Travel" maxlength="50" required>
                                    </div>
                                </div>
                                        </th>                                        
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="program" class="form-control" placeholder="Program" maxlength="50" required>
                                    </div>
                                </div>
                                        </th>                               
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="id_cbg" class="form-control" maxlength="10" value="<?php echo $no_jadi2 ?>" readonly>
                                        <input type="text" name="no_order" class="form-control" placeholder="No. Order Per Travel" maxlength="10" required>
                                    </div>
                                </div>
                                        </th>                                     
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="telepon" class="form-control" placeholder="Telepon" maxlength="20" required>
                                    </div>
                                </div>
                                        </th>                                        
                                    </tr>
                                </thead> 
                            </table>
                            
                            <input type="button" name="add_btn" value="TAMBAH" id="add_btn" class="btn btn-success m-t-15 waves-effect" style="margin-top: -10px; margin-bottom: 10px;">                            
                            <input type="button" name="add_btn" value="HAPUS" id="btnDelLastRow" class="btn btn-warning m-t-15 waves-effect" style="margin-top: -10px; margin-bottom: 10px;">                            
                            <table class="table table-bordered ">
                            <thead>
                                    <tr class="headtable">
                                        <th >No</th>
                                                                          
                                        <th>Tanggal</th>                            
                                        <th>Jam</th> 
                                        <th>Driver</th>    
                                        <th>No.Bus</th>                                        
                                        <th>Dari</th>                                        
                                        <th>Tujuan</th>                                        
                                        <th>Keterangan</th>                                        
                                        <th>Biaya</th>                                        
                                    </tr>
                                </thead> 
                                <tbody id="container">
                                    
                                </tbody>
                            </table>
                            <div class="pull-right">                            
                            <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="SUBMIT"></input>
                            <button type="reset" class="btn btn-danger m-t-15 waves-effect" style="margin-left: 5px;">RESET</button>
                        </div>
                        </form> 
                        
                        </div>
                                              
                        </div>                                
            </div>

            <!-- #END# Bordered Table -->                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->