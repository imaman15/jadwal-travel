<!-- Vertical Layout -->
<div class="block-header">
                <span style="font-size: 30px;font-weight: bold;">EDIT DATA</span>
                <div class = "pull-right">
                <ol class="breadcrumb">
                               <li>
                                    <a href="<?php echo base_url();?>">
                                        <i class="material-icons">home</i> Beranda
                                    </a>
                                </li>
                                <li class="active">                                    
                                        <i class="material-icons">assignment</i> Data Harian
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
                            <form action="<?php echo base_url(); ?>Mycon/update_data" method="post">                        
                            <table class="table table-bordered tableinput">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="No. Order Semua Travel" name="no_order_pst" value="<?php echo $value->row()->no_order_pst;?>" readonly>
                                    </div>
                                </div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" class="form-control" placeholder="Tanggal Order" name="tanggal" value="<?php echo $value->row()->tanggal;?>" >
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
                                        <input type="text" class="form-control" name="nm_hendel" placeholder="Nama Hendel" value="<?php echo $value->row()->nm_hendel;?>" >
                                    </div>
                                </div>
                                        </th>
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nm_travel" placeholder="Nama Travel" value="<?php echo $value->row()->nm_travel;?>" >
                                    </div>
                                </div>
                                        </th>                                        
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="program" placeholder="Program" value="<?php echo $value->row()->program;?>" >
                                    </div>
                                </div>
                                        </th>                               
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="id_cbg" class="form-control" maxlength="10" value="<?php echo $value->row()->id_cbg;?>" readonly>
                                        <input type="text" class="form-control" name="no_order" placeholder="No. Order Per Travel" value="<?php echo $value->row()->no_order;?>">
                                    </div>
                                </div>
                                        </th>                                     
                                        <th>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $value->row()->telepon;?>" >
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
                        $no_urut = 0;
                        foreach($value->result() as $x) { 
                        $no_urut++;                            
                            ?>
                                    <tr class="isitable">                                        
                                        <td><?php echo $no_urut;?></td>                                       
                                        <td>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="tgl_order" value="<?php echo $x->tgl_order;?>" >
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jam" value="<?php echo $x->jam;?>" >
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="driver" value="<?php echo $x->driver;?>" >
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                             <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bus" value="<?php echo $x->bus;?>" >
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                             <select  name="dari" >
                                                <option value="<?php echo $x->dari;?>"><?php echo $x->dari;?></option>
                                                <option value="Airport Jedah">Airport Jedah</option>
                                                <option value="Airport Madinah">Airport Madinah</option>
                                                <option value="Hotel Madinah">Hotel Madinah</option>
                                                <option value="Zarah">Zarah</option>
                                                <option value="Madinah">Madinah</option>
                                                <option value="Makkah">Makkah</option>
                                                <option value="Hudabiyah">Hudabiyah</option>
                                                <option value="Tanaim">Tanaim</option>
                                                <option value="Toif">Toif</option>
                                                <option value="Madein Saleh">Madein Saleh</option>
                                                <option value="Arafah">Arafah</option>
                                            </select>
                                        </td>
                                        <td>
                                             <select  name="tujuan"  >
                                                <option value="<?php echo $x->tujuan;?>"><?php echo $x->tujuan;?></option>
                                                <option value="Airport Jedah">Airport Jedah</option>
                                                <option value="Airport Madinah">Airport Madinah</option>
                                                <option value="Hotel Madinah">Hotel Madinah</option>
                                                <option value="Zarah">Zarah</option>
                                                <option value="Madinah">Madinah</option>
                                                <option value="Makkah">Makkah</option>
                                                <option value="Hudabiyah">Hudabiyah</option>
                                                <option value="Tanaim">Tanaim</option>
                                                <option value="Toif">Toif</option>
                                                <option value="Madein Saleh">Madein Saleh</option>
                                                <option value="Arafah">Arafah</option>
                                            </select>
                                        </td>
                                        <td>
                                             <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="keterangan" value="<?php echo $x->keterangan;?>" >
                                    </div>
                                </div>
                                        </td>
                                        <td>
                                             <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="biaya" value="<?php echo $x->biaya;?>" >
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $x->id;?>" >
                                    </div>
                                </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>    
                            <div class="pull-left">                            
                            <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="SUBMIT"></input>
                            <button type="reset" class="btn btn-danger m-t-15 waves-effect" style="margin-left: 5px;">RESET</button>
                        </div>                        
                            </form>
                             <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
                            
                        </div>                                
            </div>
           
            

            <!-- #END# Bordered Table -->                        
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #END# Vertical Layout -->