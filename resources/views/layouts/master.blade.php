<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
    <html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]>
    <html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
    <html dir="ltr" lang="en">
<!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>{{ config('app.name') }} - @yield('title')</title>
        
        <meta name="description" content="VapingDog" />
        <meta name="keywords" content="VapingDog" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--    --><!--        <link href="--><!--" rel="icon"/>-->
        <!--    -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
                
        <script src="/js/jquery/moment.js" type="text/javascript"></script>
        <script src="/js/bootstrap/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        
        <link href="/css/bootstrap/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />

        <link href="/css/jquery/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="/css/theme/dog/magnificent.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="/css/theme/dog/jquery.bxslider.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="/css/theme/dog/photoswipe.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="/css/theme/dog/jquery.fancybox.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="/css/theme/dog/fl-bigmug-line.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="/css/theme/dog/material-design.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="/css/theme/dog/gift-teaser.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="/css/theme/dog/slsoffr.css" type="text/css" rel="stylesheet" media="screen" />
        
        <script src="/js/theme/dog/common.js" type="text/javascript"></script>
        <script src="/js/jquery/owl.carousel.min.js" type="text/javascript"></script>
        
        <link href="/favicon.png" rel="icon" />
        
        <!--custom script-->
        <script src="/js/jquery/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="/js/theme/dog/device.min.js" type="text/javascript"></script>
        
        <!--[if lt IE 9]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="/img/theme/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                     alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
            </a>
        </div>
        <![endif]-->
        
        <link href="/css/theme/dog/stylesheet.css" type="text/css" rel="stylesheet" media="screen" />
        
        <script src="/js/jquery/jquery.fancybox.js" type="text/javascript"></script>

        <link href="/css/jquery/jquery.cluetip.css" type="text/css" rel="stylesheet" media="screen" />
        <script src="/js/jquery/jquery.cluetip.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('a.title').cluetip({splitTitle: '|'});
                $('ol.rounded a:eq(0)').cluetip({splitTitle: '|', dropShadow: false, cluetipClass: 'rounded', showtitle: false});
                $('ol.rounded a:eq(1)').cluetip({cluetipClass: 'rounded', dropShadow: false, showtitle: false, positionBy: 'mouse'});
                $('ol.rounded a:eq(2)').cluetip({cluetipClass: 'rounded', dropShadow: false, showtitle: false, positionBy: 'bottomTop', topOffset: 70});
                $('ol.rounded a:eq(3)').cluetip({cluetipClass: 'rounded', dropShadow: false, sticky: true, ajaxCache: false, arrows: true});
                $('ol.rounded a:eq(4)').cluetip({cluetipClass: 'rounded', dropShadow: false});
            });
        </script>
    </head>
    
    <body class="product-category-73">
        @yield('layout')
    </body>
</html>
