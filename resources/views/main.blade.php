<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This season, the prizes are insane. Once they're gone, they're gone. From Premium Memberships to $1,000 store credits! The Contest ends on January 15th, 2023.">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
        <meta property="og:description" content="This season, the prizes are insane. Once they're gone, they're gone. From Premium Memberships to $1,000 store credits! The Contest ends on January 15th, 2023.">
        <meta property="og:title" content="Holiday Spin-n-Win 2022">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>Holiday Spin-n-Win 2022</title>
    </head>
    <body>
    <div id="app">
        <Static :token="{{ json_encode($token) }}" @if(!empty($user)):user="{{ json_encode($user) }}"@endif @if(!empty($spin_info)):spin="{{ json_encode($spin_info) }}"@endif @if(!empty($free_attempt_available_time_at)):free="{{ json_encode($free_attempt_available_time_at) }}"@endif></Static>
    </div>
    </body>
</html>
