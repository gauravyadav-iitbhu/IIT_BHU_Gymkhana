<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gymkhana Information Portal | IIT (BHU) Varanasi</title>

        <!-- Bootstrap minified CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
        <!-- News Ticker CSS -->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.vertical-tabs.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>       
        <!-- font -->
        <link href='https://fonts.googleapis.com/css?family=Arya&subset=latin,devanagari' rel='stylesheet' type='text/css'>


        <style type="text/css">


        </style>

    </head>

    <body>
        <div class="top-line"></div>

        <?php include_once("header.php"); ?>
        <?php include_once("navigation.php"); ?>

        <div class="wrapper">
            <div class="container bg">

                <div class="col-sm-12 margin-bottom-50">

                    <div class="col-xs-2"> <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left text-center">
                            <li class=""><a href="#home" data-toggle="tab" aria-expanded="false">Home</a></li>
                            <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                            <li class=""><a href="#messages" data-toggle="tab" aria-expanded="false">Messages</a></li>
                            <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Settings</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-10">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane" id="home">                
                                <div class="upcoming"><!--START Festivals-->
                                    <p class="upcoming-header text-left">Upcoming Events</p>  

                                    <time datetime="2014-09-20" class="icon">
                                        <em>Saturday</em>
                                        <strong>September</strong>
                                        <span>20</span>
                                    </time>
                                </div><!--END Festivals-->
                            </div>
                            <div class="tab-pane" id="profile">Profile Tab.</div>
                            <div class="tab-pane" id="messages">Messages Tab.</div>
                            <div class="tab-pane active" id="settings">Settings Tab.</div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>


        <?php include_once("footer.php"); ?>


        <!-- JQuery JavaScript -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <!-- Bootstrap JavaScript -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>



    </body>

</html>
