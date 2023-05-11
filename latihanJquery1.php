<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Query</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!-- File Import jquery dan js -->
    <script type="text/javascript" src="bootstrap-5.1.3-dist/js/jquery-3.6.4.min.js"></script>
    <style>
        img {
            width: 1920px;
            height: 1080px;
        }
    </style>
</head>
<body>
    <!-- <button class="btn btn-primary btn-hilang">Menghilangkan Tulisan</button>
    <button class="btn btn-success btn-muncul">Menampilkan Tulisan </button>
    <button class="btn btn-danger btn-atas">Menghilangkan Gambar</button>
    <button class="btn btn-info btn-bawah">Menampilkan Gambar</button> -->
    <button class="btn btn-success btn-toggel ">Tulisan</button>
    <button class="btn btn-primary btn-toggel1 ">Gambar</button>
    <h1>Ke Mekkah bareng Orang Tua</h1>
    <img src="wallpaper.jpg" alt="">
    <script>
        $(document).ready(function(){
            // $(".btn-hilang").click(function(){
            //     $("h1").hide("slow");
            // })
            // $(".btn-muncul").click(function(){
            //     $("h1").show("slow");
            // })
            // $(".btn-atas").click(function(){
            //     $("img").hide("slow");
            // })
            // $(".btn-bawah   ").click(function(){
            //     $("img").show("slow");
            // })
            $(".btn-toggel").click(function(){
                $("h1").slideToggle("slow");
            })
            $(".btn-toggel1").click(function(){
                $("img").slideToggle("slow");
            })
        })
    </script>
</body>
</html>