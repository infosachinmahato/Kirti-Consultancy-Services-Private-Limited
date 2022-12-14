<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#024397">
    <!-- <<< === FAVICON / TITLE === >>> -->
    <link rel="apple-touch-icon" sizes="180x180" href="FAVICON/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="FAVICON/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="FAVICON/favicon-16x16.png">
    <link rel="manifest" href="FAVICON/site.webmanifest">
    <link rel="mask-icon" href="FAVICON/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="FAVICON/favicon.ico" type="image/x-icon">
    <title>Share Digital World / Carrer :-</title>
    <!-- <<< === CSS FILE IMPORT === >>> -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- <<< === RESPONSIVE CSS FILE IMPORT === >>> -->
    <link rel="stylesheet" href="RESPONSIVE CSS/mobile_426px.css">
    <link rel="stylesheet" href="RESPONSIVE CSS/laptop_1025px.css">
    <link rel="stylesheet" href="RESPONSIVE CSS/tablet_769px.css">
    <!-- <<< === FLATICON CDN IMPORT === >>> -->
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <!-- <<< === FONT AWESOME CDN IMPORT === >>> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- <<< === BOOTSTRAP CSS FILE IMPORT === >>> -->
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.css">
    <link rel="stylesheet" href="BOOTSTRAP/css/form.css">
    <!-- <<< === JQUERY FILE IMPORT === >>> -->
    <script src="JQUERY/jquery.js"></script>
</head>

