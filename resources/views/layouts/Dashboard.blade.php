<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'NAF-HIS')}}</title>
        <link rel="stylesheet" href="{{asset('/css/app.css')}}" type="text/css" />
        <link rel='stylesheet' href="{{asset('/css/fam.css')}}" />
    </head>
    
    <body>
        
        <div class="container-fluid top-bar fixed-top">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <h3>RESTRICTED</h3>
            </div>
        </div>
    </div>
</div>
<!--linking the form template-->
       @yield('Dashboard_temp')
       
<div class="container-fluid bottom-bar fixed-bottom">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <h3>RESTRICTED</h3>
            </div>
        </div>
    </div>
</div>    
    <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/his.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.validate.min.js')}}"></script>
    </body>
</html>