<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Aplikasi Jadwal Travel</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>assets/images/bus.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

     <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

     <!-- Colorpicker Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="<?php echo base_url();?>assets/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="<?php echo base_url();?>assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="<?php echo base_url();?>assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url();?>assets/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="<?php echo base_url();?>assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url();?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Silahkan Tunggu</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">                
                <a class="navbar-brand" href="<?php echo base_url();?>">APLIKASI JADWAL TRAVEL</a>
            </div>
            
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url();?>assets/images/avatar2.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata("nama"); ?></div>
                    <div class="email"><?php echo $this->session->userdata("email"); ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url();?>profil"><i class="material-icons">person</i>Profil</a></li>                            
                            <li><a href="<?php echo base_url();?>logout"><i class="material-icons">input</i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU UTAMA</li>                    
                    <li class="<?php echo $active1; ?>">
                        <a href="<?php echo base_url();?>">
                            <i class="material-icons">note_add</i>
                            <span>Input Data</span>
                        </a>
                    </li>
                    <li class="<?php echo $active2; ?>">
                        <a href="<?php echo base_url();?>data_harian">
                            <i class="material-icons">assignment</i>
                            <span>Data Harian</span>
                        </a>
                    </li>
                    <li class="<?php echo $active3; ?>">
                        <a href="<?php echo base_url();?>data_bulanan">
                            <i class="material-icons">assessment</i>
                            <span>Data Bulanan</span>
                        </a>
                    </li>
                    <li class="<?php echo $active4; ?>">
                        <a href="<?php echo base_url();?>laporan">
                            <i class="material-icons">archive</i>
                            <span>Laporan</span>
                        </a>
                    </li>  
                    <li class="<?php echo $active5; ?>">
                        <a href="<?php echo base_url();?>invoice">
                            <i class="material-icons">receipt</i>
                            <span>Invoice</span>
                        </a>
                    </li>   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="<?php echo base_url();?>">Aplikasi Jadwal Travel.</a><br>
                    All rights reserved. <br>
                    Design by <a href="<?php echo base_url(); ?>bantenprojek">BANTENPROJEK.</a>
                </div>
                <div class="version">
                    <b>Versi: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php $this->load->view($content); ?>
        </div>
    </section>

    <!-- Jquery Core Js -->
     <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.js"></script>
    <script type="text/javascript">

$(function(){

$.ajaxSetup({
    type:"post",
    cache:false,
    dataType: "json"
})


$(document).on("click","td",function(){
$(this).find("span[class~='caption']").hide();
$(this).find("input[class~='editor']").fadeIn().focus();
});


$(document).on("keydown",".editor",function(e){
if(e.keyCode==13){ //13 adalah enter
var target=$(e.target);
var value=target.val();
var id=target.attr("data-id");
var data={id:id,value:value};
if(target.is(".field-keterangan")){
data.modul="keterangan";
}else if(target.is(".field-status")){
data.modul="status";
}

$.ajax({
    data:data,
    url:"<?php echo base_url('update'); ?>",
    success: function(a){
     target.hide();
     target.siblings("span[class~='caption']").html(value).fadeIn();
    }

})

}

});


});

