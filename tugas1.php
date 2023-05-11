<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.1.3-dist/js/jquery-3.6.4.min.js"></script>

    <title>Pendaftaran</title>

    <style>
    body {
        background: linear-gradient(#16FF00, #F9F54B);
    }

    .box {
        background: linear-gradient(#16FF00, #F9F54B);
        height: 1200px;
    }
    </style>
</head>

<body>
    <!-- <div class="bg-success p-2 text-white bg-opacity-75"></div> -->
    <!-- <div class="p-3 mb-2 bg-warning text-dark"> -->
    <br>
    <button class="btn btn-primary btn-toggel ">Toggle</button>

    <script>
    $(document).ready(function() {
        $(".btn-toggel").click(function() {
            $(".card").slideToggle("slow");
        })
    })
    </script>
    <br>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../hari 1/Fathul Huda/tugas1.php">Hari 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../hari 2/tugas1.php">Hari 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../hari 3/tugas1.php">Hari 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Hari 4</a>
        </li>
    </ul>
    <div class="box">
        <div class="container mt-3">
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h1>Form Pendaftaran</h1>
                        </div>
                        <div class="card-body">
                            <form id="reload" action="" method="post">
                                <!-- Ini akan berisi halaman form-->
                                <div class="form-floating mb-1">
                                    <input type="text" name="nama" class="form-control" id="fiNama"
                                        placeholder="name@example.com">
                                    <label for="fiNama">Nama</label>
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="email" name="email" class="form-control" id="fiEmail"
                                        placeholder="name@example.com">
                                    <label for="fiEmail">Email</label>
                                </div>
                                <div class="form-floating">
                                    <textarea name="alamat" class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Alamat</label>
                                </div>

                                <div class="form-floating mt-2">
                                    <select name="progpel" class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected disabled>Pilih</option>
                                        <option value="Junior Web Digital">Junior Web Developer</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="Content Creator">Content Creator</option>
                                        <option value="Desain Multimedia Muda">Desainer Multimedia Muda</option>
                                    </select>
                                    <label for="floatingSelect">Program Pelatihan</label>
                                </div>

                                <div class="form-floating mt-2">
                                    <select name="thndaf" class="form-select" id="fsTahun"
                                        aria-label="Floating label select example">
                                        <option selected disabled>Pilih Tahun</option>
                                        <?php
                                  for($a=2000;$a<=2023;$a++):?>
                                        <option value="<?= $a;?>">
                                            <?= $a;?>
                                        </option>
                                        <?php endfor;?>
                                    </select>
                                    <label for="fsTahun">Tahun Daftar</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenkel"
                                        id="w" value="Pria">
                                    <label class="form-check-label" for="fsJenis">
                                        Pria
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenkel"
                                        id="w" value="Wanita">
                                    <label class="form-check-label" for="fsJenis">
                                        Wanita
                                    </label>
                                </div>
                                <input type="submit" name="submit" class="btn btn-success mt-3 col-12" value="Daftar">
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="spinner-grow text-success" slow="status" style="display:none;">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div>

                                <table class="table table-hover table-strip">
                                    <thead>
                                        <tr>
                                            <th>NAMA</th>
                                            <th>EMAIL</th>
                                            <th>ALAMAT</th>
                                            <th>PROGRAM PELATIHAN</th>
                                            <th>TAHUN</th>
                                            <th>JENIS KELAMIN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="bootstrap-5.1.3-dist/js/jquery-3.6.4.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        //even ketika disubmit
        getData();

        function getData() {
            $.ajax({
                type: "GET",
                url: "get_data.php",
                beforeSend: function(result) {
                    $(".spinner-border").show(1000);
                },
                success: function(result) {
                    $(".spinner-border").hide(3000);
                    $("tbody").html(result);
                    $("#reload")[0].reset();
                }
            })
        }
        // even ketika form di submit
        $("form").submit(function(event) {
            //
            event.preventDefault();
            // 
            var nama = $("#fiNama").val();
            var email = $("#fiEmail").val();
            var alamat = $("#floatingTextarea").val();
            var program = $("#floatingSelect").val();
            var tahun = $("#fsTahun").val();
            var jenis = $(".form-check-input:checked").val();
            var formData = {
                nama: nama,
                email: email,
                alamat: alamat,
                program: program,
                tahun: tahun,
                jenis: jenis
            }
            $.ajax({
                type: "POST",
                url: "process.php",
                data: formData,
                beforeSend: function(result) {
                    $(".spinner-border").show(1000);
                },
                success: function(result) {
                    $(".spinner-border").hide(3000);
                    $("tbody").append(result);
                    $("#reload")[0].reset();
                    getData();
                }
            })
        })
    })
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery-3.6.4.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    </div>
</body>

</html>