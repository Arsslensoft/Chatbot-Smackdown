<?php
include "header.php";

if(isset($_POST["name"])) {
    $to = "webmaster@cbsd.com";
    $subject = "Contact us " . $_POST["name"];

    $msg = $_POST["message"];
    $headers = "From: " . $_POST["email"];

    $error = "Contact successfully sent";

    mail($to, $subject, $msg, $headers);

}
if($loggedin)
    include "header.loggedin.php";
else
    include "header.offline.php";
?>
<!-- Main Page -->
<div id="content" role="main">



    <section class="section swatch-beige-black">

        <div class="container">

            <header class="section-header underline">
                <h1 class="headline hyper hairline">Contact Us</h1>
                <p class="big">Address: Insat, Centre Urbain Nord.
                </p>
            </header>
            <div class="row">
                <div class="col-md-6">
               
                    <form id="contactForm" class="contact-form" method="post" action="contact.php">
                        <div class="form-group form-icon-group">
                            <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required="">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group form-icon-group">
                            <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required="">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="form-group form-icon-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required=""></textarea>
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-icon btn-icon-right" type="submit">
                                Send email
                                <div class="hex-alt">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </button>
                        </div>
                    </form>
                    <div id="messages"></div>
                </div>


                <div class="col-md-6">
                    <!-- gooole maps ----------------------------------------- -->
                    <div class="google-map" id="map" style="height: 354px; position: relative;
 overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style"
                                                                                           style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
                            <div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;
 cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute;
 left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true"
                                                                                                               style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px);
 position: absolute; left: 107px; top: -22px;"></div><div style="width: 256px; 
