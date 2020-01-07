<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>keugui_Immo - Accueil</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/docs.css')}}"/>
    <!-- <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/util.css')}}"/> -->
</head>
    <body>
     <!-- Preloader -->
     <!-- <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div> -->
    <!-- /Preloader -->
     <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 pa-0">
                    <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                        <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(./../../photos/img1.jpg);">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                    <h1 class="display-3 text-white mb-20">Understand and look deep into nature.</h1>
                                    <p class="text-white">The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. Again during the 90s as desktop publishers bundled the text with their software.</p>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 pa-0">
                    <div class="auth-form-wrap py-xl-0 py-50">
                        <div class=" auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">

                            @yield("content")

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>s
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>