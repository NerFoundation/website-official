<?php
$langSource = require("lang.php");
$socials = $langSource["socials"];
$lang = $_GET['lang'];
if ($lang == "") {
    if (!isset($_COOKIE["lang"])) {
        $lang = "en";
    } else {
        $lang = $_COOKIE["lang"];
    }
}
setcookie("lang", $lang, time() + (10 * 365 * 24 * 60 * 60));
$position = $langSource['lang'][$lang];
$ver = "3.1";
?>

<!DOCTYPE html>
<html class="no-js" lang="<?= $lang ?>">

<head>
    <title>Nerves - Neuronet of things</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta name="viewport"
          content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui"/>

    <meta name="theme-color" content="#3F6EBF"/>
    <meta name="msapplication-navbutton-color" content="#3F6EBF"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#3F6EBF"/>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico?ver=<?= $ver ?>">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css?ver=<?= $ver ?>">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css?ver=<?= $ver ?>">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css?ver=<?= $ver ?>" type="text/css">
    <link rel="stylesheet" href="css/style.min.css?ver=<?= $ver ?>" type="text/css">

    <!-- Load google font
    ================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: {families: ['Open+Sans:300,400,500', 'Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700']}
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- Load other scripts
    ================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement,
            isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

        _html.className = _html.className.replace("no-js", "js");

        isTouch ? _html.classList.add("touch") : _html.classList.add("no-touch");
    </script>
    <script type="text/javascript" src="js/device.min.js?ver=<?= $ver ?>"></script>
</head>

