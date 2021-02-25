<style type="text/css">

td.edit {
    cursor: pointer;
}

.editor{
    display: none;
}

</style>
<!-- Vertical Layout -->
<div class="block-header">
    <?php echo $this->session->flashdata('info'); ?>
                <span style="font-size: 30px;font-weight: bold;">INVOICE</span>
                <div class = "pull-right">
                <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>">
                                        <i class="material-icons">home</i> Beranda
                                    </a>
                                </li>
                                <li class="active">                                    
                                        <i class="material-icons">assessment</i> Invoice
                                </li>                                
                            </ol>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">                        
                        <div class="body">
                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">account_box</i>
                                            </span>
                                            <form action="<?php echo base_url();?>invoice" method="post">
                                            <div class="form-line" style="width: 150px;">
                                                <input placeholder="Nama Hendel" type="text" name="nm_hendel">
                                            </div>
                                            
                                            <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="SUBMIT" style="margin-left: 10px;margin-top: 5px;"></input>
                                        </form>
                                        </div>
                                        <!-- Exportable Table -->           
                                               
                                <div id="area-1">
                                <h2 id="atas" style="text-align: center;"></h2>
                                <center>
                                <table id="table-data" class="table table-striped" border="2px">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. Order</th>
                                            <th>Hendel</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Tujuan</th>
                                            <th>Bus</th>
                                            <th>Harga Bus</th>
                                            <th>Program</th>
                                            <th>Keterangan</th>
                                  
                                        </tr>
                                    </thead>

                                    <tbody id="table-body">
                                        <?php 

                                        $no_urut = 0;
                                        foreach($value as $x) { 
                                            $no_urut++;                            
                                            echo "<tr data-id='$x[id]'>
                                            <td><center>$no_urut</center></td>
                                            <td>$x[no_order]</td>
                                            <td>$x[nm_hendel]</td>
                                            <td>$x[tgl_order]</td>
                                            <td>".substr($x['jam'], 0,5)." </td>
                                            <td>$x[tujuan]</td>
                                            <td>$x[bus]</td>
                                            <td>$x[biaya]</td>
                                            <td>$x[program]</td>
                                            <td class='edit'><span class='caption' data-id='$x[id]'>$x[keterangan]</span> <input type='text' class='field-keterangan form-control editor' id='inputhide' value='$x[keterangan]' data-id='$x[id]' /></td>
                                            </tr>";
                                             } ?>
                                    </tbody>

                                </table>
                                </center>
                                </div>  
                                <a class="no-print" href="javascript:printDiv('area-1');"><button class="btn btn-success m-t-15 waves-effect">PRINT</button></a>                     
                            </div>
                       
                       
            <!-- #END# Exportable Table -->
                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->

           
