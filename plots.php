<!DOCTYPE HTML>
<html>
<head>
    <title>Pillar Real Estate Plots</title>
    <link href="css/style3.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


        <script src="js/jquery.min.js"></script>
    <!---//script---->
    <!-----768px-menu----->
    <link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="js/jquery.mmenu.js"></script>
    <script type="text/javascript">
        //	The menu on the left
        $(function() {
            $('nav#menu-left').mmenu();
        });
    </script>
    <!-----//768px-menu----->
    <!---strat-slider---->
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
    <!---//strat-slider---->
</head>
<body>


<div class="gallery">
    <div class="container">
        <ul id="filters" class="clearfix">
            <li><span class="filter" data-filter="app ">High Cost</span></li>
            <li><span class="filter" data-filter="card">Medium Cost</span></li>
            <li><span class="filter" data-filter="web icon">Low Cost</span></li>
            <li><span class="filter active" data-filter="app card icon logo web">All</span></li>
        </ul>
        <div id="portfoliolist" style="     ">
            <div class="portfolio logo1 mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a class="popup-with-zoom-anim zoom pink" href="#small-dialog1">
                        <img src="images/13.jpg" alt="Image 2" style="top: 0px;">
                    </a>
                </div>
            </div>
            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a class="popup-with-zoom-anim zoom pink" href="#small-dialog1">
                        <img src="images/14.jpg" alt="Image 2" style="top: 0px;">
                    </a>
                    <p>App</p>
                </div>
            </div>
            <div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a class="popup-with-zoom-anim zoom pink" href="#small-dialog1">
                        <img src="images/15.jpg" alt="Image 2" style="top: 0px;">
                    </a>
                    <p>card</p>
                </div>
            </div>
            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a class="popup-with-zoom-anim zoom pink" href="#small-dialog1">
                        <img src="images/13.jpg" alt="Image 2" style="top: 0px;">
                    </a>
                    <p>icon</p>
                </div>
            </div>

            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a class="popup-with-zoom-anim zoom pink" href="#small-dialog1">
                        <img src="images/14.jpg" alt="Image 2" style="top: 0px;">
                    </a>
                </div>
            </div>

            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a class="popup-with-zoom-anim zoom pink" href="#small-dialog1">
                        <img src="images/15.jpg" alt="Image 2" style="top: 0px;">
                    </a>
                </div>
            </div>
            <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a class="popup-with-zoom-anim zoom pink" href="#small-dialog1">
                        <img src="images/13.jpg" alt="Image 2" >
                    </a>
                </div>
            </div>

            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                <div class="portfolio-wrapper">
                    <a class="popup-with-zoom-anim zoom pink" href="#small-dialog1">
                        <img src="images/14.jpg" alt="Image 2" style="top: 0px;">
                    </a>
                </div>
            </div>
        </div>
    </div><!-- container -->
    <div class="clear"> </div>
    <!---start-gallery-script----->
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var filterList = {
                init: function () {
                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });
                },
                hoverEffect: function () {
                }
            };
            // Run the show!
            filterList.init();
        });
    </script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>

</body>
</html>