<body>
<!-- start header -->
<header id="top-bar" class="top-bar--light">
    <div id="top-bar__inner">
        <a id="top-bar__logo" class="site-logo" href="index.php">
            <img class="img-responsive" width="175" height="42" src="img/site_logo.svg" alt=""/>
            <img class="img-responsive" width="175" height="42" src="img/site_logo_2.svg" alt=""/>
        </a>

        <a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

        <div id="top-bar__navigation-wrap">
            <div>
                <nav id="top-bar__navigation" class="navigation" role="navigation">
                    <ul>
                        <li>
                            <a href="#wp"><span><?= $langSource["nav"]["white-paper"][$position] ?></span></a>
                        </li>

                        <li>
                            <a href="#team"><span><?= $langSource["nav"]["team"][$position] ?></span></a>
                        </li>

                        <li>
                            <a href="#token"><span><?= $langSource["nav"]["token"][$position] ?></span></a>
                        </li>

                        <li>
                            <a href="#roadmap"><span><?= $langSource["nav"]["road-map"][$position] ?></span></a>
                        </li>

                        <li>
                            <a href="#faq"><span><?= $langSource["nav"]["faq"][$position] ?></span></a>
                        </li>
                    </ul>
                </nav>

                <br class="hide--lg">

                <ul id="top-bar__subnavigation">
                    <li>
                        <div id="top-bar__choose-lang">
                            <div class="list-wrap">
                                <ul class="list">
                                    <?php if (!$position) { ?>
                                        <a href="/?lang=kr">
                                            <i><img class=" img-responsive  circled" src="img/ico/flag/kr.png?ver=<?= $ver ?>" width="25" height="25" alt=""></i></a>
                                    <?php } else { ?>
                                        <a href="/?lang=en">
                                            <i><img class=" img-responsive  circled" src="img/ico/flag/en.png?ver=<?= $ver ?>" width="25" height="25" alt=""></i></a>
                                    <?php } ?>
                                </ul>
                            </div>

                            <?php if ($position) { ?>
                                <i><img class=" img-responsive  circled" src="img/ico/flag/kr.png?ver=<?= $ver ?>" width="25" height="25" alt=""></i>
                            <?php } else { ?>
                                <i><img class=" img-responsive  circled" src="img/ico/flag/en.png?ver=<?= $ver ?>" width="25" height="25" alt=""></i>
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- start start screen -->
<div id="start-screen" class="start-screen--light start-screen--style-4">
    <div class="start-screen__static-bg jarallax" data-speed="0.3">

        <div class="start-screen__content  text--center">
            <div class="start-screen__content__inner">
                <div class="grid grid--container">
                    <div class="row row--xs-middle">
                        <div class="col col--md-10 col--lg-8 col--xl-7">
                            <p><?= $langSource["header"]["title_1"][$position] ?></p>
                            <h1 class="h2 __title">
                                <?= $langSource["header"]["title_2"][$position] ?>
                            </h1>
                            <p>
                                <a class="custom-btn custom-btn--medium custom-btn--style-2" style="margin-top: 20px;"
                                   href="#wp"><?= $langSource["header"]["white-paper"][$position] ?></a>

                                <a class="custom-btn custom-btn--medium custom-btn--style-4" style="margin-top: 20px;"
                                   href="<?= $socials["tele_bot"] ?>"><?= $langSource["header"]["join-airdrop"][$position] ?></a>
                            </p>
                            <div class="social-btns">
                                <a class="fa fa-twitter" href="<?= $socials["twitter"] ?>"></a>
                                <a class="fa fa-paper-plane-o" href="<?= $socials["tele_channel"] ?>"></a>
                                <a class="fa fa-paper-plane" href="<?= $socials["tele_en"] ?>"></a>
                                <a class="fa fa-telegram" href="<?= $socials["tele_kr"] ?>"></a>
                                <a class="fa fa-reddit" href="<?= $socials["reddit"] ?>"></a>
                                <a class="fa fa-medium" href="<?= $socials["medium"] ?>"></a>
                                <a class="fa fa-github" href="<?= $socials["github"] ?>"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <canvas class="scene scene--full" id="scene" style="z-index: -1"></canvas>
                <script type="x-shader/x-vertex" id="wrapVertexShader">
					#define PI 3.1415926535897932384626433832795
					attribute float size;
					void main() {
						vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
						gl_PointSize = 3.0;
						gl_Position = projectionMatrix * mvPosition;
					}
                </script>
                <script type="x-shader/x-fragment" id="wrapFragmentShader">
					uniform sampler2D texture;
					void main(){
						vec4 textureColor = texture2D( texture, gl_PointCoord );
						if ( textureColor.a < 0.3 ) discard;
						// vec4 dotColor = vec4(0.9, 0.9, 0.9, 1.0);

						//vec4 dotColor = vec4(0.9, 0.9, 0.9, 1.0);
						vec4 dotColor = vec4(0.36, 0.78, 0.83, 1.0);
						vec4 color = dotColor * textureColor;
						gl_FragColor = color;
					}
                </script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/91/three.min.js?ver=<?= $ver ?>"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js?ver=<?= $ver ?>"></script>

                <script type="text/javascript">
                    var canvas = document.querySelector('#scene');
                    var width = canvas.offsetWidth,
                        height = canvas.offsetHeight;

                    var renderer = new THREE.WebGLRenderer({
                        canvas: canvas,
                        antialias: true,
                        alpha: true
                    });
                    renderer.setPixelRatio(window.devicePixelRatio > 1 ? 2 : 1);
                    renderer.setSize(width, height);
                    renderer.setClearColor(0x000000, 0);

                    var scene = new THREE.Scene();

                    var camera = new THREE.PerspectiveCamera(50, width / height, 0.1, 2000);
                    camera.position.set(0, 0, 80);

                    var loader = new THREE.TextureLoader();
                    loader.crossOrigin = "Anonymous";
                    var dotTexture = loader.load('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABABAMAAABYR2ztAAAAMFBMVEVMaXH////////////////////////////////////////////////////////////6w4mEAAAAD3RSTlMAH6eN8Q6A6sXaVWEGdDZ7wvYCAAABNElEQVR4XoXWv0oDQRAG8BGJKJHD2iZd2rP1AWzSXApJKkEEa6tAuk1nIySQxi4E7M830NIXsPZeIceS+xPCuGhYbpPd+b76B7c3uzuz1Mzlw3Oix90l+RNd8y7zzAfuFmxTfR+CgeJGisd90FbspHh3wdGU91JeOOCND9JrgmP25IpszmMfyD8t+GJvXiyI/SB3ViCtIg2BeleDJAT0fy1OOZjJH/gIgw2ZtFQYFH0DTljIvQFDCYwM+JHA1oCFBCqiiMVkts7Bap/JYEYdGawolUFNTzJYUyyDnKYyKEnJoKJEBpoYBAGNPlHARcLfhIWCpYabBbcbHhh45OChxcceX5xbCdzAywuvP2ogsAXBJgbbIG6kuBXjZo7HAR4oeCThoYbHIh6seDTj4W6fB6/u8+AX8dE3oDCbIgYAAAAASUVORK5CYII=');

                    var radius = 50;
                    var sphereGeom = new THREE.IcosahedronGeometry(radius, 5);
                    var dotsGeom = new THREE.Geometry();
                    var bufferDotsGeom = new THREE.BufferGeometry();
                    var positions = new Float32Array(sphereGeom.vertices.length * 3);
                    for (var i = 0; i < sphereGeom.vertices.length; i++) {
                        var vector = sphereGeom.vertices[i];
                        animateDot(i, vector);
                        dotsGeom.vertices.push(vector);
                        vector.toArray(positions, i * 3);
                    }

                    function animateDot(index, vector) {
                        TweenMax.to(vector, 4, {
                            x: 0,
                            z: 0,
                            ease: Back.easeOut,
                            delay: Math.abs(vector.y / radius) * 2,
                            repeat: -1,
                            yoyo: true,
                            yoyoEase: Back.easeOut,
                            onUpdate: function () {
                                updateDot(index, vector);
                            }
                        });
                    }

                    function updateDot(index, vector) {
                        positions[index * 3] = vector.x;
                        positions[index * 3 + 2] = vector.z;
                    }

                    var attributePositions = new THREE.BufferAttribute(positions, 3);
                    bufferDotsGeom.addAttribute('position', attributePositions);
                    var shaderMaterial = new THREE.ShaderMaterial({
                        uniforms: {
                            texture: {
                                value: dotTexture
                            }
                        },
                        vertexShader: document.getElementById("wrapVertexShader").textContent,
                        fragmentShader: document.getElementById("wrapFragmentShader").textContent,
                        transparent: true
                    });
                    var dots = new THREE.Points(bufferDotsGeom, shaderMaterial);
                    scene.add(dots);

                    function render(a) {
                        dots.geometry.verticesNeedUpdate = true;
                        dots.geometry.attributes.position.needsUpdate = true;
                        renderer.render(scene, camera);
                    }

                    function onResize() {
                        canvas.style.width = '';
                        canvas.style.height = '';
                        width = canvas.offsetWidth;
                        height = canvas.offsetHeight;
                        camera.aspect = width / height;
                        camera.updateProjectionMatrix();
                        renderer.setSize(width, height);
                    }

                    var mouse = new THREE.Vector2(0.8, 0.5);

                    function onMouseMove(e) {
                        mouse.x = (e.clientX / window.innerWidth) - 0.5;
                        mouse.y = (e.clientY / window.innerHeight) - 0.5;
                        TweenMax.to(dots.rotation, 4, {
                            x: (mouse.y * Math.PI * 0.5),
                            z: (mouse.x * Math.PI * 0.2),
                            ease: Power1.easeOut
                        });
                    }

                    TweenMax.ticker.addEventListener("tick", render);
                    window.addEventListener("mousemove", onMouseMove);
                    var resizeTm;
                    window.addEventListener("resize", function () {
                        resizeTm = clearTimeout(resizeTm);
                        resizeTm = setTimeout(onResize, 200);
                    });
                </script>
            </div>

        </div>

    </div>

</div>
<!-- end start screen -->

<!-- start main -->
<main role="main">
    <!-- start section -->
    <section class="section">
        <div class="grid grid--container">
            <div class="row">
                <div class="col col--md-6 col--lg-5">
                    <div data-aos="fade-right" data-aos-offset="100">
                        <div class="section-heading  col-MB-30">
                            <h5 class="__subtitle"><?= $langSource["what-nerves"]["section"][$position] ?></h5>
                            <h2 class="__title"><?= $langSource["what-nerves"]["title"][$position] ?></h2>
                        </div>

                    </div>
                </div>

                <div class="col hide--md col-MB-30"></div>

                <div class="col col--md-6 col--lg-7">
                    <p data-aos="fade-up" data-aos-offset="100">
                        <?= $langSource["what-nerves"]["p6"][$position] ?>
                    </p>
                </div>
            </div>

            <!-- start video -->
            <div class="video-container" data-aos="fade-up">
                <img class="img-responsive center-block lazy" src="img/video_bg.png" data-src="img/video_bg.png?ver=<?= $ver ?>"
                     alt=""/>

                <div class="__video" style="max-width: 300px;">
                    <div class="__wrp">
                        <div class="embed-responsive">
                            <div class="__bg embed-responsive-item">
                                <div class="__btn_wrp">
                                    <a class="__play-btn  circled" data-fancybox
                                       href="#"></a>

                                    <!--                                    <span class="__desc" style="color: #333">Video Presentation</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end video -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--no-pt">
        <div class="grid grid--container">
            <div class="section-heading section-heading--center  col-MB-60">
                <h5 class="__subtitle"><?= $langSource["meet-nerves"]["section"][$position] ?></h5>
                <h2 class="__title"><?= $langSource["meet-nerves"]["title"][$position] ?></h2>
            </div>

            <!-- start feature -->
            <div class="feature feature--style-2  text--center text--sm-left">
                <div class="__inner">
                    <div class="row">
                        <!-- start item -->
                        <div class="col col--sm-6 col--lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="100" data-aos-offset="100">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif"
                                             data-src="img/feature_img/1_1.png?ver=<?= $ver ?>" width="80" height="80"
                                             alt=""/>
                                    </i>

                                    <h3 class="__title"><?= $langSource["meet-nerves"]["feature_1"][$position] ?></h3>

                                    <p><?= $langSource["meet-nerves"]["p1"][$position] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--sm-6 col--lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="150" data-aos-offset="100">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif"
                                             data-src="img/feature_img/2_1.png?ver=<?= $ver ?>" width="80" height="80"
                                             alt=""/>
                                    </i>

                                    <h3 class="__title"><?= $langSource["meet-nerves"]["feature_2"][$position] ?></h3>

                                    <p><?= $langSource["meet-nerves"]["p2"][$position] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--sm-6 col--lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="200" data-aos-offset="100">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif"
                                             data-src="img/feature_img/3_1.png?ver=<?= $ver ?>" width="80" height="80"
                                             alt=""/>
                                    </i>

                                    <h3 class="__title"><?= $langSource["meet-nerves"]["feature_3"][$position] ?></h3>

                                    <p><?= $langSource["meet-nerves"]["p3"][$position] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--sm-6 col--lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="250" data-aos-offset="100">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif"
                                             data-src="img/feature_img/4_1.png?ver=<?= $ver ?>" width="80" height="80"
                                             alt=""/>
                                    </i>

                                    <h3 class="__title"><?= $langSource["meet-nerves"]["feature_4"][$position] ?></h3>

                                    <p><?= $langSource["meet-nerves"]["p4"][$position] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--sm-6 col--lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="300" data-aos-offset="100">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif"
                                             data-src="img/feature_img/5_1.png?ver=<?= $ver ?>" width="80" height="80"
                                             alt=""/>
                                    </i>

                                    <h3 class="__title"><?= $langSource["meet-nerves"]["feature_5"][$position] ?> </h3>

                                    <p><?= $langSource["meet-nerves"]["p5"][$position] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--sm-6 col--lg-4">
                            <div class="__item" data-aos="fade" data-aos-delay="350" data-aos-offset="100">
                                <div class="__content">
                                    <i class="__ico">
                                        <img class="img-responsive lazy" src="img/blank.gif"
                                             data-src="img/feature_img/6_1.png?ver=<?= $ver ?>" width="80" height="80"
                                             alt=""/>
                                    </i>

                                    <h3 class="__title"><?= $langSource["meet-nerves"]["feature_6"][$position] ?></h3>

                                    <p><?= $langSource["meet-nerves"]["p6"][$position] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    </div>
                </div>
            </div>
            <!-- end feature -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--light-blue-bg section-chart" id="token">

        <div class="grid grid--container">
            <div class="row row--xs-center">
                <div class="col col--md-6 col--lg-5">
                    <div class="section-heading">
                        <h5 class="__subtitle"><?= $langSource["chart"]["section"][$position] ?></h5>
                    </div>

                    <h5><?= $langSource["chart"]["amount"][$position] ?></h5>

                    <div class="token-label team-token"></div>
                    25% <?= $langSource["chart"]["percent_1"][$position] ?> <br>
                    <div class="token-label angel-token"></div>
                    8% <?= $langSource["chart"]["percent_2"][$position] ?> <br>
                    <div class="token-label invest-token"></div>
                    17% <?= $langSource["chart"]["percent_3"][$position] ?> <br>
                    <div class="token-label found-token"></div>
                    10% <?= $langSource["chart"]["percent_4"][$position] ?> <br>
                    <div class="token-label stake-token"></div>
                    15% <?= $langSource["chart"]["percent_5"][$position] ?> <br>
                    <div class="token-label airdrop-token"></div>
                    20% <?= $langSource["chart"]["percent_6"][$position] ?> <br>
                    <div class="token-label reward-token"></div>
                    5% <?= $langSource["chart"]["percent_7"][$position] ?> <br>

                </div>

                <div class="col hide--md col-MB-40"></div>

                <div class="col col--md-6 col--lg-offset-1">
                    <div style="width:100%">
                        <canvas id="canvas_00002" width="100%" height="90%"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="section jarallax" data-speed="0.5" id="roadmap">
        <div class="grid grid--container">
            <div class="section-heading section-heading--center section-heading--white  col-MB-60">
                <h5 class="__subtitle"><?= $langSource["road-map"]["section"][$position] ?></h5>

                <h2 class="__title"><?= $langSource["road-map"]["title"][$position] ?></h2>
            </div>

            <!-- start timeline -->
            <div class="timeline timeline--style-1 timeline--light-color">
                <div class="row row--xs-middle row--no-gutters">
                    <div class="col col--xs-12">

                        <div class="roadmap-carousel-container animated" data-animate="fadeInUp" data-delay=".3">
                            <div class="roadmap-carousel">
                                <?php foreach ($langSource["road-map"]["road"][$position] as $item) { ?>
                                    <div class="roadmap-item <?php if ($item[2] == "done") echo "roadmap-done" ?> <?php if ($item[2] == "active") echo "roadmap-active" ?>">
                                        <h6><?= $item[0] ?></h6>
                                        <p><?= $item[1] ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <style>
                            #roadmap ul {
                                list-style-type: square;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <!-- end timeline -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--light-blue-bg section-wp" id="wp">

        <div class="grid grid--container">
            <!-- start documents -->
            <div class="documents documents--style-2">
                <div class="__inner">
                    <div class="row">
                        <!-- start item -->
                        <div class="col col--md-6 col--xs-6 col--sm-6">
                            <a href="<?= $langSource["link-wp"][0] ?>?ver=<?= $ver ?>" class="__document" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="80">
                                <img src="img/wp-en.svg?ver=<?= $ver ?>" class="img-response">

                                <span class="h5">Whitepaper EN</span>
                            </a>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--md-6 col--xs-6 col--sm-6">
                            <a href="<?= $langSource["link-wp"][1] ?>?ver=<?= $ver ?>" class="__document" data-aos="zoom-in" data-aos-delay="100" data-aos-offset="80">
                                <img src="img/wp-kr.svg?ver=<?= $ver ?>" class="img-response">

                                <span class="h5">Whitepaper KR</span>
                            </a>
                        </div>
                        <!-- end item -->

                    </div>
                </div>
            </div>
            <!-- end documents -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section">
        <div class="grid grid--container">
            <div class="section-heading section-heading--center  col-MB-60">
                <h5 class="__subtitle"><?= $langSource["nerves-blockchain"]["section"][$position] ?></h5>

                <h2 class="__title"><?= $langSource["nerves-blockchain"]["title"][$position] ?></h2>
            </div>

            <div class="row">
                <div class="col col--md-5 col--lg-4">
                    <div data-aos="fade-right" data-aos-offset="200">
                        <table class="col-MB-35" style="line-height: 2;">
                            <tr>
                                <td><h5><?= $langSource["nerves-blockchain"]["token"]["label_1"][$position] ?></h5></td>
                                <td>Nerves</td>
                            </tr>

                            <tr>
                                <td><h5><?= $langSource["nerves-blockchain"]["token"]["label_2"][$position] ?></h5></td>
                                <td>ERC-20</td>
                            </tr>

                            <tr>
                                <td><h5><?= $langSource["nerves-blockchain"]["token"]["label_3"][$position] ?></h5></td>
                                <td>NER</td>
                            </tr>

                            <tr>
                                <td><h5><?= $langSource["nerves-blockchain"]["token"]["label_4"][$position] ?></h5></td>
                                <td>5,000,000,000 NER</td>
                            </tr>

                            <tr>
                                <td><h5><?= $langSource["nerves-blockchain"]["token"]["label_5"][$position] ?></h5></td>
                                <td>7,000,000,000 NER</td>
                            </tr>

                            <tr>
                                <td><h5><?= $langSource["nerves-blockchain"]["token"]["label_6"][$position] ?></h5></td>
                                <td>21,000,000,000 NER</td>
                            </tr>

                            <tr>
                                <td><h5><?= $langSource["nerves-blockchain"]["token"]["label_7"][$position] ?></h5></td>
                                <td><?= $langSource["nerves-blockchain"]["token"]["value_5"][$position] ?></td>
                            </tr>

                            <tr>
                                <td><h5><?= $langSource["nerves-blockchain"]["token"]["label_8"][$position] ?></h5></td>
                                <td><a href="https://etherscan.io/token/0xee5dfb5ddd54ea2fb93b796a8a1b83c3fe38e0e6">0xee5dfb5ddd54ea2fb93b796a8a1b83c3fe38e0e6</a></td>
                            </tr>
                        </table>

                        <a class="custom-btn custom-btn--medium custom-btn--style-1"
                           href="<?= $socials["tele_bot"] ?>"><?= $langSource["nerves-blockchain"]["button"]["join-airdrop"][$position] ?></a>
                    </div>
                </div>

                <div class="col hide--md col-MB-40"></div>

                <div class="col col--md-7 col--lg-7 col--lg-offset-1">
                    <div data-aos="fade-left" data-aos-offset="100">
                        <h3><?= $langSource["nerves-blockchain"]["p1"][$position] ?></h3>

                        <?= $langSource["nerves-blockchain"]["content_1"][$position] ?>
                    </div>

                    <br>

                    <div data-aos="fade-left" data-aos-delay="200" data-aos-offset="200">
                        <h3><?= $langSource["nerves-blockchain"]["p2"][$position] ?></h3>

                        <?= $langSource["nerves-blockchain"]["content_2"][$position] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section" id="faq">
        <div class="grid grid--container">
            <div class="section-heading section-heading--center  col-MB-60">
                <h5 class="__subtitle"><?= $langSource["faq"]["section"][$position] ?></h5>

                <h2 class="__title"><?= $langSource["faq"]["title"][$position] ?></h2>
            </div>

            <div class="row row--xs-middle">
                <div class="col col--lg-10">
                    <!-- start FAQ -->
                    <div class="faq">
                        <div class="accordion-container">
                            <?php foreach ($langSource["faq"]["qa"][$position] as $item) { ?>
                                <!-- start item -->
                                <div class="accordion-item">
                                    <div class="accordion-toggler">
                                        <h4 class="__title h5"><?= $item[0] ?></h4>

                                        <i class="circled"></i>
                                    </div>

                                    <article>
                                        <div class="__inner">
                                            <p>
                                                <?= $item[1] ?>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <!-- end item -->
                            <?php } ?>
                        </div>
                    </div>
                    <!-- end FAQ -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--light-blue-bg section-team" id="team">

        <div class="grid grid--container">
            <div class="section-heading section-heading--center  col-MB-60">
                <h5 class="__subtitle"><?= $langSource["team"]["section"][$position] ?></h5>

                <h2 class="__title"><?= $langSource["team"]["title"][$position] ?></h2>
            </div>

            <!-- start team -->
            <div class="team team--style-2 team--dark-color">
                <div class="__inner">
                    <div class="row">

                        <!-- start item -->
                        <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-3">
                            <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50"
                                 data-aos-duration="300" data-aos-delay="150">
                                <figure class="__image  center-block circled">
                                    <img class="img-responsive circled lazy" src="img/blank.gif"
                                         data-src="img/team_img/3.png?ver=<?= $ver ?>" width="110" height="110" alt=""/>

                                    <div class="social-btns">
                                        <a href="https://www.linkedin.com/in/joe-shzang-70572416b/" class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x linkedin-icon"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </a>
                                    </div>
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Joe Shzang</h5>
                                    <span class="__subtitle">Founder</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-3">
                            <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50"
                                 data-aos-duration="300" data-aos-delay="100">
                                <figure class="__image  center-block circled">
                                    <img class="img-responsive circled lazy" src="img/blank.gif"
                                         data-src="img/team_img/2.png?ver=<?= $ver ?>" width="110" height="110" alt=""/>

                                    <div class="social-btns">
                                        <a href="https://www.linkedin.com/in/yuan-zhang-27594216b/" class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x linkedin-icon"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </a>
                                    </div>
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Yuan Zhang</h5>
                                    <span class="__subtitle">CO-Founder</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-3">
                            <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50"
                                 data-aos-duration="300" data-aos-delay="200">
                                <figure class="__image  center-block circled">
                                    <img class="img-responsive circled lazy" src="img/blank.gif"
                                         data-src="img/team_img/4.png?ver=<?= $ver ?>" width="110" height="110" alt=""/>

                                    <div class="social-btns">
                                        <a href="#" class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x linkedin-icon"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </a>
                                    </div>
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Xiu Jun</h5>
                                    <span class="__subtitle">CEO</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-3">
                            <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50"
                                 data-aos-duration="300" data-aos-delay="50">
                                <figure class="__image  center-block circled">
                                    <img class="img-responsive circled lazy" src="img/blank.gif"
                                         data-src="img/team_img/1.png?ver=<?= $ver ?>" width="110" height="110" alt=""/>

                                    <div class="social-btns">
                                        <a href="https://www.linkedin.com/in/harshal-vinay-kulkar-7677a116b/" class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x linkedin-icon"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </a>
                                    </div>
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Harshal Vinay Kulkarni</h5>
                                    <span class="__subtitle">Blockchain Developer</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-3">
                            <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50"
                                 data-aos-duration="300" data-aos-delay="250">
                                <figure class="__image  center-block circled">
                                    <img class="img-responsive circled lazy" src="img/blank.gif"
                                         data-src="img/team_img/5.png?ver=<?= $ver ?>" width="110" height="110" alt=""/>
                                    <div class="social-btns">
                                        <a href="https://www.linkedin.com/in/toby-shepherd-bb679a16b" class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x linkedin-icon"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="__content">
                                    <h5 class="__title">Toby Shepherd</h5>
                                    <span class="__subtitle">Blockchain Architecture</span>
                                </div>

                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-3">
                            <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50"
                                 data-aos-duration="300" data-aos-delay="300">
                                <figure class="__image  center-block circled">
                                    <img class="img-responsive circled lazy" src="img/blank.gif"
                                         data-src="img/team_img/6.png?ver=<?= $ver ?>" width="110" height="110" alt=""/>

                                    <div class="social-btns">
                                        <a href="#" class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x linkedin-icon"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </a>
                                    </div>
                                </figure>

                                <div class="__content">
                                    <h5 class="__title">Dustin Deforest</h5>
                                    <span class="__subtitle">Community Manager</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-3">
                            <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50"
                                 data-aos-duration="300" data-aos-delay="300">
                                <figure class="__image  center-block circled">
                                    <img class="img-responsive circled lazy" src="img/blank.gif"
                                         data-src="img/team_img/7.png?ver=<?= $ver ?>" width="110" height="110" alt=""/>

                                    <div class="social-btns">
                                        <a href="#" class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x linkedin-icon"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </a>
                                    </div>
                                </figure>

                                <div class="__content">
                                    <h5 class="__title"></h5>
                                    <span class="__subtitle">Developer</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                        <!-- start item -->
                        <div class="col col--xs-6 col--sm-4 col--md-3 col--lg-3">
                            <div class="__item  text--center" data-aos="zoom-in" data-aos-offset="50"
                                 data-aos-duration="300" data-aos-delay="300">
                                <figure class="__image  center-block circled">
                                    <img class="img-responsive circled lazy" src="img/blank.gif"
                                         data-src="img/team_img/8.png?ver=<?= $ver ?>" width="110" height="110" alt=""/>

                                    <div class="social-btns">
                                        <a href="#" class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x linkedin-icon"></i>
                                            <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                        </a>
                                    </div>
                                </figure>

                                <div class="__content">
                                    <h5 class="__title"></h5>
                                    <span class="__subtitle">Developer</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->

                    </div>
                </div>
            </div>
            <!-- end team -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section">
        <div class="grid grid--container">
            <div class="section-heading section-heading--center  col-MB-60">
                <h2 class="__title"><?= $langSource["partners"]["title"][$position] ?></h2>
            </div>

            <div class="row row--xs-middle">
                <div class="col col--lg-10">
                    <div class="logos">
                        <div class="__inner">
                            <div class="row row--xs-center row--xs-around">
                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/partners/1.png?ver=<?= $ver ?>"
                                         alt=""/>
                                </div>
                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/partners/2.png?ver=<?= $ver ?>"
                                         alt=""/>
                                </div>
                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/partners/3.png?ver=<?= $ver ?>"
                                         alt=""/>
                                </div>
                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/partners/4.png?ver=<?= $ver ?>"
                                         alt=""/>
                                </div>
                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/partners/5.png?ver=<?= $ver ?>"
                                         alt=""/>
                                </div>
                                <div class="col col--xs-auto">
                                    <img class="lazy" src="img/blank.gif" data-src="img/partners/6.png?ver=<?= $ver ?>"
                                         alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="section section--blue-bg">
        <div class="grid grid--container">
            <div class="section-heading section-heading--center section-heading--white  col-MB-60">
                <h2 class="__title"><?= $langSource["sub"]["title"][$position] ?></h2>
            </div>

            <div class="center-block" style="max-width: 510px">
                <form class="form--horizontal" action="email" method="post">
                    <div class="b-table">
                        <div class="cell v-middle">
                            <div class="input-wrp">
                                <input class="textfield" type="email" name="email" value="" placeholder="E-mail"/>
                            </div>
                        </div>

                        <div class="cell v-middle">
                            <button class="custom-btn custom-btn--medium custom-btn--style-2" type="submit"
                                    role="button"><?= $langSource["sub"]["button"][$position] ?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- end section -->


</main>
<!-- end main -->

<!-- start footer -->
<footer id="footer" class="text--center text--lg-left">
    <div class="grid grid--container">
        <div class="row">
            <div class="col col--xs-12">
                <div class="__item">
                    <a class="site-logo" href="#">
                        <img class="img-responsive lazy" width="175" height="42" src="img/blank.gif" data-src="img/site_logo.svg?ver=<?= $ver ?>" alt=""/>
                    </a>
                </div>
            </div>
        </div>

        <div class="row row--xs-middle">
            <div class="col col--sm-10 col--md-8 col--lg-5">
                <div class="__item">
                    <address class="__text">
                        <a href="mailto:support@nerves.foundation">support@nerves.foundation</a>
                    </address>

                    <div class="social-btns">
                        <a class="fa fa-twitter" href="<?= $socials["twitter"] ?>"></a>
                        <a class="fa fa-paper-plane-o" href="<?= $socials["tele_channel"] ?>"></a>
                        <a class="fa fa-paper-plane" href="<?= $socials["tele_en"] ?>"></a>
                        <a class="fa fa-telegram" href="<?= $socials["tele_kr"] ?>"></a>
                        <a class="fa fa-reddit" href="<?= $socials["reddit"] ?>"></a>
                        <a class="fa fa-medium" href="<?= $socials["medium"] ?>"></a>
                        <a class="fa fa-github" href="<?= $socials["github"] ?>"></a>
                    </div>
                </div>
            </div>

            <div class="col col--sm-10 col--md-8 col--lg-7">
                <div class="__item">
                    <nav id="footer__navigation" class="navigation">
                        <div class="row row--xs-middle">
                            <div class="col col--xs-auto col--md-3 col--lg-4">
                                <ul class="__menu">
                                    <li><a href="#"><?= $langSource["nav"]["home"][$position] ?></a></li>
                                    <li><a href="#team"><?= $langSource["nav"]["team"][$position] ?></a></li>
                                </ul>
                            </div>

                            <div class="col col--xs-auto col--md-3 col--lg-4">
                                <ul class="__menu">
                                    <li><a href="#roadmap"><?= $langSource["nav"]["road-map"][$position] ?></a></li>
                                    <li><a href="#faq"><?= $langSource["nav"]["faq"][$position] ?></a></li>
                                </ul>
                            </div>

                            <div class="col hide--md col-MB-20"></div>

                            <div class="col col--xs-auto col--md-auto col--lg-4">
                                <ul class="__menu">
                                    <li><a href="<?= $langSource["link-wp"][$position] ?>?ver=<?= $ver ?>"><?= $langSource["nav"]["white-paper"][$position] ?></a></li>
                                    <li><a href="#token"><?= $langSource["nav"]["token"][$position] ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row row--xs-middle row--lg-between">
            <div class="col col--sm-10 col--md-8 col--lg-6">
                <div class="__item">
                    <span class="__copy">© 2018, Nerves</span>
                </div>
            </div>

            <div class="col col--sm-10 col--md-8 col--lg-6  text--lg-right">
                <div class="__item">
                    <!--                    <span class="__copy"><a href="#">Privacy Policy</a> | <a href="#">Sitemap</a></span>-->
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- end footer -->

<div id="btn-to-top-wrap">
    <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js?ver=<?= $ver ?>"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js?ver=<?=$ver?>"><\/script>')</script>
<script src="owlcarousel/owl.carousel.min.js"></script>

<script type="text/javascript" src="js/main.min.js?ver=<?= $ver ?>"></script>
<script>
    $(document).ready(function () {
        $(".roadmap-carousel").owlCarousel();
    });

    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-124588565-1', 'auto');
    ga('send', 'pageview');
</script>
<?php
if ($_GET["subscriber"] == "done") { ?>
    <script>alert("Thank you for your subscription.")</script>
<? } ?>
</body>
</html>