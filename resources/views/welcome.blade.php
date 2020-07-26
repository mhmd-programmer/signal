<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signal Bedam??</title>
    <style>
        @charset "UTF-8";
        :root {
          --duration: 1.5s;
          --loading-size: 250px;
          --box-size: 33px;
          --box-border-radius: 15%;
        }
        
        
        
        .loading {
            position: fixed;
            left: 0;
            top: 0;
            z-index: 20;
            display: flex;
            width: 100%;
            height: 100%;
            background: white;
            overflow: hidden;
        }
    
        
        .📦 {
          width: var(--box-size);
          height: var(--box-size);
          position: relative;
          display: block;
          -webkit-transform-origin: -50% center;
                  transform-origin: -50% center;
          border-radius: var(--box-border-radius);
        }
        .📦:after {
          content: '';
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
          right: 0;
          background-color: lightblue;
          border-radius: var(--box-border-radius);
          box-shadow: 0px 0px 10px 0px rgba(28, 159, 255, 0.4);
        }
        .📦:nth-child(1) {
          -webkit-animation: slide var(--duration) ease-in-out infinite alternate;
                  animation: slide var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(1):after {
          -webkit-animation: color-change var(--duration) ease-in-out infinite alternate;
                  animation: color-change var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(2) {
          -webkit-animation: flip-1 var(--duration) ease-in-out infinite alternate;
                  animation: flip-1 var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(2):after {
          -webkit-animation: squidge-1 var(--duration) ease-in-out infinite alternate;
                  animation: squidge-1 var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(3) {
          -webkit-animation: flip-2 var(--duration) ease-in-out infinite alternate;
                  animation: flip-2 var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(3):after {
          -webkit-animation: squidge-2 var(--duration) ease-in-out infinite alternate;
                  animation: squidge-2 var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(4) {
          -webkit-animation: flip-3 var(--duration) ease-in-out infinite alternate;
                  animation: flip-3 var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(4):after {
          -webkit-animation: squidge-3 var(--duration) ease-in-out infinite alternate;
                  animation: squidge-3 var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(5) {
          -webkit-animation: flip-4 var(--duration) ease-in-out infinite alternate;
                  animation: flip-4 var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(5):after {
          -webkit-animation: squidge-4 var(--duration) ease-in-out infinite alternate;
                  animation: squidge-4 var(--duration) ease-in-out infinite alternate;
        }
        .📦:nth-child(2):after {
          background: linear-gradient(190deg, #2e30a0, #3c0e67);
        }
        .📦:nth-child(3):after {
            background: linear-gradient(190deg, #3335a0, #3f1269);
        }
        .📦:nth-child(4):after {
            background: linear-gradient(190deg, #3d3ea1, #47216b);
        }
        .📦:nth-child(5):after {
            background: linear-gradient(190deg, #494b99, #44285e);
        }
        
        @-webkit-keyframes slide {
          0% {
            background-color: #1795FF;
            -webkit-transform: translatex(0vw);
                    transform: translatex(0vw);
          }
          100% {
            background-color: #23D3FB;
            -webkit-transform: translatex(calc(var(--loading-size) - (var(--box-size) * 1.25)));
                    transform: translatex(calc(var(--loading-size) - (var(--box-size) * 1.25)));
          }
        }
        
        @keyframes slide {
          0% {
            background-color: #1795FF;
            -webkit-transform: translatex(0vw);
                    transform: translatex(0vw);
          }
          100% {
            background-color: #23D3FB;
            -webkit-transform: transla
        tex(calc(var(--loading-size) - (var(--box-size) * 1.25)));
                    transform: translatex(calc(var(--loading-size) - (var(--box-size) * 1.25)));
                
          }
        }
        @-webkit-keyframes color-change {
          0% {
            background-color: #1795FF;
          }
          100% {
            background-color: #23D3FB;
          }
        }
        @keyframes color-change {
          0% {
            
            ba
        ckground-color: #1795FF;
          }
          100% {
            background-color: #23D3FB;
          }
        }
        @-webkit-keyframes flip-1 {
          0%, 15% {
            -webkit-transform: rotate(0);
                    transform: rotate(0);
          }
          35%, 100% {
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg);
          }
        }
        @keyframes flip-1 {
          0%, 15% {
            -webkit-transform: rotate(0);
                    transform: rotate(0);
          }
          35%, 100% {
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg);
          }
        }
        @-webkit-keyframes squidge-1 {
          5% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          15% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
          25%, 20% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(0.8) scaley(1.4);
                    transform: scalex(0.8) scaley(1.4);
          }
          55%, 100% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          40% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
        }
        @keyframes squidge-1 {
          5% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          15% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
          25%, 20% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(0.8) scaley(1.4);
                    transform: scalex(0.8) scaley(1.4);
          }
          55%, 100% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          40% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
        }
        @-webkit-keyframes flip-2 {
          0%, 30% {
            -webkit-transform: rotate(0);
                    transform: rotate(0);
          }
          50%, 100% {
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg);
          }
        }
        @keyframes flip-2 {
          0%, 30% {
            -webkit-transform: rotate(0);
                    transform: rotate(0);
          }
          50%, 100% {
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg);
          }
        }
        @-webkit-keyframes squidge-2 {
          20% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          30% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
          40%, 35% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(0.8) scaley(1.4);
                    transform: scalex(0.8) scaley(1.4);
          }
          70%, 100% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          55% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
        }
        @keyframes squidge-2 {
          20% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          30% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
          40%, 35% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(0.8) scaley(1.4);
                    transform: scalex(0.8) scaley(1.4);
          }
          70%, 100% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          55% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
        }
        @-webkit-keyframes flip-3 {
          0%, 45% {
            -webkit-transform: rotate(0);
                    transform: rotate(0);
          }
          65%, 100% {
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg);
          }
        }
        @keyframes flip-3 {
          0%, 45% {
            -webkit-transform: rotate(0);
                    transform: rotate(0);
          }
          65%, 100% {
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg);
          }
        }
        @-webkit-keyframes squidge-3 {
          35% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          45% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
          55%, 50% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(0.8) scaley(1.4);
                    transform: scalex(0.8) scaley(1.4);
          }
          85%, 100% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          70% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
        }
        @keyframes squidge-3 {
          35% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          45% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
          55%, 50% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(0.8) scaley(1.4);
                    transform: scalex(0.8) scaley(1.4);
          }
          85%, 100% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          70% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
        }
        @-webkit-keyframes flip-4 {
          0%, 60% {
            -webkit-transform: rotate(0);
                    transform: rotate(0);
          }
          80%, 100% {
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg);
          }
        }
        @keyframes flip-4 {
          0%, 60% {
            -webkit-transform: rotate(0);
                    transform: rotate(0);
          }
          80%, 100% {
            -webkit-transform: rotate(-180deg);
                    transform: rotate(-180deg);
          }
        }
        @-webkit-keyframes squidge-4 {
          50% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          60% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
          70%, 65% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(0.8) scaley(1.4);
                    transform: scalex(0.8) scaley(1.4);
          }
          100%, 100% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          85% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
        }
        @keyframes squidge-4 {
          50% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          60% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
          70%, 65% {
            -webkit-transform-origin: center bottom;
                    transform-origin: center bottom;
            -webkit-transform: scalex(0.8) scaley(1.4);
                    transform: scalex(0.8) scaley(1.4);
          }
          100%, 100% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1) scaley(1);
                    transform: scalex(1) scaley(1);
          }
          85% {
            -webkit-transform-origin: center top;
                    transform-origin: center top;
            -webkit-transform: scalex(1.3) scaley(0.7);
                    transform: scalex(1.3) scaley(0.7);
          }
        }
        </style>
        <script>
          window.console = window.console || function(t) {};
        </script>
        <script>
          if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
          }
        </script>

    <link rel="shortcut icon" href="https://signalbedam.com/img/sin2.png" type="image/icon">
    <link rel="icon" href="{{asset('img/sin2.png')}}">
    <link rel="apple-touch-startup-image" href="{{asset('img/sin2.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/sin2.png')}}">
    <link rel="apple-touch-icon" href="{{asset('img/sin2.png')}}">
    <link rel="manifest" href="{{asset('manifest.json')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Icons/fontawesome-pro-5.12.0-web-ulabs/css/all.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('FX/style1.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('FX/style.css')}}"> --}}
    <style>
        .btn:focus {
    box-shadow: none;
    outline: none;
}.btn:active {
    box-shadow: none;
    outline: none;
}
@media(min-width:768px){
    .table-responsive {
        display: none;
    }
}
.canvasjs-chart-credit {
		display: none;
	}
    .asb {
            position: fixed;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <script src="{{asset('bitcoin/config.js')}}"></script>
    <script src="{{asset('bitcoin/rsbp.js')}}"></script>
    <script src="{{asset('FX/script1.js')}}"></script>
<script src="{{asset('FX/script2.js')}}"></script>
    
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>

    
    

</head>
<body style="font-family: IRANSansWeb;background:#0f0f17" translate="no">

    
    <div class="loading">
        <div style="position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);display:flex">
            <div style="margin-right: 10px;margin-left: 10px;" class="📦"></div>
            <div style="margin-right: 10px;margin-left: 10px;" class="📦"></div>
            <div style="margin-right: 10px;margin-left: 10px;" class="📦"></div>
            <div style="margin-right: 10px;margin-left: 10px;" class="📦"></div>
            <div style="margin-right: 10px;margin-left: 10px;" class="📦"></div>
        </div>
    </div>

<div id="app">
    <app></app>
</div>

{{-- <script src="{{asset('service-worker-prod-es6.js')}}"></script>
<script>
    if('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker-prod-es6.js')
            .then(function() {
                console.log('Service Worker Registered');
            });
    }
</script> --}}
{{-- <script src="{{asset('canvasjs/canvasjs.min.js')}}"></script> --}}
{{-- <script src="{{asset('canvasjs/jquery.canvasjs.min.js')}}"></script> --}}

<script>
    $(".change-pass").hide();
    $(".forms").hide();
    $("#back").hide();

    $("#app").hide();
</script>

<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
                
                <script id="rendered-js">
                "use strict";
                //# sourceURL=pen.js
                    </script>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Icons/fontawesome-pro-5.12.0-web-ulabs/js/all.min.js')}}"></script>
</body>
</html>
