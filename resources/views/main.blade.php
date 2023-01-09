<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="https://yellowimages.com/favicon.ico">
        <link rel="icon" href="https://cdn.yellowimages.com/images/favicons/icon.svg" type="image/svg+xml">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This season, the prizes are insane. Once they're gone, they're gone. From Premium Memberships to $1,000 store credits! The Contest ends on January 15th, 2023.">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
        <meta property="og:description" content="This season, the prizes are insane. Once they're gone, they're gone. From Premium Memberships to $1,000 store credits! The Contest ends on January 15th, 2023.">
        <meta property="og:image" content="https://yi-files.s3.amazonaws.com/content/yellowimages.png">
        <meta property="og:url" content="https://spin.yellowimages.com">
        <meta property="og:title" content="Holiday Spin-n-Win 2022 - Yellow Images">
        <meta property="twitter:card" content="summary_large_image">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="twitter:site" content="@yellowimages">

        <meta property="twitter:title" content="Holiday Spin-n-Win 2022 - Yellow Images">
        <script src="https://www.googleoptimize.com/optimize.js?id=GTM-N56SWK4"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30924481-37"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-30924481-37');
        </script>


        <meta property="twitter:image" content="https://yi-files.s3.amazonaws.com/content/yellowimages.png">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-30924481-37');
        </script>
        <title>Holiday Spin-n-Win 2022 - Yellow Images</title>
    </head>
    <body>
    <div id="app">
        <Static :token="{{ json_encode($token) }}" @if(!empty($user)):user="{{ json_encode($user) }}"@endif @if(!empty($spin_info)):spin="{{ json_encode($spin_info) }}"@endif @if(!empty($free_attempt_available_time_at)):free="{{ json_encode($free_attempt_available_time_at) }}"@endif></Static>
    </div>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/20850108.js"></script>
    <!-- End of HubSpot Embed Code -->
    </body>
</html>
