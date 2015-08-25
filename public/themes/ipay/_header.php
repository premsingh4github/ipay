<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>iPay | trans cash international</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>themes/ipay/images/apple-touch-icon.png">
        <link href="<?php echo base_url(); ?>themes/ipay/images/favicon.gif" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ipay/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ipay/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ipay/css/jquery.datetimepicker.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300,100,100italic,900' rel='stylesheet' type='text/css'>        
        <!--<link href="fonts/fonts.css" rel="stylesheet" type="text/css"/>-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ipay/css/easy-responsive-tabs.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ipay/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>themes/ipay/css/main.css">

        <script src="<?php echo base_url(); ?>themes/ipay/js/vendor/modernizr-2.6.2.min.js" async></script>      
        <link href="<?php echo base_url(); ?>themes/ipay/css/mediaelementplayer.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>themes/ipay/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/ipay/js/video.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/ipay/js/custom.js" type="text/javascript"></script>
        <script type='text/javascript'>
            $(document).ready(function() {
                $('video').videoPlayer({
                    'playerWidth': 0.999,
                    'videoClass': 'video'
                });
            });
        </script>

        <style>
            .video {
                width: 100%!important; 
            }
        </style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC_an0SktJPaCeXaXctAPITqBvciBHwqY&sensor=false"></script>
<script type="text/javascript" src="http://www.map-generator.org/map/iframejs/1033462c-df66-46f8-9f87-7467faa4662a?key=AIzaSyAC_an0SktJPaCeXaXctAPITqBvciBHwqY&width=600px&height=500px"></script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]--> 

    </head>
    <body>
     <input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />  
        
        
        
        <!-- Header -->
        <header class="header-container">
            <div class="header-top">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6">
                            <ul class="top-details clearfix">
                                <li>You can use our service in your mobile devices. <a href="#">Click here to download!!</a></li>
                            </ul>
                        </div>

                        <div class="col-md-6 top-form-components">
                            <form class="pull-right">

                                <div class="form-input">
                                    <div class="styled-select">
                                       <select name="country">
                                            <option value="">SELECT COUNTRY</option>
                                           <?php
                                            include("geoiploc.php");
                                            $ip = $_SERVER["REMOTE_ADDR"];
                                               foreach($GLOBALS['geoipcountry'] as $key => $value){
                                                   ?>
                                                   <option value="<?php echo $key ; ?>" <?php if(getCountryFromIP($ip, "code") == $key){ echo 'selected' ;} ?>><?php echo $value ; ?></option>     
                                                       
                                                       
                                                       <?php
                                               }
                                           
                                           ?>
                                        </select>
                                     
                                    </div>
                                </div>
                                <div class="form-input">
                                    <div class="styled-select">
                                        
                                        <?php 
                                        
                                        $codes = array(
'af'=>'Afrikaans',    'sq'=>'Albanian',
'ar'=>'Arabic',       'eu'=>'Basque',
'bg'=>'Bulgarian',    'be'=>'Belarusian',
'ca'=>'Catalan',      'zh'=>'Chinese',
'hr'=>'Croatian',     'cs'=>'Czech',
'da'=>'Danish',       'nl'=>'Dutch',
'en'=>'English',      'et'=>'Estonian',
'fo'=>'Faeroese',     'fa'=>'Farsi',
'fi'=>'Finnish',      'fr'=>'French',
'gd'=>'Gaelic',       'ga'=>'Irish',
'de'=>'German',       'el'=>'Greek',
'he'=>'Hebrew',       'hi'=>'Hindi',
'hu'=>'Hungarian',    'is'=>'Icelandic',
'id'=>'Indonesian',   'it'=>'Italian',
'ja'=>'Japanese',     'ko'=>'Korean',
'lv'=>'Latvian',      'lt'=>'Lithuanian',
'mk'=>'Macedonian',   'ms'=>'Malaysian',
'mt'=>'Maltese',      'np'=>'Nepali',
'no'=>'Norwegian',
'pl'=>'Polish',       'pt'=>'Portuguese',
'rm'=>'Rhaeto-Romanic','ro'=>'Romanian',
'ru'=>'Russian',      'sz'=>'Sami',
'sr'=>'Serbian',      'sk'=>'Slovak',
'sl'=>'Slovenian',    'sb'=>'Sorbian',
'es'=>'Spanish',      'sx'=>'Sutu',
'sv'=>'Swedish',      'th'=>'Thai',
'ts'=>'Tsonga',       'tn'=>'Tswana',
'tr'=>'Turkish',      'uk'=>'Ukrainian',
'ur'=>'Urdu',         've'=>'Venda',
'vi'=>'Vietnamese',   'xh'=>'Xhosa',
'ji'=>'Yiddish',      'zu'=>'Zulu'
);

$langCode = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

                                        
                                        ?>
                                        <select>
                                            <option>SELECT LANGUAGE</option>
                                            <?php
                                            foreach($codes as $key => $value){
                                             ?>
                                              <option <?php if(isset($_SESSION['language'])){ echo 'selected' ;} ?> ><?php echo $value; ?></option>
                                                 <?php   
                                            }
                                            ?>                                            
                                            
                                        </select>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>     
            </div>
            </header> 