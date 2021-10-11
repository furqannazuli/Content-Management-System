<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 4.5 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="application/assets/style.css">
    <link href="<?php echo base_url('assets/upload/image/'. $site['icon']) ?>" rel="shortcut icon">
    <link href="<?php echo base_url() ?>assets/front/css/home.css" type="text/css" rel="stylesheet" media="all">
    <title>Kapabilitas Aplikasi PTBA</title>
</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="<?php echo $site['slide_duration'] ?>000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <?php include('content.php') ?>
            </div>
            <?php include('content_1.php') ?>
        </div>
    </div>
    <audio autoplay="true" loop="true" src="assets/upload/music/<?php echo $site['music'] ?? "" ?>"></audio>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>
    window.addEventListener("DOMContentLoaded", event => {
        const audio = document.querySelector("audio");
        audio.play();
    });
</script>

</html>