height: 256px; transform: translateZ(0px); position: absolute; left: 107px; 
top: 234px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -149px; top: -22px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -149px; top: 234px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 363px; top: -22px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 363px; top: 234px;"></div>

                                            </div></div></div>
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">

                                    </div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">

                                    </div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                            <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 107px; top: -22px;">
                                                    <canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px;
 width: 256px;"></canvas></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 107px; top: 234px;">

                                                </div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -149px; top: -22px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -149px; top: 234px;"></div>
                                                <div style=
                                                     "width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 363px; top: -22px;">
                                                </div>
                                                <div style=
                                                     "width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 363px; top: 234px;">
                                                </div>
                                                <div style=
                                                     "position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;">
                                                    <div style="overflow: hidden;"></div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div aria-hidden="true" style=
                                                    "position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                        <div style=
                                                             "transform: translateZ(0px); position: absolute; left: 107px; top: 234px; transition: opacity 200ms ease-out;">
                                                            <img alt="" draggable="false" src=
                                                            "https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i16393!3i10895!4i256!2m3!1e0!2sm!3i348016261!3m14!2sfr-FR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9mZixzLnQ6M3xwLnY6b258cC5jOiNmZmZmZmZmZixzLnQ6NTB8cC52Om9ufHAuYzojZmZmMWM0MGYscy50OjQ5fHAudjpvbnxwLmM6I2ZmZjFjNDBmLHMudDo1fHAudjpvbnxwLmM6I2ZmZWNmMGYxLHMudDo2fHAudjpvbnxwLmM6I2ZmNzNiZmMxLHMudDozfHMuZTpsfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC52Om9ufHAuYzojZmYyZWNjNzEscy5lOmx8cC52Om9mZixzLnQ6ODF8cy5lOmd8cC53OjAuOXxwLnY6b2Zm!4e0&amp;token=120744"
                                                                 style=
                                                                 "position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style=
                                                             "transform: translateZ(0px); position: absolute; left: -149px; top: 234px; transition: opacity 200ms ease-out;">
                                                            <img alt="" draggable="false" src=
                                                            "https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i16392!3i10895!4i256!2m3!1e0!2sm!3i348016261!3m14!2sfr-FR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9mZixzLnQ6M3xwLnY6b258cC5jOiNmZmZmZmZmZixzLnQ6NTB8cC52Om9ufHAuYzojZmZmMWM0MGYscy50OjQ5fHAudjpvbnxwLmM6I2ZmZjFjNDBmLHMudDo1fHAudjpvbnxwLmM6I2ZmZWNmMGYxLHMudDo2fHAudjpvbnxwLmM6I2ZmNzNiZmMxLHMudDozfHMuZTpsfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC52Om9ufHAuYzojZmYyZWNjNzEscy5lOmx8cC52Om9mZixzLnQ6ODF8cy5lOmd8cC53OjAuOXxwLnY6b2Zm!4e0&amp;token=124047"
                                                                 style=
                                                                 "position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style=
                                                             "transform: translateZ(0px); position: absolute; left: -149px; top: -22px; transition: opacity 200ms ease-out;">
                                                            <img alt="" draggable="false" src=
                                                            "https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i16392!3i10894!4i256!2m3!1e0!2sm!3i348016261!3m14!2sfr-FR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9mZixzLnQ6M3xwLnY6b258cC5jOiNmZmZmZmZmZixzLnQ6NTB8cC52Om9ufHAuYzojZmZmMWM0MGYscy50OjQ5fHAudjpvbnxwLmM6I2ZmZjFjNDBmLHMudDo1fHAudjpvbnxwLmM6I2ZmZWNmMGYxLHMudDo2fHAudjpvbnxwLmM6I2ZmNzNiZmMxLHMudDozfHMuZTpsfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC52Om9ufHAuYzojZmYyZWNjNzEscy5lOmx8cC52Om9mZixzLnQ6ODF8cy5lOmd8cC53OjAuOXxwLnY6b2Zm!4e0&amp;token=77996"
                                                                 style=
                                                                 "position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style=
                                                             "transform: translateZ(0px); position: absolute; left: 363px; top: -22px; transition: opacity 200ms ease-out;">
                                                            <img alt="" draggable="false" src=
                                                            "https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i16394!3i10894!4i256!2m3!1e0!2sm!3i348016261!3m14!2sfr-FR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9mZixzLnQ6M3xwLnY6b258cC5jOiNmZmZmZmZmZixzLnQ6NTB8cC52Om9ufHAuYzojZmZmMWM0MGYscy50OjQ5fHAudjpvbnxwLmM6I2ZmZjFjNDBmLHMudDo1fHAudjpvbnxwLmM6I2ZmZWNmMGYxLHMudDo2fHAudjpvbnxwLmM6I2ZmNzNiZmMxLHMudDozfHMuZTpsfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC52Om9ufHAuYzojZmYyZWNjNzEscy5lOmx8cC52Om9mZixzLnQ6ODF8cy5lOmd8cC53OjAuOXxwLnY6b2Zm!4e0&amp;token=71390"
                                                                 style=
                                                                 "position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style=
                                                             "transform: translateZ(0px); position: absolute; left: 107px; top: -22px; transition: opacity 200ms ease-out;">
                                                            <img alt="" draggable="false" src=
                                                            "https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i16393!3i10894!4i256!2m3!1e0!2sm!3i348016261!3m14!2sfr-FR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9mZixzLnQ6M3xwLnY6b258cC5jOiNmZmZmZmZmZixzLnQ6NTB8cC52Om9ufHAuYzojZmZmMWM0MGYscy50OjQ5fHAudjpvbnxwLmM6I2ZmZjFjNDBmLHMudDo1fHAudjpvbnxwLmM6I2ZmZWNmMGYxLHMudDo2fHAudjpvbnxwLmM6I2ZmNzNiZmMxLHMudDozfHMuZTpsfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC52Om9ufHAuYzojZmYyZWNjNzEscy5lOmx8cC52Om9mZixzLnQ6ODF8cy5lOmd8cC53OjAuOXxwLnY6b2Zm!4e0&amp;token=74693"
                                                                 style=
                                                                 "position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style=
                                                             "transform: translateZ(0px); position: absolute; left: 363px; top: 234px; transition: opacity 200ms ease-out;">
                                                            <img alt="" draggable="false" src=
                                                            "https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i16394!3i10895!4i256!2m3!1e0!2sm!3i348016261!3m14!2sfr-FR!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9mZixzLnQ6M3xwLnY6b258cC5jOiNmZmZmZmZmZixzLnQ6NTB8cC52Om9ufHAuYzojZmZmMWM0MGYscy50OjQ5fHAudjpvbnxwLmM6I2ZmZjFjNDBmLHMudDo1fHAudjpvbnxwLmM6I2ZmZWNmMGYxLHMudDo2fHAudjpvbnxwLmM6I2ZmNzNiZmMxLHMudDozfHMuZTpsfHAudjpvZmYscy50OjQwfHMuZTpnLmZ8cC52Om9ufHAuYzojZmYyZWNjNzEscy5lOmx8cC52Om9mZixzLnQ6ODF8cy5lOmd8cC53OjAuOXxwLnY6b2Zm!4e0&amp;token=117441"
                                                                 style=
                                                                 "position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                </div>
                                                <div class="gm-style-pbc" style=
                                                "position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;">
                                                    <p class="gm-style-pbt">Utilisez deux doigts pour d�placer la carte</p>
                                                </div>
                                                <div style=
                                                     "position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;">
                                                </div>
                                                <div style=
                                                     "position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                    <div style=
                                                         "transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                    </div>
                                                    <div style=
                                                         "transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                                    </div>
                                                    <div style=
                                                         "transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                    </div>
                                                    <div style=
                                                         "transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                    </div>
                                                </div>
                                                <div style=
                                                     "margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                    <a href=
                                                       "https://maps.google.com/maps?ll=51.5171,0.104054&amp;z=15&amp;t=m&amp;hl=fr-FR&amp;gl=US&amp;mapclient=apiv3"
                                                       style=
                                                       "position: static; overflow: visible; float: none; display: inline;"
                                                       target="_blank" title=
                                                       "Cliquez ici pour afficher cette zone sur Google&nbsp;Maps">
                                                        <div style="width: 66px; height: 26px; cursor: pointer;">
                                                            <img draggable="false" src=
                                                            "https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png"
                                                                 style=
                                                                 "position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a>
                                                </div>
                                                <div style=
                                                     "padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 78px; top: 87px; background-color: white;">
                                                    <div style="padding: 0px 0px 10px; font-size: 16px;">
                                                        Donn�es cartographiques
                                                    </div>
                                                    <div style="font-size: 13px;">
                                                        Donn�es cartographiques �2016 Google
                                                    </div>
                                                    <div style=
                                                         "width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                                        <img draggable="false" src=
                                                        "https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" style=
                                                             "position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                </div>
                                                <div class="gmnoprint" style=
                                                "z-index: 1000001; position: absolute; right: 278px; bottom: 0px; width: 127px;">
                                                    <div class="gm-style-cc" draggable="false" style=
                                                    "-webkit-user-select: none; height: 14px; line-height: 14px;">
                                                        <div style=
                                                             "opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style=
                                                                 "width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);">
                                                            </div>
                                                        </div>
                                                        <div style=
                                                             "position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                            <a style=
                                                               "color: rgb(68, 68, 68); text-decoration: none; cursor: pointer;">
                                                                Donn�es cartographiques</a><span style="display: none;">Donn�es
                cartographiques �2016 Google</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gmnoscreen" style=
                                                "position: absolute; right: 0px; bottom: 0px;">
                                                    <div style=
                                                         "font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                                        Donn�es cartographiques �2016 Google
                                                    </div>
                                                </div>
                                                <div class="gmnoprint gm-style-cc" draggable="false" style=
                                                "z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 165px; bottom: 0px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style=
                                                             "width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);">
                                                        </div>
                                                    </div>
                                                    <div style=
                                                         "position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                        <a href="https://www.google.com/intl/fr-FR_US/help/terms_maps.html"
                                                           style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);"
                                                           target="_blank">Conditions d'utilisation</a>
                                                    </div>
                                                </div>
                                                <div style=
                                                     "width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;">
                                                    <img class="gm-fullscreen-control" draggable="false" src=
                                                    "https://maps.gstatic.com/mapfiles/api-3/images/sv5.png" style=
                                                         "position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                <div class="gm-style-cc" draggable="false" style=
                                                "-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style=
                                                             "width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);">
                                                        </div>
                                                    </div>
                                                    <div style=
                                                         "position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                        <a href=
                                                           "https://www.google.com/maps/@51.5171,0.1040542,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                                           style=
                                                           "font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;"
                                                           target="_new" title=
                                                           "Signaler � Google une erreur dans la carte routi�re ou les images">
                                                            Signaler une erreur cartographique</a>
                                                    </div>
                                                </div>
                                                <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                                     draggable="false" style=
                                                     "margin: 10px; -webkit-user-select: none; position: absolute; bottom: 107px; right: 28px;">
                                                    <div class="gmnoprint" style="position: absolute; left: 0px; top: 38px;">
                                                        <div draggable="false" style=
                                                        "-webkit-user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 28px; height: 55px; background-color: rgb(255, 255, 255);">
                                                            <div style=
                                                                 "position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"
                                                                 title="Zoom avant">
                                                                <div style=
                                                                     "overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                                    <img draggable="false" src=
                                                                    "https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                         style=
                                                                         "position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                            </div>
                                                            <div style=
                                                                 "position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; top: 0px; background-color: rgb(230, 230, 230);">
                                                            </div>
                                                            <div style=
                                                                 "position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"
                                                                 title="Zoom arri�re">
                                                                <div style=
                                                                     "overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                                    <img draggable="false" src=
                                                                    "https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                         style=
                                                                         "position: absolute; left: 0px; top: -15px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gm-svpc" style=
                                                    "box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px; background-color: rgb(255, 255, 255);">
                                                        <div style="position: absolute; left: 1px; top: 1px;"></div>
                                                        <div style="position: absolute; left: 1px; top: 1px;">
                                                            <div aria-label="Contr�le de Pegman dans Street View" style=
                                                            "width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                                <img draggable="false" src=
                                                                "https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                     style=
                                                                     "position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div aria-label="Pegman est au-dessus de la carte." style=
                                                            "width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                                                <img draggable="false" src=
                                                                "https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                     style=
                                                                     "position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div aria-label="Contr�le de Pegman dans Street View" style=
                                                            "width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                                                <img draggable="false" src=
                                                                "https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                     style=
                                                                     "position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoprint" style="display: none; position: absolute;">
                                                        <div style=
                                                             "width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; background-color: rgb(255, 255, 255);"
                                                             title="Faire pivoter le plan � 90�"><img draggable="false" src=
                                                            "https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                                                                      style=
                                                                                                      "position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div class="gm-tilt" style=
                                                        "width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);">
                                                            <img draggable="false" src=
                                                            "https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                                 style=
                                                                 "position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                </div>
                                                <div class="gmnoprint" style=
                                                "margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                                    <div class="gm-style-mtc" style="float: left;">
                                                        <div draggable="false" style=
                                                        "direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 22px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;"
                                                             title="Afficher un plan de ville">
                                                            Plan
                                                        </div>
                                                        <div style=
                                                             "z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 32px; text-align: left; display: none; background-color: white;">
                                                            <div draggable="false" style=
                                                            "color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"
                                                                 title="Afficher le relief sur la carte">
                    <span role="checkbox" style=
                    "box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
                    </span>
                                                                <div style=
                                                                     "position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;">
                    <span role="checkbox" style=
                    "box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
                        <img draggable="false" src=
                        "https://maps.gstatic.com/mapfiles/mv/imgs8.png" style=
                             "position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></span>
                                                                </div><label style=
                                                                             "vertical-align: middle; cursor: pointer;">Relief</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gm-style-mtc" style="float: left;">
                                                        <div draggable="false" style=
                                                        "direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left-width: 0px; min-width: 40px; background-color: rgb(255, 255, 255); background-clip: padding-box;"
                                                             title="Afficher les images satellite">
                                                            Satellite
                                                        </div>
                                                        <div style=
                                                             "z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 32px; text-align: left; display: none; background-color: white;">
                                                            <div draggable="false" style=
                                                            "color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"
                                                                 title="Afficher les images satellite avec le nom des rues">
                    <span role="checkbox" style=
                    "box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
                    </span>
                                                                <div style=
                                                                     "position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;">
                    <span role="checkbox" style=
                    "box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
                        <img draggable="false" src=
                        "https://maps.gstatic.com/mapfiles/mv/imgs8.png" style=
                             "position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></span>
                                                                </div><label style=
                                                                             "vertical-align: middle; cursor: pointer;">L�gendes</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Google Maps -->
                                                </div>                        </div>
                                        </div>
                                    </div>

    </section>




    <footer class="section swatch-black-beige section-big-triangle" id="about" role="contentinfo">
        <div class="decor-top">
            <svg class="decor" height="100%" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0 L50 100 L100 0 L100 100 L0 100" stroke-width="0"></path>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-widget widget_categories">
                        <h3 class="sidebar-header">Team members</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    Arsslen Idadi
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Amine Troudi
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Laouini Ahmed
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-widget widget_recent_entries">
                        <h3 class="sidebar-header">Contact us</h3>
                        <ul>
                            <li>
                                <div >
                                    <i class="fa fa-facebook">

                                    </i>
                                </div>
                                <a href="http://facebook.com/ChatBotsm">
                                    facebook.com/ChatBotsm
                                </a>

                            </li>
                            <li>
                                <div >
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <a href="http://twitter.com/cbsm">
                                    twitter.com/cbsm
                                </a>

                            </li>
                            <li>
                                <div >
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <a href="">
                                    INSAT- GL2
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-widget widget_recent_entries">
                        <h3 class="sidebar-header">About Us</h3>
                        <ul>
                            <li>

                                <a href="#">
                                    SDL Team 2016
                                </a>

                            </li>
                            <li>

                                <a href="#">
                                    ALL RIGHTS RESERVED
                                </a>

                            </li>

                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </footer>
</div>
<a class="go-top hex-alt" href="javascript:void(0)">
    <i class="fa fa-angle-up"></i>
</a>
<script src="assets/js/packages.min.js"></script>
<script src="assets/js/theme.min.js"></script>
</body>
</html>
