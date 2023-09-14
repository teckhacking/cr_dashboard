<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload sytem</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Vandron</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:vandronx@outlook.com">Mail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php">Uploads</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <section>
        <div class="alert-box container-fluid ">
            <span>
                <?php
                    if(isset($_SESSION['msg']))
                    { echo $_SESSION['msg']; 
                    session_unset();}
                    else{ echo "Upload your files here "; }
                ?>
            </span>
        </div>
    </section>
    <section>
        <div class="card shadow-sm">
            <div class="card-header bg-rainbox text-white">
                File Upload
            </div>
            <div class="card-body container-fluid">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 col-auto">
                        <label for="exampleFormControlInput1" class="form-label">ROLL NUMBER</label>
                        <input type="name" class="form-control" name="rollno" required id="exampleFormControlInput1"
                            placeholder="22R01A05E2">
                    </div>
                    <label for="" class="form-label">Subject</label>
                    <div class="mb-2 ms-1 mt-2 row col-auto">
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" required name="subject" id="exampleRadios1" value="english" >
                                <label class="form-check-label" for="exampleRadios1">
                                 English
                                </label>
                            </div>
                        </div>
                        <div class="col-auto">
                        <div class="form-check">
                                <input class="form-check-input" type="radio" required name="subject" id="exampleRadios2" value="maths" >
                                <label class="form-check-label" for="exampleRadios2">
                                 Maths
                                </label>
                            </div>
                        </div>
                        <div class="col-auto">
                        <div class="form-check">
                                <input class="form-check-input" type="radio" required name="subject" id="exampleRadios3" value="pps" >
                                <label class="form-check-label" for="exampleRadios3">
                                 PPS
                                </label>
                            </div>
                        </div>
                        <div class="col-auto">
                        <div class="form-check">
                                <input class="form-check-input" type="radio" required name="subject" id="exampleRadios4" value="others" >
                                <label class="form-check-label" for="exampleRadios4">
                                 others
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-auto">
                        <label for="formFileMultiple" class="form-label">Upload PPT</label>
                        <input class="form-control" type="file" name="file" required id="formFileMultiple">
                    </div>
                    <button type="submit" name="submit" value="Upload" class="btnn mt-4">Upload</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>