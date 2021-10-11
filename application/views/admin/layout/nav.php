<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">             
            <li><a href="<?php echo base_url('admin/dasbor')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-cog"></i> Slide 1<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/eclipse')?>">Eclipse Data</a></li>
                    <li><a href="<?php echo base_url('admin/data_warehouse')?>">Data Warehouse</a></li>
                    <li><a href="<?php echo base_url('admin/app_report')?>">Application Report</a></li>
                </ul>
            </li>  
            <li><a href="<?php echo base_url('admin/slide_konten')?>"><i class="fa fa-cog"></i> Slide 2</a></li> 
            <li><a href="<?php echo base_url('admin/user')?>"><i class="fa fa-users"></i> Administrator</a></li> 
            <li><a href="#"><i class="fa fa-wrench"></i> Konfigurasi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/dasbor/konfigurasi')?>">Konfigurasi Nama</a></li>
                    <li><a href="<?php echo base_url('admin/dasbor/icon')?>">Ganti Icon</a></li>
                    <li><a href="<?php echo base_url('admin/dasbor/music')?>">Ganti Music</a></li>
                    <li><a href="<?php echo base_url('admin/dasbor/slide_duration')?>">Ganti Durasi Slide</a></li>
                </ul>
            </li>  
        </ul>
    </div>
</nav>  
<!-- /. NAV SIDE  -->

<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: black;"><?php echo $title?></h2>         
            </div>
        </div>
 <!-- /. ROW  -->
 <hr />

<div class="row">
<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">