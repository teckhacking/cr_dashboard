<?php
include("./connect.php");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display files - vandron</title>
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:vandronx@outlook.com">Mail</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <section>
        <div class="container-fluid display-box">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th scope="col">Sl NO</th>
                    <th scope="col">ROll No</th>
                    <th scope="col">Subject</th>
                    <th scope="col">PPT File</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "Select * from `fileupload` ORDER BY rollno";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $roll = $row['rollno'];
                        $subject = $row['subject'];
                        $file = $row['file'];
                        echo '
                            <tr>
                            <td>'.$id.'</td>
                            <td>'.$roll.'</td>
                            <td>'.$subject.'</td>
                            <td>
                            '.$file.'
                            </td>
                            </tr>';
                    }
                    ?>
                   
                    
                    
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>