
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Category - Spurgeon</title>

        <script>
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="<?=RUTA_URL?>/public/css/vendor.css">
        <link rel="stylesheet" href="<?=RUTA_URL?>/public/css/styles.css">

        <!-- favicons
        ================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <title>Document</title>
    </head>
    <body>
                <!-- preloader
        ================================================== -->
        <div id="preloader">
            <div id="loader" class="dots-fade">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- page wrap
        ================================================== -->
        <div id="page" class="s-pagewrap">
            <!-- # site header 
            ================================================== -->
            <header id="masthead" class="s-header">
                <div class="s-header__branding">
                    <p class="site-title">
                        <a href="<?=RUTA_URL?>" rel="home">Spurgeon.</a>
                    </p>
                </div>

                <div class="row s-header__navigation">

                    <nav class="s-header__nav-wrap">
        
                        <h3 class="s-header__nav-heading">Navigate to</h3>
        
                        <ul class="s-header__nav">
                            <li><a href="<?=RUTA_URL?>" title="">Home</a></li>
                            <li class="current-menu-item has-children">
                                <a href="#0" title="" class="">Categories</a>
                                <ul class="sub-menu">
                                    <li><a href="category.html">Design</a></li>
                                    <li><a href="category.html">Lifestyle</a></li>
                                    <li><a href="category.html">Inspiration</a></li>
                                    <li><a href="category.html">Work</a></li>
                                    <li><a href="category.html">Health</a></li>
                                    <li><a href="category.html">Photography</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#0" title="" class="">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="single-standard.html">Standard Post</a></li>
                                    <li><a href="single-video.html">Video Post</a></li>
                                    <li><a href="single-audio.html">Audio Post</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#0">Opciones</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=RUTA_URL?>./admin">Crear publicacion</a></li>
                                    <li><a href="logout.php">Cerrar sesi??n</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html" title="">Contact</a></li>
                        </ul> <!-- end s-header__nav -->

                    </nav> <!-- end s-header__nav-wrap -->
        
                </div> <!-- end s-header__navigation -->

                <div class="s-header__search">

                    <div class="s-header__search-inner">
                        <div class="row">
        
                            <form role="search" method="get" class="s-header__search-form" action="#">
                                <label>
                                    <span class="u-screen-reader-text">Search for:</span>
                                    <input type="search" class="s-header__search-field" placeholder="Search for..." value="" name="s" title="Search for:" autocomplete="off">
                                </label>
                                <input type="submit" class="s-header__search-submit" value="Search"> 
                            </form>
        
                            <a href="#0" title="Close Search" class="s-header__search-close">Close</a>
        
                        </div> <!-- end row -->
                    </div> <!-- s-header__search-inner -->
        
                </div> <!-- end s-header__search -->

                <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                <a class="s-header__search-trigger" href="#">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
                    </svg>
                </a>

            </header> <!-- end s-header -->