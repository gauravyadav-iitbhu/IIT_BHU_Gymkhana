<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gymkhana Information Portal | IIT (BHU) Varanasi</title>

        <!-- Bootstrap minified CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- News Ticker CSS -->
        <link href="assets/css/news-ticker.css" rel="stylesheet" type="text/css"/>
        <!--Custom stylesheet-->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>  

        <style type="text/css">


        </style>

    </head>

    <body>
        <div class="top-line"></div>

        <?php include_once("header.php"); ?>
        <?php include_once("navigation.php"); ?>

        <div class="wrapper bg2">
            <div class="container bg padding-bottom-20">

                <div class="col-md-8"><!--START Left hand side area-->

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Slideshow START  -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="img/slider/1.jpg" alt="Chania">
                                        <div class="carousel-caption">
                                            <p class="caption-head">Rampur Lawn</p>
                                            <p>IIT (BHU) Varanasi</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="img/slider/2.jpg" alt="Chania">
                                        <div class="carousel-caption">
                                            <p class="caption-head">Gymkhana</p>
                                            <p>IIT (BHU) Varanasi.</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="img/slider/3.jpg" alt="Flower">
                                        <div class="carousel-caption">
                                            <p class="caption-head">Spardha</p>
                                            <p>Opening Ceremony</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="img/slider/4.jpg" alt="Flower">
                                        <div class="carousel-caption">
                                            <p class="caption-head">Technex</p>
                                            <p>Quadcopter Demonstration</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right-side carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div><!-- END Slideshow  -->
                        </div>
                    </div>

                </div><!--END Left hand side area-->

                <div class="col-md-4 text-center"> <!--START Right hand side area-->

                    <div class="margin-bottom-20" id="news-ticker-container"><!--START NEWS Ticker-->                    
                        <div class="news-ticker-header text-left">
                            <span>News</span>
                        </div>
                        <ul class="news-ticker" id="news-ticker" style="height: 240px; overflow: hidden;">

                        </ul>
                        <div class="news-ticker-controller">
                            <div class="controller-wrapper">
                                <i class="glyphicon glyphicon-arrow-up" id="news-ticker-prev"></i>
                                <i class="glyphicon glyphicon-arrow-down" id="news-ticker-next"></i>
                                <i class="glyphicon glyphicon-play" id="start-button"></i>
                                <i class="glyphicon glyphicon-stop" id="stop-button"></i>   
                            </div>
                            <div class="news-archive">
                                <span><a href="#">News Archive</a></span>
                            </div>
                        </div>
                    </div><!--END NEWS Ticker-->

                    <div class="margin-bottom-20" id="news-ticker-container"><!--START Upcoming Event Ticker-->                    
                        <div class="upcoming-ticker-header text-left">
                            <span>Upcoming Events</span>
                        </div>
                        <ul class="news-ticker upcoming-ticker" id="upcoming-ticker" style="height: 240px; overflow: hidden;">

                        </ul>
                        <div class="news-ticker-controller">
                            <i class="glyphicon glyphicon-arrow-up" id="upcoming-ticker-prev"></i>
                            <i class="glyphicon glyphicon-arrow-down" id="upcoming-ticker-next"></i> 
                        </div>
                    </div><!--END Upcoming Event Ticker-->

                </div><!--END Right hand side area-->

            </div>
        </div>


        <?php include_once("footer.php"); ?>


        <!-- JQuery JavaScript -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Custom JavaScript -->
        <script src="assets/js/custom.js" type="text/javascript"></script>

        <script src="assets/js/jquery.newsTicker.min.js" type="text/javascript"></script>
        <script>
            var nt_example1 = $('#news-ticker').newsTicker({
                row_height: 75,
                max_rows: 4,
                duration: 3000,
                prevButton: $('#news-ticker-prev'),
                nextButton: $('#news-ticker-next'),
                stopButton: $('#stop-button'),
                startButton: $('#start-button')
            });
        </script>
        <script>
            var nt_example1 = $('#upcoming-ticker').newsTicker({
                row_height: 70,
                max_rows: 4,
                duration: 3000000,
                prevButton: $('#upcoming-ticker-prev'),
                nextButton: $('#upcoming-ticker-next'),
            });
        </script>


    </body>

</html>
