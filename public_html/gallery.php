<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gallery | Gymkhana - IIT (BHU) Varanasi</title>

        <!-- Bootstrap minified CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>        
        <!--staple CSS-->
        <link href="assets/css/stapel.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/staple-design.css" rel="stylesheet" type="text/css"/>
        <!--featherlight plugin-->
        <link href="assets/css/featherlight.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/featherlight.gallery.css" rel="stylesheet" type="text/css"/>
        <!--Custom stylesheet-->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!--Mordernizr Javascript for staple-->
        <script src="assets/js/modernizr.custom.63321.js" type="text/javascript"></script>

        <style type="text/css">

        </style>

    </head>

    <body>
        <div class="top-line"></div>

        <?php include_once("header.php"); ?>
        <?php include_once("navigation.php"); ?>

        <div class="wrapper bg2">
            <div class="gallery-wrapper padding-bottom-50">

                <div class="topbar">
                    <span id="close" class="back"><i class="glyphicon glyphicon-arrow-left"></i></span>
                    <h3 id="name"></h3>
                </div>

                <ul id="tp-grid" class="tp-grid"   data-featherlight-gallery
                    data-featherlight-filter="a">


                    <?php
                    foreach (glob('only-gallery-images/*') as $dir) {
                        echo "<!-- '$dir' Area Start-->"; // Comment per directory
                        $pile_name = substr($dir, 20);
                        $folder_name = strlen($pile_name);
                        foreach (glob($dir . "/*.*") as $img) {
                            $x = 20 + $folder_name;
                            $full_img = substr($img, $x);
                            echo "
	                       <li data-pile='$pile_name'>
	                       <a class='image.$dir' href='$dir/full$full_img'>
	                       <img src='$img'/>
	                       </a>
	                       </li>
	                     ";
                        }
                        echo "  ";
                    }
                    ?>

                </ul>
            </div>
        </div>


        <?php include_once("footer.php"); ?>


        <!-- JQuery JavaScript -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Custom JavaScript -->
        <script src="assets/js/custom.js" type="text/javascript"></script>        
        <!-- featherlight PLUGIN -->
        <script src="assets/js/featherlight.js" type="text/javascript"></script>
        <script src="assets/js/featherlight.gallery.js" type="text/javascript"></script>
             
        <!--Staple Pile Gallery Javascript-->
        <script src="assets/js/jquery.stapel.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(function () {
                        
        var $grid = $('#tp-grid'),
                        $name = $('#name'),
                        $close = $('#close'),
                        $loader = $('<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>').insertBefore($grid),
                            stapel = $grid.stapel({
                    delay: 0,
                                onLoad: function () {
                            $loader.remove();
                    },
                                onBeforeOpen: function (pileName) {
                            $name.html(pileName);
                    },
                                onAfterOpen: function (pileName) {
                        $close.show();
                }
                });
                    $close.on('click', function () {
                    $close.hide();
                $name.empty();
            stapel.closePile();
        });

    });
        </script>

        
    </body>

</html>
