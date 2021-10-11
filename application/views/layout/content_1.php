<?php foreach ($slide2_data as $key => $value) { ?>

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

  <div class="carousel-item">
    <img src="assets/image/ptba.png" alt="" style="width: 15%; position: absolute; left: 84%; margin-top: 80px;">
    <img src="assets/image/textbox.png" alt="" style="float: left; position: relative; margin-top: 1%;">
    <h1 style="position: absolute; margin-top: 4.5%; margin-left: 25%; color: white; font-family: 'Kanit', sans-serif;"><?php echo $value['header_title'] ?></h1>

        <div class="row pt-5">
            <div class="col" style="margin-top: 9%; position: absolute; margin-left: -75%; width: 38%;">
                <div class="card card-body bg-black text-white pt-2 pb-0" style="width: 212.5%;"></div> 
                <p style="margin-top: 10px; font-size: 22px; margin-left: 15px; margin-right: 15px;"><?php echo $value['judul'] ?></p>
                <div class="card card-body bg-primary text-white p-2 mt-4">
                    <h3 style="margin-top: 5px; margin-bottom: 5px;">Manfaat Penggunaan ELLIPSE</h3>
                </div>  
                <p style="margin-top: 10px; font-size: 22px; margin-left: 15px; margin-right: 15px;"><?php echo $value['manfaat'] ?></p>    
                <div class="card card-body bg-black text-white pt-2 pb-0 mt-5" style="width: 100%;"></div>  
                <br>            
                <div class="card card-body bg-primary text-white p-2">
                    <h3 style="margin-top: 5px; margin-bottom: 5px;">Image</h3>
                </div>
                <img src="assets/upload/<?php echo $value['gambar'] ?>" alt="" style="width: 65%; margin-left: 16%; margin-top: 2%;">        
            </div>
            <div class="col" style="margin-top: 8.8%; position: absolute; margin-left: -33%; width: 38%;">
                <div class="card card-body bg-primary text-white p-2 mt-5">
                    <h3 style="margin-top: 5px; margin-bottom: 5px;">Output</h3>
                </div>  
                <h1 style="margin-top: 10px; font-size: 150%; margin-left: 15px; margin-right: 15px; margin-bottom: 8.5%;">
                    <?php echo $value['output'] ?>
                </h1> 
                <div class="card card-body bg-black text-white pt-2 pb-0 mt-5" style="width: 100%;"></div>      
                <br>      
                <div class="card card-body bg-primary text-white p-2 mt-2">
                    <h3 style="margin-top: 5px; margin-bottom: 5px;">Video</h3>
                </div>
                <video controls width="85%" height="10%" style="margin-top: 2%; margin-left: 7.6%;">
                    <source src="assets/upload/<?php echo $value['video'] ?>" type="video/mp4" />
                </video>      
            </div>            
        </div>

    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="custom-border"></div>
                <div class="row">
                    <div class="col-6">
                        <p></p>
                        <div></div>
                        <p></p>
                    </div>
                    <div class="col-6">
                        <div></div>
                    </div>
                </div>
                <div class="custom-border">
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <div></div>
                        <img src="" alt="" class="w-100">
                    </div>
                    <div class="col-6">
                        <div></div>
                        <video autoplay class="w-100" style="margin-top: 100%; width: 300%;">
                            <source src="" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</body>
</html>
<?php } ?>