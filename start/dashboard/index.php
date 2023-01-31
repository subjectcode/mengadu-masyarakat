<?php

    include_once 'init.php';

    //  Check login status
    if ($Auth->is_login()) {
        // If currect user has level property (admin, petugas), redirect to dashboard page
        // Else (masyarakat), redirect to homepage

        if (isset($Auth->currect_user()->level)) {
            redirect("dashboard/index.php");
        } 
        
        else if (lisset($Auth->currect_user()->level)) {
            redirect("/home.php");
        }
    }

    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Pengaduan Masyarakat</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="<?= url('/assets/css/index.css') ?>">

        <style>
            #landingPage {
                background-image: url("./assets/image/landing-bg.jpg");
                background-size: cover;
                height: 100vh;
            }

            #overlay {
                background: rgba(0, 0, 0,.5);
                height: inherit;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        
            <div id="landingPage">
                <div id="overlay">
                    <h1 class="title-1" style="color: white">Pengaduan Masyarakat</h1>
                    <br>
                    <div>
                        <a href="login.php" class="button-primary" style="margin-right: 5px">Login Masyarakat</a>
                        <a href="login-petugas.php" class="button-primary" style="margin-left: 5px">Login Petugas</a>

                    </div>
                </div>
            </div>   

    </body>
    </html>