</script>
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
    <textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
    <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
    <script type="text/javascript">
    //<![CDATA[
    function printDiv(elementId) {
        document.getElementById("atas").innerHTML="STATEMENT RABITAT<br>Ustdz. SARIDI";
        var divsToHide = document.getElementsByClassName("field-keterangan"); //divsToHide is an array
        for(var i = 0; i < divsToHide.length; i++){
        divsToHide[i].style.visibility = "hidden"; // or
        divsToHide[i].style.display = "none"; // depending on what you're doing
        }
        var divsToHide2 = document.getElementsByClassName("field-status"); //divsToHide is an array
        for(var i = 0; i < divsToHide2.length; i++){
        divsToHide2[i].style.visibility = "hidden"; // or
        divsToHide2[i].style.display = "none"; // depending on what you're doing
        }
        var a = document.getElementById('printing-css').value;
        var b = document.getElementById(elementId).innerHTML;        
        window.frames["print_frame"].document.title = document.title;
        window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
        window.frames["print_frame"].window.focus();        
        window.frames["print_frame"].window.print();  
        setTimeout("location.reload()", 5);                
    }
        

    //]]>
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var count = 0;
 
            $("#add_btn").click(function(){
                    count += 1;
                $('#container').append(
                             '<tr class="isitable">'
                         + '<td ><div id="'+count+'" style="margin-top:10px;">' + count + '</div></td>'   
                         + '<td><div class="form-group"><div class="form-line"><input type="date" id="tgl_order_' + count + '" name="tgl_order_' + count + '" class="form-control" required></div></div></td>'
                         + '<td><div class="form-group"><div class="form-line"><input type="text" id="jam_' + count + '" name="jam_' + count + '" value="00:00" class="form-control" required></div></div></td>'
                         + '<td><div class="form-group"><div class="form-line"><input type="text" maxlength="50" id="driver_' + count + '" name="driver_' + count + '" class="form-control" required></div></div></td>'
                         + '<td><div class="form-group"><div class="form-line"><input type="text" maxlength="50" id="bus_' + count + '" name="bus_' + count + '" class="form-control" required></div></div></td>'
                         + '<td><select required id="dari_' + count + '" name="dari_' + count + '" style="margin-top:10px;"><option value="">Silahkan Pilih</option><option value="Airport Jedah">Airport Jedah</option><option value="Airport Madinah">Airport Madinah</option><option value="Hotel Madinah">Hotel Madinah</option><option value="Zarah">Zarah</option><option value="Madinah">Madinah</option><option value="Makkah">Makkah</option><option value="Hudabiyah">Hudabiyah</option><option value="Tanaim">Tanaim</option><option value="Toif">Toif</option><option value="Madein Saleh">Madein Saleh</option><option value="Arafah">Arafah</option></select></td>'
                         + '<td><select required id="tujuan_' + count + '" name="tujuan_' + count + '" style="margin-top:10px;"><option value="">Silahkan Pilih</option><option value="Airport Jedah">Airport Jedah</option><option value="Airport Madinah">Airport Madinah</option><option value="Hotel Madinah">Hotel Madinah</option><option value="Zarah">Zarah</option><option value="Madinah">Madinah</option><option value="Makkah">Makkah</option><option value="Hudabiyah">Hudabiyah</option><option value="Tanaim">Tanaim</option><option value="Toif">Toif</option><option value="Madein Saleh">Madein Saleh</option><option value="Arafah">Arafah</option></select></td>'
                         + '<td><div class="form-group"><div class="form-line"><input type="text" id="keterangan_' + count + '" name="keterangan_' + count + '" class="form-control" value="-" required></div></div></td>'
                         + '<td><div class="form-group"><div class="form-line"><input type="text" maxlength="20" id="biaya_' + count + '" name="biaya_' + count + '" class="form-control" required></div></div></td>'
                         + '<input id="rows_' + count + '" name="rows[]" value="'+ count +'" type="hidden"></td></tr>'
                    );
                });
    $('#btnDelLastRow').on('click', function() {    
    $('#container tr:last').remove();
    count = 0;
});
                    
        });
    </script>
<script>
function myFunction() {
    var x = document.getElementById("Btn");
    var z = document.getElementById("md_checkbox_29");
    if (z.checked == true) {
        x.disabled = false;
    }else{
        x.disabled = true;
    }
}
</script>
<script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: 'Hapus Data',
                        text: 'Apakah anda yakin akan menghapus data ini?',
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>
    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url();?>assets/plugins/chartjs/Chart.bundle.js"></script>

     <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/autosize/autosize.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/nouislider/nouislider.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/momentjs/moment.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.min.js"></script>


    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/tables/jquery-datatable.js"></script>
    <script src='<?php echo base_url();?>assets/js/pages/forms/basic-form-elements.js'></script>    
    <script src='<?php echo base_url();?>assets/js/pages/index.js'></script>    

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
</body>

</html>