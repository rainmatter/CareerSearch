<!DOCTYPE html>
<!--
CareerSearch version 2.0
Author: Kimberly Stewart
Created: 1/21/2016
Last updates: 1/21/2016
-->
<html>
    <head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CareerSearch version 2.0</title>
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- My CSS style sheet -->
        <link href="css/jsstyles.css" rel="stylesheet">
    </head>
</head>
<body>

    <!-- Begin header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 text-center">
                    <h1>CareerSearch version 2.0</h1>
                </div>
                <div class="col-xs-12 col-sm-4 col-sm-offset-3 text-center log-in-box">
                    Login or create account
                </div>
            </div>
        </div>
    </header>

    <!-- Begin navigation bar -->
    <nav class="navbar navbar-primary">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar">
                    <!-- Functions for switching between content. -->
                    <li class="active"><a href="#">Search Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Why work here <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Design Info <span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Begin content -->
    <div class="content-area">
        <div class="container">
            <div class="row">
                <!-- Begin search aside -->
                <aside class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                    Search
                </aside>
            </aside>
                <!-- Begin Content section -->
                <section class="col-xs-12 col-sm-9 col-md-7">

                <?php
                echo "New Career Search"
                ?>

            </section>
                
            </div>

            

            
        </div>
    </div>



    <!-- Begin footer -->
    <footer>
        Footer.
    </footer>

</body>
</html>
