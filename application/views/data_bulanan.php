<!-- Vertical Layout -->
<div class="block-header">
    <?php echo $this->session->flashdata('info'); ?>
                <span style="font-size: 30px;font-weight: bold;">DATA BULANAN</span>
                <div class = "pull-right">
                <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>">
                                        <i class="material-icons">home</i> Beranda
                                    </a>
                                </li>
                                <li class="active">                                    
                                        <i class="material-icons">assessment</i> Data Bulanan
                                </li>                                
                            </ol>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">                        
                        <div class="body">
                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <form action="<?php echo base_url();?>data_bulanan" method="post">
                                            <div class="form-line" style="width: 150px;">
                                                <input placeholder="Pilih Tanggal Awal" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="tgl_awal" >
                                            </div>
                                            <label style="margin-left: 5px;">s/d</label>
                                            <div class="form-line" style="width: 150px; margin-left: 10px;">
                                                <input placeholder="Pilih Tanggal Akhir" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="tgl_akhir"  >
                                            </div>
                                            <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="SUBMIT" style="margin-left: 10px;margin-top: 5px;"></input>
                                        </form>
                                        </div>
                                        <!-- Exportable Table -->           
                            <div class="table-responsive">                                
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                     <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari/Tanggal</th>
                                            <th>Jam</th>
                                            <th>Driver</th>
                                            <th>No. Bus</th>
                                            <th>Dari</th>
                                            <th>Tujuan</th>
                                            <th>Hendel</th>
                                            <th>Travel</th>
                                            <th>No. Order</th>
                                            <th>Keterangan</th>
                                            <th>Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari/Tanggal</th>
                                            <th>Jam</th>
                                            <th>Driver</th>
                                            <th>No. Bis</th>
                                            <th>Dari</th>
                                            <th>Tujuan</th>
                                            <th>Hendel</th>
                                            <th>Travel</th>
                                            <th>No. Order</th>
                                            <th>Keterangan</th>
                                            <th>Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>                                    
                                    <tbody>
                                        <?php 
                        $no_urut = 0;
                        foreach($value as $x) { 
                        $no_urut++;                            
                            ?>      
                                        <tr>
                                            <td><center><?php echo $no_urut;?></center></td>
                                            <td><?php echo longdate_indo($x->tgl_order); ?></td>
                                            <td><?php echo substr($x->jam, 0,5); ?></td>
                                            <td><?php echo $x->driver;?></td>
                                            <td><?php echo $x->bus;?></td>
                                            <td><?php echo $x->dari;?></td>
                                            <td><?php echo $x->tujuan;?></td>
                                            <td><?php echo $x->nm_hendel;?></td>
                                            <td><?php echo $x->nm_travel;?></td>
                                            <td><?php echo $x->no_order;?></td>
                                            <td><?php echo $x->keterangan;?></td>
                                            <td><?php echo $x->biaya;?></td> 
                                            <td>
                                                 <a href="<?php echo base_url() ?>Mycon/edit_data/<?php echo $x->no_order_pst; ?>/<?php echo $x->id; ?>">
                                                <button type="button" class="btn bg-blue btn-xs waves-effect"><i class="material-icons">assignment</i>
                                                <span>EDIT</span> 
                                                </button> 
                                            </td>
                                        </tr>       
                                    <?php } ?>
                                    </tbody>
                                    
                                </table>                                
                            </div>
                       
            <!-- #END# Exportable Table -->
                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->