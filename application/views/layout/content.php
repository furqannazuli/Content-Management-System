<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,600&display=swap" rel="stylesheet">

    <title>Kapabilitas Aplikasi PTBA</title>
    <link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="shortcut icon">
    <link href="<?php echo base_url () ?>assets/front/css/home.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>

<div class="container">      
    <h1 class="tulisan">KAPABILITAS APLIKASI PTBA</h1>         
    <div class="box-1"></div>
    <img src="assets/image/ptba.png" alt="" style="width: 20%; position: relative; margin-left: 116.4%; margin-top: -8.5%;">
</div>
<div class="card card-body bg-primary text-white pt-0 pb-0">
    <h4 style="text-align: center; padding-top: -2%;">Application Active Direct</h4>
</div>
<div class="card card-body bg-primary text-white pt-0 pb-0 mt-2">
    <h4 style="text-align: center; padding-top: -2%;">Eclipse 9</h4>
</div>

<div class="container">  
    <div class="row pt-3">
    <?php if (count($eclipse) > 0) : ?>
        <?php foreach ($eclipse as $key => $value) : ?>
            <div class="col">
              <div class="card card-body bg-info text-white pt-1 pb-0">
                <h5> <?php echo $value['title'] ?> </h5>
                <p> <?php echo $value['konten'] ?> </p>
              </div> 
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>
</div>  

<div class="card card-body bg-primary text-white pt-0 pb-0 mt-3">
    <h4 style="text-align: center; padding-top: -2%;">Data Warehouse</h4>
</div>

<div class="container">  
    <div class="row pt-3">
    <?php if (count($data_warehouse) > 0) : ?>
        <?php foreach ($data_warehouse as $key => $value) : ?>
            <div class="col">
              <div class="card card-body bg-info text-white pt-1 pb-0">
                <h5> <?php echo $value['title'] ?> </h5>
                <p> <?php echo $value['konten'] ?> </p>
              </div> 
            </div>  
        <?php endforeach; ?>
    <?php endif; ?>                
    </div>
</div> 

<div class="card card-body bg-primary text-white pt-0 pb-0 mt-3">
    <h4 style="text-align: center; padding-top: -2%;">App Report</h4>
</div>

    <div class="row m-0">
        <?php if (count($app_report_day) > 0) : ?>
            <?php foreach ($app_report_day as $key => $value) : ?>
              <div class="col" style="background-color:#ccff99; text-align: center; color: black; padding: 0.2%; border-left-style: solid; border-color: black; border-width: medium;">
                    <h5> <?php echo $value['hari'] ?> </h5>
              </div>   
            <?php endforeach; ?>
        <?php endif; ?>   
    </div>

    <div class="row m-0">
        <?php if (count($app_report) > 0) : ?>
            <?php foreach ($app_report as $key => $value) : ?>
                <?php $type = ($value['keterangan'] == 1 ? 'bg-primary' : ($value['keterangan'] == 2 ? 'bg-warning' : 'bg-danger')) ?>
                    <div class="col">
                        <div class="card card-body text-white pt-0 pb-0 mt-2 <?php echo $type ?>">
                            <h5 style="text-align: center; padding-top: -2%;"> <?php echo $value['aplikasi'] ?> </h5>
                        </div>     
                    </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

<!-- Client Logo Slider -->
    <div class="container">
       <section class="customer-logos slider">
          <div class="slide"><img src="assets/image/365.png"></div>
          <div class="slide"><img src="assets/image/abb.png"></div>
          <div class="slide"><img src="assets/image/cisea.png"></div>
          <div class="slide"><img src="assets/image/datamine.png"></div>
          <div class="slide"><img src="assets/image/MAD FIX.png"></div>
          <div class="slide"><img src="assets/image/ORACLE FIX.png"></div> 
          <div class="slide"><img src="assets/image/zoom.png"></div> 
          <div class="slide"><img src="assets/image/sap.png"></div>        
       </section>
    </div>
<!-- End Client Logo Slider -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
</html>