<body>
    <!-- === == Header == === -->
    <header>
        <div class="header_hide">
            <div class="header_full_width">
                <div class="header_fix_width">
                    <div class="header_content">
                        <div class="header_logo">
                            <a href="index.php">
                                <picture>
                                    <img src="IMAGES/LOGO/share_digital_world_logo.png" alt="Shrae Digital World"
                                        class="brand_name">
                                </picture>
                            </a>
                        </div>
                        <nav>
                            <ul class="navbar_list">
                                <li><i class="fi fi-rs-home"
                                        style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                        href="index.php">Home</a></li>
                                <li><i class="fi fi-rs-calendar"
                                        style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                        href="about.php">About</a></li>
                                <li><i class="fi fi-rs-settings-sliders"
                                        style="color: #fa0002;position: relative; top: 1.5px; left: 10px;"></i><a
                                        href="services.php">Services</a><i class="fi fi-rs-angle-small-right"
                                        style="color: #8e8d8d;position: relative; top: 3.5px; left: -15px;"></i>
                                    <ul class="drop_down">
                                        <li><i class="fi fi-rs-apps"
                                                style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                                href="services.php">Web<span
                                                    class="light_text">development</span><button
                                                    class="best_text">Best</button></a></li>
                                        <li><i class="fi fi-rs-palette"
                                                style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                                href="services.php">Graphic<span
                                                    class="light_text">design</span><button
                                                    class="best_text">Best</button></a></li>
                                        <li><i class="fi fi-rs-resources"
                                                style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                                href="services.php">App<span
                                                    class="light_text">development</span><button
                                                    class="best_text">Best</button></a></li>
                                        <li><i class="fi fi-rs-megaphone"
                                                style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                                href="services.php">Google<span class="light_text">Ads</span><button
                                                    class="best_text">Best</button></a></li>
                                        <li><i class="fi fi-rs-layer-minus"
                                                style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                                href="services.php">Software<span
                                                    class="light_text">Build</span><button
                                                    class="best_text">Best</button></a></li>
                                        <li><i class="fi fi-rs-browser"
                                                style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                                href="services.php">SEO<span class="light_text">Services</span><button
                                                    class="best_text">Best</button></a></li>
                                    </ul>
                                </li>
                                <li><i class="fi fi-rs-users-alt"
                                        style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                        href="carrer.php">Career</a></li>
                                <li><i class="fi fi-rs-document"
                                        style="color: #fa0002; position: relative; top: 1.5px; left: 10px;"></i><a
                                        href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile_header_hide">
            <div class="mobile_header_full_width">
                <div class="mobile_header_fix_width">
                    <div class="mobile_header_content">
                        <div class="mobile_header_logo">
                            <a href="index.php">
                                <picture>
                                    <img src="IMAGES/LOGO/share_digital_world_logo.png" alt="Share Digital World"
                                        class="m0bile_header_logo_brand_name">
                                </picture>
                            </a>
                        </div>
                        <div class="mobile_humburger_menu" onclick="humburgerClick()">
                            <i class="fa-sharp fa-solid fa-bars"></i>
                        </div>
                    </div>
                    <nav>
                        <div class="mob_navbar_bg" id="navTab">
                            <ul class="mobile_navlist" id="navTwo">
                                <picture>
                                    <img src="IMAGES/LOGO/share_digital_world_logo.png" alt="Share World Logo"
                                        style="width: 85px; position: absolute; top: 17px; left: 21px; overflow: hidden;">
                                </picture>
                                <div class="border_nav_v"
                                    style="width: 25px; height: 2px; background-color: #fa0002; position: relative; top: 69px; left: 31px; ">
                                </div>
                                <span>
                                    <i class="fa-solid fa-xmark" onclick="hideNav()"></i>
                                </span>
                                <li><a href="index.php"><i class="fi fi-rs-home" style="color: #fa0002; position: relative; top: 1.5px; left: 0px; 
                                margin-right: 9px;"></i>Home</a></li>
                                <li><a href="about.php"><i class="fi fi-rs-calendar" style="color: #fa0002; position: relative; top: 1.5px; left: 0px; 
                                margin-right: 9px;"></i>About</a></li>
                                <li><a href="services.php"><i class="fi fi-rs-settings-sliders" style="color: #fa0002; position: relative; top: 1.5px; left: 0px; 
                                margin-right: 9px;"></i>Services<i class="fi fi-rs-angle-small-right"
                                            style="color: #8e8d8d;position: relative; top: 3.5px; left: 3px;"></i></a>
                                </li>
                                <li><a href="carrer.php"><i class="fi fi-rs-users-alt" style="color: #fa0002; position: relative; top: 1.5px; left: 0px; 
                                margin-right: 9px;"></i>Career</a></li>
                                <li><a href="contact.php"><i class="fi fi-rs-document" style="color: #fa0002; position: relative; top: 1.5px; left: 0px; 
                                margin-right: 9px;"></i>Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- === == Header End == === -->



    <!-- === == Slider == === -->
    <div class="slider_hide">
        <div class="fute-container">
            <picture>
                <img src="IMAGES/SLIDER BANNER/career.png" alt="img" style="width: 100%;">
            </picture>
        </div>
    </div>
    <div class="slider_mobile_hide">
        <div class="fute-container">
            <picture>
                <img src="IMAGES/SLIDER BANNER/career-mob.png" alt="img" style="width: 100%;">
            </picture>
        </div>
    </div>
    <!-- === == Slider End == === -->



    <!-- Sucess Starting --> 

    <div class="container" style="text-align: center; padding-top: 80px; padding-bottom: 20px;">
        <img src="IMAGES/SLIDER BANNER/send_sms.png" alt="img" class="sucess_sms" style="width: 200px;">
    </div>
    <!-- Sucess End -->



    <!-- === == Footer == === -->
    <footer>
        <div class="footer_hide">
            <div class="footer_full_width">
                <div class="footer_fix_width">
                    <div class="footer_content">
                        <div class="footer_about_box">
                            <span class="footer_about_p">
                                <h1><i class="fi fi-rs-calendar" style="color: #ffffff; position: relative; top: 1.5px; left: 0px; 
                                    margin-right: 9px;"></i>ABOUT</h1>
                                <p>
                                    Share Digital World Services is one of the few IT system integration,
                                    professional
                                    service and Software Company. As a
                                    privately owned company, Share Digital World Technical Services provides IT
                                    Consultancy, software design and development as
                                    well as professional services and hardware...<a href="about.html"
                                        style="color:white; text-decoration: none;font-weight: 700; letter-spacing: 0px;">Read
                                        More</a>
                                </p>
                                <div class="border_nav_v"
                                    style="width: 40px; height: 1.5px; background-color: #ffffff; position: relative; top: 30px!important; left: 0px; ">
                                </div>
                            </span>
                        </div>
                        <div class="footer_services_box">
                            <span class="footer_about_p">
                                <h1><i class="fi fi-rs-settings-sliders" style="color: #ffffff; position: relative; top: 1.5px; left: 0px; 
                                    margin-right: 9px;"></i>Services</h1>
                                <p>
                                <ul class="footer_service_text">
                                    <li><i class="fi fi-rs-apps"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="services.php">Web<span class="light_text">development</span></a></li>
                                    <li><i class="fi fi-rs-palette"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="services.php">Graphic<span class="light_text">design</span></a></li>
                                    <li><i class="fi fi-rs-resources"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="services.php">App<span class="light_text">development</span></a></li>
                                    <li><i class="fi fi-rs-megaphone"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="services.php">Google<span class="light_text">Ads</span></a></li>
                                    <li><i class="fi fi-rs-layer-minus"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="services.php">Software<span class="light_text">Build</span></a></li>
                                    <li><i class="fi fi-rs-browser"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="services.php">SEO<span class="light_text">Services</span></a></li>
                                </ul>
                                </p>
                            </span>
                        </div>
                        <div class="footer_Location_box">
                            <span class="footer_about_p">
                                <h1><i class="fi fi-rs-apps" style="color: #ffffff; position: relative; top: 1.5px; left: 0px; 
                                    margin-right: 9px;"></i>Vision/Mission</h1>
                                <p>
                                    We as a Website Development Company, understand that the desired output can be
                                    achieved only by a better understanding of the client???s requirements. To develop
                                    the
                                    best marketing, strategic, and technical skills in order to address real-life
                                    business issues and develop innovative e-business solutions for optimizing
                                    further
                                    organizational growth.
                                </p>
                                <div class="border_nav_v"
                                    style="width: 40px; height: 1.5px; background-color: #ffffff; position: relative; top: 30px!important; left: 0px; ">
                                </div>
                            </span>
                        </div>
                        <div class="footer_bestvalue_box">
                            <span class="footer_about_p">
                                <h1><i class="fi fi-rs-document" style="color: #ffffff; position: relative; top: 1.5px; left: 0px; 
                                                                margin-right: 9px;"></i>Carrer</h1>
                                <p>
                                <ul class="footer_service_text">
                                    <li><i class="fi fi-rs-apps"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="carrer.html">Web<span class="light_text">development</span></a></li>
                                    <li><i class="fi fi-rs-palette"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="carrer.html">Graphic<span class="light_text">design</span></a></li>
                                    <li><i class="fi fi-rs-resources"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="carrer.html">App<span class="light_text">development</span></a></li>
                                    <li><i class="fi fi-rs-megaphone"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="carrer.html">Google<span class="light_text">Ads</span></a></li>
                                    <li><i class="fi fi-rs-layer-minus"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="carrer.html">Software<span class="light_text">Build</span></a></li>
                                    <li><i class="fi fi-rs-browser"
                                            style="color: #ffffff; position: relative; top: 1.5px; left: 10px;"></i><a
                                            href="carrer.html">SEO<span class="light_text">Expert</span></a></li>
                                </ul>
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bluebox_full_width">
                <div class="footer_bluebox_fix_width">
                    <div class="footer_bluebox_content">
                        <div class="footer_bluebox_icon">
                            <span class="follow_box_footer">
                                <h1>Follow Us</h1>
                                <span class="media_icon">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    <i class="fa-brands fa-facebook-messenger"></i>
                                </span>
                            </span>
                        </div>
                        <div class="footer_bluebox_icon">
                            <span class="follow_box_footer">
                                <h1>Download App :-</h1>
                                <span class="media_icon">
                                    <i class="fa-brands fa-google-play"></i>
                                    <i class="fa-brands fa-apple"></i>
                                    <i class="fa-brands fa-app-store-ios"></i>
                                </span>
                            </span>
                        </div>
                        <div class="footer_bluebox_icon">
                            <span class="follow_box_footer">
                                <h1>Join Apply :-</h1>
                                <span class="media_icon">
                                    <i class="fa-solid fa-cloud"></i>
                                    <i class="fa-solid fa-hands-clapping"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_redbox_full_width">
                <div class="footer_redbox_fix_width">
                    <div class="footer_redbox_content">
                        <div class="footer_otherlink">
                            <span class="other_link_box">
                                <h1>Other Link &#9881;</h1>
                            </span>
                        </div>
                        <div class="footer_otherlink">
                            <span class="other_link_box">
                                <h1>Best Services &#9883;</h1>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_whitebox_full_width">
                <div class="footer_whitebox_fix_width">
                    <span style="text-align: center; align-items: center;">
                        <p
                            style="padding: 20px; font-weight: 400; font-size: 12px; letter-spacing: 1px; color: #fa0002;">
                            2022 <b style="color: #024397;">Share Digital World.</b> All rights reserved.</p>
                    </span>
                </div>
            </div>
        </div>
        <div class="mobile_footer_hide">
            <div class="mob_footer_full_width">
                <div class="mob_footer_fix_width">
                    <div class="mob_footer_contant">
                        <span class="mob_fnav_box_one">
                            <button class="mob_about_btn"><i class="fi fi-rs-calendar" style="color: #ffffff; position: relative; top: 1.5px; left: -15px; 
                                    margin-right: 0px;"></i>About</button>
                            <div class="mobile_footer_pragrap">
                                <p class="text_area_mob">Share Digital World Services is one of the few IT system
                                    integration, professional
                                    service and Software Company. As a privately owned company, Share Digital World
                                    Technical Services provides IT Consultancy, software design and development as
                                    well
                                    as professional services and hardware...Read More
                                </p>
                            </div>
                        </span>
                        <span class="mob_fnav_box_one">
                            <button class="mob_about_btn"><i class="fi fi-rs-settings-sliders" style="color: #ffffff; position: relative; top: 1.5px; left: -15px; 
                                margin-right: 0px;"></i>Services</button>
                            <div class="mobile_footer_pragrap">
                                <p class="text_area_mob">
                                    <a href="#" style="color: white; text-decoration: none;">Web Development /</a>
                                    <a href="#" style="color: white; text-decoration: none;">App Development /</a>
                                    <a href="#" style="color: white; text-decoration: none;">Software Development
                                        /</a>
                                    <a href="#" style="color: white; text-decoration: none;">Graphic Design /</a>
                                    <a href="#" style="color: white; text-decoration: none;">SEO Services</a>
                                </p>
                            </div>
                        </span>
                        <span class="mob_fnav_box_one">
                            <button class="mob_about_btn"><i class="fi fi-rs-apps" style="color: #ffffff; position: relative; top: 1.5px; left: -15px; 
                            margin-right: 0px;"></i>Vision/Mission</button>
                            <div class="mobile_footer_pragrap">
                                <p class="text_area_mob">We as a Website Development Company, understand that the
                                    desired output can be
                                    achieved only by a better understanding of the client???s requirements. To develop
                                    the
                                    best marketing, strategic, and technical skills in order to address real-life
                                    business issues and develop innovative e-business solutions for optimizing
                                    further
                                    organizational growth.
                                </p>
                            </div>
                        </span>
                        <span class="mob_fnav_box_one">
                            <button class="mob_about_btn"><i class="fi fi-rs-document" style="color: #ffffff; position: relative; top: 1.5px; left: -15px; 
                        margin-right: 0px;"></i>Carrer</button>
                            <div class="mobile_footer_pragrap">
                                <p class="text_area_mob">
                                    <a href="carrer.html" style="color: white; text-decoration: none;">Web Developer
                                        /</a>
                                    <a href="carrer.html" style="color: white; text-decoration: none;">App Developer
                                        /</a>
                                    <a href="carrer.html" style="color: white; text-decoration: none;">Software
                                        Developer
                                        /</a>
                                    <a href="carrer.html" style="color: white; text-decoration: none;">Graphic Designer
                                        /</a>
                                    <a href="carrer.html" style="color: white; text-decoration: none;">SEO Expert</a>
                                </p>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="blue_mobile_box" style="align-items: center; text-align: center;">
                <h1 style="font-weight: 900; font-size: 15px; color: #ffffff; padding: 18px;">Follow Us</h1>
                <span class="media_icon" style="text-align: center; align-items: center;">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                    <i class="fa-brands fa-facebook-messenger"></i>
                </span>
            </div>
            <div class="mobile_whit_box" style="align-items: center; text-align: center;">
                <p style="padding: 20px; font-weight: 400; font-size: 11px; letter-spacing: 1px; color: #fa0002;">
                    2022 <b style="color: #024397;">Share Digital World.</b> All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- === == Footer End == === -->

    <!-- <<< === JAVASCRIPT FILE IMPORT === >>> -->
    <script src="JAVASCRIPT/myScript.js"></script>

    <!-- <<< === BOOTSTRAP JAVASCRIPT FILE IMPORT === >>> -->
    <script src="BOOTSTRAP/js/bootstrap.js"></script>

</body>

</html>