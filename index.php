<?php
session_start();
$postkey= md5(rand(1,100000));
$_SESSION['postkey'] = $postkey;
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">

        <title>Mega Test case</title>
    </head>
    <body>
        <div class="container small ">
            <div class="row">
                <div class="col-4-md panel">
                    <div class="">
                        <h1>File Upload 
                        </h1>
                        <hr/>
                        <form id="upload-form">
                            <label>
                                Enter Password to Encrypt Files</label>
                            <br>
                                <input type="password" id="password" class="text-field"/>
                                <input type="hidden" id="postkey" value="<?=$postkey?>" />
                                <hr/>
                                <label>
                                    Upload File</label>
                            </br>
                            <input type="file" class="input-file" id="upload-file"/>
                            <p class="text-field disable" id="upload-name">select a file</p>
                            <div class="container">
                                <div class="row">
                                    <label tabindex="0" for="upload-file" class="button col-4-md" id="btn-browse">Browse</label>
                                    <button class="button col" id="btn-upload">UPLOAD</button>
                                </div>
                            </div>
                            <div id="message"></div>
                        </form>
                    </div>
                </div>
                <div class="col status">
                    <div class="container align-middle">
                        <p class="title">Progress</p>
                        <hr/>
                        <div class="row head" id="rowhead">
                            <div class="col-2">DATE</div>
                            <div class="col-4">NAME</div>
                            <div class="col">PROGRESS</div>
                        </div>
                        <!-- <div class="row"> <div class="col-2">07/06/2018</div> <div class="col-4">zzzzz</div> <div class="col"> <div class="progress green"> <span style="width: 25%"></span> </div> </div> </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/bower_components/crypto-js/crypto-js.js"></script>
        <script src="/assets/js/main.js"></script>

    </body>
</html>
