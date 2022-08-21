<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/logohimakom.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pengumuman Asisten Dosen</title>
</head>

<body>
    <div class="d-flex flex-column">
        <nav class="navbar">
            <div class="container d-flex justify-content-center">
                <a class="navbar-brand" href="./index.php">
                    <img src="./assets/logo-bansus.png" width="300" class="d-inline-block align-text-top">
                </a>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col text-center mt-4">
                    <h2 class="fw-semibold">Pengumuman Asisten Dosen Ilmu Komputer
                        <br>Semester Ganjil 2022
                    </h2>
                </div>
            </div>
            <div class="row mt-3 d-flex justify-content-center">
                <div class="col col-md-6 text-center">
                    <div class="card card-npm mx-auto">
                        <div class="card-body pt-4 pb-5">
                            <p class="fw-semibold fs-2">Masukkan NPM Anda</p>
                            <form action="cek" method="post">
                                <div class="mb-2 mx-auto" style="width: 80%;">
                                    <input type="text" name="npm" required class="form-control fw-bold"
                                        style="height: 65px; font-size: 24px; border-radius: 20px; text-align: center;"
                                        maxlength="10">
                                </div>
                                <div class="mb-2 mx-auto" style="width: 80%;">
                                    <input type="submit" name="cek" value="LIHAT HASIL" class="fw-semibold mt-3"
                                        style="height: 65px; font-size: 24px; border-radius: 20px; width: 100%; background-color: #E5C30E;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt-auto">
            <p class="text-center pt-3">Copyright 2022 Badan Khusus Himakom Unila</p>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</body>

</html>