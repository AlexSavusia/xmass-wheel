<!DOCTYPE html>
{{--@if(!empty($user)) {{ json_encode($user) }} @endif;--}}
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

    <meta property="twitter:image" content="https://yi-files.s3.amazonaws.com/content/yellowimages.png">
    <script src="https://www.googleoptimize.com/optimize.js?id=GTM-N56SWK4"></script>


    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-KT2K2L5"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30924481-33"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-30924481-33');
    </script>
    <script src="https://unpkg.com/konva@8/konva.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Holiday Spin-n-Win 2022 - Yellow</title>
    <style>
        body {
            font-family: 'Montserrat',  Arial, sans-serif!important;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: linear-gradient(360.67deg, #00a2ff 20.55%, #000000 59.81%);
            scrollbar-width: none;
        }
        body::-webkit-scrollbar {
            display: none;
        }

        #container {
            background: url("https://cdn.yellowimages.com/images/xmas2022/borders2.png") no-repeat;
            background-size: 1030px 815px;
            background-position: center bottom;
            display: flex;
            justify-content: center;
            height: 110%;
            position: relative;
        }
        @media only screen and (max-height: 1000px) {
            html {
                height: 1000px;
            }
            body {
                overflow: scroll;
                scrollbar-width: none;
            }
            body::-webkit-scrollbar {
                display: none;
            }
            #container {
                height: 1000px;
                overflow: hidden;
            }
        }


        #spin {
            border-radius: 999999px;
            width: 180px;
            height: 180px;
            bottom: 240px;
            align-items: center;
            margin: auto;
            position: absolute;
        }
        .tospin{
            background: url("https://cdn.yellowimages.com/images/xmas2022/spin.png") no-repeat;
            background-size: contain;
            cursor:pointer;
        }
        .tospin:hover { transform: scale(1.1); }
        .spining{
            background: url("https://cdn.yellowimages.com/images/xmas2022/spinCenter.614b423f.png") no-repeat;
            background-size: contain;
            width: 650px!important;
            height: 650px!important;
            bottom: -10px!important;
            animation: outspinning-circle 25s infinite linear;
        }
        @-webkit-keyframes outspinning-circle {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
                transform-origin: center;
            }
        }
        #container  #wheel{
            width: 740px;
            height: 740px;
            align-items: center;
            bottom: -60px;
            margin: auto;
            position: absolute;
        }
        #container  #pointer{
            width: 165px;
            height: 160px;
            align-items: center;
            bottom: 600px;
            margin: auto;
            position: absolute;
        }
        .rotateto0 {
            animation-name: spin0;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon0 {
            transform: rotate(1070deg);
        }
        @-webkit-keyframes spin0 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }

            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(700deg);
                transform: rotate(700deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(1070deg);
                transform: rotate(1070deg);
                transform-origin: center;
            }
        }
        .rotateto1 {
            animation-name: spin1;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon1 {
            transform: rotate(1050deg);
        }
        @-webkit-keyframes spin1 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(1050deg);
                transform: rotate(1050deg);
                transform-origin: center;
            }
        }
        .rotateto2 {
            animation-name: spin2;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon2 {
            transform: rotate(1030deg);
        }
        @-webkit-keyframes spin2 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(1030deg);
                transform: rotate(1030deg);
                transform-origin: center;
            }
        }
        .rotateto3 {
            animation-name: spin3;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon3 {
            transform: rotate(1010deg);
        }
        @-webkit-keyframes spin3 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(1010deg);
                transform: rotate(1010deg);
                transform-origin: center;
            }
        }
        .rotateto4 {
            animation-name: spin4;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon4 {
            transform: rotate(990deg);
        }
        @-webkit-keyframes spin4 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(990deg);
                transform: rotate(990deg);
                transform-origin: center;
            }
        }
        .rotateto5 {
            animation-name: spin5;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon5 {
            transform: rotate(970deg);
        }
        @-webkit-keyframes spin5 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(370deg);
                transform: rotate(370deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(970deg);
                transform: rotate(970deg);
                transform-origin: center;
            }
        }
        .rotateto6 {
            animation-name: spin6;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon6 {
            transform: rotate(950deg);
        }
        @-webkit-keyframes spin6 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(950deg);
                transform: rotate(950deg);
                transform-origin: center;
            }
        }
        .rotateto7 {
            animation-name: spin7;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon7 {
            transform: rotate(930deg);
        }
        @-webkit-keyframes spin7 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(930deg);
                transform: rotate(930deg);
                transform-origin: center;
            }
        }
        .rotateto8 {
            animation-name: spin8;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon8 {
            transform: rotate(910deg);
        }
        @-webkit-keyframes spin8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(720deg);
                transform: rotate(720deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(910deg);
                transform: rotate(910deg);
                transform-origin: center;
            }
        }
        .rotateto9 {
            animation-name: spin9;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon9 {
            transform: rotate(890deg);
        }
        @-webkit-keyframes spin9 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(890deg);
                transform: rotate(890deg);
                transform-origin: center;
            }
        }.rotateto9 {
             animation-name: spin9;
             animation-duration: 4500ms;
             animation-iteration-count: infinite;
             animation-timing-function: linear;
         }
        .stopon9 {
            transform: rotate(890deg);
        }
        @-webkit-keyframes spin9 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(890deg);
                transform: rotate(890deg);
                transform-origin: center;
            }
        }

        .rotateto10 {
            animation-name: spin10;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon10 {
            transform: rotate(870deg);
        }
        @-webkit-keyframes spin10 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(760deg);
                transform: rotate(760deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(870deg);
                transform: rotate(870deg);
                transform-origin: center;
            }
        }
        .rotateto11 {
            animation-name: spin11;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon11 {
            transform: rotate(850deg);
        }
        @-webkit-keyframes spin11 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(700deg);
                transform: rotate(700deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(850deg);
                transform: rotate(850deg);
                transform-origin: center;
            }
        }
        .rotateto12 {
            animation-name: spin12;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon12 {
            transform: rotate(830deg);
        }
        @-webkit-keyframes spin12 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(700deg);
                transform: rotate(700deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(830deg);
                transform: rotate(830deg);
                transform-origin: center;
            }
        }
        .rotateto13 {
            animation-name: spin13;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon13 {
            transform: rotate(810deg);
        }
        @-webkit-keyframes spin13 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(690deg);
                transform: rotate(690deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(810deg);
                transform: rotate(810deg);
                transform-origin: center;
            }
        }
        .rotateto14 {
            animation-name: spin14;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon14 {
            transform: rotate(790deg);
        }
        @-webkit-keyframes spin14 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(670deg);
                transform: rotate(670deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(790deg);
                transform: rotate(790deg);
                transform-origin: center;
            }
        }
        .rotateto15 {
            animation-name: spin15;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon15 {
            transform: rotate(770deg);
        }
        @-webkit-keyframes spin15 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(660deg);
                transform: rotate(660deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(770deg);
                transform: rotate(770deg);
                transform-origin: center;
            }
        }
        .rotateto16 {
            animation-name: spin16;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon16 {
            transform: rotate(750deg);
        }
        @-webkit-keyframes spin16 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(640deg);
                transform: rotate(640deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(750deg);
                transform: rotate(750deg);
                transform-origin: center;
            }
        }
        .rotateto17 {
            animation-name: spin17;
            animation-duration: 4500ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        .stopon17 {
            transform: rotate(730deg);
        }
        @-webkit-keyframes spin17 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                transform-origin: center;
            }
            33% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                transform-origin: center;
            }
            66% {
                -webkit-transform: rotate(630deg);
                transform: rotate(630deg);
                transform-origin: center;
            }
            100% {
                -webkit-transform: rotate(730deg);
                transform: rotate(730deg);
                transform-origin: center;
            }
        }
        .popup {
            position: fixed;
            inset: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            color: #000;
            visibility: hidden;
            transition: visibility 0.8s ease 0s;
            align-items: center;
        }
        .popup::before {
            content: "";
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.8s ease 0s;
        }
        .popup__content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex: 1 1 auto;
            width: 100%;
            min-height: 100%;
        }
        .popup__body {
            width: 502px;
            height: 682px;
            padding: 50px 40px;
            background-color: #fff;
            border-radius: 16px;
            transform: scale(0);
            transition: all 0.3s ease 0s;
            text-align: center;
        }

        @media only screen and (max-width: 740px) {
            .popup__body {
                width: 80%;
                height: 500px;
                padding: 50px 40px;
                background-color: #fff;
                border-radius: 16px;
                transform: scale(0);
                transition: all 0.3s ease 0s;
                text-align: center;
            }
        }
        #img-win {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #img-win  img{
            margin: 0 auto;
            width: 100%;
            height: 100%;
            max-width: fit-content;
            max-height: 350px;
        }
        .coupon{
            text-transform: uppercase;
        }

        .popup__body h1 {
            color: black;
            font-weight: 700;
            font-size: 36px;
            line-height: 44px;
            letter-spacing: -0.72px;
            padding: 0;
            margin: 10px auto;
        }
        @media only screen and (max-height: 770px) {
            .popup__body {
                width: 420px;
                height: 500px;
                padding: 20px 35px;
            }
            .popup__body h1 {
                font-size: 35px;
                line-height: 40px;
                margin: 5px auto;
            }
            #img-win  img{
                max-height: 290px;
            }

        }
        @media only screen and (max-height: 600px) {
            .popup__body {
                width: 420px;
                height: 400px;
            }
            .popup__body h1 {
                font-size: 35px;
                line-height: 40px;
                margin: 5px auto;
            }
            #img-win  img{
                max-height: 190px;
            }

        }
        .popup__body .close {
            margin: 0 auto;
            width: 100%;
            height: 56px;
            background: black;
            color: white;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 0;
            border-radius: 999px;
            font-weight: 700;
            line-height: 1;
            letter-spacing: -0.62px;
            text-align: center;
            padding: 10px 20px;
            transition: color 0.2s, background 0.2s;
            cursor: pointer;
            text-decoration: none;
        }
        .popup__body .close:hover {
            background: #4040FF;
            color: white;
        }
        .popup__close {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 30;
            width: 20px;
            height: 20px;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
        .popup__close:hover {
            background: white;
            color: black;
        }
        .popup__close::after, .popup__close::before {
            content: "";
            position: absolute;
            right: 0;
            width: 100%;
            height: 0.125rem;
            background-color: #000;
            transition: all 0.3s ease 0s;
        }
        .popup__close::after {
            bottom: calc(50% - 0.0625rem);
            transform: rotate(45deg);
        }
        .popup__close::before {
            top: calc(50% - 0.0625rem);
            transform: rotate(-45deg);
        }
        .popup__text {
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            margin: 60px auto;
        }
        @media only screen and (max-width: 740px) {
            .popup__text {
                margin: 13px auto;
            }
        }
        @media only screen and (max-height: 770px) {
            .popup__text {
                margin: 13px auto;
            }
        }
        .popup__text p{
            color: red;
        }
        .popup.show {
            visibility: visible;
            overflow: auto;
        }
        .popup.show::before {
            opacity: 1;
        }
        .popup.show .popup__body {
            transform: scale(1);
            transition: all 0.3s ease 0.2s;
        }
        .left-button{
            display: flex;
            justify-content: center;
            color: white;
            font-family: 'Montserrat',  Arial, sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 19px;
            line-height: 45px;
            position: absolute;
            top: 2%;
            left: 5%;
            cursor: pointer;
            text-decoration: none;
        }
        .left-button svg {
            fill: #fffb1f;
            margin: 0 15px 0 0;
            color: black;
        }
        @media only screen and (max-width: 690px) {
            .left-button span {
                display: none;
            }
        }

        .right-button {
            display: flex;
            justify-content: center;
            color: black;
            background: white;
            font-style: normal;
            font-weight: 700;
            font-size: 19px;
            line-height: 50px;
            position: absolute;
            top: 2%;
            right: 5%;
            font-family: 'Montserrat',  Arial, sans-serif;
            text-decoration: none;
            height: 55px;
            cursor: pointer;
            text-align: center;
            border: none;
            border-radius: 28px;
            letter-spacing: -.4px;
            width: 200px;
            transition: all 5ms ease-in-out;
        }
        #conffeti {
            background: url("https://cdn.yellowimages.com/images/xmas2022/Confetti.png");
            background-size: 1055px 820px;
            background-position: center center;
            height: 0;
            width: 0;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transition: height 0.5s linear;
            -moz-transition: height 0.5s linear;
            -ms-transition: height 0.5s linear;
            -o-transition: height 0.5s linear;
            transition: height 0.5s linear;
        }
        #spins {
            display: flex;
            justify-content: center;
            flex-direction: column;
            color: black;
            background: yellow;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            line-height: 50px;
            position: absolute;
            top: 1%;
            right: calc(45% + 36px);
            font-family: 'Montserrat', Arial, sans-serif;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
            border: none;
            border-radius: 14px;
            letter-spacing: -.4px;
            width: 120px;
            height: 125px;
            transition: all 5ms ease-in-out;
        }
        #spins p {
            margin: 0 auto;
        }
        #spins .text {
            font-size: 14px;
            text-align: center;
        }
        #spins .count {
            font-size: 48px;
            text-align: center;
        }

        @media only screen and (max-width: 3250px) {
            #spins {
                top: 2%;
                right: 47.9%;
                height: 125px;
                transition: all 5ms ease-in-out;
            }
        }
        @media only screen and (max-width: 2600px) {
            #spins {
                top: 2%;
                right: 47.6%;
                height: 125px;
                transition: all 5ms ease-in-out;
            }
        }
        @media only screen and (max-width: 1920px) {
            #spins {
                top: 2%;
                right: 47%;
                height: 125px;
                transition: all 5ms ease-in-out;
            }
        }
        @media only screen and (max-width: 1600px) {
            #spins {
                top: 2%;
                right: 46.2%;
                height: 125px;
                transition: all 5ms ease-in-out;
            }
        }
        @media only screen and (max-width: 1300px) {
            #spins {
                top: 2%;
                right: 45%;
                height: 125px;
                transition: all 5ms ease-in-out;
            }
        }
        @media only screen and (max-width: 1100px) {
            #spins {
                top: 2%;
                right: 43.9%;
                height: 125px;
                transition: all 5ms ease-in-out;
            }
        }
        @media only screen and (max-width: 800px) {
            #spins {
                top: 2%;
                right: 42.6%;
                height: 125px;
                transition: all 5ms ease-in-out;
            }
        }
        @media only screen and (max-width: 740px) {
            #spins {
                top: 2%;
                right: 42%;
                height: 125px;
                transition: all 5ms ease-in-out;
            }
        }
        @media only screen and (max-width: 690px) {
            #spins {
                top: 10%;
                right: 34%;
                height: 100px;
                transition: all 5ms ease-in-out;
            }
        }
        .win {
            height: 100%!important;
            width: 100%!important;
            -webkit-transition: height 0.5s linear;
            -moz-transition: height 0.5s linear;
            -ms-transition: height 0.5s linear;
            -o-transition: height 0.5s linear;
            transition: height 0.5s linear;
        }
        @font-face {
            font-family: 'Montserrat';
            src: url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Regular.eot');
            src: url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Regular.eot?#iefix') format('embedded-opentype'),
            url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Regular.woff2') format('woff2'),
            url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Regular.woff') format('woff'),
            url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Regular.ttf') format('truetype'),
            url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Regular.svg#Montserrat-Regular') format('svg');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Bold.eot');
            src: url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Bold.eot?#iefix') format('embedded-opentype'),
            url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Bold.woff2') format('woff2'),
            url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Bold.woff') format('woff'),
            url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Bold.ttf') format('truetype'),
            url('https://cdn.yellowimages.com/fonts/montserrat/Montserrat-Bold.svg#Montserrat-Bold') format('svg');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

    </style>
</head>
<body>
<div id="spins"></div>
<div id="container">
    <img id="wheel" class="out" src="https://cdn.yellowimages.com/images/xmas2022/spinWheel.png">
    <img id="pointer" class="out" src="https://cdn.yellowimages.com/images/xmas2022/pointer.png">
    <div id="spin" class="tospin"></div>
</div>
<div id="popup" class="popup win">
    <div class="popup__content">
        <div class="popup__body">
            <button class="popup__close" id="close" type="button" ></button>
            <h1 id="title-win"> Win popup</h1>
            <div id="img-win" class="popup__text"></div>
            <div id="text-win" class="popup__text"></div>
            <button id="close-button" class="close" type="button">Got It</button>
        </div>
    </div>
</div>
<div id="conffeti"></div>
<a class="left-button" href="https://yellowimages.com/">
    <svg viewBox="0 0 200 200" class="svg-icon svg-fill" data-v-ca22ec14="" style="width: 42px; height: 42px;"><path fill="currentColor" stroke="none" pid="0" _fill="currentColor" d="M186.1 101.1c0 37.3-16.5 64.2-36.7 85.9-7.4 4.2-15.4 7.5-23.8 9.7-5-2.8-10.9-1.6-19.1 3.1-2.2.1-4.4.2-6.6.2-4.5 0-9-.3-13.4-.9-3.4-6.4-8-13.2-26.6-7.4-4.8-2.1-9.3-4.5-13.7-7.3 4.8-12.7-29.4-47.3-29.4-82.8 0-55.2 48.7-93.1 83.1-91.8 23.2.9 39.2 12.6 61.4 11.3 1.8 1.4 3.6 2.8 5.3 4.4 6.5 24.9 19.5 46 19.5 75.6z"></path><path pid="1" d="M46.3 184.4c21.4-18.9 46-33.3 66.6-39.8 6.9-18.3 12.9-37.3 17.7-54-15.3 30.2-37.2 55.8-50.7 55.6-4.2 0-13.2-8.8-13.4-23.5 2.9-27.4 33.8-70 38-88.5-15.2 6.7-54 43.8-61.9 81.4-.5 2.4 3.6 5.5 5.7 6.4-2 3-7.6 1.3-11-.5-6.7-3.6-11.7-13.9-10.9-22.5 9.2-34 46.1-74.5 73.1-76 6.9-.2 18.5 11.6 18.2 19.1 0 15.6-38.1 79.2-35.4 87.5 14-5.6 40-36.6 54.7-67.7 1.2-3.7 6.9-22.8 9.8-28.4 4.8-9.1 10.4-11.7 14.6-12.2C144.5 7.9 123.2 0 100 0 44.8 0 0 44.8 0 100c0 35.5 18.5 66.6 46.3 84.4zm80.3-26.7c-6.1 15.8-12.9 30.4-20 42.1 6.6-.4 12.9-1.5 19.1-3.1 9.5-17.9 16.6-33.4 18.6-40.7-3.7-1.1-9.9-.5-17.7 1.7zm-40 41.4c6.2-9.5 12-20.8 17.5-33-13.2 6-28.3 14.6-44.1 25.5 8.3 3.7 17.3 6.3 26.6 7.5z"></path><path pid="2" d="M166.6 25.5c-6.4 15.4-17.5 60.2-24.8 86.1-2.7 9.6-5.8 19.5-9.1 29.2 1.6-.1 3.1-.1 4.6 0 14 1.7 23.5 17.1 13.3 43.1l-1.2 3c30.2-17.2 50.6-49.7 50.6-86.9 0-29.6-12.9-56.2-33.4-74.5z"></path></svg>
    <span>GetYellow</span>
</a>
<div class="right-button" >
    <a href="/">Back to Website</a></div>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/20302049.js"></script>
<!-- End of HubSpot Embed Code --></body>
</html>
<script>
    var prizeList = {
        0: {
            prize_type: 'deposit',
            prize_text: '$5 store credits',
            prize_name: '$5 store credits',
            prize_slug: 'deposit_5',
            prize_amount: 5,
            accrual_count: 10,
            initial_accrual_count: 40,
            period: 6 * 60,
        },
        1: {
            prize_type: 'ondemand',
            prize_text: '3 mockup pack',
            prize_name: '3 mockup pack',
            prize_slug: 'ondemand_3',
            prize_amount: 0,
            accrual_count: 1,
            initial_accrual_count: 6,
            period: 361 * 60,
        },
        2: {
            prize_type: 'ticket',
            prize_text: '1 month membership',
            prize_name: '1 month membership',
            prize_slug: 'ticket_1',
            prize_amount: 0,
            accrual_count: 1,
            initial_accrual_count: 2,
            period: 16 * 60,
        },
        3: {
            prize_type: 'discount',
            prize_text: '30%  DDiscount',
            prize_name: '30%  Discount',
            prize_slug: 'discount_30',
            prize_amount: 30,
            accrual_count: 0,
            initial_accrual_count: 10000,
            period: 0,
        },
        4: {
            prize_type: 'deposit',
            prize_text: '$10 store credits',
            prize_name: '$10 store credits',
            prize_slug: 'deposit_10',
            prize_amount: 10,
            accrual_count: 1,
            initial_accrual_count: 5,
            period: 16 * 60,
        },
        5: {
            prize_type: 'ondemand',
            prize_text: '5 mockup pack',
            prize_name: '5 mockup pack',
            prize_slug: 'ondemand_5',
            prize_amount: 0,
            accrual_count: 1,
            initial_accrual_count: 4,
            period: 8 * 60 + 30,
        },
        6: {
            prize_type: 'ticket',
            prize_text: '3 month membership',
            prize_name: '3 month membership',
            prize_slug: 'ticket_3',
            prize_amount: 0,
            accrual_count: 1,
            initial_accrual_count: 2,
            period: 90 * 30,

        },
        7: {

            prize_type: 'deposit',
            prize_text: '$50 store credits',
            prize_name: '$50 store credits',
            prize_slug: 'deposit_50',
            prize_amount: 50,
            accrual_count: 1,
            initial_accrual_count: 7,
            period: 52 * 60,


        },
        8: {
            prize_text: '+ 1 spin',
            prize_name: '+ 1 spin',
            prize_type: 'free',
            prize_slug: 'free'


        },
        9: {
            prize_type: 'discount',
            prize_text: '50%  DDiscount',
            prize_name: '50%  Discount',
            prize_slug: 'discount_50',
            prize_amount: 50,
            accrual_count: 0,
            initial_accrual_count: 10000,
            period: 0,


        },
        10: {
            prize_type: 'deposit',
            prize_text: '$100 store credits',
            prize_name: '$100 store credits',
            prize_slug: 'deposit_100',
            prize_amount: 100,
            accrual_count: 1,
            initial_accrual_count: 1,
            period: 90 * 60,
        },
        11: {
            prize_type: 'ondemand',
            prize_text: '10 mockup pack',
            prize_name: '10 mockup pack',
            prize_slug: 'ondemand_10',
            prize_amount: 0,
            accrual_count: 1,
            initial_accrual_count: 4,
            period: 361 * 60,
        },
        12: {
            prize_type: 'ticket',
            prize_text: '1 year membership',
            prize_name: '1 year membership',
            prize_slug: 'ticket_12',
            prize_amount: 0,
            accrual_count: 1,
            initial_accrual_count: 0,
            period: 144 * 30,
        },
        13: {
            prize_type: 'deposit',
            prize_text: '$250 store credits',
            prize_name: '$250 store credits',
            prize_slug: 'deposit_250',
            prize_amount: 250,
            accrual_count: 1,
            initial_accrual_count: 0,
            period: 144 * 60,

        },
        14: {
            prize_type: 'discount',
            prize_text: '70%  DDiscount',
            prize_name: '70%  Discount',
            prize_slug: 'discount_70',
            prize_amount: 70,
            accrual_count: 0,
            initial_accrual_count: 10000,
            period: 0,
        },
        15: {
            prize_text: 'No reward',
            prize_name: 'No reward',
            prize_type: 'none',
            prize_slug: 'none'
        },
        16:{
            prize_type: 'deposit',
            prize_text: '$1000 store credits',
            prize_name: '$1000 store credits',
            prize_slug: 'deposit_1000',
            prize_amount: 1000,
            accrual_count: 1,
            initial_accrual_count: 0,
            period: 361 * 60,
        },
        17: {
            prize_type: 'discount',
            prize_text: '20%  DDiscount',
            prize_name: '20%  Discount',
            prize_slug: 'discount_20',
            prize_amount: 20,
            accrual_count: 0,
            initial_accrual_count: 10000,
            period: 0,
        }
    };
    let coupon
    let user =  @if(!empty($user)) {!! json_encode($user)  !!} @else false  @endif;
    let spinInfo =  @if(!empty($spin_info)) {!! json_encode($spin_info)  !!} @else false  @endif;
    let freeAttempt =  @if(!empty($free_attempt_available_time_at)) {!! json_encode($free_attempt_available_time_at)  !!} @else false  @endif;
    let token =  @if(!empty($token)) {!! json_encode($token)  !!} @else false  @endif;
    let prizes
    document.getElementById('spins').innerHTML = `<p class="count">${spinInfo.attempts_count}</p><p class="text">Spins left</p>`
    window.onload = function change_message(){
        axios.get('/prizes', {}, { headers: {
                    'X-Requested-With' : 'XMLHttpRequest',
                    'X-CSRF-TOKEN': token,
                    "Access-Control-Allow-Origin": "*",
                    'Access-Control-Allow-Credentials': 'true',
                    "Access-Control-Allow-Methods": "HEAD, OPTIONS, GET, POST, PUT, DELETE",
                    "Access-Control-Allow-Headers": ", X-Requested-With, Content-Type, Accept, Authorization, X-Auth-Token",
                }
            }
        ).then(function (response) {
            prizes = response.data
        }).catch(function (error) {
            console.log(error);
        });
    }
    var  first = true
    var win
    var spins = spinInfo.attempts_count
    var winCount
    document.getElementById("spin").onclick = function(){
        if ( document.getElementById("spin").classList.contains('spining')) {
            return false
        } else {
            document.getElementById("spin").classList.remove('tospin')
            document.getElementById("spin").classList.add('spining')
            if (spinInfo.attempts_count) {
                axios.post('/wheel/spin', {
                    token: token,
                    user_id: Number(user.id),
                }, {
                    headers: {
                        'X-Requested-With' : 'XMLHttpRequest',
                        'X-CSRF-TOKEN': token,
                        "Access-Control-Allow-Origin": "*",
                        'Access-Control-Allow-Credentials': 'true',
                        "Access-Control-Allow-Methods": "HEAD, OPTIONS, GET, POST, PUT, DELETE",
                        "Access-Control-Allow-Headers": ", X-Requested-With, Content-Type, Accept, Authorization, X-Auth-Token",
                    }
                }).then(function (response) {
                    // console.log(response.data.prize);
                    coupon = response.data.prize.code
                    win = response.data.prize
                    spinInfo = response.data.spin_info
                    document.getElementById('spins').innerHTML = `<p class="count">${spinInfo.attempts_count}</p><p class="text">Spins left</p>`
                    spins = spinInfo.attempts_count
                    for (var i = 0; i < Object.keys(prizeList).length; i++) {
                        if (win.slug == prizeList[i].prize_slug) {
                            var textWin = prizeList[i].prize_name
                            var type = prizeList[i].prize_type
                            winCount = i
                            document.getElementById("wheel").classList.add('rotateto' + winCount)
                            setTimeout(() => {
                                document.getElementById("wheel").classList.remove('rotateto' + winCount)
                                document.getElementById("wheel").classList.add('stopon'  + winCount)
                                document.getElementById("spin").classList.remove('spining')
                                document.getElementById("spin").classList.add('tospin')
                                setTimeout(() => {
                                    document.getElementById("popup").classList.add('show');
                                    document.getElementById("conffeti").classList.add('win');
                                    document.getElementById("title-win").innerHTML =  textWin;
                                    if (type == 'ondemand') {
                                        document.getElementById("img-win").innerHTML = '<img src="https://cdn.yellowimages.com/images/xmas2022/ondemand.png">';
                                        document.getElementById("text-win").innerHTML = `Add On-Demand pack to your cart and use the code <b class="coupon">${coupon}</b> to get it for free. <p> Important: copy and save your personal code!<p>`;
                                    } else if ( type == 'deposit') {
                                        document.getElementById("img-win").innerHTML = '<img src="https://cdn.yellowimages.com/images/xmas2022/deposit.png">';
                                        document.getElementById("text-win").innerHTML = '<b>Congratulations!</b> The store credits have already been deposited to your account. Enjoy!';
                                    } else if ( type =='discount') {
                                        document.getElementById("img-win").innerHTML = '<img src="https://cdn.yellowimages.com/images/xmas2022/discount.png">';
                                        document.getElementById("text-win").innerHTML = `Use this promo code <br> <b class="coupon">${coupon}</b> in your shopping cart. Valid on stock items only.<p> Important: copy and save your personal code!<p>`;
                                    } else if (type == 'none'){
                                        document.getElementById("img-win").innerHTML = '<img src="https://cdn.yellowimages.com/images/xmas2022/none.png">';
                                        document.getElementById("text-win").innerHTML = `<b>Better luck next spin!</b> <br>Take a look how to earn more spins.<br> Don’t give up!`;

                                    }  else if (type == 'free'){
                                        document.getElementById("img-win").innerHTML = '<img src="https://cdn.yellowimages.com/images/xmas2022/free.png">';
                                        document.getElementById("text-win").innerHTML = `<b>You earned 1 spin!</b> <br> Each spin is a chance to win one of many amazing prizes!`;

                                    }else if (type == 'ticket'){
                                        document.getElementById("img-win").innerHTML = '<img src="https://cdn.yellowimages.com/images/xmas2022/ticket.png">';
                                        document.getElementById("text-win").innerHTML = ` Add Premium Membership to your cart and use the code <b class="coupon">${coupon}</b> to get it for free.<p> Important: copy and save your personal code!</p>`;
                                    } else if (type == 'none'){
                                        document.getElementById("img-win").innerHTML = '<img src="https://cdn.yellowimages.com/images/xmas2022/none.png">';
                                        document.getElementById("text-win").innerHTML = ` <b>Better luck next spin!</b> <br> Take a look how to earn more spins. Dont give up!`;
                                    }
                                }, 700)
                                setTimeout(() => {
                                    document.getElementById("wheel").classList.remove('stopon'  + winCount)
                                }, 1000)
                            }, 4500)
                        }
                    }
                }).catch(function (error) {
                    console.log(error);
                });
            } else {
                window.location = '/'
            }


        }
    }
    document.getElementById("close").onclick = function(){
        if (win.type !== 'free' || win.type !== 'none'|| win.type !== 'deposit') {
            if (win.code) {
                _hsq.push(["identify",{
                    email:user.email,
                    wheel_reward_id: win.slug,
                    wheel_reward_coupon: win.code.toUpperCase()
                }])
                _hsq.push(['trackPageView']);
            } else {
                _hsq.push(["identify",{
                    email:user.email,
                    wheel_reward_id: win.slug,
                }])
                _hsq.push(['trackPageView']);
            }
        }
        document.getElementById("popup").classList.remove('show');
        document.getElementById("conffeti").classList.remove('win');
        if (spins === 0) {
            window.location = '/'
        }
    }
    document.getElementById("close-button").onclick = function(){
        if (win.type !== 'free' || win.type !== 'none'|| win.type !== 'deposit') {
            if (win.code) {
                _hsq.push(["identify",{
                    email:user.email,
                    wheel_reward_id: win.slug,
                    wheel_reward_coupon: win.code.toUpperCase()
                }])
                _hsq.push(['trackPageView']);
            } else {
                _hsq.push(["identify",{
                    email:user.email,
                    wheel_reward_id: win.slug,
                }])
                _hsq.push(['trackPageView']);
            }
        }
        document.getElementById("popup").classList.remove('show');
        document.getElementById("conffeti").classList.remove('win');
        if (spins === 0) {
            window.location = '/'
        }
    }
</script>
