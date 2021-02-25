<!-- Vertical Layout -->
<div class="block-header">
                <span style="font-size: 30px;font-weight: bold;">DETAIL LAPORAN</span>
                <div class = "pull-right">
                <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>">
                                        <i class="material-icons">home</i> Beranda
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>laporan">
                                        <i class="material-icons">archive</i> Laporan
                                    </a>
                                </li>
                                <li class="active">                                    
                                        <i class="material-icons">assignment</i> Detail Laporan
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
                                                    
                            <table class="table table-bordered tableinput">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="No. Order Semua Travel" value="<?php echo $value->row()->no_order_pst;?>" readonly>
                                    </div>
                                </div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Tanggal Order" value="<?php echo date_indo($value->row()->tanggal);?>" readonly>
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
                                        <input type="text" class="form-control" placeholder="Nama Hendel" value="<?php echo $value->row()->nm_hendel;?>" readonly>
                                    </div>
                                </div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nama Travel" value="<?php echo $value->row()->nm_travel;?>" readonly>
                                    </div>
                                </div>
                                        </th>                                        
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Program" value="<?php echo $value->row()->program;?>" readonly>
                                    </div>
                                </div>
                                        </th>                               
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="No. Order Per Travel" value="<?php echo $value->row()->no_order;?>" readonly>
                                    </div>
                                </div>
                                        </th>                                     
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Telepon" value="<?php echo $value->row()->telepon;?>" readonly>
                                    </div>
                                </div>
                                        </th>                                        
                                    </tr>
                                </thead> 
                            </table>
                            <br>
                            <table class="table table-bordered tableinput">
                            <thead>
                                    <tr class="headtable">
                                        <th>No</th>
                                                                            
                                        <th>Tanggal</th>                                        
                                        <th>Jam</th>   
                                        
                                        <th>Driver</th>
                                        
                                        <th>Bus</th>                                        
                                        <th>Dari</th>                                        
                                        <th>Tujuan</th>                                        
                                        <th>Keterangan</th>                                        
                                        <th>Biaya</th>                                        
                                    </tr>
                                </thead> 
                                <tbody>
                                    <?php 
                                    $total= 0;
                        $no_urut = 0;
                        foreach($value->result() as $x) { 
                        $no_urut++;                            
                            ?>
                                    <tr class="isitable">                                        
                                        <td><?php echo $no_urut;?></td>                                       
                                        <td>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?php echo mediumdate_indo($x->tgl_order);?>" readonly>
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?php echo substr($x->jam, 0,5); ?>" readonly>
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?php echo $x->driver;?>" readonly>
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                             <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?php echo $x->bus;?>" readonly>
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                             <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?php echo $x->dari;?>" readonly>
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                             <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?php echo $x->tujuan;?>" readonly>
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                             <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?php echo $x->keterangan;?>" readonly>
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                             <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?php echo $x->biaya;?>" readonly>
                                    </div>
                                </div>
                                        </td>
                                    </tr>
                                    <?php 
                                    $total += $x->biaya;
                                    } 
                                    ?>
                                </tbody>
                                <tfoot style="background-color: grey;">
                                    <tr class="headtable">                                        
                                        <th colspan="8" style="color: white;text-align: right;">Total Biaya</th>
                                        <th style="color: white;"><b><?php echo $total; ?></b></th>                                        
                                    </tr>
                                </tfoot> 
                            </table>                            
                            
                            
                            <a href="<?php echo base_url();?>laporan"><button type="button" class="btn btn-primary m-t-15 waves-effect">KEMBALI</button> </a>
                        </div>                                
            </div>
            
            

            <!-- #END# Bordered Table -->                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->