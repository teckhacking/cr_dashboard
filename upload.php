<?php
include("./connect.php");
$msg = '';
if(isset($_POST['submit']))
{
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $subject = $_POST['subject'];
    $tmpfile = $file['tmp_name'];
    $rollNO = strtoupper($_POST['rollno']);
    $allowedExt = array('ppt','pptx');
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    
    if((strncmp('22R01A05',$rollNO,8) ===0)){
        if(in_array($fileActualExt, $allowedExt)){


            $fileDestination = $subject.'/'.$rollNO.'.'.$fileActualExt;
            if(file_exists($fileDestination)){
                $msg =  '
                        <div class="alert alert-danger" role="alert">
                            File already exists, Contact Developer
                        </div>   ';
            }
            else{
                move_uploaded_file($tmpfile,$fileDestination);
                $sql = "insert into `fileupload` (rollno, subject,file) values('$rollNO', '$subject','$fileDestination')";
                $result = mysqli_query($con,$sql);
                if($con){
                    $msg = '<div class="alert alert-success" role="alert">
                            Your file has been uploaded successfully. Go To display Page to display it
                        </div> ';
                }else{
                    $msg = 'something went wrong';

                }
                


            }


        }
        else{
            $msg =  '
                    <div class="alert alert-danger" role="alert">
                        File not allowed, Contact Developer
                    </div> ';

        }
    }
    else{
        $msg =  '<div class="alert alert-danger" role="alert">
                    Please enter proper roll no
                </div> ';
    }
    session_start();
    $_SESSION['msg'] = $msg;
    header('Location: index.php');

}

