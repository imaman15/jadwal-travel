<!-- Vertical Layout -->
<div class="block-header">
                <span style="font-size: 30px;font-weight: bold;">LAPORAN</span>
                <div class = "pull-right">
                <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>">
                                        <i class="material-icons">home</i> Beranda
                                    </a>
                                </li>
                                <li class="active">                                    
                                        <i class="material-icons">archive</i> Laporan
                                </li>                                
                            </ol>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">                        
                        <div class="body">
                            <!-- Basic Examples -->
                           
                        
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="text-align: center;">
                                    <thead>
                                        <tr>
                                            <th>No. Order</th>
                                            <th>No. Order per Travel</th>
                                            <th>Program</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>     
                                            <th>Hapus</th>        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No. Order</th>
                                            <th>No. Order per Travel</th>
                                            <th>Program</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>  
                                            <th>Hapus</th>        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($value as $x) { ?>
                                        <tr>
                                            <td><?php echo $x->no_order_pst; ?></td>
                                            <td><?php echo $x->no_order; ?></td>
                                            <td><?php echo $x->program; ?></td>
                                            <td><?php echo date_indo($x->tanggal); ?></td>   
                                            <td>
                                                <a href="<?php echo base_url();?>laporan/<?php echo $x->no_order_pst; ?>">
                                                <button type="button" class="btn bg-blue btn-xs waves-effect"><i class="material-icons">assignment</i>
                                                <span>LIHAT DETAIL</span> 
                                                </button> 
                                            </td>                                   <td>
                                                <a href="<?php echo base_url();?>mycon/delete_data/<?php echo $x->no_order_pst; ?>" class="delete-link">
                                                <button type="button" class="btn bg-red btn-xs waves-effect"><i class="material-icons">delete</i>
                                                <span>HAPUS</span> 
                                                </button> </a>
                                            </td>              
                                        </tr>   
                                        <?php } ?>                                    
                                    </tbody>
                                </table>
                            </div>
                        
                    
            <!-- #END# Basic Examples -->
                                                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->