<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProjectFlyer</title>
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
</head>
<body>

    @include('partials.nav')


    <div class="container">
        @yield('content')
    </div>
    <script src="/js/libs.js"></script>

    @yield('scripts')

    @include('flash')

            <!-- Hotjar Tracking Code for project-flyer.dev:8000 -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:64529,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

</body>
</html>